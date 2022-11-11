<?php
    session_start();
    include 'config.php';
    include 'get_billing_history.php';
    require_once('./php/createbillinghistory.php');
    if(!isset($_SESSION['user_id'])){
        header('location:login_page.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Billing History</title>
      <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
  </head>
  <body class="bodybackground">
      <nav class="navbar">
        <ul class="nav">
            <li><a href="main.php"><img width="100px" src="./img//Screen Shot 2022-11-09 at 21.51.43.png" alt=""></a></li>
            <li><a href="stadium.php" style="margin-top: 10px;">Stadium</a></li>
            <li><a href="billinghistory.php" style="margin-top: 10px;">Billing History</a></li>
            <li><a href="balance.php" style="margin-top: 10px;">Balance</a></li>
            <li><a href="logout.php" style="margin-top: 10px;">Log out</a></li>
        </ul>
      </nav>
      <br><br>
        <div style="background:#A0E7E5; width:1000px; margin:auto; border: 2px solid black" >
          <h2 class="textprimary" style="color: red; padding:10px; text-align:center">YOUR PAYMENTS </h2>
          <?php
            $result = gethistory($_SESSION['user_id']);
            while($row = mysqli_fetch_assoc($result)){
              createbilling($row['matchname'],$row['time'],$row['numberofseats'],$row['amount']);
            }
          ?>
        </div>
        <br><br>
  </body>
</html>