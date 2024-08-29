    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
    echo "<center><h2>Homeword buổi 2</h2> </center>", "<br>";
    $name = "Pham Huong Giang"; 

    
    //1
    echo "1. Số kí tự trong chuỗi ".$name." là: ", strlen("$name") , "<br>";
    //2
    echo "2. Số từ trong chuỗi ".$name." là: ", str_word_count ("$name") , "<br>";
    //3
    echo "3. Đảo ngược của chuỗi ".$name." là: ", strrev ("$name") , "<br>";
    //4
    $chuoi_con_1 = "Nguyễn"; 
    if (strpos($name, $chuoi_con_1) === false) {
        echo "4. Chuỗi ".$chuoi_con_1. " không tìm thấy trong " .$name. "<br>";
    } else {
        echo '4. Vị trí của '.$chuoi_con_1.' trong ' .$name." là: ", strpos("$name", "$chuoi_con_1"), "<br>";
    }
    //5
    echo "5. Thay thế chuỗi bằng chuỗi khác: " ,str_replace ("birthday", "new year", "Happy birthday"), "<br>";
    
    //6
    $chuoi_lon = "Thương Mại University";
    $chuoi_con_2 = "Thương";
    $do_dai_chuoi_con= strlen($chuoi_con_2);
    echo "6. Chuỗi lớn là: ".$chuoi_lon." và chuỗi con là: ".$chuoi_con_2, " &rArr; ";
    if (strncmp($chuoi_lon, $chuoi_con_2, $do_dai_chuoi_con) === 0) {
        echo "Chuỗi lớn bắt đầu bằng chuỗi con", "<br>";
    } else {
        echo "Chuỗi lớn không bắt đầu bằng chuỗi con", "<br>";
    }
    
    //7
    echo "7. Chuyển đổi chuỗi ".$name." thành chữ hoa: ",strtoupper("$name"), "<br>";
    //8
    echo "8. Chuyển đổi chuỗi ".$name." thành chữ thường: ",strtolower("$name"), "<br>";
    //9
    $chuoi_viet_thuong = "thank you";
    echo "9. Chuyển đổi chuỗi ".$chuoi_viet_thuong." thành chuỗi in hoa chữ cái đầu tiên: ",ucwords($chuoi_viet_thuong), "<br>";
    //10
    $chuoi_co_khoang_trang = " Hello ";
    echo "10. Chuỗi ".$chuoi_co_khoang_trang." sau khi loại bỏ khoảng trắng đầu và cuối là: ", trim($chuoi_co_khoang_trang), "<br>";
    //11
    echo "11. Loại bỏ ký tự đầu tiên của một chuỗi ".$name." được: ", ltrim($name,"P"), "<br>";
    //12
    echo "12. Loại bỏ ký tự cuối cùng của một chuỗi ".$name." được: ", rtrim($name,"g"), "<br>";
    // 13
    $array = "blue , black , white";
    $color = explode (",",$array); 
    echo "13. Màu sắc đầu tiên trong mảng là: ".$color[0], "<br>";
    print_r($color); echo "<br>";
    //14
    echo "14. Nối các phần tử của một mảng thành một chuỗi: ", implode("&", $color), "<br>";
    //15
    $chuoi_muon_them = " *** ";
    echo "15. Thêm chuỗi ".$chuoi_muon_them." vào đầu và cuối của chuỗi ".$name. " là: ", str_pad($name, strlen($name) + 2* strlen($chuoi_muon_them), $chuoi_muon_them, STR_PAD_BOTH),"<br>";

    //16
    $position = strrchr($chuoi_lon, $chuoi_con_2);

    echo "16. Chuỗi lớn là: ".$chuoi_lon." và chuỗi con là: ".$chuoi_con_2, " &rArr; ";
    if ($position == true) {
        echo "Chuỗi lớn kết thúc bằng chuỗi con", "<br>";
    } else {
        echo "Chuỗi lớn không kết thúc bằng chuỗi con", "<br>";
    }

    //17
    $c17 = strstr($chuoi_lon, $chuoi_con_2, true);
    echo "17. Chuỗi lớn là: ".$chuoi_lon." và chuỗi con là: ".$chuoi_con_2, " &rArr; ";
    if ($c17== true) {
        echo "Chuỗi lớn chứa chuỗi con", "<br>";
    } else {
        echo "Chuỗi lớn không chứa chuỗi con", "<br>";
    }

    //18
    $c18 = "Phạm Hương Wiang";
    echo "18. Thay thế ký tự trong chuỗi $c18 bằng một ký tự khác: ", preg_replace('/W/',"G",$c18), "<br>";

    //19
    $x = 30.5;
    echo "19. Kiểm tra $x có phải số nguyên không? &rArr; " ;
    if (is_int($x)) {
    echo ("$x là kiểu số nguyên"), "<br>";
    }else{
        echo ("$x không phải số nguyên"), "<br>";
    }
    //20
	$email = "giang123gmail.com";

	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo("20. $email là địa chỉ email hợp lệ");
	} else {
		echo("20. $email không là địa chỉ email hợp lệ");
	}
        ?>

    </body>
    </html>


