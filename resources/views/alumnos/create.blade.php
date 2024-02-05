@extends("layout.layout")
@section("contenido")
    {{$errors}}<!--cuando hay algun error, visualizo-->
    <div class="flex items-center justify-center h-full p-5 rounded-2xl">
        <div class="w-full max-w-md h-full">
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="{{route("alumnos.store")}}"
                  method="post">
                @csrf
                <!-- <x-input-label></x-input-label> -->
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre">
                <div class="text-sm text-red">
                    {{--                @foreach($errors->get("nombre") as $error)--}}
                    {{--                    {{$error}}<br/>--}}
                    {{--                @endforeach--}}
                </div>
                <x-input-error :messages="$errors->get('nombre')" class="mt-2"/>
                <br>
                <label for="email">Email</label>
                <input type="text" name="email" id="email">
                <x-input-error :messages="$errors->get('email')" class="mt-2"/>
                <br>
                <label for="direccion">Dirección</label>
                <input type="text" name="dir" id="direccion">
                <x-input-error :messages="$errors->get('dir')" class="mt-2"/>
                <br>
                <label for="dni">DNI</label>
                <input type="text" name="dni" id="dni">
                <x-input-error :messages="$errors->get('dni')" class="mt-2"/>

                <br>
                <input type="submit" value="Enviar">
            </form>
        </div>
    </div>
@endsection
