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
            .jumbotron{
                text-align:center;
            }
        </style>
        <link rel="stylesheet" href="https://unpkg.com/@coreui/icons/css/coreui-icons.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" href="css/admins.css" type="text/css" />
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
    <?php
        include 'inc/adminHeader.php';
    ?>
    
    <!-- fist container that will center it -->
    <div class="container">
        
        <!-- div for admin box -->
        
        <div class="admin">
         <h3>Welcome, <?= $_SESSION['adminFullName'] ?> </h3>

          <form action="addProduct.php">
              <input type="submit" class="btn btn-outline-dark" value="Add New Product">
          </form>
         <form action="logout.php">
              <input type="submit" class="btn btn-outline-dark" value="Logout">
          </form>
        </div>
        
        <!-- div for reports -->
           <br><br>
        <div class="reportBox">
           <h2>Generate Reports</h2>
        <div id="reports">
            <input type="button" class="btn btn-outline-dark btn-md" onclick="reportClick('avg')" id="avg" value="Average Price">
            <input type="button" class="btn btn-outline-dark btn-md" onclick="reportClick('itemTotal')" id="itemTotal" value="Total number of items in database">
            <input type="button" class="btn btn-outline-dark btn-md" onclick="reportClick('maxPrice')" id="maxPrice" value="Most expensive item in the database">
        </div>
        <div id="result"></div>
        </div> <!-- reportBox close -->
        <br /><br />
        
        <!--div for items in database -->
        <div class="listBox">
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
        
        </div><!--listBox end -->
    </div><!-- container end -->
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
                            $("#result").append("<h3>The most expensive item in the database cost " + data.MaxPrice + " dollars. </h3>");
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
       
    </body>
</html>