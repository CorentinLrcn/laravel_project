<!DOCTYPE html>
<html>

<head></head>

<body>
    <div>
        <table>
            @foreach ($transactions as $transaction)
            <tr>
                <td>{{ $transaction->id }}</td>
                <td>{{ $transaction->price }}</td>
                <td>{{ $transaction->sourceable_type }}</td>
                <td>{{ $transaction->sourceable_id }}</td>
                <td>{{ $transaction->sourceable->title }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</body>

</html>