<?php

    if (isset($_POST['update-cart'])) { 

        // Connect to the database 
        $mysqli = new mysqli("localhost", "root", "", "cpsc_332_project"); 

        // Check for errors 
        if ($mysqli->connect_error) { die("Connection failed: " . $mysqli->connect_error); } 

        // Get the form data 
        $UserID = $_POST['UserID']; $ProductID = $_POST['ProductID']; $PurchaseQuantity = $_POST['PurchaseQuantity']; 
    
        // Prepare update cart
        $updateCart = $mysqli->prepare("UPDATE carts SET PurchaseQuantity =  ? 
        WHERE UserID=? AND ProductID = ?"); 
        $updateCart->bind_param("iii", $PurchaseQuantity, $UserID, $ProductID); 

        // Update cart
        $updateCart->execute();
        header("Location: /cpsc-332-project/php/pages/cart.php"); 

        // Close the connection 
        $mysqli->close(); 
    }
?>