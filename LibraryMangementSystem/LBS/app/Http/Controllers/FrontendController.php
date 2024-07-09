<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Borrow;
use App\Models\Category;
use App\Models\Signup;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Hash;


class FrontendController extends Controller
{
    function Index(){
        $CategoryList = Category::where('status','1')->get();
        $books = Book::where('status','1')->get();
        return view('index',compact('books','CategoryList'));
    }

    function Explore(){
        $CategoryList = Category::where('status','1')->get();
        $explore = Book::where('status','1')->get();
        return view('explore',compact('explore','CategoryList'));
    }
  

    function CategoryData($id){
        $category = Category::find($id);

if (!$category) {
abort(404);
}

$CategoryList = Book::where('category_id', $category->id)->get();


return view('categories', compact('category', 'CategoryList'));
     }
     function Search(Request $request){
        $searchTerm = $request->input('search');


        $title = "Search Results for '{$searchTerm}'";
        $results = Book::where(function ($query) use ($searchTerm) {
          $query->where('title', 'like', '%' . $searchTerm . '%');
      })->paginate(10);
            return view('search', compact('results','title'));
     }

     function BookDetail($id,$slug)
     {
        $Detail = Book::where('id',$id)
        ->where('slug',$slug)->get();

        return view('book',compact('Detail'));
     }
     function Login(){
        $userId = session('id');
        if ($userId) {
        
            return redirect('/');
        }

        return view('login');
     }

     function Signup(){
        return view('signup');
     }

     public function Register(Request $request)
     {
         
 
         $store = new Signup;
         $store->name = $request->input('name');
         $store->email = $request->input('email');
         $store->mobile = $request->input('mobile');
         $store->password = Hash::make($request->input('password'));
         $store->status='1';
         $store->save();
 
         return redirect()->back()->with('success', 'Signup successful. Please login.');
     }

     function LoggedIn(Request $request)
     {
         $credentials = $request->only('email', 'password');
         $user = Signup::where('email', $credentials['email'])->first();

     
         if (!$user || !Hash::check($credentials['password'], $user->password)) {
             return back()->with('failed', 'Email or Password in incorrect');
         }
         if ($user->status != 1) {
            return back()->with('failed', 'Your account is not active. Please contact support.');
        }
       
        
         session([
            'name' => $user->name,
         
            'id' => $user->id,
           

        ]);
     
         return redirect('/'); 
     }
     function Logout()
     {
         session()->forget('name');
         session()->forget('id');
        

         return redirect('login'); 
     }

     function Request(){
        $userId = session('id');
        if (!$userId) {
        
            return redirect('login');
        }
    else {
        $RequestItem = DB::table('borrows')
        ->join('books', 'borrows.book_id', '=', 'books.id')
        ->join('authors', 'books.author_id', '=', 'authors.id') 
        ->select('books.*', 'authors.author as author_name', 'borrows.quantity','borrows.status as borrow_status','borrows.id as borrow_id')
        
        ->where('borrows.user_id', $userId)
        ->get();       
        return view('request',compact('RequestItem'));
    }
     }

     public function ApplyBorrow(Request $request)
     {
       
      
         Borrow::create([
             'book_id' => $request->book_id,
             'user_id' => $request->user_id,
             'price' => $request->price,
             'quantity' => $request->quantity,
             'status' => 'Applied', 
            ]);
 
         return response()->json(['success' => 'Borrow request submitted successfully!']);
     }
    function Cancel($id){
        $request = Borrow::find($id);

            if($request->status){
                $request->status = "Cancelled";
                $request->save();

        }
    
    return redirect()->back()->with('message','Book Request Cancelled Successfully');

}

}