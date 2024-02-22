//David Brophy
//10/31/2023

$(document).ready(function(){

    $(function() {
        let addOrMult;
        $("input[type=submit]").click(function() {
            addOrMult = $(this).attr("id");
        })

        $("#myForm").submit(function(){
            //get numbers
            let firstNum = Number($("#firstNum").val().trim());
            let secondNum = Number($("#secondNum").val().trim());
            
            if((Number.isNaN(firstNum)) || (Number.isNaN(secondNum)) || (firstNum=='') || (secondNum=='')){ //error message
                $("#message").html("Please enter a number in both fields.");
                $("#answer").attr("placeholder","");
            }
            else if(addOrMult=="multiply"){ //multiply
                let answer=firstNum*secondNum;
                $("#answer").attr("placeholder",answer.toString());
                $("#message").html("");
            }
            else if(addOrMult=="addition"){ //add
                let answer=firstNum+secondNum;
                $("#answer").attr("placeholder",answer.toString());
                $("#message").html("");
            }
            
            return(false);
        });
    })
});