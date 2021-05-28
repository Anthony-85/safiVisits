@include('layouts.app')


<h1><center><strong>  Créer Une Reunion</strong></h1>
<br>
<br>
<br>

<form action ="/complementaryActivities" method="post">
    @csrf
    <center><input type="text" name="addtask" placeholder="Lieu">
    <br>
    <br>
    <input type="text" name="addbudget" placeholder="Budget">
    <br>
    <br>
    <input type="date" name="addDate" placeholder="Date">
    <br>
    <br>
    <input type="submit" class="btn btn-warning" value="Ajouter"></center>
</form>







