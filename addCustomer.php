<?php
include 'DBconnection.php';

if (isset($_POST['submit'])) {
    $accountNumber = $_POST['accountNumber'];
    $balanceIn = $_POST['balance'];
    $firstNameIn = $_POST['firstName'];
    $lastNameIn = $_POST['lastName'];
    $emailIn = $_POST['email'];
    $mobileIn = $_POST['mobile'];
    $genderIn = $_POST['gender'];


    $sql = " INSERT INTO `TellerCrud` (id, accountNumber, balance, firstName, lastName, email, mobile, gender)
        VALUES (NULL, '$accountNumber','$balanceIn','$firstNameIn', '$lastNameIn','$emailIn', '$mobileIn', '$genderIn')";

    $result = mysqli_query($con, $sql);
    if ($result) {

        header("Location: customerAccounts.php? msg= New Account Created Successfully");
    } else {
        echo "Failed " . mysqli_error($con);
    }
}

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
    <link rel="stylesheet" href="Styling/transDelUp.css">
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
            <h1> Add New Accounts</h1>
        </header>

        <section class="form">
            <form method="POST">
                <aside>
                    <input type="text" placeholder="Steve" name="firstName" required autocomplete="off" />
                    <input type="text" placeholder="Jobs" name="lastName" />
                </aside>

                <aside>
                    <label> Email
                        <input type="email" name="email" placeholder="name@gmail.com"  required>
                    </label>
                </aside>

                <aside>
                    <label>Mobile
                        <input type="text" name="mobile" placeholder="0777...." required>
                    </label>
                </aside>

                <aside>
                    <label>Male <input type="radio" name="gender" value="Male" checked /></label>
                    <label> Female <input type="radio" name="gender" value="Female" /></label>
                </aside>

                <aside>
                    <label> Account Number
                        <input type="number" name="accountNumber" placeholder="1223333993" required>
                    </label>
                </aside>

                <aside>
                    <label> Initial Balance
                        <input type="number" name="balance" min="0" value="0" />
                    </label>
                </aside>

                <aside>
                    <button type="submit" name="submit">Save </button>
                    <button onclick="window.location.href='customerAccounts.php'">Cancel </button>

                </aside>
            </form>
        </section>
    </main>
</body>

</html>