//PERMETS DE FAIRE APPARAITRE LE MODAL DELETE
//ET D'ENVOYER LE DATA ID ET URL DANS LE BOUTON DU MODAL POUR FUTUR SUPPRESSION
$("#liste-competences").on('click', '.delete', function(){
    let url = "/delete/competence";
    $('#delete-modal').removeClass('hidden');
    //recupere data id + date competence
    let id = $(this).data("id");
    let competence = $(this).data("competence");
    // set id dans le bouton delete-competence du modal
    $("#delete-competence").attr('data-id', id);
    //set l'url dans le bouton delete-competence du modal
    $("#delete-competence").attr('data-url', url);
    //Change le msg du modal
    $("#item-modal").html('la compétence ' + competence);


});
//PERMETS DE FAIRE DISPARAITRE LE MODAL DELETE
$(".close").on('click', function(){
    $('#delete-modal').addClass('hidden');
});


//PERMET DE FAIRE UN AJAX POUR DELETE LA COMPETECNE
$("#delete-competence").on('click',function(){
    $('#delete-modal').addClass('hidden');
    $.ajax({
        url: $(this).data('url'),
        type: "POST",
        data: {
            "_token": $(this).data('token'),
            'id_competence': $(this).data('id'),
        },
        success: function (data) {
            if(data.success){
                alert(data.success);
                location.reload();

            }else{
                alert('Une erreur a été commis veuillez réessayer');
            }
        },
        error: function (e) {
            console.log(e.responseText);
        }
    })
});


//Permet d'afficher les competence sur la page au chargement et d'enlever les spinner de loading
$(document).ready(function(){
    //au chargement on fait un appel ajax
    $.ajax({
        url: '/show/competence',
        type: "POST",
        data: {
            "_token": $('#token').val(),
        },
        success: function (data) {
            if(data.statut == 'success'){
                // une fois effectuer on enleve les spinner
                $("#loading").hide();
                // puis on affiche les competences dans le tableau avec le template
                competences=data.competences_list
                afficherCompetences(competences);

            }else{
                alert('Une erreur a été commis veuillez réessayer');
            }
        },
        error: function (e) {
            console.log(e.responseText);
        }
    })

    function afficherCompetences(data){
        console.log(data);
        let row_template = $("#template-list").clone();
        let cible = $('#liste-competences');
        cible.empty();
        for (elem of data ) {
            //transformer le datetime dans le bon format
            let date_creation =  changerDate(elem.created_at);
            let date_update = changerDate(elem.updated_at);
            row_template_html = row_template.html();
            let competence = '<td>'+elem.nom_competence+'</td>';
            let creation = '<td class="text-center">'+date_creation+'</td>';
            let update = '<td class="text-center">'+date_update+'</td>';

            row_template_html = row_template_html.replace(/{nom_competence}/g,competence);
            row_template_html = row_template_html.replace(/{created_at}/g,creation);
            row_template_html = row_template_html.replace(/{updated_at}/g,update);

            cible.append('<tr>')
            cible.append(row_template_html);
            cible.append('\
            <td class="text-center">\
                    <i class="fa-solid fa-pen mr-3 hover:cursor-pointer"></i>\
                <a class="delete" data-id="'+elem.id+'" data-competence="'+elem.competence+'">\
                    <i class="fa-solid fa-trash text-red-600 hover:cursor-pointer"></i>\
                </a>\
            </td>');
            cible.append('</tr>')

        }
        function changerDate(datetime){
            let dateTab = datetime.split('T');
            let date = new Date(dateTab[0]);
            return date.toLocaleDateString("fr-FR");
        }
    }
});




