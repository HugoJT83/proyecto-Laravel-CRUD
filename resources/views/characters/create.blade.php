<x-layout.layout>
    <div class="flex justify-center m-10">
        <form action="{{route('characters.store')}}" method="POST">
            @csrf

            <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-5">
                <label class="label font-Germania text-xl">Nombre</label>
                <input type="text"
                       id="name"
                       name="name"
                       class="input font-Germania font-light"
                       placeholder="Mi poderoso personaje..."
                       required
                />

                <div class="w-20 text-center m-auto p-2">
                    <label for="" class="font-Germania text-lg">Nivel</label>
                    <input type="number"
                           id="level"
                           name="level"
                           class="input w-15"
                           placeholder="1"
                           min="1"
                           required
                    />
                </div>

                <div class="flex justify-evenly">
                    <div class="w-20 text-center m-3">
                        <label for="" class="font-Germania text-lg">Fuerza</label>
                        <input type="number"
                               id="strength"
                               name="strength"
                               class="input w-15"
                               placeholder="8"
                               min="8"
                               required
                        />
                    </div>

                    <div class="w-20 text-center m-3 ">
                        <label for="" class="font-Germania text-lg">Destreza</label>
                        <input type="number"
                               id="dexterity"
                               name="dexterity"
                               class="input w-15"
                               placeholder="8"
                               min="8"
                               required
                        />
                    </div>

                    <div class="w-20 text-center m-3">
                        <label for="" class="font-Germania text-lg">Constitución</label>
                        <input type="number"
                               id="constitution"
                               name="constitution"
                               class="input w-15"
                               placeholder="8"
                               min="8"
                               required
                        />
                    </div>
                </div>

                <div class="flex justify-evenly w-80">
                    <div class="w-20 text-center m-3">
                        <label for="" class="font-Germania text-xl">Inteligencia</label>
                        <input type="number"
                               id="intelligence"
                               name="intelligence"
                               class="input w-15"
                               placeholder="8"
                               min="8"
                               required
                        />
                    </div>

                    <div class="w-20 text-center m-3">
                        <label for="" class="font-Germania text-xl">Sabiduría</label>
                        <input type="number"
                               id="wisdom"
                               name="wisdom"
                               class="input w-15"
                               placeholder="8"
                               min="8"
                               required
                        />
                    </div>

                    <div class="w-20 text-center m-3">
                        <label for="" class="font-Germania text-xl">Carisma</label>
                        <input type="number"
                               id="charisma"
                               name="charisma"
                               class="input w-15"
                               placeholder="8"
                               min="8"
                               required
                        />
                    </div>
                </div>

                <button class="btn bg-dnd m-3">Añadir</button>
            </fieldset>
        </form>
    </div>
</x-layout.layout>
