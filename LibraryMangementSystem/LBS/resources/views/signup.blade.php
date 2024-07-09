@extends('layout')

@section('signup')
@if(session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
{{session('success')}}
</button>
              </div>
              @endif
<div class="item-details-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <div class="line-dec"></div>
                    <h2><em>Sign Up</em> for Account</h2>
                </div>
            </div>
            <div class="col-lg-12">
                <form id="contact" action="{{url('register')}}" method="post">
                    @csrf
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-4">
                            <fieldset>
                                <label for="name">Enter Name</label>
                                <input type="text" name="name" id="name" placeholder="Enter Your Name" autocomplete="on" required>
                            </fieldset>
                        </div>
                        <div class="col-lg-4">
                            <fieldset>
                                <label for="mobile">Enter Mobile</label>
                                <input type="tel" name="mobile" id="mobile" placeholder="Enter Your Mobile" autocomplete="on" required>
                            </fieldset>
                        </div>
                        <div class="col-lg-4">
                            <fieldset>
                                <label for="email">Enter Email</label>
                                <input type="email" name="email" id="email" placeholder="Enter Your Email" autocomplete="on" required>
                            </fieldset>
                        </div>
                        <div class="col-lg-4">
                            <fieldset>
                                <label for="password">Your Password</label>
                                <input type="password" name="password" id="password" placeholder="Enter Your Password" autocomplete="on" required>
                            </fieldset>
                        </div>
                        <div class="col-lg-8">
                            <fieldset>
                                <button type="submit" id="form-submit" class="orange-button">SignUp Now</button>
                            </fieldset>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
