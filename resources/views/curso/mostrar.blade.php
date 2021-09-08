@extends("layouts.master")

@section("principal")
    <h1>{{$titulo}}</h1>
    <table border="1" cellspacing="0">
        <tr>
            <th>id</th>
            <th>nombre curso</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
        </tr>
        @foreach ($cursos as $curso)
            <tr>
                <td>{{$curso->id}}</td>
                <td>{{$curso->nombre}}</td>
                <td>
                    <form method='post' action='cursos/{{$curso->id}}/edit'>
                        <input type='submit' value='actualizar'>
                        @csrf
                        @method("GET")
                    </form>
                </td>
                <td>
                    <form method='post' action='cursos/{{$curso->id}}'>
                        <input type='submit' value='Eliminar'>
                        @csrf
                        @method("DELETE")
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <a href="{{Route("cursos.create")}}">Agregar Curso</a>
@endsection

@section("js")
    <script>
        alert("Hola a todos");
    </script>
@endsection
