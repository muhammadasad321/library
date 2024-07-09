@extends('layout')
<title>Request for Books</title>
@section('request')

  <style>
    .req {
        color:white
    }
  </style>
    
    <div class="item-details-page">
    @if(session('message'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
{{session('message')}}
              </div>
              @endif
    <!-- Cart Start -->
    <div class="container">
        <div class="row">
              <div class="row mb-5">
                 <form class="col-md-12" method="post">
                  <div class="site-blocks-table">
                    <table class="table">
                      <thead style="border-bottom:2px solid white">
                        <tr>
                          <th class="req">Image</th>
                          <th class="req">Book</th>
                          <th class="req">Author</th>

                          <th class="req">Status</th>
                          <th class="req">Cancel Request</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($RequestItem as $data)

                        <tr>
                          <td class="book-thumbnail" style="width:6em;over-flow:hidden  ">
                            <img src="{{asset('upload/images/'.$data->image)}}" alt="Image" class="img-fluid" style="width:100%;object-fit:contain">
                          </td>
                          <td class="book-name">
                            <h2 class="h5 text-white">{{$data->title}}</h2>
                          </td>
                          <td class="author-name">
                            <h2 class="h5 text-white">{{$data->author_name}}</h2>
                          </td>
                          <td class="text-white">{{$data->borrow_status}}</td>
                          @if($data->borrow_status == 'Approved' || $data->borrow_status == 'Returned' || $data->borrow_status == 'Cancelled' || $data->borrow_status == 'Rejected')
<td class="text-white">Not allowed</td>
@else
<td><a href="{{ url('cancel/' . $data->borrow_id) }}" class="btn btn-warning">Cancel</a></td>

@endif
                          
                        </tr>
        
                    @endforeach
                      </tbody>
                    </table>
                  </div>
                </form>
              </div>
        
              <div class="row">
                <div class="col-md-6">
                  <div class="row mb-5">
                    <div class="col-md-6 mb-3 mb-md-0">
                    <a href="{{url('/')}}"><button class="btn btn-outline-black btn-sm btn-block">Return To Home</button></a>
                    </div>
                    <div class="col-md-6">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      
                    </div>
                    <div class="col-md-8 mb-3 mb-md-0">
                      
                    </div>
                    <div class="col-md-4">
                    </div>
                  </div>
                </div>
                <div class="col-md-6 pl-5">
                  <div class="row justify-content-end">
                  
                  </div>
                </div>
              </div>
            </div>
          </div>
</div>

    @endsection

