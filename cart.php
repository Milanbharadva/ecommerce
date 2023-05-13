<?php
$id = $_GET["id"];
$conn=mysqli_connect("localhost","root","","mobile-planet");

$qry="SELECT * FROM samsung WHERE ID=$id";
$result=mysqli_query($conn,$qry);
$row = mysqli_fetch_assoc($result);

$color1=$row['color1'];
$color2=$row['color2'];
$color3=$row['color3'];
$image1=$row['image1'];
$image2=$row['image2'];
$image3=$row['image3'];
$description=$row['description'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="resp.css?v=<?php echo time(); ?>">
    <style>
    html {
        scroll-behavior: smooth;
    }

    .color-link {
        cursor: pointer;
        height: 40px;
        width:140px;
        font-size:20px;
    }
    </style>
</head>

<body>
    <div class="container-img-text">
        <div class="img-contains">
            <img id="mobile-img" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image1']);?>"
                alt="">
        </div>
        <div class="img-description">
            <h1 style="font-size:50px;">Key Features</h1>
            <h1>PRICE:<?php echo $row['price']; ?></h1>
            <h1>RAM:<?php echo $row['ram'];  ?> GB</h1>
            <h1>ROM:<?php echo $row['rom']; ?> GB</h1>
            <H1>COLORS:</H1>
            <div class="colors">
                <button class="color-link" onclick='toggleimage1()'><?php echo $color1 ;?></button>
                <button class="color-link" onclick='toggleimage2()'><?php echo $color2 ;?></button>
                <button class="color-link" onclick='toggleimage3()'><?php echo $color3 ;?></button>
            </div>
        </div>
    </div>
    <script>
    function toggleimage1() {
        document.getElementById("mobile-img").src =
            "data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image1']);?>";
    }

    function toggleimage2() {
        document.getElementById("mobile-img").src =
            "data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image2']);?>";
    }

    function toggleimage3() {
        document.getElementById("mobile-img").src =
            "data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image3']);?>";
    }
    </script>
</body>

</html>