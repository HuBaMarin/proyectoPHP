<header class="h-15v bg-header text-white flex flex-row justify-between items-center p-5">
    <img class ="h-full w-2/12 p-3 " src="{{asset("images/gato.jpeg")}}" alt="logo" width="20%">
    <h1 class="w-3/5 text-8xl md:text-left dark:bg-slate-800  ">Proyecto laravel</h1>
    <div>
        @guest
        <a href="{{route("login")}}" class="bg-gray-900 rounded-md">Acceder</a>
        <a href="{{route("register")}}" class="btn btn-primary ">Registrarme</a>
        @endguest
        @auth
            <h3 class="text-xl">{{auth()->user()->name}}</h3>
                <form action="{{route("logout")}}" method="post">
                    @csrf
                    <button class="btn glass text-white" type="submit">Logout</button>
                </form>
        @endauth
    </div>
    CABECERA
</header>
