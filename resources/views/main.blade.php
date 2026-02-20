<x-layout.layout>
    @guest
        <div class="hero h-150"
             style="background-image: url({{url('imgs/bg-main.jpg')}});"
        >
            <div class="hero-overlay"></div>
            <div class="hero-content text-neutral-content text-center">
                <div class="max-w-md">
                    <h1 class="mb-5 text-5xl font-Germania font-bold">Gestiona tus personajes aquí</h1>
                    <p class="mb-5">
                        Lleva las cuentas de los atributos de tu personaje de forma sencilla y automatizada.
                    </p>
                </div>
            </div>
        </div>
    @endguest
    @auth
        <div
            class="h-150"
            style="background-image: url({{url('imgs/bg-tools.jpg')}})"
        >
            <h1 class="font-Germania text-6xl w-100 p-10">Herramientas</h1>
            <div class="flex justify-center space-x-10">
                <div class="card bg-base-100 w-96 shadow-sm">
                    <figure>
                        <img
                            src="{{asset('imgs/pj-tool.jpg')}}"
                            class="h-60 w-full"
                            alt="Shoes" />
                    </figure>
                    <div class="card-body">
                        <h2 class="card-title font-Germania text-2xl">Gestor de Personajes</h2>
                        <p class="font-Germania">Gestiona los atributos y el nivel de tus personajes.</p>
                        <div class="card-actions justify-end mt-5">
                            <a href="{{route('characters.index')}}">
                                <button class="btn bg-dnd border-dnd">Acceder</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card bg-base-100 w-96 shadow-sm">
                    <figure>
                        <img
                            src="{{asset('imgs/map_tool.png')}}"
                            class="h-60 w-full"
                            alt="Shoes" />
                    </figure>
                    <div class="card-body">
                        <h2 class="card-title font-Germania text-2xl">Gestor de mapas</h2>
                        <p class="font-Germania">Gestiona los espacios de tus partidas.</p>
                        <div class="card-actions justify-end mt-5">
                            <a href="">
                                <button class="btn bg-dnd border-dnd">Acceder</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>



{{--        <div class="card bg-base-100 image-full w-96 shadow-sm p-4 max-w-full ">--}}
{{--            <figure>--}}
{{--                <img--}}
{{--                    src={{asset("img/projects.jpeg")}}--}}
{{--                        alt="Shoes" />--}}
{{--            </figure>--}}
{{--            <div class="card-body">--}}
{{--                <h2 class="card-title">Gestionar proyectos</h2>--}}
{{--                <p>Gestionar de forma completa los proyectos del centro</p>--}}

{{--            </div>--}}
{{--        </div>--}}
    @endauth
</x-layout.layout>
