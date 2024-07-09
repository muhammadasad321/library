@extends('layout')

@section('index')
<div class="main-banner">
    <div class="container">
      <div class="row d-flex justify-content-center align-content-center">
        <div class="col-lg-6 align-self-center" style="width:100%">
          <div class="header-text">
            <h6 class="text-center">Book is Knowledge</h6>
            <h2 class="text-center">Knowledge is Power</h2>
            <p class="text-center">Library is a really cool and professional design for your websites. This HTML CSS template is based on Bootstrap v5 and it is designed for related web portals. Liberty can be freely downloaded from github</p>
            <div class="buttons d-flex justify-content-center">
              <div class="border-button">
                <a href="e{{url('explore')}}">Explore Top Books</a>
              </div>
              <div class="main-button">
                <a href="https://www.youtube.com/channel/UCQlLnvuahfTkz-x78M_46Uw" target="_blank">Watch Our Videos</a>
              </div>
            </div>
          </div>
        </div>
        
        </div>
      </div>
    </div>
  </div>
<div class="categories-collections">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="categories">
            <div class="row">
              <div class="col-lg-12">
                <div class="section-heading">
                  <div class="line-dec"></div>
                  <h2>Browse Through Book <em>Categories</em> Here.</h2>
                </div>
              </div>
              @foreach($CategoryList as $data)
              <div class="col-lg-2 col-sm-6">
                <div class="item">
                 
               <a href="{{asset('categories/'.$data->id)}}" class="text-white fs-5">{{$data->name}}</a>   
                  
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>

  

  <div class="currently-market">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <div class="line-dec"></div>
            <h2><em>Items</em> Currently In The Market.</h2>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="filters">
            <ul>
              <li data-filter="*"  class="active">All Books</li>
           
              
            </ul>
          </div>
        </div>

        <div class="col-lg-12">
          <div class="row grid">
            @foreach($books as $data)
            <div class="col-lg-6 currently-market-item all msc" style="width:30em; height 20em">
              <div class="item">
                <div class="left-image">
                  <img src="{{asset('upload/images/'.$data->image)}}" alt="" style="border-radius: 20px; min-width: 195px;">
                </div>
                <div class="right-content">
                  <h4>{{$data->title}}</h4>
                  <span class="author">
                    <img src="{{asset('frontendasset/images/author.jpg')}}" alt="" style="max-width: 50px; border-radius: 50%;">
                    <h6>{{$data->author->author}}</h6>
                  </span>
                  <div class="line-dec"></div>
                  <span class="bid">
                    Current Available<br><strong>{{$data->quantity}}</strong><br> 
                  </span>
                  <span class="ends">
                    Total<br><strong>{{$data->price}}</strong><br>
                  </span>
                  <div class="text-button" style="background:#7453fc; border-radius:5px;padding:12px">
                    <a href="{{url('book/'.$data->id.'/'.$data->slug)}}" style="color:white;text-decoration:none">View Item Details</a>
                  </div>
                </div>
              </div>
            </div>
            
              @endforeach
           

          </div>
        </div>
      </div>
    </div>
  </div>

@endsection