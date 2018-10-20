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
                
                echo "<td><button class = 'btn btn-warning'>Add</button></td>";
                echo "</form>";

                echo "</tr>";
                
                /*
                    Cookie:  a small piece of text that is stored in the users browser. Is publickly visible to every website.
                    Session: storing large or sensitive information. Can be used server-side. creates a session id cookie that is used to authenticate the user. Data not store on computer
                */
                
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
                
                //displat item as a table row
                echo '<tr>';
                echo "<td><img src='$itemImage'></td>";
                echo "<td><h4>$itemName</h4></td>";
                echo "<td><h4>$itemPrice</h4></td>";
                
                //hidden input element conatinin the item name
                echo "<form method = 'post'>";
                echo "<input type = 'hidden' name = 'removeId' value = '$itemId'>";
                echo "<td><button class = 'btn btn-danger'>Remove</button>M/td>";
                echo "</form>";
                
                echo "</tr>";
            }
            echo "</table>";
        }
    }
    
?>