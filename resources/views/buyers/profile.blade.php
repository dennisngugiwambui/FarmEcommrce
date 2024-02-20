{{--@extends('buyers.app')--}}

{{--@section('content')--}}


    <style>
        /* Import Font Dancing Script */
        @import url(https://fonts.googleapis.com/css?family=Dancing+Script);


        /* General Styles */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #e8f5ff;
            overflow-x: hidden;
        }

        /* NavbarTop */
        .navbar-top {
            background-color: #fff;
            color: #333;
            box-shadow: 0px 4px 8px 0px grey;
            height: 70px;
        }

        .title {
            font-family: 'Dancing Script', cursive;
            padding-top: 15px;
            position: absolute;
            left: 45%;
        }

        .navbar-top ul {
            float: right;
            list-style-type: none;
            margin: 0;
            overflow: hidden;
            padding: 18px 50px 0 40px;
        }

        .navbar-top ul li {
            float: left;
        }

        .navbar-top ul li a {
            color: #333;
            padding: 14px 16px;
            text-align: center;
            text-decoration: none;
        }

        .icon-count {
            background-color: #ff0000;
            color: #fff;
            float: right;
            font-size: 11px;
            left: -25px;
            padding: 2px;
            position: relative;
        }

        /* Collapsible Sidebar */
        .sidenav {
            background-color: #fff;
            color: #333;
            border-bottom-right-radius: 25px;
            position: fixed;
            top: 70px;
            left: -250px;
            width: 250px;
            height: calc(100% - 70px);
            overflow-y: auto;
            padding-top: 20px;
            transition: 0.3s;
        }

        .sidenav.show {
            left: 0;
        }

        /* Styles for the rest of the sidebar content */
        /* ... */

        /* Toggle Button */
        .toggle-btn {
            position: fixed;
            top: 20px;
            left: 20px;
            cursor: pointer;
            z-index: 1;
        }

        .toggle-btn i {
            font-size: 24px;
        }

        /* Main Content */
        .main {
            margin-left: 250px; /* Adjusted to match the width of the sidebar */
            padding-top: 70px; /* Adjusted to match the height of the navbar */
            font-size: 16px; /* Adjusted for better readability */
            padding: 20px; /* Adjusted for better spacing */
        }

        .main h2 {
            color: #333;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 24px;
            margin-bottom: 10px;
        }

        /* End */

    </style>
    <!-- FontAwesome 5 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
<div class="navbar-top">
    <div class="title">
        <h1>Profile</h1>
    </div>

    <!-- Navbar -->
    <ul>
        <li>
            <a href="#myadvert">
                <i class="fas fa-ad fa-2x"></i>
            </a>
        </li>
        <li>
            <a href="#profile">
                <i class="fas fa-user fa-2x"></i>
            </a>
        </li>
        <li>
            <a href="#message">
                <span class="icon-count">29</span>
                <i class="fas fa-envelope fa-2x"></i>
            </a>
        </li>
        <li>
            <a href="#notification">
                <span class="icon-count">59</span>
                <i class="fas fa-bell fa-2x"></i>
            </a>
        </li>
        <li>
            <a href="#sign-out">
                <i class="fas fa-sign-out-alt fa-2x"></i> Sell
            </a>
        </li>
    </ul>

    <!-- End -->
</div>
<!-- End -->

<!-- Sidenav -->
<div class="sidenav">
    <div class="profile">
        <img src="https://imdezcode.files.wordpress.com/2020/02/imdezcode-logo.png" alt="" width="100" height="100">

        <div class="name">
            Farmers Choice
        </div>
        <div class="job">
            Dashboard
        </div>
    </div>

<!-- Toggle Button -->
<div class="toggle-btn" onclick="toggleSidebar()">
    <i class="fas fa-bars"></i>
</div>

<!-- Collapsible Sidebar -->
<div class="sidenav">
    <div class="profile">
        <img src="https://imdezcode.files.wordpress.com/2020/02/imdezcode-logo.png" alt="Profile Picture" width="100" height="100">
        <div class="name">Farmers Choice</div>
        <div class="job">Dashboard</div>
    </div>

    <div class="sidenav-url">
        <div class="url">
            <a href="#profile" class="active">Profile</a>
            <hr align="center">
        </div>
        <div class="url">
            <a href="#settings">Settings</a>
            <hr align="center">
        </div>
        <div class="url">
            <a href="#sell">Sell</a>
            <hr align="center">
        </div>
        <div class="url">
            <a href="#messages">Messages</a>
            <hr align="center">
        </div>
    </div>
</div>

<!-- Main -->
<div class="main">
    <h2>IDENTITY</h2>
    <div class="card">
        <div class="card-body">
            <i class="fa fa-pen fa-xs edit"></i>
            <table>
                <tbody>
                <tr>
                    <td>Name</td>
                    <td>:</td>
                    <td>ImDezCode</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td>imdezcode@gmail.com</td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td>:</td>
                    <td>Bali, Indonesia</td>
                </tr>
                <tr>
                    <td>Hobbies</td>
                    <td>:</td>
                    <td>Diving, Reading Book</td>
                </tr>
                <tr>
                    <td>Job</td>
                    <td>:</td>
                    <td>Web Developer</td>
                </tr>
                <tr>
                    <td>Skill</td>
                    <td>:</td>
                    <td>PHP, HTML, CSS, Java</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <h2>SOCIAL MEDIA</h2>
    <div class="card">
        <div class="card-body">
            <i class="fa fa-pen fa-xs edit"></i>
            <div class="social-media">
                    <span class="fa-stack fa-sm">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-facebook fa-stack-1x fa-inverse"></i>
                    </span>
                <span class="fa-stack fa-sm">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                    </span>
                <span class="fa-stack fa-sm">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
                    </span>
                <span class="fa-stack fa-sm">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-invision fa-stack-1x fa-inverse"></i>
                    </span>
                <span class="fa-stack fa-sm">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                    </span>
                <span class="fa-stack fa-sm">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-whatsapp fa-stack-1x fa-inverse"></i>
                    </span>
                <span class="fa-stack fa-sm">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-snapchat fa-stack-1x fa-inverse"></i>
                    </span>
            </div>
        </div>
    </div>
</div>

<script>
    function toggleSidebar() {
        document.querySelector('.sidenav').classList.toggle('show');
    }
</script>


{{--@endsection--}}
