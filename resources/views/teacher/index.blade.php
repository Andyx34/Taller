<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h4 class="heading">Informacion</h4>
    <table class="styles">
        <thead>
            <tr>
        <th>Id</th>
        <th>Nombre</td>
        <th>Telefono</th>
        <th>Direccion</th>
        <th>Ver mas</th>
        <th>Eliminar</th>
    </tr>
        </thead>
        <tbody>
        @foreach ($teacher as $teacher)
        <tr>
            <td>{{$teacher->id}}</td>
            <td>{{$teacher->name}}</td>
            <td>{{$teacher->phone}}</td>
            <td>{{$teacher->address}}</td>
            <td>
                <a href="{{route('teacher.show',$teacher->id)}}" class="btn-outline-info">Ver mas..</a>
            </td>

            <td>
                <form action="{{route('teacher.destroy',$teacher->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
</table>
</body>
</html>