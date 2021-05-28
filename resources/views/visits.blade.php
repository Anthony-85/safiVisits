@include('layouts.app')

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<div class="container">
    <div class="row header" style="text-align:center;color:green">
        <h3>Visites Effectuées</h3>
    </div>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
        <tr>
            <th>Date</th>
            <th>Practicien</th>
            <th>Ville</th>
            <th>Médicaments</th>
            <th>Echantillons Offerts</th>

        </tr>
        </thead>
        <tbody>
        <tr>

        @foreach($visits as $visit)

            <tr>

                <td>{{$visit->attendedDate}}</td>
                <td>{{$visit->name}}</td>
                <td>{{$visit->ville}}</td>
                <td>{{$visit->medicament}}</td>
                <td>{{$visit->echantilon}}</td>


            </tr>


        @endforeach

    </table>
</div>





<style> @import url(http://fonts.googleapis.com/css?family=Calibri:400,300,700);

    body {
        background-color: wheat;
        font-family: 'Calibri', sans-serif !important
    }

    .container {
        margin-top: 100px
    }

    .card {
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: black;
        background-clip: border-box;
        border: 0px solid transparent;
        border-radius: 0px
    }
    }

    .card-body {
        -webkit-box-flex: 1;
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        padding: 1.25rem
    }

    .card .card-title {
        position: relative;
        font-weight: 600;
        margin-bottom: 10px
    }

    .table {
        width: 100%;
        max-width: 100%;
        margin-bottom: 1rem;
        background-color: transparent
    }

    * {
        outline: none
    }

    .table th,
    .table thead th {
        font-weight: 500
    }

    .table thead th {
        vertical-align: bottom;
        border-bottom: 2px solid black
    }

    .table th {
        padding: 1rem;
        vertical-align: top;
        border-top: 1px solid black
    }

    .table th,
    .table thead th {
        font-weight: 500
    }

    th {
        text-align: inherit
    }</style>

