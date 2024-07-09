@extends('layout')


@section('login')
<div class="item-details-page">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <div class="line-dec"></div>
            <h2>Login To Your <em>Account</em></h2>
          </div>
        </div>
        <div class="col-lg-12">
          <form id="contact" action="{{url('loggedin')}}" method="get">
            @csrf
            <div class="row d-flex justify-content-center">
              <div class="col-lg-4">
                <fieldset>
                  <label for="title">Enter Email</label>
                  <input type="email" name="email" id="email" placeholder="Enter Your Email" autocomplete="on" required>
                </fieldset>
              </div>
           
              <div class="col-lg-4">
                <fieldset>
                  <label for="username">Your Password</label>
                  <input type="password" name="password" id="password" placeholder="Enter Your Password" autocomplete="on" required>
                </fieldset>
              </div>
            
          
              <div class="col-lg-8">
                <fieldset>
                  <button type="submit" id="form-submit" class="orange-button">Login Now</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
        
        </div>

      </div>
    </div>
@endsection