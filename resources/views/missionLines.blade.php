<!DOCTYPE html>
<html>

<head></head>

<body>
    <div>
        <table>
            @foreach ($missionLines as $missionLine)
            <tr>
                <td>{{ $missionLine->id }}</td>
                <td>{{ $missionLine->quantity }}</td>
                <td>{{ $missionLine->title }}</td>
                <td>{{ $missionLine->price }}</td>
                <td>{{ $missionLine->unity }}</td>
                <td>{{ $missionLine->mission_id }}</td>
                <td>{{ $missionLine->mission->title }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</body>

</html>