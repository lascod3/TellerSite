
     <?php
include 'DBconnection.php';

$id = $_GET['deleteID'];

if(isset($_POST['submit'])){

$sql = "DELETE FROM `TellerCrud` WHERE id = $id";
$result = mysqli_query($con,$sql);

    if($result){
        // echo "Deleted successfully";
        header('location:customerAccounts.php');
    }
    else
    {
        die("Connection Failed".mysqli_connect_error($con));
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
           <h1> Delete Customer Account</h1>
        </header>

   

        <?php
           $sql = "SELECT * FROM `TellerCrud` WHERE id=$id";
           $result = mysqli_query($con, $sql);
           $row = mysqli_fetch_assoc($result);

            $accountNumber = $row['accountNumber'];
            $balanceIn = $row['balance'];
            $firstNameIn = $row['firstName'];
            $lastNameIn =$row['lastName'];
            $emailIn = $row['email'];
            $mobileIn = $row['mobile'];
            $genderIn = $row['gender'];
           
        ?>
        <form method="POST">
            <aside>
                <input type="text" value="<?php echo  $firstNameIn ?>" name="firstName" disabled required autocomplete="off" />
                <input type="text" value="<?php echo  $lastNameIn ?>" disabled name="lastName" />
            </aside>

            <aside>
                <input type="email" name="email" value="<?php echo  $emailIn ?>" disabled required>
            </aside>

            <aside>
            <label>Mobile
                <input type="number" name="mobile" value="<?php echo  $mobileIn ?>" disabled required>
                </label>
            </aside>

            <aside>
                <label>Male <input type="radio" name="gender" disabled value="Male" checked/></label>
                <label> Female <input type="radio" name="gender"disabled value="Female"/></label>
            </aside>

            <aside>
                <label> Account Number
                    <input type="number" name="accountNumber"  value="<?php echo $accountNumber?>" disabled/>
                </label>
            </aside>

            <aside>
                <label> Initial Balance
                    <input type="number" name="balance" min="0" disabled value="<?php echo $balanceIn?>" />
                </label>
            </aside>

            <aside>
                <button type="submit" name="submit">Delete </button>
                <a href="customerAccounts.php"> Cancel  </a>
             </aside>

                <!-- <button onclick="window.location.href='customerAccounts.php'">Cancel </button> -->

        </form>
    </main>
    
</body>
</html>