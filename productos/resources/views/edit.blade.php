@extends('template')
@section('title','ActualizarCantidadf')
@section('content')
<form method="POST" action="{{url('producto/'.$dormir['codigo'])}}">
    @method("PUT")
    @csrf
    <input type="text" value="{{$dormir['codigo']}}" name="codigo" id="codigo">
    <input type="text" value="{{$dormir['id_bod']}}" name="bodega" id="bodega">
    <input type="number" value="{{$dormir['cantidad']}}" name="cantidad" id="cantidad">
    <input type="submit" value="Actualizar">
</form>
@endsection
