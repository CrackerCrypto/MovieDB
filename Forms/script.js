fields = 0;
err = 0;
function addInput(){
    if(fields != 5){
        // label for actor
        var firstLabel = document.createElement("label");
        firstLabel.setAttribute("for","actor_name");
        firstLabel.innerHTML = "Actor name:";

        var firstInput = document.createElement("input");
        firstInput.type = "text";
        firstInput.name = "actor_name[]";
        
        // label for role
        var secondLabel = document.createElement("label");
        secondLabel.setAttribute("for","role");
        secondLabel.innerHTML = "Role: ";
    
        var secondInput = document.createElement("input");
        secondInput.type = "text";
        secondInput.name = "role[]";

        var text = document.getElementById("text");
        text.appendChild(firstLabel);
        text.appendChild(firstInput);
    
        text.appendChild(secondLabel);
        text.appendChild(secondInput);
        text.appendChild(document.createElement("br"));

        fields+=1;
    }else{
        if(err == 0){
            var text = document.getElementById("text");
            text.appendChild(document.createElement("br"))
            text.appendChild(document.createTextNode("Maximum 5 actor's details can be stored"));
        }
    }
}
