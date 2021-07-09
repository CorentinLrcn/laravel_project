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
    </style>
</head>

<body>
    <p>MODIFICATION D'UNE MISSION</p>

    <form action="/organisations/modifierMission/{{ $mission->id }}" method="post">

        {{ csrf_field() }}

        <label for="title">Titre mission</label>
        <br>
        <input type="text" id="title" name="title" placeholder="intitulé de mission" value={{ $mission->title }} />
        <br>
        <br>
        <label for="reference">Matricule organisation</label>
        <br>
        <input type="text" id="reference" name="reference" placeholder="Reference client" value={{ $mission->reference }} />
        <br>
        <br>
        <label for="comment">Commentaire</label>
        <br>
        <textarea name="comment" value={{ $mission->comment }} ></textarea>
        <br>
        <br>
        <label for="deposit">Accompte de :</label>
        <br>
        <input type="number" id="deposit" name="deposit" placeholder="Montant accompte" value={{ $mission->deposit }} />
        <br>
        <br>
        <label for="ended_at">Fini le :</label>
        <br>
        <input type="date" id="ended_at" name="ended_at" placeholder="date de fin" value={{ $mission->ended_at }} />
        <br>
        <br>
        <input type="submit" value="Modifier" />
    </form>
</body>

</html>