@extends("layouts.master")

@section("principal")
    <form method="post" action="/cursos/{{$curso->id}}">
        @csrf
        <input type="text" name="nombre" value="{{$curso->nombre}}">
        <input type="submit" name="submit" value="Actualizar">
        @method("PUT")
    </form>
@endsection
