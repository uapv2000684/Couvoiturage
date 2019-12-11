$(document).ready(function(data){
    if($('#connection').is(":visible")) {
        $('#register').show();
        $('#add').hide();
        $('#deconnection').hide();
        $('#menuRechercher').hide();
    }
    else{
        $('#register').hide();
        $('#add').show();
        $('#deconnection').show();
        $('#menuRechercher').show();
    }
});
$(document).ready(function(){
    $(function() {
    $('#submit').on('click', function(){

        var login = $('#login').val();
        var password = $('#pwd').val();

        //      history.pushState({},"","?action=AfficherRechercheVoyage");
        $.ajax({
            type: 'POST',
            url: 'CERIcar.php?action=Userlogin',
            data:{
                login: login,
                pwd: password
            },
            success: function(data){
                if(data.match('Connexion reussit')) {
                    $('#page_maincontent').children().remove();
                    updateBandeau("Bingo vous etes Connecté !");
                    $('#connection').hide();
                    $('#add').show();
                    $('#register').hide();
                    $('#menuRechercher').show();
                    $('#deconnection').show();
                }
                else
                    updateBandeau("login ou mot de pass incorrect.");


            },

        });

    });
});
});


function updateBandeau(msg)
{
    //faire disparaitre le bandeau
    $('#bandeau').css("marginBottom","-50px");
    //attribuer msg au bandeau
    $('#bandeau').html(msg);
    //le refaire apparaitre
    $("#bandeau").animate({
        marginBottom: "0px",
    }, 500);
}