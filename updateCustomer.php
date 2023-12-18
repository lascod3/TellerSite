<?php
include 'DBconnection.php';

$id = $_GET['updateID'];

if (isset($_POST['submit'])) {
    $accountNumber = $_POST['accountNumber'];
    $balanceIn = $_POST['balance'];
    $firstNameIn = $_POST['firstName'];
    $lastNameIn = $_POST['lastName'];
    $emailIn = $_POST['email'];
    $mobileIn = $_POST['mobile'];
    $genderIn = $_POST['gender'];

    $sql = "UPDATE `TellerCrud` SET accountNumber =$accountNumber, balance=$balanceIn, firstName ='$firstNameIn', lastName='$lastNameIn', email='$emailIn', mobile='$mobileIn', gender='$genderIn' WHERE id=$id";

    $result = mysqli_query($con, $sql);
    if ($result) {
        header("Location: customerAccounts.php?");
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
    <link rel="stylesheet" href="Styling/update.css">
    <script src="Scripting/header.js" defer> </script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>

    <main>
        <header>
            <aside>
                <button>
                    <span class="material-symbols-outlined defaultIcon"> menu </span>
                    <span class="material-symbols-outlined closeIcon"> close </span>
                </button>
            </aside>
            <h1> Update Customer Account</h1>
        </header>

        <?php
        $sql = "SELECT * FROM `TellerCrud` WHERE id=$id";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);

        $accountNumber = $row['accountNumber'];
        $balanceIn = $row['balance'];
        $firstNameIn = $row['firstName'];
        $lastNameIn = $row['lastName'];
        $emailIn = $row['email'];
        $mobileIn = $row['mobile'];
        $genderIn = $row['gender'];

        ?>
        <form method="POST">
            <aside>
                <input type="text" value="<?php echo  $firstNameIn ?>" name="firstName" required autocomplete="off" />
                <input type="text" value="<?php echo  $lastNameIn ?>" name="lastName" />
            </aside>

            <aside>
                <input type="email" name="email" value="<?php echo  $emailIn ?>" required>
            </aside>

            <aside>
                <label>Mobile
                    <input type="number" name="mobile" value="<?php echo  $mobileIn ?>" required>
                </label>
            </aside>

            <aside>
                <label>Male <input type="radio" name="gender" value="Male" <?php echo ($row['gender'] == 'Male') ? "checked" : ""; ?> checked /></label>
                <label> Female <input type="radio" name="gender" value="Female" <?php echo ($row['gender'] == 'Female') ? "checked" : ""; ?> /></label>
            </aside>

            <aside>
                <label> Account Number
                    <input type="number" name="accountNumber" value="<?php echo $accountNumber ?>" />
                </label>
            </aside>

            <aside>
                <label> Initial Balance
                    <input type="number" name="balance" min="0" value="<?php echo $balanceIn ?>" />
                </label>
            </aside>

            <aside>
                <button type="submit" name="submit">Update </button>
                <a href="customerAccounts.php"> Cancel </a>
            </aside>

            <!-- <button onclick="window.location.href='customerAccounts.php'">Cancel </button> -->

        </form>
    </main>
</body>

</html>