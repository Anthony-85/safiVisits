<!-- CSS only -->


<!-- CSS only -->


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


<nav class="navbar navbar-expand-lg navbar-red navbar-dark">
    <div class="wrapper"> </div>
    <div class="container-fluid all-show"> <a class="navbar-brand" href="#">SAFI
            <i class="fa fa-codepen"></i></a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                <li class="nav-item"> <a class="nav-link active" aria-current="page" href="{{ url('/login') }}">Connexion</a> </li>
                <li class="nav-item"> <a class="nav-link" href="{{ url('/visits') }}">Visites</a> </li>
                <li class="nav-item"> <a class="nav-link" href="{{ url('/portfeuillePracticien') }}">Portefeuille des Praticiens</a> </li>
                <li class="nav-item"> <a class="nav-link" href="{{ url('/complementaryActivities') }}">Programmer une Activitée Complémentaire</a> </li>
                <li class="nav-item"> <a class="nav-link" href="{{ url('/profil') }}">Mon Profil</a> </li>
                <li class="nav-item"> <a class="nav-link" href="#"><i class="fa fa-search"></i></a> </li>
            </ul>

        </div>
    </div>
</nav>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Allerta+Stencil&display=swap');

    body {
        background-color: #eee
    }

    .navbar-nav>li>a {
        text-transform: uppercase;
        font-size: 12px;
        margin-right: 20px;
        color: #fff
    }

    .navbar-toggler {
        padding: .20rem .50rem;
        font-size: 1.25rem;
        line-height: 1;
        background-color: transparent;
        border: 1px solid white
    }

    .nav-link {
        color: #fff !important
    }

    .wrapper {
        width: 100%;
        position: absolute;
        height: 100%;
        background-color: #000;
        clip-path: polygon(81% 0, 100% 0, 100% 50%, 100% 100%, 71% 100%);
        transition: 1s all
    }

    .navbar-brand {
        color: #ffF;
        font-family: 'Poppins', sans-serif;
        margin-bottom: 4px;
        font-size: 27px
    }

    .navbar-red:hover .wrapper {
        clip-path: polygon(81% 0, 100% 0, 100% 50%, 100% 100%, 65% 100%)
    }

    .navbar-brand:hover {
        color: #fff
    }

    .navbar-red {
        background-color: green;
        color: #fff
    }

    .all-show {
        z-index: 10
    }
</style>
<style>body {
        background-color: #f9f9fa
    }

    .padding {
        padding: 3rem !important
    }

    .user-card-full {
        overflow: hidden
    }

    .card {
        border-radius: 5px;
        -webkit-box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
        box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
        border: none;
        margin-bottom: 30px
    }

    .m-r-0 {
        margin-right: 0px
    }

    .m-l-0 {
        margin-left: 0px
    }

    .user-card-full .user-profile {
        border-radius: 5px 0 0 5px
    }

    .bg-c-lite-green {
        background: white;
        background: green
    }

    .user-profile {
        padding: 20px 0
    }

    .card-block {
        padding: 1.25rem
    }

    .m-b-25 {
        margin-bottom: 25px
    }

    .img-radius {
        border-radius: 5px
    }

    h6 {
        font-size: 14px
    }

    .card .card-block p {
        line-height: 25px
    }

    @media only screen and (min-width: 1400px) {
        p {
            font-size: 20px
        }
    }

    .card-block {
        padding: 1.25rem
    }

    .b-b-default {
        border-bottom: 1px solid #e0e0e0
    }

    .m-b-20 {
        margin-bottom: 20px
    }

    .p-b-5 {
        padding-bottom: 5px !important
    }

    .card .card-block p {
        line-height: 50px
    }

    .m-b-10 {
        margin-bottom: 10px
    }

    .text-muted {
        color: #919aa3 !important
    }

    .b-b-default {
        border-bottom: 1px solid #e0e0e0
    }

    .f-w-600 {
        font-weight: 600
    }

    .m-b-20 {
        margin-bottom: 20px
    }

    .m-t-40 {
        margin-top: 20px
    }

    .p-b-5 {
        padding-bottom: 5px !important
    }

    .m-b-10 {
        margin-bottom: 10px
    }

    .m-t-40 {
        margin-top: 20px
    }

    .user-card-full .social-link li {
        display: inline-block
    }

    .user-card-full .social-link li a {
        font-size: 40px;
        margin: 0 20px 0 0;
        -webkit-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out
    }</style>

<style>
    body {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
        background: wheat;
    }

    .box {
        width: 500px;
        padding: 40px;
        position: absolute;
        top: 50%;
        left: 50%;
        background: white;
    ;
        text-align: center;
        transition: 0.25s;
        margin-top: 100px
    }

    .box input[type="text"],
    .box input[type="password"] {
        border: 0;
        background: none;
        display: block;
        margin: 20px auto;
        text-align: center;
        border: 2px solid green;
        padding: 10px 10px;
        width: 250px;
        outline: none;
        color: green;
        border-radius: 24px;
        transition: 0.25s
    }

    .box h1 {
        color: green;
        text-transform: uppercase;
        font-weight: 500
    }

    .box input[type="text"]:focus,
    .box input[type="password"]:focus {
        width: 300px;
        border-color: #2ecc71
    }

    .box input[type="submit"] {
        border: 0;
        background: none;
        display: block;
        margin: 20px auto;
        text-align: center;
        border: 2px solid #2ecc71;
        padding: 14px 40px;
        outline: none;
        color: green;
        border-radius: 24px;
        transition: 0.25s;
        cursor: pointer
    }

    .box input[type="submit"]:hover {
        background: #2ecc71
    }

    .forgot {
        text-decoration: underline
    }

    ul.social-network {
        list-style: none;
        display: inline;
        margin-left: 0 !important;
        padding: 0
    }

    ul.social-network li {
        display: inline;
        margin: 0 5px
    }

    .social-network a.icoFacebook:hover {
        background-color: #3B5998
    }

    .social-network a.icoTwitter:hover {
        background-color: #33ccff
    }

    .social-network a.icoGoogle:hover {
        background-color: #BD3518
    }

    .social-network a.icoFacebook:hover i,
    .social-network a.icoTwitter:hover i,
    .social-network a.icoGoogle:hover i {
        color: #fff
    }

    a.socialIcon:hover,
    .socialHoverClass {
        color: #44BCDD
    }

    .social-circle li a {
        display: inline-block;
        position: relative;
        margin: 0 auto 0 auto;
        border-radius: 50%;
        text-align: center;
        width: 50px;
        height: 50px;
        font-size: 20px
    }

    .social-circle li i {
        margin: 0;
        line-height: 50px;
        text-align: center
    }

    .social-circle li a:hover i,
    .triggeredHover {
        transform: rotate(360deg);
        transition: all 0.2s
    }

    .social-circle i {
        color: #fff;
        transition: all 0.8s;
        transition: all 0.8s
    }
</style>

