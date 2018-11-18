var selectedWord = "";
var selectedHint = "";
var board = [];
var remainingGuesses = 6;
var showHint = false;
var words = [{ word: "snake", hint: "It's a reptile" },
             { word: "monkey", hint: "It's a mammal" },
             { word: "beetle", hint: "It's an insect" }];
             
var alphabet = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 
                'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 
                'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
//listeners
window.onload= startGame();

$(".hint").click(function(){
   hideButton(); 
});

$(".replayBtn").on("click", function(){
   location.reload(); 
});

$(".letter").click(function(){
    checkLetter($(this).attr("id"));
    disableButton($(this));
});

//functions
function startGame() {
    pickWord();
    initBoard();
    createLetters();
    updateBoard();
}

function pickWord() {
    var randomInt = Math.floor(Math.random() * words.length);
    selectedWord = words[randomInt].word.toUpperCase();
    selectedHint = words[randomInt].hint;
}

//creates the letters inside the letters div
function createLetters(){
    $("#hint").append("<button class='hint' id= 'hint'>Hint</button>");
    
    for(var letter of alphabet){
        $("#letters").append("<button class='letter' id='" + letter + "'>" + letter + "</button>");
    }
}

//fill the board with underscores
function initBoard() {
    for (var letter in selectedWord) {
        //board += '_';
        board.push("_");
    }
}


//cheks to see if the selected letter exists in the selectedWord
function checkLetter(letter){
    var positions = new Array();
    
    //put all the positions the letter exists in an array
    for(var i =0; i < selectedWord.length; i++){
        if(letter == selectedWord[i]){
            positions.push(i);
        }
    }
    
    if(positions.length > 0){
        updateWord(positions, letter);
        
        //check to see is this is a winning guess
        if(!board.includes('_')){
            endGame(true);
        }
        
    } else{
        remainingGuesses -= 1;
        updateMan();
    }
    if(remainingGuesses <= 0){
        endGame(false);
    }
}

//update the current word then calls for a board update
function updateWord(positions, letter){
    for(var pos of positions){
        board[pos] = letter;
    }
    
    updateBoard();
}

function updateBoard(){
    $("#word").empty();
    
    for(var letter of board){
        document.getElementById("word").innerHTML += letter + " ";
    }
    if(showHint){
        $("#word").append("<br />");
        $("#word").append("<span class ='hint'>Hint: " + selectedHint + "</span>");  
    }
}

//calculates and updates the image for our stick man
function updateMan(){
    $("#hangImg").attr("src", "img/stick_" + (6 - remainingGuesses) + ".png");
}

function endGame(win){
    $("#letters").hide();
    
    if(win){
        $('#won').show();
    }else{
        $('#lost').show();
    }
}

function disableButton(btn){
    btn.prop("disabled", true);
    btn.attr("class", "btn btn-danger");
}

function hideButton(){
    $("#hint").hide();
    showHint = true;
    updateBoard();
}

