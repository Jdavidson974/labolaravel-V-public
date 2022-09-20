<div class="lg:w-4/6 p-3 border-solid  w-full flex">
    <div class="w-full">
        <h1>Liste des compétences</h1>
        <table class="border-separate border-spacing-2 border border-slate-400 w-full">
            <thead>
                <tr>
                    <th class="border border-slate-300 p-2">Nom de la compétence</th>
                    <th class="border border-slate-300 p-2">Date de création</th>
                    <th class="border border-slate-300 p-2">Date de modification</th>
                    <th class="border border-slate-300 p-2">Action</th>
                </tr>
            </thead>
            <tbody id="liste-competences">
                <tr id="loading">
                    <td class="justify-items-start">
                        <img class="test m-auto" src="{{asset('img/spinner.PNG')}}">
                    </td>
                    <td class="justify-items-start">
                        <img class="test m-auto" src="{{asset('img/spinner.PNG')}}">
                    </td>
                    <td class="justify-items-start">
                        <img class="test m-auto" src="{{asset('img/spinner.PNG')}}">
                    </td>
                    <td class="justify-items-start">
                        <img class="test m-auto" src="{{asset('img/spinner.PNG')}}">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div id='template-list' class="hidden">
        <tr>
            <td>{nom_competence}</td>
            <td class="text-center">{created_at}</td>
            <td class="text-center">{updated_at}</td>
            <td class="text-center">
                <a data-id="{id}"  href="" class="mr-3">
                    <i class="fa-solid fa-pen"></i>
                </a>
                <a class='delete' data-id="{id}" data-competence="{nom_competence}">
                    <i class="fa-solid fa-trash text-red-600 delete"></i>
                </a>
            </td>
        </tr>
    </div>


</div>
