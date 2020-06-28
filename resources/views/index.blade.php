<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
Clover Tech    </title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="{{asset('assets/css/material-dashboard.css?v=2.1.2')}}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{asset('assets/demo/demo.css')}}" rel="stylesheet" />
</head>
<body>
<div class="wrapper ">

    <div class="sidebar" data-color="azure" data-background-color="azure" data-image="{{asset('assets/img/back-wallpaper.png')}}">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

          Tip 2: you can also add an image using data-image tag
      -->
        <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
Clover Tech
            </a></div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li id="#one" class="nav-item   ">
                    <a  class="nav-link" href="{{route('home')}}">
                        <i class="material-icons">dashboard</i>
                        <p>Home</p>
                    </a>
                </li>
                <li class="nav-item dropdown ">
                    <a class="nav-link" href="{{route('myprofile')}}">
                        <i class="material-icons">person</i>
                        <p>User Profile</p>
                    </a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" href="{{route('mydecisions')}}">
                        <i class="material-icons">library_books</i>
                        <p>My Decisions</p>
                    </a>
                </li><li class="nav-item ">
                    <a class="nav-link" href="{{route('wilayas')}}">
                        <i class="material-icons">library_books</i>
                        <p>Wilaya</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{route('decisions')}}">
                        <i class="material-icons">library_books</i>
                        <p>Decisions</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{route('getAllUsers')}}">
                        <i class="material-icons">person</i>
                        <p>Admins</p>
                    </a>
                </li>

            </ul>
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <a class="navbar-brand" href="javascript:;"></a>
                </div>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-info pull-right " >Logout</button>
                </form>



            </div>
        </nav>
        <!-- End Navbar -->

        @yield('content')








        <footer class="footer">
            <div class="container-fluid">
                <div class="copyright float-right">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, made with <i class="material-icons">favorite</i> by
                    <a href="https://www.creative-tim.com" target="_blank">Clover Tech</a>
                </div>
            </div>
        </footer>

























    </div>

</div>


</body>
