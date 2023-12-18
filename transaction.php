<?php
include 'DBconnect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
         <link rel="stylesheet" href="Styling/header.css">
          <link rel="stylesheet" href="Styling/main.css">
      <link rel="stylesheet" href="Styling/nav.css">
        <link rel="stylesheet" href="Styling/trans.css">
       <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
            <script src="Scripting/header.js" defer> </script> 
</head>
<body>
     <nav>
        <ul>
            <li> <a href="dashboard.php"> <span class="material-symbols-outlined icons">dashboard</span> Dashboard </a>
            </li>
            <li> <a href="customerAccounts.php"> <span class="material-symbols-outlined icons">person_search</span>Customers</a> </li>

            <li> <a href="transaction.php"> <span class="material-symbols-outlined icons">receipt_long</span> Transaction </a>
            </li>
        </ul>
    </nav>
<main> 
  <header>
        <aside>
            <button>
                <span class="material-symbols-outlined defaultIcon"> menu </span>
                <span class="material-symbols-outlined closeIcon"> close </span>
            </button>
        </aside>
           <h1> Transaction</h1>
        </header>

        <form  method="POST">
            <aside> 
                <input type="text" placeholder="Steve" name="firstName" required autocomplete="off" />
                <input type="text" placeholder="Jobs" name = "lastName" /> 
            </aside>

             <aside>
                     <label> Account Number
                        <input type="number" name ="accountNumber" placeholder="1223333993"  required >
                     </label> 
            </aside>

            <aside>
                <label>  Amount 
                <input type="number" name="balance" min="0" value="0"/> 
                </label>
            </aside>

            <aside> 
                <button type="submit" name="submit">Deposit </button>
                <button  name="submit">Withdraw </button>
            
            </aside>
        </form>
    </main>

</body>
</html>