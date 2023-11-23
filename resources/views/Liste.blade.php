<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Liste des Chambres</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 50px;
        }

        h2 {
            color: #007bff;
        }

        .table {
            background-color: #ffffff;
        }

        .table th, .table td {
            border: 1px solid #dee2e6;
        }

        .table thead th {
            background-color: #007bff;
            color: #ffffff;
            border-color: #007bff;
        }

        .btn {
            margin-right: 5px;
        }

        .alert {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    @if(session('sms'))
        <div class="alert alert-success">
            {{ session('sms') }}
        </div>
    @endif

    <h2>Liste des Chambres</h2>
    <div><br><br>
    <a href="/Inscription"  class="btn btn-danger"> Ajouter des chambres</a>
</div><br><br>

    <table class="table table-striped">
        <thead>
        <tr>
            <th></th>
            <th>Nom</th>
            <th>Description</th>
            <th>Nom de la Chambre</th>
            <th>Prix</th>
            <th>Nombre de Lits</th>
            <th>Nombre d'Enfants Maximum</th>
            <th>Nombre d'Adultes Maximum</th>
            <th>Attributs</th>
            <th>Statut</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($list as $chambre)
            <tr>
                <td>{{ $chambre->id }}</td>
                <td>{{ $chambre->nom }}</td>
                <td>{{ $chambre->description }}</td>
                <td>{{ $chambre->nom_ch }}</td>
                <td>{{ $chambre->prix }}</td>
                <td>{{ $chambre->lits }}</td>
                <td>{{ $chambre->enfants }}</td>
                <td>{{ $chambre->adultes }}</td>
                <td>{{ $chambre->attributs }}</td>
                <td>{{ $chambre->statut }}</td>
                <td>
                    <a href="/update-ch/{{ $chambre->id }}" class="btn btn-primary">Modifier</a>
                    <form action="/delete-ch/{{ $chambre->id }}" method="post" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

</body>
</html>
