<!DOCTYPE html>
<html>

<head>
    <title>Tables</title>
</head>

<body>
    <h2>Table 1</h2>
    <table>
        <thead>
            <tr>
                <th>Index #</th>
                <th>Value</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($table1Data as $row)
            <tr>
                <td>{{ $row->index }}</td>
                <td>{{ $row->value }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <h2>Table 2</h2>
    <table>
        <thead>
            <tr>
                <th>Category</th>
                <th>Value</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Alpha</td>
                <td>{{ $alpha }}</td>
            </tr>
            <tr>
                <td>Beta</td>
                <td>{{ $beta }}</td>
            </tr>
            <tr>
                <td>Charlie</td>
                <td>{{ $charlie }}</td>
            </tr>
        </tbody>
    </table>
</body>

</html>