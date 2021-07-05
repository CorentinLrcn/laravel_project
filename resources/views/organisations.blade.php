<!DOCTYPE html>
<html>

<head></head>

<body>
    <table>
        @foreach ($organisations as $organisation)
        <tr>
            <td>{{ $organisation->id }}</td>
            <td>{{ $organisation->name }}</td>
            <td>{{ $organisation->slug }}</td>
            <td>{{ $organisation->address }}</td>
            <td>{{ $organisation->type }}</td>
        </tr>
        @endforeach
    </table>
</body>

</html>