@extends('layouts.reception.dash_rec')

@section('content')
    <div class="content">
        <h2>Enregistrer un Courrier</h2>
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf

            <div>
                <label for="courrier_fichier">Sélectionner un fichier :</label>
                <input type="file" name="courrier_fichier" id="courrier_fichier" required>
            </div>

            <div>
                <label for="description">Description :</label>
                <input type="text" name="description" id="description" required>
            </div>

            <div>
                <label for="expediteur">Expéditeur :</label>
                <input type="text" name="expediteur" id="expediteur" required>
            </div>

            <div>
                <label for="date_reception">Date de réception :</label>
                <input type="date" name="date_reception" id="date_reception" required>
            </div>









            <button type="submit">Enregistrer le courrier</button>
        </form>
    </div>
@endsection
