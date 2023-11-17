@extends('template')
@section('title','mostrarProductos')
@section('content')
<form method="get" action="{{url('/producto')}}">
    <input type="text" name="nombre" id="nombre">
    <input type="submit" value="Buscar">
</form>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Codigo</th>
        <th scope="col">Nombre</th>
        <th scope="col">Precio</th>
        <th scope="col">Cantidad</th>
        <th scope="col">Bodega</th>
      </tr>
    </thead>
    
    <tbody>
        @foreach ($arrays as $item)
        <tr>
            <th scope="row">{{$item['codigo']}}</th>
            <td>{{$item['nombre']}}</td>
            <td>{{$item['precio']}}</td>
            <td>{{$item['cantidad']}}</td>
            <td>{{$item['id_bod']}}</td>
            <td><a href="{{ url('producto/'. $item['codigo']) .'/edit' }}">Editar</a></td>
          </tr>               
        @endforeach
 
    </tbody>
  </table>

@endsection