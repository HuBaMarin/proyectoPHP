

@extends("layout.layout")
@section("contenido")
    @if(session("info"))
        <div role="alert" class="alert alert-success">
            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
            {{ session('info') }}
        </div>
    @endif


    <div class="overflow-x-auto max-h-full">

        <a href="{{route('alumnos.create')}}">
            <button type="button" class="btn btn-primary items-center ">Nuevo alumno</button>
        </a>

        <table class="table tab-border-2 table-fixed table-zebra">
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Direccion</th>
                <th>DNI</th>
            </tr>
            @foreach($alumnos as $alumno)
                <tr>
                    <td>{{$alumno->nombre}}</td>
                    <td>{{$alumno->email}}</td>
                    <td>{{$alumno->dir}}</td>
                    <td>{{$alumno->dni}}</td>
                    <td>
                        {{--Borrar--}}

                        <form action="{{route("alumnos.destroy",$alumno->id)}}" method="post">
                            @csrf
                            @method("DELETE")
                            <button type="submit" onclick="confirmDelete(event, '{{$alumno->nombre}}')">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                     stroke="currentColor" class="text-red-600 w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0"/>
                                </svg>
                            </button>
                        </form>
                    </td>
                    <td>
                        {{--Editar--}}
                        <a href="{{route("alumnos.show", $alumno->id)}}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke-width="1.5" stroke="currentColor" class="text-blue-600 w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10"/>
                            </svg>
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
        <script>
            function confirmDelete(event, nombre) {
                console.log(`borrando ${nombre}`)
                event.preventDefault();
                if (confirm(`¿Estás seguro de que quieres eliminar ${nombre}?`))
                    document.getElementById('form-delete').submit();
            }
        </script>
    </div>

@endsection
