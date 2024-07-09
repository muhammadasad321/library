@extends('admin.layout')

@section('admin.booklist')

    @if(session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
{{session('success')}}
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif
              @if(session('delete'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
{{session('delete')}}
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif
              <div class="col-lg-12 grid-margin stretrdch-ca">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Books List</h4>
                    </p>
                    <div class="table-responsive">
                      <table class="table table-hover">
<thead>
                  <tr>
                    <th scope="col">ID No.</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Author</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Image</th>
                    <th>Actions</th>
                  
                  </tr>
                </thead>
                <tbody>
                @foreach ($books as $book)
                    <tr>
                      <td>{{ $book->id }}</td>
                        <td>{{ $book->title }}</td>
                        <td>
            @if($book->category)
              {{ $book->category->name }}
            @else
              <span class="text-danger">No Category</span>
            @endif
          </td>                        <td>
            @if($book->author)
              {{ $book->author->author }}
            @else
              <span class="text-danger">No Author</span>
            @endif
          </td>
                        <td>{{ $book->price }}</td>
                        <td>{{ $book->quantity }}</td>
                   <td><img src="{{asset('upload/images/'.$book->image)}}" style="width:50px;height:50px" alt=""></td>
                     <td>   <div class="btn-group" role="group" aria-label="Basic mixed styles example">
              <a href="{{url('admin/bookdelete',$book->id)}}"><button type="button" class="btn btn-danger">Delete</button></a>
              <a href="{{url('admin/bookedit',$book->id)}}"><button type="button" class="btn btn-warning">Edit</button></a>
                           <a href="{{url('admin/bookstatus',$book->id)}}"><button type="button" class="btn btn-{{$book->status ? 'success' : 'danger'}}">{{$book->status ? 'Active' : 'Deactive'}}</button></a>
 
            </div>
</td>

                  </tr>
                  @endforeach
                 
                </tbody>
              </table>
              </div>
                  </div>
                </div>
              </div>
@endsection