@extends('main')

@section('title' , 'home')

@section('stylesheet')
  {!! Html::style('css/parsley.css') !!}
@endsection
@section('header')
     <div class="header header-filter" style="background-image: url({{ asset('/images/theme/cooporation.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="brand">
                        <h1 class="title white">وبی تک</h1>
                        <div class="separator separator-danger">✻</div>
                        <h3 class="text-center">ما فقط یک وب سایت طراحی نمیکنیم،ما آنچه در ذهن ورویای شماست به واقعیت تبدیل میکنیم</h3>
                    </div>
                </div>
            </div>

        </div>
     </div>
@endsection
@section('content')
<div class="section-basic">

         <div class="container-fluid text-center">
            @include('theme.carsoul')
             <h3 class="text-center black-title"><b>قالب کار خود را انتخاب کنید</b></h3>
             <p class="rtl"><b>شما می توانید از بین قالب های متنوع قالب مناسب برای کسب و کار خود را انتخاب کنید.</b></p>
             
            @include('theme.tab-products')
         </div>
         <div class="section">
               <div class="row">
                     <div class="container-fluid">
                        <div class="row"> 
                              <div class="col-md-8 col-md-offset-2 text-center">
                                <h2 class="title title-black ">چرا باید با وبی تک کار کنید؟</h2>
                                <h5 class="description"><b>وبی تک</b> با سال ها تجربه در حوزه طراحی سایت ، از تاثیر یک سایت حرفه ای در معرفی کسب و کار شرکت ها آگاه است . در همین راستا این شرکت با در اختیار داشتن تیمی حرفه ای و مطابق با آخرین تکنولوژی های روز دنیا ، تخصص و خلاقیت را در کنار هم قرار داده تا وب سایت شما علاوه بر داشتن ظاهری زیا و متفاوت ، تبدیل به ابزاری قدرتمند برای نمایش شخصیت کاریتان و افزایش فروش شما گردد . </h5>
                              </div>
                        </div>

                      <div class="col-md-12">
                            <div class="col-md-3">
                                    <div class="col-md-12 text-center mb-10">
                                        <a href="#" class="link-none font-icon">
                                         
                                            <i class="bordered material-icons mb-10 " aria-hidden="true">account_balance</i>
                                        
                                           
                                           <div class="clearfix"></div>
                                           <strong>طراحی فروشگاه اینترنتی</strong>
                                        </a>
                                   </div>
                                     <p class="text-justify">
                                        طراحی فروشگاهی یکی دیگر از خدمات شرکت طراحی وبسایت مدرن تک است، طراحی فروشگاه های اینترنتی که برای ایجاد کسب و کار آنلاین مناسب هستند، ما با چندین سال تجربه در زمینه طراحی وب سایت فروشگاهی یک گزینه عالی برای طراحی وبسایت فروشگاهی است


                                     </p>
                             </div>
                             <div class="col-md-3">
                                    <div class="col-md-12 text-center mb-10">
                                        <a href="#" class="link-none font-icon">
                                           <i class="material-icons mb-10  bordered" aria-hidden="true">update</i>
                                           <div class="clearfix"></div>
                                           <strong>ضمانت و پشتییبانی سایت</strong>
                                        </a>
                                   </div>
                                     <p class="text-justify">ما وب سایت شما را به طور
                                       24 ساعته توسط تیمی مجرب پشتیبانی کرده و در صورت عدم رضایت وجه شما را باز پس میگردانیم
                                     </p>
                             </div>
                              <div class="col-md-3">
                                    <div class="col-md-12 text-center mb-10">
                                        <a href="#" class="link-none font-icon">
                                           <i class="material-icons mb-10  bordered" aria-hidden="true">assignment</i>
                                           <div class="clearfix"></div>
                                           <strong>طراحی وب سایت شخصی</strong>
                                        </a>
                                   </div>
                                     <p class="text-justify">داشتن یک وب سایت مانند این میباشد که شما رزومه خود را برای هر کسی ارسال یا همان پست مینمایید و شما زمانی که هر هفته با چندین فرصت شغلی که به شما پیشنهاد داده میشود مواجه خواهید شد.
                                     </p>
                             </div>
                              <div class="col-md-3">
                                    <div class="col-md-12 text-center mb-10">
                                        <a href="#" class="link-none font-icon">
                                           <i class="material-icons mb-10  bordered" aria-hidden="true">verified_user</i>
                                           <div class="clearfix"></div>
                                           <strong>طراحی وب سایت سازمانی</strong>
                                        </a>
                                   </div>
                                     <p class="text-justify"> امروزه با توجه به اینکه در دستور کار اکثر سازمان های بزرگ خصوصی و دولتی سرعت بخشیدن به ارائه خدمات برای ارباب رجوع از اولویت های کاری می باشد داشتن یک وب سایت سازمانی مسئله ای مهم خواهد بود. 
                                     </p>
                             </div>
                         </div>
                     </div>
             </div>
         </div>
            @include('theme.responsive')
            
           
            @include('theme.parallex')
          
           @include('theme.latest_blog')
           
            @include('theme.contact_us')
           
            @include('theme.teams')
            
             @include('theme.subscribe')
</div>            


@endsection
@section('ajax-form')

   
    <div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h4 class="modal-title pull-right">ورود به حساب کاربری</h4>
                              <button type="button" class="close pull-left" data-dismiss="modal" aria-hidden="true">
                                  <i class="material-icons">clear</i>
                              </button>
                              
                          </div>
                          <div class="modal-body">
                            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                  {{ csrf_field() }}

                                  <div class="input-group text-right {{ $errors->has('email') ? ' has-error' : '' }}">
                                     
                                      <span class="input-group-addon">
                                              <i class="material-icons">group</i>
                                      </span>
                                      <div class="form-group col-md-12">
                                       <input placeholder="ایمیل" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                      </div>
                                          @if ($errors->has('email'))
                                              <span class="help-block">
                                                  <strong>{{ $errors->first('email') }}</strong>
                                              </span>
                                          @endif
                                      
                                  </div>

                                  <div class="input-group text-right {{ $errors->has('password') ? ' has-error' : '' }}">
                                      <span class="input-group-addon">
                                              <i class="material-icons">lock</i>
                                      </span>

                                      <div class="form-group col-md-12 is-empty">
                                          <input id="password" placeholder="رمز عبور" type="password" class="form-control" name="password" required>

                                          @if ($errors->has('password'))
                                              <span class="help-block">
                                                  <strong>{{ $errors->first('password') }}</strong>
                                              </span>
                                          @endif
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <div class="col-md-6 col-md-offset-4">
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> نام کاربری و رمز عبور را به خاطر بسپار
                                              </label>
                                          </div>
                                      </div>
                                  </div>

                                  
                          
                          </div>
                          <div class="modal-footer">
                              <div class="form-group">
                                      <div class="col-md-8">
                                          <button type="submit" class="btn btn-primary">
                                              ورود
                                          </button>
                                          <a class="btn btn-simple btn-info" href="{{ route('password.request') }}">
                                              پسورد خود را فراموش کردید؟
                                          </a>
                                      </div>
                                   </div>
                          </div>
                         </form> 
                      </div>
                  </div>
    </div>







    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close pull-left" data-dismiss="modal" aria-hidden="true">
                        <i class="material-icons">clear</i>
                    </button>
                    <h4 class="modal-title pull-right">فرم عضویت</h4>
                </div>
                <div class="modal-body">
                  <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="input-group text-right  {{ $errors->has('name') ? ' has-error' : '' }}">
                           
                             <span class="input-group-addon">
                                              <i class="material-icons">group</i>
                             </span>
                            <div class="form-group col-md-12 is-empty">
                                <input placeholder="نام کاربری" id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="input-group text-right {{ $errors->has('email') ? ' has-error' : '' }}">
                            
                            <span class="input-group-addon">
                                              <i class="material-icons">mail</i>
                             </span>
                            <div class="form-group col-md-12 is-empty">
                                <input placeholder="ایمیل" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="input-group text-right {{ $errors->has('password') ? ' has-error' : '' }}">
                             <span class="input-group-addon">
                                              <i class="material-icons">lock</i>
                             </span>
                           

                            <div class="form-group col-md-12 is-empty">
                                <input placeholder="رمز عبور" id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="input-group text-right">
                            <span class="input-group-addon">
                                              <i class="material-icons">done_all</i>
                             </span>

                            <div class="form-group col-md-12 is-empty">
                                <input placeholder="تکرار رمز عبور" id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                       
                </div>
                <div class="modal-footer">
                   <button type="submit" class="btn btn-primary">
                                    ثبت نام
                    </button>
                </div></form>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
 {!! Html::script('js/parsley.min.js') !!}
@endsection