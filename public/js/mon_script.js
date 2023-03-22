
$('document').ready(function(){

    $('#moraled').hide();
    $('#physiqued').show();

$('#physique').click(function(){
    $('#physiqued').show();
    //$('#personne').load('physique.html');
$('#moraled').hide();
});
$('#morale').click(function(){
    $('#physiqued').hide();
    //$('#personne').load('physique.html');
$('#moraled').show();
});


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $("#clientPform").submit(function(e) {
console.log('enregistrer');
        e.preventDefault(); // évite d'exécuter la soumission réelle du formulaire.

        var form = $(this);
        var actionUrl = form.attr('action');
        $.ajax({

        type : "POST",
        url : actionUrl,
        processData: false,
        contentType: false,
        données : form.serialize(), // sérialise les éléments du formulaire.
        success : function (données)
        {
          alerte (données); // affiche la réponse du script php.
            }
          });
        });
})
/* $('document').on('submit','#clientPform',function(e){
    e.preventDefault();
    alert('enregistrer');
})
 */

                    //var physique = getElementById("physique");
                    /* var morale = getElementById("morale");
                    //var person = ge
                    var physiqued = getElementById("physiqued");
                    var moraled = getElementById("moraled"); */
/* $('physique').click(function(e){
    $('physiqued').style.visibility = "block" ;
    $('moraled').visibility =  "hidden";
})
morale.click(function(e){
    physiqued.style.display = "hidden" ;
    moraled.style.visibility = "block" ;
}) */

                   /*  physique.addEventListener("click", ()=>{
                        if(getComputedStyle(physiqued).display != "none"){
                            physiqued.style.display = "none";
                        }
                        else{
                            physiqued.style.display = "block";
                        }
                    })

                    function personne(){
                        if(getComputedStyle(moraled).display != "none"){
                            moraled.style.display = "none";
                        }
                        else{
                            moraled.style.display = "block";
                        }
                    };
                    morale.onclick = personne; */
                    /* var physique = document.getElementById("physique");
                    physique.click(function(e){
                        alert('personne physique')
                    }); */
                    /* var clientPhys = document.getElementById('clientPhys');
                    clientPhys.click(function(){
                    $('myModal1').modal('hide');
                    $('clientP').modal('show');

                    }); */

    /* $(document).ready(function(e){

 $('physique').click(function(e){

    $('#bon').html('div de bonjour');
    /* $('physiqued').style.visibility = "block" ;
    $('moraled').visibility =  "hidden"; *
}); */
       /*  -- confirmation de suspension de dossier
       var theHREF;
        $('#confirmModalLink').click(function(e){
            e.preventDefault();
            theHREF = $(this).attr('href');
            $('#suspension').modal('show');
        });

        $('#non').click(function(e){
            $('#suspension').modal('hide');
        })
        $('#oui').click(function(e){
            window.location.href = theHREF;
        }) */
/* --- enregistrerment d'une personne comme client --- */


    /* $.ajaxSetup({
         headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
     });
     /* $.ajaxSetup({
url: "/xmlhttp/",
global: false,
type: "POST"
});
var form = $('#clientP')[0];

$('#savebtn').click(function(){
    var form = $('#clientPform')[0];
    var formData = new FormData(form);
    var nom = $('#first_name').val();
    var prenom = $('#last_name').val();
    var email = $('#email').val();
    $.ajax({
        url:"/personne_physique/nouveau",
        data : {
            nom,
            prenom,
            email,
        },
        method: 'POST',
        processData: false,
        contentType: false,
        dataType: 'json',


        success: function(reponse){
            $('clientP').modal('hide');
            if(reponse){
                alert('succes')
            }
        },
        error: function(error){
            if(error){
alert('echec')
            }
        }
    })
})



    });

 */
