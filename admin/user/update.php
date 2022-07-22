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
        $sql="select * from `dt_login` where ID=$id";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_array($result)){
    ?>
    <form method="POST" class="form" style="padding:25px">
    <h2>Sửa người dùng</h2>
    <label>Email: <input type="text" value="<?php echo $row['Email']?>" style="width:250px; margin-bottom:5px" name="email"></label><br/>
    <label>Password: <input type="text" value="<?php echo $row['Password']?>" style="width:250px; margin-bottom:5px" name="password"></label><br/>
    <input type="submit" value="Update" name="update">
    <?php } ?>
    <?php
        if (isset($_POST['update'])){
        $id=$_GET['id'];
        $email=$_POST['email'];
        $pw=$_POST['password'];      
        // Ket not db
        include('../connect.php');
        $sql = "UPDATE `dt_login` SET Email='$email', Password='$pw' WHERE ID='$id'";

        if ($conn->query($sql) === TRUE) {
            header('location:../user/view.php');
        } else {
            echo "Sửa thất bại " . $conn->error;
        }
        $conn->close();
        }
    ?>
</form>
</body>
</html>