@extends('layouts.app')
@section('title') {{'Master'}} @endsection

@section('styles')
<style>
    .navbar-brand {
        font-family: Pacifico;
        color: white
    }

    .navbar-brand h3 span {
        color: #0ABAB5
    }

    .navbar-brand :hover {
        color: rgb(255, 255, 255);
    }

    .pricing-header {
        background: #091429
    }

    .pricing-header .nav-link {
        font-size: 15px;
        color: aliceblue;
    }

    .navbar-collapse {
        justify-content: flex-end
    }


    /* manage project */

    .article-content {
        height: 65vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        font-family: 'Open Sans', 'Helvetica Neue', sans-serif;

    }

    .article-content p {
        text-align: justify;

    }

    .manage-title {
        color: #091429;
    }

    .btn-create {
        background-color: #0ABAB5;
        color: black;
        border-color: #0ABAB5 !important;
    }

    .a-create {
        color: white;
    }



    footer {
        background-color: white;
        padding: 25px;
        border-top: 2px solid rgba(209, 204, 204, 0.5);
        animation-duration: 3s;
        animation-delay: 3s;
    }

    .enter-div {
        text-align: center;
        color: white;
        font-weight: normal;
        font-style: normal;
    }

    .enter-div>h6 {
        font-weight: normal;
    }

    #enter-line {
        line-height: 65px;
    }

    #lancer {

        font-style: normal;
        font-weight: normal;
        font-family: 'Pacifico', cursive;
        font-size: 20px;
    }

    #btn-sub {
        background: #0ABAB5;
        border-radius: 4px;
        border-width: 0px;
        color: #FFFFFF;
    }

    #email-input {
        background: #FFFFFF;
        border: 1px solid #C4C4C4;
        box-sizing: border-box;
        border-radius: 2px;
        color: black;
        font-size: 0.8em;
        padding: 5px;
    }

    .btn {
        border: 1px solid #0ABAB5;
        color: #0ABAB5;
        box-sizing: border-box;
        border-radius: 6px;
    }

    .link {
        color: black;
    }

    .card {
        background: #FFFFFF;
        border: none;
        width: 350px !important;
        max-width: 350px !important;
        margin-right: auto;
        margin-left: auto;
    }

    ul {
        padding: 0% !important;
    }

    #btn-sub:hover {
        background-color: rgb(9, 155, 150);
    }

    #navbarNavAltMarkup a:hover {
        color: #0ABAB5 !important;
    }

    span.avoidwrap {
        display: inline-block;
    }
</style>
@endsection

@section('head')

<head>

    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/d4f2148171.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lancer Manage Project Description</title>
    <link rel="shortcut icon" href="https://res.cloudinary.com/ddu0ww15f/image/upload/c_scale,h_16/v1571841777/icons8-home-office-24_veiqea.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css">
</head>
@stop
@section('content')

<main>
    <nav class="pricing-header navbar pl-5 pr-5 navbar-expand-lg ">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('images/svg/logo-white.svg') }}" class="img img-responsive" height="30" width="auto">
        </a>
        <button class="navbar-toggler navbar-light bg-light" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="{{ url('/pricing') }}">Pricing <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="{{ url('/create_invoice') }}">Generate an Invoice</a>
                <a class="nav-item nav-link" href="{{ url('/guest/create/step1') }}">Track a Project</a>
                <a class="nav-item nav-link" href="{{ url('/login') }}">Sign in</a>
                <a class="nav-item nav-link" href="{{ url('/register') }}">Sign up</a>
            </div>
        </div>
    </nav>


    <!-- decription -->

    <article class="container article-content">
        <div class="article-case">
            <h1 class="h1 manage-title my-2">Manage Project Description</h1>
            <p class="">
                Lancer helps you create an invoice as well as manage your project.
                You can add collaborators, invite other team-players and assign tasks
                easily on the platform. New collaborators will receive email invites and
                notification of the project and their assigned tasks. Collaborators can also view
                other collaborators, view work progress and the various stages of
                the project.
            </p>
            <button type="button" class="btn-lg btn btn-create mt-3"><a href="https://dev.lancers.app/guest/create/step1" class="a-create">Create Project</a></button>

        </div>
    </article>
</main>
@stop



@section('footer')
<!-- footer  -->
<footer class="bg-white pt-4" data-aos="fade-down">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-2">
                <a href="/"><img src="https://res.cloudinary.com/nxcloud/image/upload/v1570984909/Lancer/Lancers_c40ozr.svg" alt="" class="img img-responsive mb-2" height="30" width="80px"></a>
                <ul class="list-unstyled">
                    <li><a class="text-dark" href="{{ url('/pricing') }}">Pricing</a></li>
                    <li><a class="text-dark" href="{{ url('/login') }}">Sign in</a></li>
                    <li><a class="text-dark" href="{{ url('/register') }}">Sign up</a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-2 mt-2">
                <h6>Useful Links</h6>
                <ul class="list-unstyled">
                    <li><a class="text-dark" href="{{ url('/dashboard') }}">Dashboard</a></li>
                    <li><a class="text-dark" href="{{ url('/projects') }}">Projects</a></li>
                    <li><a class="text-dark" href="{{ url('/invoices') }}">Invoices</a></li>
                    <li><a class="text-dark" href="{{ url('/projects') }}">Create a Project</a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 mt-2">
                <h6>Reach us</h6>
                <p class="text-dark small">
                    17 Akinsanya St, Ojodu 100213, Ikeja,
                    Lagos State,
                    Nigeria.
                </p>
                <h5 class="">
                    <a href="https://www.facebook.com/lancers.NG" class="text-dark mr-2"><i class="fab fa-facebook-square"></i></a>
                    <a href="https://www.twitter.com/lancersNG" class="text-dark"><i class="fab fa-twitter-square"></i></a>
                </h5>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 mt-2">
                <h6>Stay up to date</h6>
                <p class="text-dark small">
                    Get emails about our newest features and events you can visit. We promise not to spam.
                </p>
                <form class="form-inline">
                    <div class="form-group mb-2 mr-2">
                        <label for="staticEmail2" class="sr-only">Email</label>
                        <input type="email" class="form-control" id="staticEmail2" value="" placeholder="Email Address" required>
                    </div>
                    <button type="submit" class="btn btn-secondary mb-2" id="btn-sub">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
    </div>
    <div class="bg-white text-left py-2 mt-0">
        <div class="container">
            <p class="float-right">
                {{-- <a href="#">Back to top</a> --}}
                <a href="javascript:void(0)" onClick="window.scrollTo(0, 0)" class="btn btn-secondary mb-2" id="btn-sub">
                    <span>&#8593;</span></a>
            </p>
            <p>&copy; Lancers 2019.</p>
        </div>
    </div>
</footer>
<script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/5dc11896e4c2fa4b6bda03bf/default';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->
@stop