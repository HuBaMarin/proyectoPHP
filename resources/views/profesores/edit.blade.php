@extends("layout.layout")
@section("contenido")
{{$errors}}<!--cuando hay algun error, visualizo-->
    <div class="flex items-center justify-center h-full p-5 rounded-2xl">
        <div class="w-full max-w-md h-full">

            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="{{route("profesores.update", $profesor->id)}}"
                  method="post">
                @method("PATCH")
                @csrf
                <!-- <x-input-label></x-input-label> -->
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" value="{{$profesor->nombre}}" id="nombre">
                <div class="text-sm text-red">
                @foreach($errors->get("nombre") as $error)
                    {{$error}}<br/>
                @endforeach
                </div>
{{--                <x-input-error :messages="$errors->get('nombre')" class="mt-2"/>--}}
                <br>
                <label for="email">Email</label>
                <input type="text" name="email" value="{{$profesor->email}}" id="email">
{{--                <x-input-error :messages="$errors->get('email')" class="mt-2"/>--}}
                <br>
                <label for="direccion">Dirección</label>
                <input type="text" name="dir" id="direccion" value="{{$profesor->dir}}">
{{--                <x-input-error :messages="$errors->get('dir')" value="{{$profesor->dir}}"  class="mt-2"/>--}}
                <br>
                <label for="dni">DNI</label>
                <input type="text" name="dni" id="dni" value="{{$profesor->dni}}">
{{--                <x-input-error :messages="$errors->get('dni')" value="{{$profesor->dni}}" class="mt-2"/>--}}

                <br>
                <x-primary-button type="submit" >Actualizar</x-primary-button>
            </form>
        </div>
    </div>
@endsection
