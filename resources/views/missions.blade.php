<!DOCTYPE html>
<html>

<head></head>

<body>
    <table>
        @foreach ($missions as $mission)
        <tr>
            <td>{{ $mission->id }}</td>
            <td>{{ $mission->reference }}</td>
            <td>{{ $mission->title }}</td>
            <td>{{ $mission->comment }}</td>
            <td>{{ $mission->organisation_id }}</td>
            <td>{{ $mission->organisation->name }}</td>
        </tr>
        @endforeach
    </table>
</body>

</html>