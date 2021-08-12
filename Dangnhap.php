<html>
<head>
	<title>Trang đăng nhập</title>
	<meta charset="utf-8">
</head>
<body>
	<form method="POST" action="login.php">
	<h2 align="center">Đăng nhập</h2>
	    	<table border="1" align="center">
	    		<tr>
	    			<td>Username</td>
	    			<td><input type="text" name="username" ></td>
	    		</tr>
	    		<tr>
	    			<td>Password</td>
	    			<td><input type="password" name="password"></td>
	    		</tr>
	    		<tr>
	    			<td align="center"> <input type="submit" name="btn_submit" value="Đăng nhập"></td>
	    			<td align="center"> <input type="submit" name="btn_dangki" value="Đăng kí">
	    		</td>
	    			 
	    		</tr>
	    	</table>
	    		<?php require 'Dangki.php'; ?>
	    		<?php require 'trangsv.php'; ?>
  </form>
</body>
</html>