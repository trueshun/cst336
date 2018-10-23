<?php
    function displayResults(){
        global $items;//Need this as a global variable to get the global items array
        
        if(isset($items)){
            echo "<table class = 'table'>";
            foreach($items as $item){
                $itemName = $item['name'];
                $itemPrice = $item['salePrice'];
                $itemImage = $item['thumbnailImage'];
                $itemId = $item['itemId'];
                
                //display item as a table row
                echo '<tr>';
                echo "<td><img src= '$itemImage'></td>";
                echo "<td><h4>$itemName</h4></td>";
                echo "<td><h4>$itemPrice</h4></td>";
                
                //using POST method in form element add an name and and value
                echo "<form method = 'post'>";
                echo "<input type = 'hiddem' name = 'itemName' value = '$itemName'>";
                echo "<input type = 'hidden' name = 'itemId' value = '$itemId'>";
                echo "<input type = 'hidden' name = 'itemImage' value = '$itemImage'>";
                echo "<input type = 'hidden' name = 'itemPrice' value = '$itemPrice'>";
                
                if($_POST['itemId'] == $itemId){
                    echo '<td><button class = "btn btn-success" style = "color:green">Added</button></td>';
                }else{
                    echo '<td><button class ="btn btn-warning">Add</button></td>';
                }
                
                echo "</tr>"; 
                echo "</form>";

                //echo "</tr>";
            }
            echo "</table>";
        }
    }
    
    function displayCart(){
        if(isset($_SESSION['cart'])){
            echo "<table class = 'table'>";
            foreach ($_SESSION['cart'] as $item){
                $itemName = $item['name'];
                $itemPrice = $item['price'];
                $itemImage = $item['image'];
                $itemId = $item['id'];
                $itemQuant = $item['quantity'];
                
                //display data for item
                echo '<tr>';
                echo "<td><img src='$itemImage'></td>";
                echo "<td><h4>$itemName</h4></td>";
                echo "<td><h4>$itemPrice</h4></td>";
                
                //updte form for this item
                echo '<form method ="post">';
                echo "<input type = 'hidden' name = 'itemId' value = '$itemId'>";
                echo "<td><input type = 'text' name = 'update' class = 'form-control' placeHolder = '$itemQuant'></td>";
                echo '<td><button class = "btn btn-danger">Update</button></td>';
                echo '</form>';
                
                //create seperate form to delete
                echo "<form method = 'post'>";
                echo "<input type = 'hidden' name = 'removeId' value = '$itemId'>";
                echo "<td><button class = 'btn btn-danger'>Remove</button></td>";
                echo "</form>";
                
                echo "</tr>";
            }
            echo "</table>";
        }
    }
    
    function displayCartCount(){
        echo count($_SESSION['cart']);
    }
?>