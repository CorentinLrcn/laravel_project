<!DOCTYPE html>
<html>

<head></head>

<body>
    <div>
        <table>
            @foreach ($contributions as $contribution)
            <tr>
                <td>{{ $contribution->id }}</td>
                <td>{{ $contribution->price }}</td>
                <td>{{ $contribution->title }}</td>
                <td>{{ $contribution->comment }}</td>
                <td>{{ $contribution->organisation_id }}</td>
                <td>{{ $contribution->organisation->name }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</body>

</html>