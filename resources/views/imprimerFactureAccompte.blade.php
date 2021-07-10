<!DOCTYPE html>
<html>

<head>
    <style>
        .encart-utilisateur {
            margin-left: 5%;
            width: 25%;
            padding-top: 2.5%;
            float: left;
        }

        .encart-devis {
            margin-left: 70%;
            width: 20%;
            border: 1px solid grey;
            padding: 2.5%;
            margin-bottom: 7.5%;
            background-color: lightblue
        }

        .info-client {
            margin-left: 60%;
            margin-bottom: 5%
        }

        .detail-mission {
            margin-left: 2.5%;
            font-size: 25px;
            font-weight: bold
        }

        .detail-mission p {
            font-size: 20px;
            font-weight: normal;
        }

        .table {
            margin-left: 2.5%;
            width: 95%;
            border: solid 1px lightblue;
            border-collapse: collapse;
            margin-top: 5%;
        }

        .table th {
            background-color: lightblue;
        }

        .table td {
            text-align: center;
            border: 1px solid lightblue;
            width: 20%;
        }

        .totaux {
            margin-left: 2.5%;
            width: 95%;
            margin-top: 5%;
        }

        .totaux td {
            text-align: right;
            width: 20%;
            font-weight: bold;
        }

        .fin-page {
            margin: 5% 0 0 2.5%;
        }
    </style>
</head>

<body>
    <div class="encart-utilisateur">
        M. / Mme.
        <br>
        Prestataire indépendant
    </div>
    <div class="encart-devis">
        FACTURE ACCOMPTE {{ $missionInfo->reference }}
        <br>
        Date: {{ $missionInfo->created_at }}
    </div>
    <div class="info-client">
        {{ $organisationInfo->name }}
        <br>
        {{ $organisationInfo->address }}
        <br>
        {{ $organisationInfo->email }} - {{ $organisationInfo->tel }}
    </div>
    <div class="detail-mission">
        {{ $missionInfo->title }}
        <p>{{ $missionInfo->comment }}</p>
    </div>
    <table class="table">
        <tr>
            <th>Désignation</th>
            <th>Quantité</th>
            <th>Unité</th>
            <th>Prix unitaire</th>
            <th>Prix total</th>
        </tr>
        @foreach ($missionLinesInfos as $MissionLineInfo)
        <tr>
            <td>{{ $MissionLineInfo->title }}</td>
            <td>{{ $MissionLineInfo->quantity }}</td>
            <td>{{ $MissionLineInfo->unity }}</td>
            <td>{{ $MissionLineInfo->price }} EUR</td>
            <td>{{ $MissionLineInfo->price * $MissionLineInfo->quantity }} EUR</td>
        </tr>
        @endforeach
    </table>
    <table class="totaux">
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>Total accompte</td>
            <td>{{ $deposit }} EUR</td>
        </tr>
    </table>
    <div class="fin-page">
        Date de fin de mission : {{ $missionInfo->ended_at }}
        <br>
        Condition de paiement :
    </div>
</body>

</html>