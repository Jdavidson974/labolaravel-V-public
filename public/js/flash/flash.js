//Fait disparait automatiquement le flash au bout de 5 sec
$(document).ready(function(){
    if($(".flash-message").is(':visible')){
        setTimeout(baisserOpacité,2000);
    }
});

//enleve le flash message
function clearFlash(){
    // Boucle sur tout les flash message et les fait disparaitre
    $(".flash-message").hide();
}

//Anime en baissant l'opacité
function baisserOpacité(){
    //on re verifie si l'utilisateur n'a pas cliquer sur la croix avant de faire l'animation
    if($(".flash-message").is(':visible')){
        $('.flash-message').fadeTo('slow', 0.1, function(){
            $(this).hide();
        });
    }
}




