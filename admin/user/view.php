<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Admin</title>
  <style type="text/css">
    .btn {
      /* background-color:red; */
    }

    .link {
      text-decoration: none;
      padding: 10px;
      font-size: 20px;
      font-family: 600;
      color:black;
    }

    .table_form {
      margin:20px;
      display: flex;
      justify-content: center;
      align-items: center;
      /* background: red; */
    }

    .table_itema {
      font-weight: 600;
      color: black;
      border: 1px solid black;
      font-size:17px;
    }

    .table_item {
      font-size: 17px;
      border: 1px solid black;
    }

    .container {
      display: flex;
      justify-content: space-between;
    }
    
    .container-item {
      padding: 0 20px;
    }
  </style>
</head>
<body>
  <!-- <a href="create.php" class="link" id="float-up">Thêm</a> -->
  <!-- <a href="view.php" class="link">Sửa/Xóa</a> -->
  <a href="../index.php" class="link">Trang chủ</a>
  <!-- <a href="#float-down" class="link">
    <i class="fa fa-angle-down"></i>
  </a> -->
  <h2 style="font-size:25px;padding:10px 10px 0;justify-content:center;display:flex">Sửa / Xóa Người Dùng</h2>
      <table class="table_form">
        <tr>
          <td class="table_itema">ID</td>
          <td class="table_itema">Email</td>
          <td class="table_itema">Password</td>         
          <td class="table_itema">Edit</td>
          <td class="table_itema">Delete</td>
        </tr>
      <?php
        // Ket not db
        include('../connect.php');
        $sql="select * from dt_login";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_array($result)){
      ?>
      <tr>
        <td class="table_itema"><?php echo $row['ID']; ?></td>
        <td class="table_item"><?php echo $row['Email']; ?></td>       
        <td class="table_item"><?php echo $row['Password']; ?></td>
        <td class="table_item"><a href="update.php?id=<?php echo $row['ID']?>">Edit</a></td>
        <td class="table_item"><a href="delete.php?id=<?php echo $row['ID']?>">Delete</a></td>
      </tr>
      <?php } ?>
      <div class="container">
        <div class="container-item">Tổng người dùng:
          <?php 
            include('../connect.php');
            $result = mysqli_query($conn, 'select count(id) as total from dt_login');
            $row = mysqli_fetch_array($result);
            $total_records = $row['total'];
          ?>
        </div>
        <div class="container-item">
          <?php echo $total_records?>
        </div>
      </div> 
      </table>    

      <div id="float-down">        
      </div>     
      <!-- <a href="#float-up" class="link" style="display: flex; justify-content: flex-end; padding: 0 10px 20px; margin-right:10px">
        <i class="fa fa-angle-up"></i>
      </a> -->
</body>
</html>