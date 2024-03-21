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
<div class="produit">Supplier</div>

    <div class="product">
        <form action="../Back_end/produit.php" class='forme' method="post">
           
           <div class="nameqte">
            <div class='name'>
                <label >Name</label> <br>
                <input type="text" placeholder="The name" name='name'>
            </div>
            <div class="quantity">
                <label>Adress</label> <br>
                <input type="number" placeholder='adress' name='adress'>
            </div>
           </div>
           <div class="numbers">
            <label>Tel</label> <br>
            <input type="text"placeholder='tel +' name='tel' style="width :98%; height: 25px;" >
        
           </div>
          
           <div class="buttonn"><button type='submit' name="submitproduct">submit</button></div>
           
           
        </form>
    </div>
    
</body>
</html>