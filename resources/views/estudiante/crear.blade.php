@extends("layouts.master")

@section("principal")
    <h1>Registrar Estudiantes</h1>
    <form method="post" action="/estudiantes">
        @csrf
        <input type="text" name="nombres" placeholder="ingrese sus nombres" value="{{old("nombres")}}">
        <input type="text" name="apellidos" placeholder="ingrese sus apellidos" value="{{old("apellidos")}}">
        <input type="submit" name="submit" value="Guardar">
    </form>
    @if($errors->any())
        <div style="color:red">
            @foreach($errors->all() as $error)
                {{$error}}<br>
            @endforeach
        </div>
    @endif
@endsection
