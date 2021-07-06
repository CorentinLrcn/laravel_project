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

        .addOrga {
            background-color: lightblue;
            border: 2px solid black;
            border-radius: 5px;
            padding: 1% 2%;
            margin-top: 2.5%;
            width: 20%;
            margin-left: 40%;
        }

        .addOrga:hover {
            transform: scale(1.15);
            transition: 400ms;
        }

        table {
            margin-top: 2.5%;
            margin-left: 5%;
            width: 90%;
            text-align: center;
            border-collapse: collapse;
        }

        th {
            background-color: lightblue;
            padding: 1.25% 0;
        }

        tr {
            border-bottom: solid 1px lightblue;
        }

        td {
            padding: 1.25% 0;
        }

        .orga {
            width: 15%;
        }

        .slug {
            width: 20%;
        }

        .address {
            width: 20%;
        }

        .type {
            width: 15%;
        }

        .option {
            width: 30%;
        }

        table button {
            padding: 2.5% 5%;
            border-radius: 5px;
            background-color: white;
        }

        .edit {
            border: 2px solid orange;
            color: orange;
        }

        .edit:hover {
            background-color: orange;
            color: white;
            transition: 200ms;
        }

        .delete {
            border: 2px solid red;
            margin-left: 5%;
            margin-right: 5%;
            color: red;
        }

        .delete:hover {
            background-color: red;
            color: white;
            transition: 200ms;
        }

        .listMission {
            border: 2px solid blue;
            color: blue;
        }

        .listMission:hover {
            background-color: blue;
            color: white;
            transition: 200ms;
        }
    </style>
</head>

<body>
    <p>LISTE DES ORGANISATIONS</p>
    <button class="addOrga" onclick="window.location.href = '/ajoutOrganisations'">Ajouter organisation</button>
    <table>
        <tr>
            <th class="Orga">Organisation</th>
            <th class="slug">SLUG</th>
            <th class="address">Adresse de l'organisation</th>
            <th class="type">Type d'organisation</th>
            <th class="option">Options</th>
        </tr>
        @foreach ($organisations as $organisation)
        <tr>
            <td class="Orga">{{ $organisation->name }}</td>
            <td class="slug">{{ $organisation->slug }}</td>
            <td class="address">{{ $organisation->address }}</td>
            <td class="type">{{ $organisation->type }}</td>
            <td class="option">
                <button class="edit" onclick="">Éditer</button>
                <button class="delete" onclick="">Supprimer</button>
                <!--button class="" onclick="window.location.href = '/organisations/ajoutMissions/{{$organisation->id}}'">Ajout de missions</button-->
                <button class="listMission" onclick="window.location.href = '/organisations/missions/{{$organisation->id}}'">Voir missions</button>
            </td>
        </tr>
        @endforeach
    </table>
</body>

</html>