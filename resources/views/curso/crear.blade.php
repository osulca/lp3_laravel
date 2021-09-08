@extends("layouts.master")

@section("principal")
    <form method="post" action="/cursos">
        @csrf
        <input type="text" name="nombre" placeholder="ingrese curso" value="{{ old('nombre') }}">
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


