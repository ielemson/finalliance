@extends('frontend.layouts.master')

@section('content')
<div class="page-wrapper">
 	
  <!-- Main Header-->
 @include('frontend.common.page-header')
  <!--End Main Header -->


<!--Main Slider-->
@include('frontend.common.section',['section_name1'=>'Register','section_single_name'=>'Register Account'])
  <!--End Slide Info Boxed-->
  
  <section class="contact-page-section" style="margin-bottom:10px">
    <div class="auto-container pb-10">
        <div class="inner-container">
            <h2>
                 <br>  <span>Create New Account</span>
                </h2>
            <div class="row clearfix">
                <!-- Form Column -->
                <div class="form-column col-lg-12 col-md-12 col-sm-12 mx-auto">
                    <div class="inner-column">       
                        <!--Contact Form-->
                        <div class="contact-form">
                            <form method="post" action="{{route('customer.register.post')}}" id="contact-form">
                                @csrf
                               <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <input type="text" name="name" value="{{old('name')}}" placeholder="First Name"  class="form-control @error('name') is-invalid @enderror" required>
                                    @if ($errors->has('name'))
                                    <span class="text-danger"><i>{{ $errors->first('name') }}</i></span>
                                    @endif
                                    </div>
                                   
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="lname" value="{{old('lname')}}" placeholder="Last Name" class="form-control @error('lname') is-invalid @enderror" required>
                                        @if ($errors->has('lname'))
                                        <span class="text-danger"><i>{{ $errors->first('lname') }}</i></span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="mname" value="{{old('mname')}}" placeholder="Middle Name" class="form-control @error('mname') is-invalid @enderror" required>
                                        @if ($errors->has('mname'))
                                        <span class="text-danger"><i>{{ $errors->first('mname') }}</i></span>
                                        @endif
                                    </div>
                                    
                                   
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="username" value="{{old('username')}}" placeholder="Username" class="form-control @error('username') is-invalid @enderror" required>
                                        @if ($errors->has('username'))
                                        <span class="text-danger"><i>{{ $errors->first('username') }}</i></span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" value="{{old('email')}}" placeholder="Email" class="form-control @error('email') is-invalid @enderror" required>
                                        @if ($errors->has('email'))
                                        <span class="text-danger"><i>{{ $errors->first('email') }}</i></span>
                                        @endif
                                    </div>
                                    
                                   
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select  name="country" value="{{old('country')}}"  class="custom-select-box @error('country') is-invalid @enderror" required>
                                                 <option value="">Select Country</option>
                                                    @foreach ($countries as $country)
                                                    <option value="{{$country->id}}">{{$country->name}} +{{$country->code}}</option>
                                                @endforeach
                                                </select>
                                                @if ($errors->has('country'))
                                                <span class="text-danger"><i>{{ $errors->first('country') }}</i></span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="tel"  name="mobile" value="{{old('mobile')}}" placeholder="Mobile Number" class="form-control @error('mobile') is-invalid @enderror"  pattern="^[0-9]+$" required>
                                                @if ($errors->has('mobile'))
                                                <span class="text-danger"><i>{{ $errors->first('mobile') }}</i></span>
                                                @endif
                                            </div>
                                        </div>
                                     
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="password" name="password" value="" placeholder="Password" class="form-control @error('password') is-invalid @enderror" required>
                                        @if ($errors->has('password'))
                                        <span class="text-danger"><i>{{ $errors->first('password') }}</i></span>
                                        @endif
                                    </div>
                                    
                                   
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="password" name="password_confirmation" value="" placeholder="Confirm Password" required>
                                    </div>
                                </div>
                               </div>
                                
                                <div class="form-group">
                                    <button type="submit" class="theme-btn btn-style-one">Register Account</button>
                                    <a href="{{route('customer.login')}}" class="theme-btn btn-style-one">Login</a>
                                </div>
                                                                        
                                                                         {{-- <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                                                            <button type="submit" class="theme-btn btn-style-one">Submit request <span class="icon flaticon-share-option"></span></button>
                                                                        </div> --}}
                            </form>

                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Main Footer-->
 @include('frontend.common.footer')

</div>
@endsection