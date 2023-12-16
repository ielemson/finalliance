@extends('frontend.layouts.master')

@section('content')
<div class="page-wrapper">
 	

 
  <!-- Main Header-->
 @include('frontend.common.page-header')
  <!--End Main Header -->


<!--Main Slider-->
@include('frontend.common.section',['section_name1'=>'Login','section_single_name'=>'Account Login'])
  <!--End Slide Info Boxed-->
  
  <section class="contact-page-section" style="margin-bottom:10px">
    
    <div class="auto-container mb-10 pb-10">
        <div class="inner-container">
            <h2>
            
          <span>Login into Your Account</span>
                </h2>
            <div class="row clearfix">
                <!-- Form Column -->
                <div class="form-column col-lg-8 col-md-12 col-sm-12 mx-auto">
                    <div class="inner-column">
                        
                        <!--Contact Form-->
                        <div class="contact-form">
                            <form method="post" action="{{route('customer.login.action')}}" id="contact-form">
                                @csrf
                                <div class="form-group">
                                    <input type="email" name="email" value="{{old('email')}}" placeholder="Email" class="form-control @error('email') is-invalid @enderror">
                                    @if ($errors->has('email'))
                                    <span class="text-danger"><i>{{ $errors->first('email') }}</i></span>
                                    @endif
                                </div>
                                
                                <div class="form-group">
                                    <input type="password" name="password" value="" placeholder="Password" class="form-control @error('password') is-invalid @enderror">
                                        @if ($errors->has('password'))
                                        <span class="text-danger"><i>{{ $errors->first('password') }}</i></span>
                                        @endif
                                </div>
                                
                                <div class="form-group">
                                    <button type="submit" class="theme-btn">Login</button>
                                    <a href="{{route('customer.register')}}"  class="theme-btn btn-style-twelve">Register</a>
                                </div>                                        
                                
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