<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Author;
use App\Models\Book;
use App\Models\User;
use App\Models\Borrow;
use App\Models\Signup;

use Illuminate\Support\Facades\DB;


use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Str;

class BackendController extends Controller
{
    function dashboard(){
        $totalbooks = Book::count();
        $totalcategories = Category::count();
        $borrowrequest = Borrow::count();

        return view('admin.index',compact('totalbooks','totalcategories','borrowrequest'));
    }

    function login(){
        return view('admin.login');
    
    }
    
    function logout()
    {
        session()->forget('username');
        return redirect('admin/login'); // Redirect to the login page
    }
    
    function loggedIn(Request $request)
    {
        $credentials = $request->only('username', 'password');
        $user = User::where('username', $credentials['username'])->first();
        if (!$user || !Hash::check($credentials['password'], $user->password)) {
            return back()->with('failed', 'Username or Password in incorrect');
        }
    
        // Authentication successful
        // You can set a session variable to indicate that the user is logged in.
        session(['username' => $user->username]);
    
        return redirect('admin/dashboard'); // Redirect to a dashboard or any other route
    }

    function Category(){
        return view('admin.categories');
    }
    function CategoryStore(Request $request){
        $store = new Category;
        $store->name = $request->input('name');

        $store->status = '1';
        $store->save();
          
        return redirect()->back()->with('success', 'Category added successfully');
  
  
      }
  
      function CategoryList(){
          $CategoryList = Category::all();
         

          return view('admin.categorylist',compact('CategoryList'));
      }
  
      function CategoryEdit($id){
          $data = Category::find($id);
          return view('admin.categoryedit',['data'=>$data]);
          
      }
  
      function CategoryUpdate(Request $request){
          $update = Category::find($request->input('id'));
          $update->name = $request->input('name');

          $update->status = '1';
          $update->save();
            
          return redirect('admin/categorylist')->with('update', 'Category updated successfully');
    
    
      }
  
      function CategoryStatus($id){
           $data = Category::find($id);
  
          if($data){
              if($data->status){
                  $data->status = 0;
              }else{
                  $data->status =1;
              }
  
              $data->save();
          }
          
          return back();
      }
  
      function CategoryDelete($id){
          Category::find($id)->delete();
          return redirect('admin/categorylist')->with('delete', 'Category deleted successfully');
  
  
      }

      function AddAuthor(){

   
        return view('admin.addauthor');
       }
    
       function StoreAuthor(Request $request)
       {
    
        $store = new Author;
    
        $store->author = $request->input('author');
        $store->save();
        return redirect('admin/authorlist')->with('add-author', 'Author added successfully');
    
       }
    
       function AuthorList(){
        $AuthorList = Author::all();
    
        return view('admin/authorlist',compact('AuthorList'));
       }
    
       function AuthorDelete($id){
        Author::find($id)->delete();
        return redirect('admin/authorlist')->with('delete', 'Author deleted successfully');
    
       }

       function AddBook(){
        $CategoryList = Category::where('status','1')->get();
        $AuthorList = Author::all();


        return view('admin.addbook',compact('CategoryList','AuthorList'));
       }

     
       public function BookStore(Request $request)
       {
           // Validate the request data
           $request->validate([
               'title' => 'required|string|max:255',
               'category_id' => 'required|integer',
               'author_id' => 'required|integer',
               'description' => 'required|string',
               'price' => 'required|numeric',
               'quantity' => 'required|integer',
               'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
           ]);
   
           // Generate slug from title
           $slug = Str::slug($request->title, '-');
   
           // Handle image upload
           if ($request->hasFile('image')) {
               $image = $request->file('image');
               $imageName = time().'.'.$image->getClientOriginalExtension();
               $image->move('upload/images/', $imageName);
           }
   
           // Create a new book
           $book = new Book();
           $book->title = $request->title;
           $book->slug = $slug;
           $book->category_id = $request->category_id;
           $book->author_id = $request->author_id;
           $book->description = $request->description;
           $book->price = $request->price;
           $book->quantity = $request->quantity;
           $book->image = $imageName ?? null;
           $book->status = '1';
           $book->save();
   
           // Redirect or return response
           return redirect('admin/booklist')->with('success', 'Book added successfully!');
        }
       function BookList(){
        $books = Book::all();
        return view('admin.booklist',compact('books'));
       }

       public function BookEdit($id) {
        $book = Book::findOrFail($id);
        $CategoryList = Category::all();
        $AuthorList = Author::all();
        return view('admin.bookedit', compact('book', 'CategoryList', 'AuthorList'));
    }

       public function BookUpdate(Request $request, $id)
{
    // Validate the request data
    $request->validate([
        'title' => 'required|string|max:255',
        'category_id' => 'required|integer',
        'author_id' => 'required|integer',
        'description' => 'required|string',
        'price' => 'required|numeric',
        'quantity' => 'required|integer',
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
    ]);

    // Find the book by ID
    $book = Book::findOrFail($id);

    // Generate slug from title
    $slug = Str::slug($request->title, '-');

    // Handle image upload if a new image is provided
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('upload/images'), $imageName);
        $book->image = $imageName;
    }

    // Update book details
    $book->title = $request->title;
    $book->slug = $slug;
    $book->category_id = $request->category_id;
    $book->author_id = $request->author_id;
    $book->description = $request->description;
    $book->price = $request->price;
    $book->quantity = $request->quantity;
    $book->save();

    // Redirect to the book list page with a success message
    return redirect('admin/booklist')->with('success', 'Book updated successfully!');
}
public function BookDelete($id) {
    $book = Book::findOrFail($id);
    $book->delete();

    return redirect()->back()->with('success', 'Book deleted successfully');
}
public function BookStatus($id) {
    $book = Book::findOrFail($id);
    $book->status = $book->status == 1 ? 0 : 1;
    $book->save();

    return redirect()->back()->with('success', 'Book status updated successfully');
}

function Borrow(){
    $RequestItem = DB::table('borrows')
        ->join('books', 'borrows.book_id', '=', 'books.id')
        ->join('authors', 'books.author_id', '=', 'authors.id') 
        ->select('books.*', 'authors.author as author_name', 'borrows.quantity','borrows.user_id as user_id','borrows.status as borrow_status','borrows.id as borrow_id')
        ->get();       
        return view('admin.borrow',compact('RequestItem'));
  
}

    
public function Approved($id)
{
    $request = Borrow::find($id);
    if ($request) {
        $book = Book::find($request->book_id);
        if ($book && $book->quantity > 0) {
            $request->status = 'Approved';
            $request->save();

            $book->quantity -= 1;
            $book->save();

            return redirect()->back()->with('success', 'Request updated to approved and quantity decreased by 1');
        } else {
            return redirect()->back()->with('failed', 'Book not available or quantity is zero');
        }
    } else {
        return redirect()->back()->with('failed', 'Not found');
    }
}

public function Returned($id)
{
    $request = Borrow::find($id);
    if ($request) {
        $book = Book::find($request->book_id);
        if ($book) {
            $request->status = 'Returned';
            $request->save();

            $book->quantity += 1;
            $book->save();

            return redirect()->back()->with('warning', 'Request updated to returned and quantity increased by 1');
        } else {
            return redirect()->back()->with('failed', 'Book not found');
        }
    } else {
        return redirect()->back()->with('failed', 'Not found');
    }
}

        public function Rejected($id)
        {
            $request = Borrow::find($id);
            if ($request) {
                $request->status = 'Rejected';
                $request->save();
                
                return redirect()->back()->with('rejected', 'Request updated to rejected');
            } else {
                return redirect()->back()->with('failed', 'Not found');
            }
        }

        function Users(){
            $users = Signup::all();

            return view('admin/users',compact('users'));
        }
        function UserDelete($id){
            Signup::find($id)->delete();
            return redirect()->back()->with('app-delete','User deleted successfully');
        
    }
    function UserStatus($id){
        $data = Signup::find($id);

        if($data){
            if($data->status){
                $data->status = 0;
            }else{
                $data->status =1;
            }
 
            $data->save();
        }
        
        return back();
    }
    }

