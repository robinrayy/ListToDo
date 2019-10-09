<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>DESCRIPTION</th>
            <th>STATUS</th>
            <th>ACTION</th>
        </tr>
        @foreach($test as $item)
        <tr>
            <th>{{$item->id}}</th>
            <th>{{$item->description}}</th>
            <th>{{$item->status}}</th>
        </tr>
        @endforeach
    </table>
</body>
</html>