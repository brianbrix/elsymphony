@extends('guest.header')
@section('title')
Elsymphony
@endsection
@section('content')
<style>
body {
    color: #000;
    overflow-x: hidden;
    height: 100%;
    background-color: #B0BEC5;
    background-repeat: no-repeat
}

.card0 {
    box-shadow: 0px 4px 8px 0px #757575;
    border-radius: 0px
}

.card2 {
    margin: 0px 40px
}

.logo {
    width: 200px;
    height: 100px;
    margin-top: 20px;
    margin-left: 35px
}

.image {
    width: 360px;
    height: 280px
}

.border-line {
    border-right: 1px solid #EEEEEE
}

.facebook {
    background-color: #3b5998;
    color: #fff;
    font-size: 18px;
    padding-top: 5px;
    border-radius: 50%;
    width: 35px;
    height: 35px;
    cursor: pointer
}

.twitter {
    background-color: #1DA1F2;
    color: #fff;
    font-size: 18px;
    padding-top: 5px;
    border-radius: 50%;
    width: 35px;
    height: 35px;
    cursor: pointer
}

.linkedin {
    background-color: #2867B2;
    color: #fff;
    font-size: 18px;
    padding-top: 5px;
    border-radius: 50%;
    width: 35px;
    height: 35px;
    cursor: pointer
}

.line {
    height: 1px;
    width: 45%;
    background-color: #E0E0E0;
    margin-top: 10px
}

.or {
    width: 10%;
    font-weight: bold
}

.text-sm {
    font-size: 14px !important
}

::placeholder {
    color: #BDBDBD;
    opacity: 1;
    font-weight: 300
}

:-ms-input-placeholder {
    color: #BDBDBD;
    font-weight: 300
}

::-ms-input-placeholder {
    color: #BDBDBD;
    font-weight: 300
}

input,
textarea {
    padding: 10px 12px 10px 12px;
    border: 1px solid lightgrey;
    border-radius: 2px;
    margin-bottom: 5px;
    margin-top: 2px;
    width: 100%;
    box-sizing: border-box;
    color: #2C3E50;
    font-size: 14px;
    letter-spacing: 1px
}

input:focus,
textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid #304FFE;
    outline-width: 0
}

button:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    outline-width: 0
}

a {
    color: inherit;
    cursor: pointer
}

.btn-blue {
    background-color: #1A237E;
    width: 150px;
    color: #fff;
    border-radius: 2px
}

.btn-blue:hover {
    background-color: #000;
    cursor: pointer
}

.bg-blue {
    color: #fff;
    background-color: #1A237E
}

@media screen and (max-width: 991px) {
    .logo {
        margin-left: 0px
    }

    .image {
        width: 300px;
        height: 220px
    }

    .border-line {
        border-right: none
    }

    .card2 {
        border-top: 1px solid #EEEEEE !important;
        margin: 0px 15px
    }
}
</style>
<div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
    <div class="card card0 border-0">
        <div class="row d-flex">

            <div class="col-lg-6">
                <div class="card2 card border-0 px-4 py-5">
                    <div class="row mb-4 px-3">
                        <h6 class="mb-0 mr-4 mt-2">Sign in with</h6>
                        <div class="facebook text-center mr-3">
                            <div class="fa fa-facebook"></div>
                        </div>
                        <div class="twitter text-center mr-3">
                            <div class="fa fa-twitter"></div>
                        </div>
                        <div class="linkedin text-center mr-3">
                            <div class="fa fa-linkedin"></div>
                        </div>
                    </div>
                    <div class="row px-3 mb-4">
                        <div class="line"></div> <small class="or text-center">Or</small>
                        <div class="line"></div>

                    </div>
                    <form class="form-horizontal"
                                              role="form"
                                              method="POST"
                                              action="{{ url('login') }}">
                                              <input type="hidden"
                                                                             name="_token"
                                                                             value="{{ csrf_token() }}">


                       <div class="form-group">
                       <input type="email" name="email" value="{{ old('email') }}" id="email" class="form-control input-sm" placeholder="Email Address" required>
                   </div>
                   @error('email')
                         <div class="alert alert-danger">{{ $message }}</div>
                     @enderror

                   <div class="form-group">
                         <input type="password" class="form-control" name="password" placeholder="Enter password" required>
                     </div>
                     @error('password')
                                           <div class="alert alert-danger">{{ $message }}</div>
                                       @enderror
                    <div class="row px-3 mb-4">
                        <div class="custom-control custom-checkbox custom-control-inline"> <input id="chk1" type="checkbox" name="chk" class="custom-control-input"> <label for="chk1" class="custom-control-label text-sm">Remember me</label> </div> <a href="#" class="ml-auto mb-0 text-sm">Forgot Password?</a>
                    </div>
                    <div class="row mb-3 px-3"> <button type="submit" class="btn btn-blue text-center">Login</button> </div>
                    </form>
                    <div class="row">
                    <small class="font-weight-bold col-md-6">Dont have an account? <a class="text-danger ">Register</a></small>
                     <small class="font-weight-bold col-md-6"><a class="text-danger "> <a href="{{ route('auth.password.reset') }}">Forgot your password?</a></a></small>


                    </div>
                    


                </div>
            </div>
            <div class="col-lg-6">
                <div class="card2 card border-0 px-4 py-5">
                    <div class="row mb-4 px-3">
                        <h6 class="mb-0 mr-4 mt-2">Sign up with</h6>
                        <div class="facebook text-center mr-3">
                            <div class="fa fa-facebook"></div>
                        </div>
                        <div class="twitter text-center mr-3">
                            <div class="fa fa-twitter"></div>
                        </div>
                        <div class="linkedin text-center mr-3">
                            <div class="fa fa-linkedin"></div>
                        </div>
                    </div>
                    <div class="row px-3 mb-4">
                        <div class="line"></div> <small class="or text-center">Or</small>
                        <div class="line"></div>
                        @error('registration')
                                  <div class="alert alert-success">{{ $message }}</div>
                              @enderror
                    </div>
                    <form class="form-horizontal"
                                          role="form"
                                          method="POST"
                                          action="{{ url('register') }}">
                                          <input type="hidden"
                                                         name="_token"
                                                         value="{{ csrf_token() }}">
                              <div class="row">
                                  <div class="col-xs-6 col-sm-6 col-md-6">
                                      <div class="form-group">
                              <input type="text" name="first_name" id="first_name" value="{{ old('first_name') }}" class="form-control input-sm" placeholder="First Name" required>
                                      </div>
                                       @error('first_name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror

                                  </div>

                                  <div class="col-xs-6 col-sm-6 col-md-6">
                                      <div class="form-group">
                                          <input type="text" name="last_name" value="{{ old('last_name') }}" id="last_name" class="form-control input-sm" placeholder="Last Name" required >
                                      </div>
                                       @error('last_name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                  </div>
                              </div>


                              <div class="row">
                                      <div class="col-xs-6 col-sm-6 col-md-6">
                                          <div class="form-group">
                                              <input type="email" name="user_email" value="{{ old('user_email') }}" id="password" class="form-control input-sm" placeholder="email@example.com" required>
                                          </div>
                                          @error('user_email')
                                                  <div class="alert alert-danger">{{ $message }}</div>
                                              @enderror
                                      </div>

                                      <div class="col-xs-6 col-sm-6 col-md-6">
                                          <div class="form-group">
                                          <input type="text" name="phone_number" value="{{ old('phone_number') }}" id="phone_number" class="form-control input-sm" placeholder="07xx...." required>

                                          </div>
                                          @error('phone_number')
                                                  <div class="alert alert-danger">{{ $message }}</div>
                                              @enderror

                                      </div>

                                  </div>

                              <div class="form-group">
                                    <textarea name="physical_address" value="{{ old('physical_address') }}" id="physical Address" class="form-control input-sm" placeholder="Physical address" ></textarea>
                                </div>


                              <div class="row">
                                  <div class="col-xs-6 col-sm-6 col-md-6">
                                      <div class="form-group">
                                          <input type="password" name="user_password" id="user_password" class="form-control input-sm" placeholder="Password" required>
                                      </div>
                                  </div>
                                  <div class="col-xs-6 col-sm-6 col-md-6">
                                      <div class="form-group">
                                      <input type="password" name="confirm_password" id="confirm_password" class="form-control input-sm" placeholder="Retype password"required>

                                      </div>

                                  </div>
                                  @error('user_password')
                                              <div class="alert alert-danger">{{ $message }}</div>
                                          @enderror
                              </div>

                            <div class="row mb-3 px-3"> <button type="submit" class="btn btn-blue text-center">Register</button> </div>

                          </form>
                    <div class="row">
                    <small class="font-weight-bold col-md-6">Already have an account? <a class="text-danger ">Login</a></small>


                      </div>


                </div>
            </div>
        </div>

    </div>
</div>
@endsection
