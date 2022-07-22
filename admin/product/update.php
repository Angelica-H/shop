<!DOCTYPE html>
<html>
<head>
<title>Update</title>
<link rel="stylesheet" href="style.css"/>
</head>
<body>
    <?php
        // Ket not db
        include('../connect.php');
        $id=$_GET['id'];
        $sql="select * from `dt_detail` where Id=$id";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_array($result)){
    ?>
    <form method="POST" class="form" style="padding:25px">
    <h2>Sửa sản phẩm</h2>
    <label>Name: <input type="text" value="<?php echo $row['Name']; ?>" style="width:250px; margin-bottom:5px" name="name"></label><br/>
    <label>Price: <input type="text" value="<?php echo $row['Price']; ?>" style="width:250px; margin-bottom:5px" name="price"></label><br/>
    <label>Image: <input type="text" value="<?php echo $row['Image']; ?>" style="width:250px; margin-bottom:5px" name="image"></label><br/>
    <label>Image2: <input type="text" value="<?php echo $row['Image2']; ?>" style="width:250px; margin-bottom:5px" name="image2"></label><br/>
    <label>Data_item: <input type="text" value="<?php echo $row['Data_item']; ?>" style="width:250px; margin-bottom:5px" name="data_item"></label><br/>
    <label>Description: <input type="text" value="<?php echo $row['Description']; ?>" style="width:250px; margin-bottom:5px;" name="description"></label><br/>
    <input type="submit" value="Update" name="update">
    <?php } ?>

    <?php
        if (isset($_POST['update'])){
        $id=$_GET['id'];
        $name=$_POST['name'];
        $price=$_POST['price'];
        $img=$_POST['image'];
        $img2=$_POST['image2'];
        $dataitem=$_POST['data_item'];
        $des=$_POST['description'];
        // Ket not db
        include('../connect.php');
        $sql = "UPDATE `dt_detail` SET Name='$name', Price='$price', Image='$img', Image2='$img2', Data_item='$dataitem', Description='$des' WHERE id='$id'";

        if ($conn->query($sql) === TRUE) {
        header('location:../product/view.php');
        } else {
        echo "Sửa thất bại " . $conn->error;
        }
        $conn->close();
        }
    ?>
</form>
</body>
</html>