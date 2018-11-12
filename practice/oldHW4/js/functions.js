// JavaScript File

function vForm(){
    if(document.myForm.question1.value == false){
        alert("Please answer Question 1!");
        return false;
    }else if(document.myForm.question2.value == false){
        alert("Please answer Question 2!");
        return false;
    }else if(document.myForm.question3.value == ""){
        alert("Please answer Question 3!");
        return false;
    }else if(document.myForm.question5.value == false){
        alert("Please answer Question 5!");
        return false;
    }else if(document.myForm.question6.selectedIndex == 0){
        alert("Please select an answer for Question 6!");
        return false;
    }
    else{
        alert("All data entered. Calculating..."); 
    }
}

function qResult(){
    var totalCorrect = 0;
    
    if(document.getElementById("q1").value == "B"){
        totalCorrect++;}
    // }else if(document.myForm.question2.value == "guy" || document.myForm.question2.value == "chick" ){
    //     totalCorrect++;
    // }else if(document.myForm.question3.value == "pikachu" || document.myForm.question3.value == "Pikachu"){
    //     totalCorrect++;
    // }else if(document.myForm.question4.value == "yes"){
    //     totalCorrect++;
    // }else if(document.myForm.question5.value == "C"){
    //     totalCorrect++;
    // }else if(document.myForm.question6.selectedIndex == "c"){
    //     totalCorrect++;
    // }
    return totalCorrect;
}