<x-layout.layout>
    <a href="{{route('characters.create')}}">
        <button class="btn bg-dnd m-5">
            Agregar Personaje
        </button>
    </a>

    <div class="overflow-x-auto w-full rounded-box border border-base-content/5 bg-base-100">
        <table class="table w-full">
            <!-- head -->
            <thead>
            <tr>
                @foreach($fields as $field)
                    <th>{{$field}}</th>
                @endforeach
            </tr>
            </thead>
            <tbody>

                @foreach($characters as $character)
                    <tr>
                        <td>{{$character->name}}</td>
                        <td>{{$character->strength}}</td>
                        <td>{{$character->dexterity}}</td>
                        <td>{{$character->constitution}}</td>
                        <td>{{$character->intelligence}}</td>
                        <td>{{$character->wisdom}}</td>
                        <td>{{$character->charisma}}</td>
                        <td>{{$character->level}}</td>
                        <td class="w-20 flex gap-1">
                            <a href="{{route('characters.edit',$character->id)}}">
                                <button class="btn bg-dnd">
                                    Editar
                                </button>
                            </a>
                            <form
                                action="{{route('characters.destroy',$character->id)}}"
                                method="POST">

                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn bg-dnd">
                                    Borrar
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-layout.layout>
