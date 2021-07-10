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

        textarea {
            width: 100%;
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
    <button class="goback" onclick="window.location.href='/organisations/missions/{{ $id }}'">Retour</button>
    <br>
    <p>AJOUT D'UNE MISSION</p>

    <form action="/organisations/ajoutMissions/{{$id}}" method="post">

        {{ csrf_field() }}

        <label for="title">Titre mission</label>
        <br>
        <input type="text" id="title" name="title" placeholder="intitulé de mission" />
        <br>
        <br>
        <label for="reference">Matricule organisation</label>
        <br>
        <input type="text" id="reference" name="reference" placeholder="Reference client" />
        <br>
        <br>
        <label for="comment">Commentaire</label>
        <br>
        <textarea name="comment"></textarea>
        <br>
        <br>
        <label for="deposit">Accompte de :</label>
        <br>
        <input type="number" id="deposit" name="deposit" placeholder="Montant accompte" />
        <br>
        <br>
        <label for="ended_at">Fini le :</label>
        <br>
        <input type="date" id="ended_at" name="ended_at" placeholder="date de fin" />
        <br>
        <br>
        <input type="submit" value="Ajouter" />
    </form>
</body>

</html>