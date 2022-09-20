<div class="lg:w-2/6 flex p-3 rounded border-solid border border-slate-500 w-full">
    <div class="w-full flex flex-col ">
        <h1>Ajouter une compétence</h1>
        <form class="w-full mt-3" action="{{route('create_competences')}}" method="POST">
            @csrf
            <div class="flex flex-col w-full">
                <div class="flex">
                    <label class="mr-1" for="competence">Compétence : </label>
                    <input type="text" name="competence" required class=" rounded border-solid border-2 border-slate-500 grow">
                </div>

                <button class="vert rounded p-2 text-white lg:w-4/6 w-2/4 place-self-end mt-3 hover:bg-green-500">Créer</button>

            </div>

        </form>
    </div>
</div>
