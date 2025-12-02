<?php
// Tệp View CHỈ chứa HTML và logic hiển thị (echo, foreach)
// Tệp View KHÔNG chứa câu lệnh SQL
?>
<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<title>PHT Chương 5 - MVC</title>
<style>
table { width: 100%; border-collapse: collapse; }
th, td { border: 1px solid #ddd; padding: 8px; }
th { background-color: #f2f2f2; }
</style>
</head>
<body>
<h2>Thêm Sinh Viên Mới (Kiến trúc MVC)</h2>
<form method="post" action="">
    <label>Tên Sinh Viên:</label>
    <input type="text" name="ten_sinh_vien" required><br><br>
    <label>Email:</label>
    <input type="email" name="email" required><br><br>
    <input type="submit" value="Thêm">
</form>
<h2>Danh Sách Sinh Viên (Kiến trúc MVC)</h2>
<table>
<tr>
<th>ID</th>
<th>Tên Sinh Viên</th>
<th>Email</th>
<th>Ngày Tạo</th>
</tr>
<?php
    foreach ($danh_sach_sv as $sv) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($sv['id']) . "</td>";
        echo "<td>" . htmlspecialchars($sv['ten_sinh_vien']) . "</td>";
        echo "<td>" . htmlspecialchars($sv['email']) . "</td>";
        // Checking if 'ngay_tao' exists, otherwise leaving blank or checking common alternatives like 'created_at'
        $ngay_tao = isset($sv['ngay_tao']) ? $sv['ngay_tao'] : (isset($sv['created_at']) ? $sv['created_at'] : '');
        echo "<td>" . htmlspecialchars($ngay_tao) . "</td>";
        echo "</tr>";
    }
?>
</table>
</body>
</html>