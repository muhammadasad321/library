@extends('layout')

@section('explore')

<div class="discover-items">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="section-heading">
             
            <h2>Discover Some Of Our <em>Items</em>.</h2>
          </div>
        </div>
        <div class="col-lg-7">
          <form id="search-form" name="gs" method="submit" role="search" action="{{url('search')}}">
            <div class="row">
              <div class="col-lg-4">
                <fieldset>
                    <input type="text" name="search" class="searchText" placeholder="Type Something..." autocomplete="on" >
                </fieldset>
              </div>
             
             
              <div class="col-lg-2">                        
                <fieldset>
                    <button class="main-button">Search</button>
                </fieldset>
              </div>
            </div>
          </form>
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
          @foreach($explore as $data)
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
  
  
        
      </div>
    </div>
  </div>
 
  @endsection