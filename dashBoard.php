<?php
include 'DBconnection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Styling/dashboard.css">
    <link rel="stylesheet" href="Styling/nav.css">
     <link rel="stylesheet" href="Styling/header.css">
       <link rel="stylesheet" href="Styling/main.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="Scripting/header.js" defer> </script> 

</head>

<body>
    <nav>
        <ul>
            <li> <a href="dashboard.php"> <span class="material-symbols-outlined icons">dashboard</span> Dashboard </a>
            </li>
            <li> <a href="customerAccounts.php"> <span class="material-symbols-outlined icons">person_search</span>Customers</a> </li>

            <li> <a href="transaction.php"> <span class="material-symbols-outlined icons">receipt_long</span>
                    Transaction </a>
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
            <h1> 
            <span class="typed-word"> </span>
            <span> &nbsp; </span>
            </h1>
        </header>

        <?php

        $sql = "SELECT sum(balance) AS sum FROM `TellerCrud`";
        $result = mysqli_query($con, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            $output = "£ " . " " . $row['sum'];
        }
        ?>

        <?php
        $sql = "SELECT * FROM `TellerCrud`";
        $result = mysqli_query($con, $sql);

        if ($result) {
            $num = mysqli_num_rows($result);
        }

        ?>


        <div>
            <ul>
                <li>
                    <span class="material-symbols-outlined icon1">
                        payments
                    </span>
                    <span> Total Balance</span>
                    <span>
                        <?php echo $output; ?>
                    </span>
                </li>
                <li>


                    <span class="material-symbols-outlined icon2">groups</span>
                    <span> Total Customer</span>
                    <span>
                        <?php echo $num; ?>
                    </span>
                </li>
            </ul>
        </div>


    </main>
</body>

</html>