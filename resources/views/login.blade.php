@section('contenu')
    @include('layouts.app')

    <form action="{{ route('login.api') }}" method="post" class="section">
        @csrf



   <center> <div  class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <form class="box">
                        <h1>Connexion</h1>

                        <p class="text-muted"> Veuillez saisir les informations</p>
                        <div class="inputBox">
                            <input id="uname" type="text" name="login" placeholder="Email">
                            <br>
                            <br>
                            <input id="pass" type="password" name="password" placeholder="Mot de passe">

                        </div>
                        <a class="forgot text-muted" href="#">Mot de passe oublié ?</a>
                        <input type="submit"  value="Enregister" >

                    </form>
                </div>
            </div>
        </div>
    </div>





    <style>

        .container{

            border:8px;
            margin: auto;
            border-radius: 50px;

            font-weight: bolder;
            font-size: 20px;
            color: green;


        }
    </style>




