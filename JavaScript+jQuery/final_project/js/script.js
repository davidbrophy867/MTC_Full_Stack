// David Brophy

$(document).ready(function(){
    //Sun Disappearing Paragraph OLD--------------------------------
    /*$("#sun").hover(function(){
        $("#paragraph").fadeToggle(100);
    });*/

    //Mercury Facts --------------------------------------------
    $("#mercury").click(function(){
        var facts = ["Mercury is the smallest planet.", "Mercury is red.", "Mercury is the messenger god.", "Mercury is also in thermometers."];
        var factsString = "";

        for(var index in facts){
            factsString += facts[index] += "\n";
        }
        alert(factsString);
    });

    //Jupiter Facts ----------------------------------------------
    const jsonStuff = [
            {"fact":"is the largest planet"},
            {"fact":"has a big storm"},
            {"fact":"has four moons"},
            {"fact":"spins faster than any other planet"},
            {"fact":"is 483,682,810 miles from the sun"}
        ]
    let isClicked = false;

    $("#jupiter").click(function(){
        
        $("#jupiter").css("top", "45%");
        
        if(!isClicked){
            for(var i in jsonStuff){
                if(jsonStuff[i].fact.indexOf("storm") != -1){
                    $("#facts").append("<li style='color:red'>Jupiter : " + jsonStuff[i].fact + "</li>");
                }
                else if(jsonStuff[i].fact.indexOf("moons") != -1){
                    $("#facts").append("<li style='font-size:150%'>Jupiter : " + jsonStuff[i].fact + "</li>");
                }
                else{
                    $("#facts").append("<li>Jupiter : " + jsonStuff[i].fact + "</li>");
                }
            }    
        }
    
        isClicked = true;
    });

    //Sun Rotation and Disappearing Paragraph --------------------------------------------------------------
    var rotateS = 0;
    $("#sun").hover(function(){
        $("#paragraph").fadeToggle(100);
        
        rotateS = rotateS + 180;

        $({degrees: rotateS - 180}).animate({degrees: rotateS}, {
            duration: 1000,
            step: function(now) {
                $("#sun").css({transform: 'rotate(' + now + 'deg)'});
            }
        });
    });

    //Spin Jupiter ------------------------------------------------------------
    var rotateJ = 0;
    $("#jupiter").hover(function(){
        rotateJ = rotateJ + 180;

        $({degrees: rotateJ - 180}).animate({degrees: rotateJ}, {
            duration: 2000,
            step: function(now) {
                $("#jupiter").css({transform: 'rotateY(' + now + 'deg)'});
            }
        });
    });

});