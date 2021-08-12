<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="style.css"/>
</head>
<body>

<form method="post" action="Dangki.php" class="form">

<h2 align="center">Đăng ký tài khoản</h2>
<table align="center" border="1 px" cellpadding="1">
    <tr>
        <td>Username:</td><td> <input type="text" name="username" value="" required></td>
    </tr>
    <tr>
        <td>Password:</td><td> <input type="password" name="password" value="" required/></td>
    </tr>
    <tr>
        <td>Email:</td><td> <input type="email" name="email" value="" required/></td>
    </tr>
    <tr>
        <td>Phone:</td><td> <input type="text" name="phone" value="" required/></td>
    </tr>
    <tr>
        <td>ClassRoom:</td><td> <input type="text" name="class" value="" required/></td>
    </tr>
    <tr>
       <td colspan="2" align="center"><input type="submit" name="dangky" value="Đăng Ký"/>
        <?php require 'Xuly.php';?></td>
    </tr>
</table>
</form>

</body>
</html>