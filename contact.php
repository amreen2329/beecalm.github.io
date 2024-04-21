<?php
$servername="Localhost";
$username="root";
$password="";
$database="candles";

$conn=mysqli_connect($servername,$username,$password,$database)

or die ("not connected sucessfully".mysqli_connect_error());




if(isset($_POST['submit'])){


$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$message = $_POST['message'];


$sql="INSERT INTO `contact` (`name`, `surname`, `email`, `message`) 
VALUES('$name', '$surname', '$email', '$message');";

$result=mysqli_query($conn,$sql);

// if($result)
// {
//     echo"Message Sent";
// }
// else
// {
//     echo"Plaese Try Again".mysqli_error($conn);
// }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="contact.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    />
  </head>
  <body>
  <header>
      <input type="checkbox" name="" id="toggler" />
      <label for="toggler" class="fas fa-bars"></label>

      <a href="index.php"><img class="logo" src="imgs-index/logo.png" alt="" /></a>

      <nav class="navbar">
        <a href="index.php">Home</a>
        <a href="seasonal.php">Seasonal Range</a>
        <a href="custom.php">Custom Range </a>
        <a href="elegance.php">Elegance Range</a>
        <a href="giftsets.php">Gift-Sets</a>
        <a href="contact.php">Contact</a>
      </nav>

      <div class="icons">
        <a href="#" class="fas fa-heart"></a>
        <a href="mycart.php" class="fas fa-shopping-cart"></a>
        <a href="#" class="fas fa-user"></a>
      </div>
    </header>
    

    <div class="container5">
      <form action="<?php echo $_SERVER['PHP_SELF']  ?>" method="post">
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name"   />
        </div>
        <div class="form-group">
          <label for="surname">Surname:</label>
          <input type="text" name="surname" id="surname" />
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email"/>
        </div>
        <div class="form-group">
          <label for="message">Message:</label>
          <textarea id="message" name="message" rows="4" required></textarea>
        </div>
        <div class="form-group">
          <input type="submit" value="Submit" name="submit"/>
        </div>
      </form>
    </div>

   <div>
    <?php include 'footer.php'?>
   </div>
  </body>
</html>

</body>
</html>