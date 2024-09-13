<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework</title>
    <style>
 
    </style>
</head>
<body>
    <?php
    //Viết một chương trình PHP để in ra số chẵn từ 1 đến 10.
    echo "Bài 1","<br>";
    for ($i = 1; $i <= 10; $i++) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
    }
    echo "<br>";

    //Viết một chương trình PHP để kiểm tra xem một số nguyên có phải là số nguyên tố hay không.
    echo "<br>";
    echo "Bài 2","<br>";
    $a = 35665;
    $check = 1;
    if($a <= 1){
        echo $a. " không là số nguyên tố";
    $check = -1;
    }
    elseif ($a == 2)
    {
        echo $a. " là số nguyên tố";
        $check = -1;
    }   
    else
    {
        for ($i=2; $i<$a;$i++)
        {
            if ($a % $i == 0)
            {
            $check = 0;
            }
        }
    }

    if ($check==1){
        echo $a. " là số nguyên tố";
    }
    elseif($check==0){
        echo $a. " không là số nguyên tố";
    }

    echo "<br>";

    /*Viết một hàm PHP có tên inHinhChuNhat nhận vào hai tham số là chiều rộng và chiều cao, 
    và in ra một hình chữ nhật sử dụng dấu sao (*) với kích thước đã cho. 
    Gọi hàm này để in ra một hình chữ nhật có chiều rộng là 5 và chiều cao là 3 */
    echo "<br>";
    echo "Bài 3","<br>";
    function inHinhChuNhat($chieuRong, $chieuCao) {
        for ($i = 1; $i <= $chieuCao; $i++) {
            for ($j = 1; $j <= $chieuRong; $j++) {
                echo "*";
            }
            echo "<br>";
        }
    }
    inHinhChuNhat(5,3);



    //Thực hành
    //Viết chương trình PHP, sử dụng câu lệnh điều kiện if else để kiểm tra 1 số là số chẵn hay số lẻ?
    
    echo "<br>";
    echo "Bài 1","<br>";
    $x = -2;
    if ($x < 0){
        echo $x." không là số chẵn và số lẻ";
    }elseif ($x%2==0){
        echo $x." là số chẵn";
    } else {
        echo $x." là số lẻ";
    }
    echo "<br>";
    // Viết chương trình PHP, sử dụng câu lệnh if else để xếp hạng học lực của học sinh dựa trên điểm điểm thi giữa kỳ, điểm thi cuối kỳ.
    //Viết chương trình PHP, sử dụng câu lệnh vòng lặp For để in ra số từ 1 đến 100.
    echo "<br>";
    echo "Bài 4","<br>";
    for ($i = 1; $i <= 100; $i++){ 
        echo $i . " ";
    }
    echo "<br>";
    echo "<br>";
    //Viết trang PHP hiển thị dãy số từ 1 đến 100 sao cho số chẵn là chữ in đậm, số lẻ là chữ in thường.Kết quả: 1 2 3 4....., 100 .Hướng dẫn: Sử dụng vòng lặp for, 1 biến đếm i, toán tử %.
    echo "Bài 5","<br>";
    for ($i = 1; $i <= 100; $i++){
        if ($i % 2 == 0) {
            echo "<b>".$i."</b>", " ";
        }else {
            echo $i. " ";
        }
        }
    //Viết chương trình PHP, sử dụng vòng lặp For each in ra các năm trong mảng có sẵn dưới đây: 
    echo "<br>";
    echo "<br>";
    echo "Bài 6","<br>";
    $nam = array(1990, 1991, 1992, 1993, 1994, 1995);
    foreach ($nam as $value){
        echo $value."<br>";
    }
    ?>
</body>
</html>