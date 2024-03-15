<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Products</title>
</head>
<body>
<?php require 'navbar.php';?>
<div class="produit">Product</div>

    <div class="product">
        <form action="" class='forme'>
           
           <div class="nameqte">
            <div class='name'>
                <label >Name</label> <br>
                <input type="text" placeholder="The name">
            </div>
            <div class="quantity">
                <label>Quantity</label> <br>
                <input type="number" placeholder='Quantity'>
            </div>
           </div>
           <div class="desiprice">
           <div class="designation">
                <label>Designation</label><br>
                <textarea id="message" name="message" rows="3"></textarea>
           </div>
           <div class="price">
            <label>Price</label> <br>
            <input type="number"placeholder='The number'>
           </div>
           </div>
          
           <div class="button"><button type='submit'>submit</button></div>
           
           
        </form>
    </div>
    
</body>
</html>