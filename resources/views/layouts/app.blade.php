<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Quickstart - Basic</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <style>
        body {
            background-color: #212121;
            color:white;
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }

        nav.my-nav {
            box-shadow: 0 0 11px 0px #5afff0;
            border: 0px;
            border-radius: 0px;
            background-color: #111 !important;
            font-size: 19px;
        }
        
        #navbarNav {
            display: flex !important;
        }
        #navbarNav>ul {
            margin: auto;
        }
        #navbarNav>ul>li {
            margin: 0 10px;
        }

        .navbar-nav .nav-link {
            color: white !important;
        }

        .my-panel {
            width: 90%;
            margin: auto;
            background-color: #bde8fd;
            box-shadow: 0 0 11px 1px #00c4ff;
            border: 1px solid #00adff;
        }

        .my-panel>.panel-heading {
            font-size: 22px;
            font-weight: bold;
            text-align: center;
            background-color: #00adff;
        }

        .table-striped>tbody>tr:nth-of-type(odd) {
            background-color: #77cef9;
        }

        button.btn.btn-danger {
            box-shadow: 0 0 3px black;
        }

        .btn-danger:hover {
            background-color: #8c1815;
            box-shadow: 0 0 7px black;
        }

        .btn.active.focus, .btn.active:focus, .btn.focus, .btn:active.focus, .btn:active:focus, .btn:focus {
            outline: thin dotted;
            outline: none;
            outline-offset: unset;
        }

        .btn.focus, .btn:focus {
            outline: 0;
            box-shadow: none;
        }

        .card-body li {
            font-size: 16px;
        }
        .card-body ol {
            margin-bottom: 0px;
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark my-nav">  
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">Tasks</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/category/show">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/category/add">Add Category</a>
                </li>
            </ul>
        </div>
    </nav>

    @yield('content')
</body>

</html>