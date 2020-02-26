<!doctype html>
<html>
    <head>
          @include('includes.head')
    </head>
  <body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">
      
             @include('includes.header')    
                
         
             @yield('content')
             
             
             <!-- Jquery Core Js -->
    @include('includes.footer') 
     </div>
     @yield('script')
    </body>    
</html> 