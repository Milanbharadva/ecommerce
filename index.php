<?php
session_start();
error_reporting(E_ERROR | E_PARSE);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mobile planet</title>
    <link rel="icon" type="image/x-icon" href="./images/web-icon.jpg" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="resp.css">
    <style>
    .active {
        color: #fd0909;
        background-color: black;
    }
    </style>
</head>

<body>
    <header class="header">
        <nav>
            <ul class="nav-list">
                <li class="nav-item">
                    <img src="./images/logo.png" alt="" height="50px" width="200px" />
                </li>
                <li class="nav-item"><a href="index.php" class="active">Home</a></li>
                <li class="nav-item"><a href="about.php">About us</a></li>
                <li class="nav-item"><a href="contact.php">Contact us</a></li>
                <?php
          if($_SESSION["statussign"]){
            ?>
                <li class="nav-item"><a href="./signout.php">sign out</a></li>
                <?php
          }
          else{
            ?>
                <li class="nav-item"><a href="./signin.html">sign in</a></li>
                <?php
          }
          ?>
                <li class="nav-item"><a href="./register.html">register</a></li>
            </ul>
        </nav>
    </header>
    <!-- main section displaying data -->
    <div class="container">
        <?php
        $conn=mysqli_connect("localhost","root","","mobile-planet");
        $qry="SELECT * FROM samsung";
        $result = mysqli_query($conn, $qry);
        echo mysqli_num_rows($result);
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    ?>
        <div class="items">
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image1']);?>" height="300px"
                width="300px" class="img-db" />
            <div class="text-after-img-data">
                <p> <?php echo $row["name"]?></p>
                <?php  $id=$row["ID"]; echo $id; ?>
                <p>
                    <center> Color:</center>
                <ul>
                    <li><?php echo $row["color1"]?></li>
                    <li><?php echo $row["color2"]?></li>
                    <li><?php echo $row["color3"]?></li>
                </ul>
                </p>
                <p>Price: <?php echo $row["price"]?></p>
                <p>RAM: <?php echo $row["ram"]?>GB</p>
                <p>ROM: <?php echo $row["rom"]?>GB</p>
                <a href="cart.php?id=<?php echo $id; ?>" class="btn-cart">Add to cart</a>
                <button class="btn-buy">Buy Now</button>
            </div>
        </div>
        <?php
  }
} else {
  echo "0 results";
}
 ?>
    </div>
</body>

</html>