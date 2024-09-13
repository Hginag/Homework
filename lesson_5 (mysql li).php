<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "Tự học buổi 5","<br>";

$dbh = mysqli_connect('localhost', 'root', '', 'melody');
// Kết nối tới MySQL server

if (!$dbh)
    die("Unable to connect to MySQL: " . mysqli_connect_error());
// Nếu kết nối thất bại thì đưa ra thông báo lỗi

// Thêm dữ liệu 
$sql_stmt = "INSERT INTO `my_contacts` (`full_names`,`gender`,`contact_no`,`email`,`city`,`country`)"; 
$sql_stmt .= "VALUES('Poseidon','Mail','541',' poseidon@sea.oc ','Troy','Ithaca')"; 

$result = mysqli_query($dbh, $sql_stmt); // Thực thi câu lệnh SQL

if (!$result) {
    die("Adding record failed: " . mysqli_error()); 
    // Thông báo lỗi nếu thực thi câu lệnh thất bại
} else {
    echo "Dữ liệu đã được thêm vào","<br>";
}

// Cập nhật dữ liệu 
    $sql_stmt = "UPDATE `my_contacts` SET `contact_no` = '785',`email` = 'poseidon@ocean.oc'";
    $sql_stmt .= "WHERE `id` = 5";
    
    $result = mysqli_query($dbh,$sql_stmt);
    // Thực thi câu lệnh SQL

    if (!$result) {
        die("Deleting record failed: " . mysqli_error());
        // Thông báo lỗi nếu thực thi thất bại
    } else {
        echo "Dữ liệu đã được cập nhật thành công","<br>";
    }

// Xoá dữ liệu 

$id = 6; 

$sql_stmt = "DELETE FROM `my_contacts` WHERE `id` = $id"; 
// Câu lệnh SQL Delete

$result = mysqli_query($dbh,$sql_stmt); 
// Thực thi câu lệnh SQL

if (!$result) {
    die("Deleting record failed: " . mysqli_error());
    // Thông báo lỗi nếu thực thi thất bại 
} else {
    echo "ID số $id đã được xoá ";
}


// Hiển thị dữ liệu 
echo "<br>";
echo "<br>";
$sql_stmt = "SELECT * FROM my_contacts";
// Câu lệnh select

$result = mysqli_query($dbh, $sql_stmt);
// Thực thi câu lệnh SQL

if (!$result)
    die("Database access failed: " . mysqli_connect_error());
// Thông báo lỗi nếu thực thi thất bại

$rows = mysqli_num_rows($result);
// Lấy số hàng trả về
// Hiển thị dữ liệu 
if ($rows) {
    while ($row = mysqli_fetch_array($result)) {
        echo 'ID: ' . $row['id'] . '<br>';
        echo 'Full Names: ' . $row['full_names'] . '<br>';
        echo 'Gender: ' . $row['gender'] . '<br>';
        echo 'Contact No: ' . $row['contact_no'] . '<br>';
        echo 'Email: ' . $row['email'] . '<br>';
        echo 'City: ' . $row['city'] . '<br>';
        echo 'Country: ' . $row['country'] . '<br><br>';
    }
}

mysqli_close($dbh); // Đóng kết nối CSDL
    ?>

</body>
</html>