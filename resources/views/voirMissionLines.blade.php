<!DOCTYPE html>
<html>

<head>
    <style>
        * {
            font-family: 'Trebuchet MS';
        }

        p {
            font-size: xx-large;
            font-weight: bold;
            color: lightblue;
            text-align: center;
            margin-top: 5%;
        }

        .addLignes {
            background-color: lightblue;
            border: 2px solid black;
            border-radius: 5px;
            padding: 1% 2%;
            margin-top: 2.5%;
            width: 20%;
            margin-left: 40%;
        }

        .addLignes:hover {
            transform: scale(1.15);
            transition: 400ms;
        }

        table {
            text-align: center;
            border-collapse: collapse;
            width: 60%;
            margin-top: 2.5%;
            margin-left: 20%;
        }

        tr {
            border-bottom: 1px solid lightblue;
        }

        th {
            background-color: lightblue;
            padding: 1.25% 0;
        }

        td {
            padding: 1.25% 0;
            width: 20%;
        }

        table button {
            padding: 3.75% 7.5%;
            border-radius: 5px;
            background-color: white;
        }

        .edit {
            border: 2px solid orange;
            color: orange;
            margin-right: 5%;
        }

        .edit:hover {
            background-color: orange;
            color: white;
            transition: 200ms;
        }

        .delete {
            border: 2px solid red;
            color: red;
        }

        .delete:hover {
            background-color: red;
            color: white;
            transition: 200ms;
        }
    </style>
</head>

<body>
    <p class="page-title" >LISTE DES LIGNES MISSIONS</p>
    <button class="addLignes" onclick="window.location.href='/organisations/missions/ajoutLigneMission/{{ $mission_id }}'">Ajouter lignes de missions</button>
    <table>
        <tr>
            <th>Désignation</th>
            <th>Quantité</th>
            <th>Unité de mesure</th>
            <th>Prix unitaire</th>
            <th>Options</th>
        </tr>
        @foreach ($missionLines as $missionLine)
        <tr>
            <td>{{ $missionLine->title }}</td>
            <td>{{ $missionLine->quantity }}</td>
            <td>{{ $missionLine->unity }}</td>
            <td>{{ $missionLine->price }} EUR</td>
            <td>
                <button class="edit">Éditer</button>
                <button class="delete">Supprimer</button>
            </td>
        </tr>
        @endforeach
    </table>
    <div>
    </div>
</body>

</html>