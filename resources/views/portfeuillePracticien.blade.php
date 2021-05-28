@include('layouts.app')


<h1><center><strong>Annuaire de profil des Praticiens</strong></h1>


@forelse($users as $user)


<div class="container rounded mt-5 bg-white p-md-5">
    <div class="h2 font-weight-bold"></div>
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Nom </th>
                <th scope="col">Prénom</th>
                <th scope="col">Profession Médicale</th>
                <th scope="col">Adresse</th>
                <th scope="col">Téléphone</th>
            </tr>
            </thead>
            <tbody>
            <tr class="bg-blue">
                <td class="pt-2">
                    <div class="pl-lg-5 pl-md-3 pl-1 name">{{$user->lastname}}</div>
                </td>
                <td class="pt-3 mt-1">{{$user->firstname}}</td>
                <td class="pt-3"><span class="fa fa-check pl-3">{{$user->complementarySpeciality}}</span></td>
                <td class="pt-3"><span class="fa fa-check pl-3">{{$user->address}}</span></td>
                <td class="pt-3"><span class="fa fa-ellipsis-v btn">{{$user->tel}}</span></td>
            </tr>
            <tr id="spacing-row">
                <td></td>

            </tbody>
        </table>
    </div>
</div>
@empty
@endforelse

<style>@import url('https://fonts.googleapis.com/css2?family=PT+Sans:wght@700&family=Poppins:wght@600&display=swap');

    * {
        box-sizing: border-box
    }

    body {
        background-color: wheat;
        font-family: 'Poppins', sans-serif;
        color: #666
    }

    .h2 {
        color: #444;
        font-family: 'PT Sans', sans-serif
    }

    thead {
        font-family: 'Poppins', sans-serif;
        font-weight: bolder;
        font-size: 20px;
        color: green;
    }

    img {
        width: 40px;
        height: 40px
    }

    .name {
        display: inline-block
    }

    .bg-blue {
        background-color: #EBF5FB;
        border-radius: 8px
    }

    .fa-check,
    .fa-minus {
        color: black;
    }

    .bg-blue:hover {
        background-color: #3e64ff;
        color: #eee;
        cursor: pointer
    }

    .bg-blue:hover .fa-check,
    .bg-blue:hover .fa-minus {
        background-color: #3e64ff;
        color: #eee
    }

    .table thead th,
    .table td {
        border: none
        color: green;
    }

    .table tbody td:first-child {
        border-bottom-left-radius: 10px;
        border-top-left-radius: 10px
    }

    .table tbody td:last-child {
        border-bottom-right-radius: 10px;
        border-top-right-radius: 10px
    }

    #spacing-row {
        height: 10px
    }

    @media(max-width:575px) {
        .container {
            width: 125%;
            padding: 20px 10px
        }
    }</style>




