<?php
session_start();



include 'dbConnection.php';
$dbConn = startConnection($dbname="witchmart");

include 'inc/functions.php';
validateSession();

?>

<!DOCTYPE html>
<html>
    <head>
        <title> Admin Main Page </title>
        <style>
            form {
                display: inline-block;
            }
            
            /*#container{*/
            /*    text-align:center;*/
            /*    margin:0 auto;*/
            /*    border:solid white 1px;*/
            /*    margin-left:400px;*/
            /*    margin-right:400px;*/
            /*    padding-top:15px;*/
            /*    background-color:white;*/
            /*    color:black;*/
            /*}*/
        </style>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" type="text/css" />
        <!--<link rel="stylesheet" href="css/styles.css" type="text/css" />-->
        <script>
        
            function confirmDelete() {
                
                //alert();
                //prompt();
                return confirm("Really??");
                
            }
            
            function openModal() {
                
                $('#myModal').modal("show");
            }
            
            
        </script>
    
    </head>
    <body>
    <div id="container">
        <h1> ADMIN SECTION - Witch Mart </h1>
        
         <h3>Welcome <?= $_SESSION['adminFullName'] ?> </h3>

          <form action="addProduct.php">
              <input type="submit" value="Add New Product">
          </form>
         <form action="logout.php">
              <input type="submit" value="Logout">
          </form>

           <br><br>
           <h2>Generate Reports</h2>
        <div id="reports">
            <input type="button" onclick="reportClick('avg')" id="avg" value="Average Price">
            <input type="button" onclick="reportClick('itemTotal')" id="itemTotal" value="Total number of items in database">
            <input type="button" onclick="reportClick('maxPrice')" id="maxPrice" value="Most expensive item in the database">
        </div>
        <div id="result"></div>
        
        <br /><br />
        
        <?= displayAllProducts() ?>
        

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Product Info</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <iframe name="productModal" width="450" height="250"></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>        
        
        <script>
        
           function reportClick(token){
               $.ajax({
                   type: "GET",
                   url:"api/reportApi.php",//api works. use id= avg or itemTotal or maxPrice to check
                   dataType: "json",
                   data:{id:token},
                   success:function(data, status){
                       //1st empty content in div first, so when data starts being placed it is erased
                       //2nd use if statments to populate #result
                       $("#result").empty();
                        if(token == "avg"){
                            $("#result").append("<h3>The the average price of all the items in the database is " + data.AveragePrice + " dollars.</h3>");
                        }
                        if(token == "itemTotal"){
                            $("#result").append("<h3>The total number of items in the database is " + data.CountTotal + ".</h3>");
                        }
                        if(token == "maxPrice"){
                            $("#result").append("<h3>The most expensive item in the database is " + data.MaxName + " and it cost " + data.MaxPrice + " dollars. </h3>");
                        }
                   },
                   complete:function(data, status){//optional, used for debugging purposes
                       //alert(status);
                       console.log(data.responseText);//tell me what I'm doing wrong, omg
                   }
               });
           }
        </script>
        
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        </div>
    </body>
</html>