<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<h4 class="heading">Editar Informacion Foro</h4>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h4 class="heading">Editar Informacion Foro</h4>
    <form action="{{route('teacher.update', $teacher)}}"  method="POST">
    
        @csrf
        @method('put')
        <label for="name"> Name</label>
        <br>
        <input name="name" type="text" class="input-field" value="{{old('Name',$teacher->name) }}">
        <br>
        <label for="phone">Telefono</label>
        <br>
        <input name="phone" type="text"   value="{{old('phone',$teacher->phone)}}">
        <br>
        <label for="address">Direccion</label>
        <br>
        <input name="address" type="text"   value="{{old('address',$teacher->address)}}">
        <br>
        <br>
       
        <button  type="submit" class="btn-outline-add">Actualizar</button>
    </form>
</body>
</html>