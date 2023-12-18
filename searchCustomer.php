<?php
include 'DBconnection.php';
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
    <link rel="stylesheet" href="Styling/searchCustomer.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
          <h1> Search Customers </h1>
        </header>


        <div>
            <form method="post">
                <input type="search" placeholder="search for Customer" name="search" />
                <button type="submit" name="submit"> <i class="fa-solid fa-magnifying-glass"></i></button>
                <!-- <button type="submit" name="submit">click</button> -->
            </form>
        </div>

        <section class="tableWrapper">
            <table>
                <?php
              
                //   check that the button which has the name Attribute set as submit is clicked then enter the IF Statement 
                if (isset($_POST['submit'])) {

                    $search = $_POST['search'];
                    $sql = "SELECT * FROM `TellerCrud` where id='$search' OR firstName='$search' OR lastName='$search'";
                    $result = mysqli_query($con, $sql);

                    // if the query executed then enter IF Statement
                    if ($result) {

                        //Check to see if the row is greater the Zero before entering the IF statement
                        if (mysqli_num_rows($result) > 0) {

                            echo '
                                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Account Name</th>
                        <th>Balance</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Gender</th>
                        <th>Operations</th>
                    </tr>
                </thead>  
                        ';
                            //Fetch the date from the database
                            while ($row = mysqli_fetch_assoc($result)){
                             $id = $row["id"];
                             $accountNumberIn = $row["accountNumber"];
                            $balanceIn = $row["balance"];
                            $firstNameIn = $row["firstName"];
                            $lastNameIn = $row["lastName"];
                            $emailIn = $row["email"];
                            $mobileIn = $row["mobile"];
                            $genderIn = $row["gender"];
                            echo '
                         <tbody>
                                <tr>
                                <td data-desc="ID"> ' . $id . ' </td>
                                <td data-desc="Account Number"> ' . $accountNumberIn . '</td>
                                <td data-desc="Balance">' . $balanceIn . ' </td>
                                <td data-desc="First Name">' . $firstNameIn . '</td>
                                <td data-desc="Last Name">' . $lastNameIn . ' </td>
                                <td data-desc="Email">' . $emailIn . '</td>
                                <td data-desc="Mobile"> ' . $mobileIn . '</td>
                                <td data-desc="Gender">' . $genderIn . '</td>
                                 <td data-desc="Operations"> 
                                    <a href="updateCustomer.php?updateID=' . $id . '"> <i class="fa-solid fa-pen-to-square"> </i> </a>
                                    <a href="deleteCustomer.php?deleteID=' . $id . '"> <i class="fa-solid fa-trash"></i>  </a> 
                                                        
                                </td>
                            </tr>
                          </tbody>
                        ';
                        }
                        } else {
                            echo '
                        <div>
                        <span class="material-symbols-outlined">error</span>
                        <h2>Customer not found </h2>
                        </div>
                        ';
                        }
                    }
                }
                ?>


            </table>
        </section>

    </main>

</body>

</html>