//David Brophy

$(document).ready(function(){
    const jsonStuff = [
        {"insurancetype":"General Liability", "statename":"South Carolina"},
        {"insurancetype":"Worker’s Compensation", "statename":"North Carolina"},
        {"insurancetype":"Fire, Theft, Property", "statename":"All States except Hawaii"},
    ];

    $(".button").click(function(){ //when the user clicks the LOB button
        let messageString = "Line of Business\n\n";
        let j = 1;
        for(var i in jsonStuff){
            messageString += j + " - " + jsonStuff[i].insurancetype + "\n      " + jsonStuff[i].statename;
            alert(messageString);
            j++;
            messageString = "Line of Business\n\n"
        }
        
    })

    $(".contactForm").submit(function(){ //when the user submits the Contact Us form
        if(document.getElementById('contactPhone').checked && document.getElementById('contactEmail').checked){ //both are checked
            alert("Please check only one - email or phone");
            event.preventDefault();
        }
        else if(document.getElementById('contactPhone').checked || document.getElementById('contactEmail').checked){//only one is checked
            var firstname = $("#fname").val();
            
            if(document.getElementById('contactPhone').checked){
                var contactmethod = "phone";
            }
            else{
                var contactmethod = "email";
            }

            alert("Thank you for your feedback, "+ firstname + ".\nSomeone will contact you shortly by " +contactmethod +".");
        }
        else{ //neither are checked
            alert("Please check one - email or phone");
            event.preventDefault();
        }
    })

});