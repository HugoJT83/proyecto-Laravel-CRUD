<x-layout.layout>
    @guest
        <div class="hero min-h-full h-100"
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


{{--        <div--}}
{{--            class="hero min-h-full "--}}
{{--            style="background-image: url(https://img.daisyui.com/images/stock/photo-1507358522600-9f71e620c44e.webp);"--}}
{{--        >--}}
{{--            <div class="hero-overlay"></div>--}}
{{--            <div class="hero-content text-neutral-content text-center">--}}
{{--                <div class="max-w-md">--}}
{{--                    <h1 class="mb-5 text-5xl font-bold">{{__("Bienvenido a la aplicaicón")}}</h1>--}}
{{--                    <p class="mb-5">--}}
{{--                        {{__("Aquí puedes ver nuestra utilidades aprendiendo Laravel")}}--}}
{{--                    </p>--}}
{{--                    <button class="btn btn-primary">{{__("Empezando")}}</button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    @endguest
    @auth
        <div class="card bg-base-100 image-full w-96 shadow-sm p-4 max-w-full ">
            <figure>
                <img
                    src={{asset("img/projects.jpeg")}}
                        alt="Shoes" />
            </figure>
            <div class="card-body">
                <h2 class="card-title">Gestionar proyectos</h2>
                <p>Gestionar de forma completa los proyectos del centro</p>

            </div>
        </div>
    @endauth
</x-layout.layout>
