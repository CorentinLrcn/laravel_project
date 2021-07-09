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
    </style>
</head>

<body>
    <p>MODIFICATION D'UNE LIGNE DE MISSION</p>

    <form action="/organisations/missions/modifierLigneMission/{{ $missionLine->id }}" method="post">

        {{ csrf_field() }}

        <label for="title">Titre ligne de mission :</label>
        <br>
        <input type="text" id="title" name="title" placeholder="intitulé de ligne de mission" value={{ $missionLine->title }} />
        <br>
        <br>
        <label for="quantity">Quantité :</label>
        <br>
        <input type="number" id="quantity" name="quantity" placeholder="Quantité" value={{ $missionLine->quantity }} />
        <br>
        <br>
        <label for="price">Montant de :</label>
        <br>
        <input type="number" id="price" name="price" placeholder="Montant" value={{ $missionLine->price }} />
        <br>
        <br>
        <label for="unity">Unité de mesure :</label>
        <br>
        <select id="unity" name="unity" value={{ $missionLine->unity }} >
            <option value="Heure(s)" >Heure(s)</option>
            <option value="Seance(s)" >Seance(s)</option>
            <option value="Jour(s)" >Jour(s)</option>
            <option value="Semaine(s)" >Semaine(s)</option>
            <option value="Mois" >Mois</option>
        </select>
        <br>
        <br>
        <input type="submit" value="Modifier" />
    </form>
</body>

</html>