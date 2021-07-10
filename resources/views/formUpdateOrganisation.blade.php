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
    <button class="goback" onclick="window.location.href='/organisations'">Retour</button>
    <br>
    <p>MODIFICATION D'UNE ORGANISATION</p>

    <form action="/modifierOrganisation/{{ $organisation->id }}" method="post">

        {{ csrf_field() }}

        <label for="name">Nom organisation</label>
        <br>
        <input type="text" id="name" name="name" placeholder="Votre nom" value={{ $organisation->name }} />
        <br>
        <br>
        <label for="slug">Slug organisation</label>
        <br>
        <input type="text" id="slug" name="slug" placeholder="Votre slug" value={{ $organisation->slug }} />
        <br>
        <br>
        <label for="email">Email organisation</label>
        <br>
        <input type="email" id="email" name="email" placeholder="Votre email" value={{ $organisation->email }} />
        <br>
        <br>
        <label for="tel">Tel organisation</label>
        <br>
        <input type="tel" id="tel" name="tel" placeholder="Votre tel" value={{ $organisation->tel }} />
        <br>
        <br>
        <label for="address">Adresse organisation</label>
        <br>
        <input type="text" id="address" name="address" placeholder="Votre adresse" value={{ $organisation->address }} />
        <br>
        <br>
        <label for="type">Type organisation</label>
        <br>
        <select id="type" name="type" selected={{ $organisation->type }}>
            <option value="ecole">École</option>
            <option value="client">Client</option>
            <option value="gouvernement">Gouvernement</option>
        </select>
        <br>
        <br>
        <input type="submit" value="Modifier" />
    </form>
</body>

</html>