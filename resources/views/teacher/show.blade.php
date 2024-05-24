<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h4 class="heading">Detalles de la Informacion</h4>
    <table class="styles">
      <thead>
         <tr>
             <th>Id</th>
             <th>Nombre</th>
             <th>Telefono</th>
             <th>Direccion</th>
             <th>Editar</th>
         </tr>
      </thead>
      <tbody>
         @if (isset($teacher))
             <tr>
                <td>{{$teacher->id}}</td>
                <td>{{$teacher->name}}</td>
                <td>{{$teacher->phone}}</td>
                <td>{{$teacher->address}}</td>
                 <td><a href="{{route('teacher.edit',$teacher->id)}}" class="btn-outline-info">Editar</a></td>
             </tr>
                 
             @else
                 
             @endif
      </tbody>
     </table>
</body>
</html>