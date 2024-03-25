<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>Document</title>
</head>
<body>
<?php require 'navbar.php';?>
<div class="produit">Product</div>

    <div class="product" style="height:200px">
        <form action="../Back_end/produit.php" class='forme' method="post">
           
           
            <div class='selecte'>
                <label class="label">id product</label><br>
               <select class="selec">
                <option value="">ex: Tv</option>
                <option value="">Radio</option>
               </select>
            </div>
            <div class="selecte">
                <label class="label">id supplier</label><br>
                <select class="selec">
                    <option value="">ex:Eric</option>
                    <option value="">Chandrack</option>
                </select>
            </div>
            
           <div class="desiprice">
            <div class="quantity">
                <label>Quantity</label> <br>
                <input type="number" placeholder='Quantity' name='quantity'>
            </div>
            <div class="date"> 
                <label>Date</label> <br>
                <input type="date">
            </div>
           </div>   
           
        </form>
        <div class="button"><button type='submit' name="submitproduct" style="margin-top:10px">submit</button></div>
        <div class="astres">
        <p>
            <span class="full-moon">🌕</span>
            <span class="star">⭐</span>
            <span class="star">⭐</span>
            <span class="full-moon">🌕</span>
            <span class="star">⭐</span>
            <span class="star">⭐</span>
            <span class="full-moon">🌕</span>
</p>
        </div>
    </div>
    
        
    
</body>
</html>