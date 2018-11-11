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

function results(){
    var totalCorrect = 0;
    
    if(document.myForm.question1.value == "B"){
        totalCorrect++;
        
    }
    if(document.myForm.question2.value == "guy" || document.myForm.question2.value == "chick" ){
        totalCorrect++;
    }
    return totalCorrect;
}