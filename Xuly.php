<?php
$conn = mysqli_connect('localhost', 'root', 'To2blMA6', 'dangkihocphan') or die ('Lỗi kết nối'); mysqli_set_charset($conn, "utf8");
if(isset($_POST['dangky'])){
$username = trim($_POST['username']);
$password = trim($_POST['password']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);
$class = trim($_POST['class']);

$sql = "SELECT * FROM sinhvien WHERE username = '$username' OR email = '$email'";

// Thực thi câu truy vấn
$result = mysqli_query($conn, $sql);

// Nếu kết quả trả về lớn hơn 1 thì nghĩa là username hoặc email đã tồn tại trong CSDL
if (mysqli_num_rows($result) > 0)
{
echo '<script language="javascript">alert("Bị trùng tên hoặc chưa nhập tên!"); window.location="register.php";</script>';

// Dừng chương trình
die ();
}
else {
$sql = "INSERT INTO sinhvien (username, password, email, phone,malop) VALUES ('$username','$password','$email','$phone','$class')";
$result = mysqli_query($conn, $sql);
echo '<script language="javascript">alert("Đăng ký thành công!"); window.location="register.php";</script>';
 <?php require 'dangnhap.php';?></td>
}
}
?>