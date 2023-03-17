
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
var clientPhys = getElementById('clientPhys');
clientPhys.click(function(e){
/* var myModal1 = getElementById("myModal1");
var clientP = getElementById(clientP"); */
$('myModal1').modal('hide');
$('clientP').modal('show');

})
$('#essai').click(function(e){
    $('#mon').visibility = 'hidden';
})
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


    $(document).ready(function(){
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

var form = $('#clientP')[0];

$('#savebtn').click(function(){
    var formData = new formData(form);
    $.ajax({
        url:'{{ route("nouveauPersonnePhysique") }}',
        method: 'POST',
        processData: false,
        contentType: false,
        data : formData,

        success: function(reponse){
            $('clientP').modal('hide');
            if(reponse){
                console.log(response.success)
            }
        },
        error: function(error){
            if(error){
                
            }
        }
    })
})

    });


