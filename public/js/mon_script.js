
                    var physique = getElementById("physique");
                    var morale = getElementById("morale");
                    //var person = ge
                    var physiqued = getElementById("physiqued");
                    var moraled = getElementById("moraled");
                    physique.addEventListener("click", ()=>{
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
                    morale.onclick = personne;

