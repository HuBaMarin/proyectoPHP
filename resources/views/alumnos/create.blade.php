@extends("layout.layout")
@section("contenido")

{{--    {{$errors}}<!--cuando hay algun error, visualizo-->--}}
    <form class="max-w-sm mx-auto" action="{{route("alumnos.store")}}" method="POST">
        @csrf
        <div class="mb-5">
            <label for="nombre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre</label>
            <input type="text" id="nombre" name="nombre"
                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                   required>
            <x-input-error :messages="$errors->get('nombre')" class="mb-5"/>
        </div>
        <div class="mb-5">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Correo
                Electrónico</label>
            <input type="email" id="email" name="email"
                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                   required>
            <x-input-error :messages="$errors->get('email')" class="mb-5"/>
        </div>
        <div class="mb-5">
            <label for="dir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dirección</label>
            <input type="text" id="dir" name="dir"
                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                   required>
            <x-input-error :messages="$errors->get('dir')" class="mb-5"/>
        </div>
        <div class="mb-5">
            <label for="dni" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">DNI</label>
            <input type="text" id="dni" name="dni"
                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                   required>
            <x-input-error :messages="$errors->get('dni')" class="mb-5"/>
        </div>
        <input type="submit"
               class="text-white bg-black hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
               value="Enviar">
    </form>
@endsection
