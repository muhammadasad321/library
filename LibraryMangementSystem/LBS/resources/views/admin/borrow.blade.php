@extends('admin.layout')

@section('admin.borrow')
<div class="overflow" style="overflow:scroll">
<table class="table">
    @if(session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
{{session('success')}}
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif
              @if(session('rejected'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
{{session('rejected')}}
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif
              @if(session('warning'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
{{session('warning')}}
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif
<thead>
                  <tr>
                    <th scope="col">ID No.</th>
                    <th scope="col">User Id</th>

                    <th>Title</th>
                    <th>Status</th>
                    <th>Author</th>
                    <th>Image</th>
                    <th>Actions</th>
                  

                    

                  </tr>
                </thead>
                <tbody>
                @foreach ($RequestItem as $data)
                    <tr>
                      <td>{{ $data->borrow_id }}</td>
                      <td>{{ $data->user_id }}</td>
                        <td>{{ $data->title }}</td>
                        <td>{{ $data->borrow_status }}</td>
                        <td>{{$data->author_name}}</td>
                   <td width="50%"><img src="{{asset('upload/images/'.$data->image)}}" style="width:50px;height:50px" alt=""></td>
                     <td>   <div class="btn-group" role="group" aria-label="Basic mixed styles example">
              <a href="{{url('admin/rejected',$data->borrow_id)}}"><button type="button" class="btn btn-danger">Rejected</button></a>
              <a href="{{url('admin/returned',$data->borrow_id)}}"><button type="button" class="btn btn-warning">Returned</button></a>
              
                           <a href="{{url('admin/approved',$data->borrow_id)}}"><button type="button" class="btn btn-success">Approved</button></a>
 
            </div>
</td>

                  </tr>
                  @endforeach
                 
                </tbody>
              </table>
              </div>
@endsection