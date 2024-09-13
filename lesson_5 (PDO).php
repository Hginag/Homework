<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$host = "localhost";  
$dbname="melody"; 
$username = "root";
$password = "";
$conn = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8", $username, $password);
// Kết nối đến cơ sở dữ liệu SQL

    // Thêm một liên hệ mới
    $stmt = $conn->prepare('INSERT INTO my_contacts (full_names, gender, contact_no, email, city, country) values (?, ?, ?, ?, ?, ?)');
    $data = array ('Giang','Female','123','giang@gmail.com','Bac Ninh','Viet Nam');
    $stmt->execute($data);
    if ($stmt->rowCount() > 0) {
        echo "Dữ liệu được thêm thành công",'<br>';
    } else {
        echo "Lỗi thêm mới.",'<br>';
    }
    // Cập nhật thông tin liên hệ
    $sql = "UPDATE my_contacts SET email = :email WHERE full_names = :full_names";
    $stmt = $conn->prepare($sql);
    $stmt->execute([
        ':email' => 'hgiang@gmail.com',
        ':full_names' => 'Giang'
    ]);
    if ($stmt->rowCount() > 0) {
        echo "Dữ liệu được cập nhật thành công",'<br>';
    } else {
        echo "Lỗi cập nhật",'<br>';
    }


    // Xóa một liên hệ
    $sql = "DELETE FROM my_contacts WHERE id = :id"; // Giả sử có cột id là khóa chính
    $stmt = $conn->prepare($sql);
    $stmt->execute([':id' => 16]);
    if ($stmt->rowCount() > 0) {
        echo "Dữ liệu đã xoá thành công",'<br>';
    } else {
        echo "Không tìm thấy dữ liệu để xóa.",'<br>';
    }
    // Hiển thị danh sách các liên hệ
    $sql = "SELECT * FROM my_contacts";
    $stmt = $conn->query($sql);
    while ($row = $stmt->fetch()) {
        echo 'ID: ' . $row['id'] . '<br>';
        echo 'Full Names: ' . $row['full_names'] . '<br>';
        echo 'Gender: ' . $row['gender'] . '<br>';
        echo 'Contact No: ' . $row['contact_no'] . '<br>';
        echo 'Email: ' . $row['email'] . '<br>';
        echo 'City: ' . $row['city'] . '<br>';
        echo 'Country: ' . $row['country'] . '<br><br>';
    }
    ?>
</body>
</html>

