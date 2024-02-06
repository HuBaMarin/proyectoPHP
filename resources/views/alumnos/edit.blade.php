@extends("layout.layout")
@section("contenido")

{{$errors}}<!--cuando hay algun error, visualizo-->
    <div class="flex items-center justify-center h-full p-5 rounded-2xl">
        <div class="w-full max-w-md h-full">

            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-10" action="{{route("alumnos.update", $alumno->id)}}"
                  method="post">
                @method("PATCH")
                @csrf
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" value="{{$alumno->nombre}}" id="nombre">
                <div class="text-sm text-red">
                @foreach($errors->get("nombre") as $error)
                    {{$error}}<br/>
                @endforeach
                </div>
{{--                <x-input-error :messages="$errors->get('nombre')" class="mt-2"/>--}}
                <br>
                <label for="email">Email</label>
                <input type="text" name="email" value="{{$alumno->email}}" id="email">
{{--                <x-input-error :messages="$errors->get('email')" class="mt-2"/>--}}
                <br>
                <label for="direccion">Dirección</label>
                <input type="text" name="dir" id="direccion" value="{{$alumno->dir}}">
{{--                <x-input-error :messages="$errors->get('dir')" value="{{$alumno->dir}}"  class="mt-2"/>--}}
                <br>
                <label for="dni">DNI</label>
                <input type="text" name="dni" id="dni" value="{{$alumno->dni}}">
{{--                <x-input-error :messages="$errors->get('dni')" value="{{$profesor->dni}}" class="mt-2"/>--}}

                <br>
                <x-primary-button type="submit" >Actualizar</x-primary-button>
            </form>
        </div>
    </div>
@endsection
