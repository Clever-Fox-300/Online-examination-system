function add_mcq_questions(){
    
    var text_area = document.createElement("textarea");  
    text_area.setAttribute("placeholder", "Type your question here");      
    document.getElementById("question_container").appendChild(text_area);

    for (var i=0; i<4; i++){
        var radio = document.createElement("INPUT");
        radio.setAttribute("type", "radio");
        
        var option = document.createElement("input");
        option.setAttribute("type", "text");
       
        var br = document.createElement("br");
        
        document.getElementById("question_container").appendChild(radio);
        document.getElementById("question_container").appendChild(option);
        document.getElementById("question_container").appendChild(br);
    }
    var submit = document.createElement("button");
    submit.id = "add_question_button";
    submit.innerHTML = "SUBMIT";
    document.getElementById("question_container").appendChild(submit);
}

function add_subjective_questions(){

    var text_area = document.createElement("textarea");  
    text_area.setAttribute("placeholder", "Type your question here");      
    document.getElementById("question_container").appendChild(text_area);

    var submit = document.createElement("button");
    submit.id = "add_question_button";
    submit.innerHTML = "SUBMIT";
    submit.name = "submit_question";
    document.getElementById("question_container").appendChild(submit);
}