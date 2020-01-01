<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DIU Community|Admin Panel</title>
    <link type="text/css" rel="stylesheet" href="{{asset('admin/css/font-awesome.min.css')}}"/>
    <link type="text/css" href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{asset('admin/css/style.css')}}"/>
  </head>
  <body>
  	<div class="container-fluid header_full">
    	<div class="container header">
        	<div class="row">
            
            </div><!--row end-->
        </div><!--container end-->
    </div><!--container-fluid end-->

    <div class="container-fluid content_full">
        <div class="row">
            @include('admin.partials.nav-bar')
            <div class="col-md-10 admin-part pd0">
                
                @yield('content')

            </div><!--admin-part end-->
         </div><!--row end-->
    </div><!--container-fluid end-->

    <div class="container-fluid footer_full">
    	<div class="container footer">
        	<div class="row">
            </div><!--row end-->
        </div><!--container end-->
    </div><!--container-fluid end-->
    <script type="text/javascript" src="{{asset('admin/js/jquery-3.2.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/js/custom.js')}}"></script>
  </body>
</html>