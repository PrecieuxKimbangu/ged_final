@extends('layouts.sg.dash_sg')

@section('content')
    <div class="content">
    <h1>Créer un Compte Utilisateur</h1>
    <form action="" method="POST">
    @csrf
    <div>
        <label for="nom">Nom :</label>
        <input type="text" name="nom" required>
    </div>
    <div>
        <label for="email">Email :</label>
        <input type="email" name="email" required>
    </div>
    <div>
        <label for="mot_de_passe">Mot de passe :</label>
        <input type="password" name="mot_de_passe" required>
    </div>
    <div>
        <label for="role">Rôle :</label>
        <select name="role" required>
            <option value="admin">Admin</option>
            <option value="receptionniste">Réceptionniste</option>
            <option value="assistante">Assistante</option>
            <option value="charge_detude">Chargé d'étude</option>
        </select>
    </div>
    <button type="submit">Créer Utilisateur</button>
</form>

</div>
@endsection
