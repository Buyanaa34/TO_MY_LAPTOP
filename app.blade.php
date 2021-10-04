<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.datatables.net/1.11.2/css/jquery.dataTables.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/fixedheader/3.1.9/css/fixedHeader.dataTables.min.css" rel="stylesheet"> 
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/fixedheader/3.1.9/js/dataTables.fixedHeader.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/test.css') }}" rel="stylesheet" />
        <title>BOM reports</title>
    </head>
    <style>
        #welcomeWord{
            letter-spacing: 5px;
            font-size: 27px;
            padding: 5px;
            font-weight: 500;
        }
        #navbar {
            color: white !important;
            background: gray !important; 
            opacity: 0.7;
            box-shadow: 0px 5px 5px 0px rgba(0,0,0,0.33);        }
    </style>
    <body>
        <nav id="navbar" class="navbar sticky-top navbar-light bg-light">
            <a class="navbar-brand" id="welcomeWord" href="#">GOLOMT BANK</a>
          </nav>
        @yield('content')
    </body>
</html>
