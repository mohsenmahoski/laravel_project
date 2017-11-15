<!DOCTYPE html>
<html lang="en">
  <head>
    @include('partials._head')
  </head>
    <body class="index-page @yield('body_class')">
       @include('partials._nav')

       <div class="wrapper">

             @yield('header')
             <div class="main main-raised">
                  @include('partials._menu')
                  @include('partials._messages')
                      <!-- Default Bootstrap Navbar -->
                  
                  

                        

                 
                
                   
                        @yield('content')
                   
                
                
              </div>
              @include('partials._footer')
                  <!-- end of .container -->
              @yield('ajax-form')
                  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
              @include('partials._scripts')
           
        </div>   
    </body>

</html>