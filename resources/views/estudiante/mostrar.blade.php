@extends("layouts.master")

@section("principal")
    <h1>Estudiantes</h1>
    <table border="1" cellspacing="0">
        <thead>
        <tr>
            <th>id</th>
            <th>nombres</th>
            <th>apellidos</th>
        </tr>
        </thead>
        <tbody>
        @foreach($estudiantes as $estudiante)
            @if($estudiante->id%2!=0)
                <tr style="background-color: #a0aec0">
            @else
                <tr>
                    @endif
                    <td>{{$estudiante->id}}</td>
                    <td>{{$estudiante->nombres}}</td>
                    <td>{{$estudiante->apellidos}}</td>
                </tr>
                @endforeach
        </tbody>
    </table>
@endsection
