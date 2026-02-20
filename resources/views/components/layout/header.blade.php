<header class="p-4 flex items-center justify-between bg-base-200">
    <div class="flex items-center space-x-7">
        <a href="{{route('main')}}">
            <img src="{{asset("imgs/DND-Emblem.ico")}}" class="w-20" alt="">
        </a>
        <h1 class="font-Germania text-5xl text-dnd underline">D&D Manager</h1>
    </div>

    @guest
    <nav class="mr-10">
        <a href="{{route("login")}}">
            <button type="submit" class="btn rounded-s-4xl font-Germania font-light text-xl bg-red-700 border-red-700 hover:bg-dnd hover:border-dnd">Login</button>
        </a>

        <a href="{{route("register")}}">
            <button type="submit" class="btn font-Germania rounded-e-4xl font-light text-xl bg-red-700 border-red-700 hover:bg-dnd hover:border-dnd">Registrarse</button>
        </a>

    </nav>
    @endguest

    @auth
        <div class="content-center mr-10">
            <h1 class="text-dnd text-2xl font-Germania">Bienvenido, {{auth()->user()->name}} </h1>
            <form action="/logout" method="post">
                @csrf
                <button type="submit" class="btn font-Germania font-light w-full text-xl bg-dnd">Log out</button>
            </form>


        </div>
    @endauth


</header>
