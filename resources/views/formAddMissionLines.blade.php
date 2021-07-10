<!DOCTYPE html>
<html>

<head>
    <style>
        * {
            font-family: 'Trebuchet MS';
            align-items: center;
        }

        p {
            font-size: xx-large;
            font-weight: bold;
            color: lightblue;
            text-align: center;
            margin-top: 5%;
        }

        form {
            background-color: lightblue;
            width: 20%;
            padding: 2.5%;
            border-radius: 10px;
            margin-left: 37.5%;
            margin-top: 5%;
        }

        input {
            width: 100%;
            text-align: center;
        }

        select {
            width: 100%;
            text-align: center;
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
    </style>
</head>

<body>
    <button class="goback" onclick="window.location.href='/organisations/missions/lignesMission/{{ $id }}'">Retour</button>
    <br>
    <p>AJOUT D'UNE LIGNE DE MISSION</p>

    <form action="/organisations/missions/ajoutLigneMission/{{$id}}" method="post">

        {{ csrf_field() }}

        <label for="title">Titre ligne de mission :</label>
        <br>
        <input type="text" id="title" name="title" placeholder="intitulé de ligne de mission" />
        <br>
        <br>
        <label for="quantity">Quantité :</label>
        <br>
        <input type="number" id="quantity" name="quantity" placeholder="Quantité" />
        <br>
        <br>
        <label for="price">Montant de :</label>
        <br>
        <input type="number" id="price" name="price" placeholder="Montant" />
        <br>
        <br>
        <label for="unity">Unité de mesure :</label>
        <br>
        <select id="unity" name="unity">
            <option value="Heure(s)">Heure(s)</option>
            <option value="Seance(s)">Seance(s)</option>
            <option value="Jour(s)">Jour(s)</option>
            <option value="Semaine(s)">Semaine(s)</option>
            <option value="Mois">Mois</option>
        </select>
        <br>
        <br>
        <input type="submit" value="Ajouter" />
    </form>
</body>

</html>