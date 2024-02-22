/* JavaScript
*/


//Create a simple array named actors.
const actors = ["Jennifer Aniston", "Clint Eastwood", "Tom Cruise", "Bill Hader", "Keanu Reeves"];

const numActors = actors.length;

document.addEventListener("DOMContentLoaded", function(){ 
    document.querySelector("button").onclick = loopActors;
});    

function loopActors() {
    const heading = document.querySelector("div");
    
    if(heading.childNodes.length < 6){
    
    for(var i = 0; i<numActors; i++){
        var newNode = document.createElement('p');

        if(actors[i] == "Jennifer Aniston"){
           newNode.appendChild(document.createTextNode(actors[i]));
           newNode.style.color = "pink";
        } 
        else if (actors[i] == "Clint Eastwood"){
            newNode.appendChild(document.createTextNode(actors[i]));
            newNode.style.fontStyle = "italic";
        }
        else{
            newNode.appendChild(document.createTextNode(actors[i]));
        }
        heading.appendChild(newNode);
    }
    }
}