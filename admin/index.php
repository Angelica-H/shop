<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<style>
     .link {
      text-decoration: none;
      padding: 10px;
      font-size: 20px;
      font-family: 600;
      color:black;
    }
    .logout {
      display:flex;
      justify-content: center;
      align-items: center;
      padding-top: 15px;
    }
    .logouta {
      display:flex;
      justify-content: center;
      align-items: center;
      padding: 20px 0;
      text-decoration:none;
      font-size:18px
    }
    .logout-item {
      border-radius:50%; 
      width:20px;height:20px;
      background-color:#1ba8ff;
      display: flex;
      justify-content: center;
      align-items: center
    } 
    .menu-ad li {
      /* list-style-type:none;  */
      padding:10px 0;
    }
    .menu-ad li button {
    background-color: black;
    height: 35px;
    width: 150px;
    }
    .menu-ad li a {
      text-decoration:none;
      color:black;
      font-size:20px;
    }
</style>
<body>  
    <ul class="menu-ad">
        <li>
            <a href="product/view.php">Quản lý sản phẩm</a>
        </li>
        <li>
            <a href="order/index.php">Quản lý đơn hàng</a>
        </li>
        <li>
            <a href="user/view.php">Quản lý người dùng</a>
        </li>
    </ul>     
    <div class="logout">
        <button class="logout-item">A</button>      
        <span style="margin-left:3px; font-size:20px">Admin</span>
    </div>
    <a href="../admin/logout.php" class="logouta">Đăng xuất</a>
    
</body>
</html>