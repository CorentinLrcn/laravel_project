<!DOCTYPE html>
<html>

<head>
    <style>
        * {
            font-family: 'Trebuchet MS';
        }

        .page-title {
            font-size: xx-large;
            font-weight: bold;
            color: lightblue;
            text-align: center;
            margin-top: 5%;
        }

        .goback {
            background-color: lightblue;
            border: 2px solid black;
            border-radius: 5px;
            padding: 1% 2%;
            margin-top: 2.5%;
            width: 10%;
            float: right;
        }

        .goback:hover {
            background-color: black;
            color: white;
            transition: 200ms;
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

        .editing-modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .editing-modal-content {
            margin: 10% auto;
            padding: 20px;
            width: 60%;
            background-color: lightblue;
            border-radius: 10px;
        }

        .modal-header {
            width: 100%;
            text-align: center;
            font-size: xx-large;
            font-weight: bold;
        }

        .closeBtn {
            color: #aaa;
            float: right;
            font-size: 15px;
            font-weight: bold;
            border: none;
            background-color: rgba(0, 0, 0, 0);
        }

        .closeBtn:hover,
        .closeBtn:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        form {
            width: 50%;
            padding: 2.5%;
            border-radius: 10px;
            margin-left: 25%;
            margin-top: 5%;
        }

        input {
            width: 100%;
            text-align: center;
            padding-top: 1.25%;
            padding-bottom: 1.25%;
        }

        select {
            width: 100%;
            text-align: center;
            padding-top: 1.25%;
            padding-bottom: 1.25%;
        }
    </style>
</head>

<body>
    <button class="goback" onclick="window.location.href='/organisations/missions/{{ $organisation_id }}'">Retour</button>
    <br>
    <p class="page-title">LISTE DES LIGNES MISSIONS</p>

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
                <button class="edit" onclick="document.location.href='/organisations/missions/modifierLigneMission/{{ $missionLine->id }}'">Éditer</button>
                <button class="delete" onclick="document.location.href='/organisations/missions/supprimerLigneMission/{{ $missionLine->id }}'">Supprimer</button>
            </td>
        </tr>
        @endforeach
    </table>
</body>

</html>