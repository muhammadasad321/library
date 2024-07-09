@extends('layout')

@section('book')
<div class="item-details-page">
    @foreach($Detail as $data)

    <div class="container">
      <div class="row">
        
        <div class="col-lg-12">
          <div class="section-heading">
            <div class="line-dec"></div>
            <h2>View Details <em>For Item</em> Here.</h2>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="left-image" style="width:20em">
            <img src="{{asset('upload/images/'.$data->image)}}" alt="" style="border-radius: 20px;">
          </div>
        </div>
        <div class="col-lg-5 align-self-center">
          <h4>{{$data->title}}</h4>
          <span class="author">
            <img src="{{asset('backendasset/images/faces/PB.png')}}" alt="" style="max-width: 50px; border-radius: 50%;">
            <h6>{{$data->author->author}}</h6>
          </span>
          <p class="text-white">{!! $data->description !!}</p>
          <div class="row">
            <div class="col-3">
              <span class="bid">
                Price<br><strong>{{$data->price}}</strong><br>
              </span>
            </div>
            
            <div class="col-5">
              <span class="ends">
                Total Quantity<br><strong>{{$data->quantity}}</strong><br>
              </span>
            </div>
            <div class="text-button" style="background:#7453fc; border-radius:5px;padding:12px;    text-align: center;
">
                        <button id="borrowRequest" style="color:white;text-decoration:none; background:none; border:none;">Borrow Request</button>
                  </div>
          </div>
        </div>
        @endforeach
        
  </div>
    </div>
      </div>

<!-- CSRF Token for AJAX -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- jQuery for AJAX -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('#borrowRequest').click(function(e) {
        e.preventDefault();

        var book_id = {{ $data->id }};
        var user_id = "{{ session('id') }}"; 
        var price = {{ $data->price }};
        var quantity = 1; 
     

        $.ajax({
            url: "{{ route('borrow.store') }}",
            method: 'POST',
            data: {
                _token: $('meta[name="csrf-token"]').attr('content'),
                book_id: book_id,
                user_id: user_id,
                price: price,
                quantity: quantity,
               
            },
            success: function(response) {
                alert('Borrow request has been submitted successfully!');
            },
            error: function(response) {
                alert('Please Login first');
            }
        });
    });
});
</script>
@endsection