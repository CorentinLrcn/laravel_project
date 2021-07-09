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

        .addMission {
            background-color: lightblue;
            border: 2px solid black;
            border-radius: 5px;
            padding: 1% 2%;
            margin-top: 2.5%;
            width: 20%;
            margin-left: 40%;
        }

        .addMission:hover {
            transform: scale(1.15);
            transition: 400ms;
        }

        table {
            width: 95%;
            margin-left: 2.5%;
            border-collapse: collapse;
            text-align: center;
            margin-top: 2.5%;
        }

        th {
            background-color: lightblue;
            padding: 1.25% 0;
        }

        tr {
            border-bottom: 1px solid lightblue;
        }

        td {
            padding: 1.25% 0;
        }

        .deposit,
        .reference {
            width: 10%
        }

        .title,
        .comment {
            width: 15%;
        }

        .option {
            width: 50%;
        }

        table button {
            padding: 1.25% 2.5%;
            border-radius: 5px;
            background-color: white;
        }

        div button {
            padding: 1.25% 2.5%;
            border-radius: 5px;
            background-color: white;
        }

        .edit {
            border: 2px solid orange;
            color: orange;
            margin-left: 2.5%;
        }

        .edit:hover {
            background-color: orange;
            color: white;
            transition: 200ms;
        }

        .delete {
            border: 2px solid red;
            color: red;
            margin-left: 2.5%;
        }

        .delete:hover {
            background-color: red;
            color: white;
            transition: 200ms;
        }

        .listLignes,
        .print {
            border: 2px solid blue;
            color: blue;
        }

        .print {
            margin-left: 2.5%;
            margin-right: 1.25%;
        }

        .listLignes:hover,
        .print:hover {
            background-color: blue;
            color: white;
            transition: 200ms;
        }

        .modal {
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

        .modal-content {
            margin: 15% auto;
            padding: 20px;
            width: 60%;
            background-color: white;
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

        .devisBtn,
        .depositBtn,
        .soldeBtn,
        .invoiceBtn {
            padding: 1.25% 2.5%;
            margin-left: 2.5%;
            border: 2px solid black;
            color: black;
        }

        .devisBtn:hover,
        .depositBtn:hover,
        .soldeBtn:hover,
        .invoiceBtn:hover {
            background-color: black;
            color: white;
            transition: 200ms;
        }
    </style>
</head>

<body>
    <button class="goback" onclick="window.location.href='/organisations'">Retour</button>
    <br>
    <p class="page-title">LISTE DES MISSIONS</p>
    <button class="addMission" onclick="window.location.href = '/organisations/ajoutMissions/{{$organisation_id}}'">Ajout de missions</button>

    <table>
        <tr>
            <th class="reference">Référence</th>
            <th class="title">Titre de la mission</th>
            <th class="comment">Commentaire</th>
            <th class="deposit">Accompte</th>
            <th class="option">Options</th>
        </tr>
        @foreach ($missionsForId as $mission)
        <tr>
            <td class="reference">{{ $mission->reference }}</td>
            <td class="title">{{ $mission->title }}</td>
            <td class="comment">{{ $mission->comment }}</td>
            <td class="deposit">{{ $mission->deposit }} %</td>
            <td class="option">
                <!--a href="/organisations/missions/ajoutLigneMission/{{ $mission->id }}" >Ajouter ligne de mission</a-->
                <button class="listLignes" onclick="window.location.href='/organisations/missions/lignesMission/{{ $mission->id }}'">Voir lignes de missions</button>
                <button class="devisBtn" onclick="window.location.href='/organisations/missions/imprimerDevis/{{ $mission->id }}'">Devis</button>
                <button class="depositBtn" onclick="window.location.href='/organisations/missions/imprimerFactureAccompte/{{ $mission->id }}'">Accompte</button>
                <button class="soldeBtn" onclick="window.location.href='/organisations/missions/imprimerFactureSolde/{{ $mission->id }}'">Solde</button>
                <button class="invoiceBtn" onclick="window.location.href='/organisations/missions/imprimerFacture/{{ $mission->id }}'">Facture</button>
                <button class="edit" onclick="window.location.href='/organisations/modifierMission/{{ $mission->id }}'">Éditer</button>
                <button class="delete" onclick="window.location.href='/organisations/supprimerMission/{{ $mission->id }}'">Supprimer</button>
            </td>
        </tr>
        @endforeach
    </table>
</body>

</html>