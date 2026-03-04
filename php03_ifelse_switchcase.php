<?php
    // If else trong PHP
    $number = 10;
    if ($number > 0) {
        echo "$number là một số dương"; // Kết quả: 10 là một số dương
    } else if ($number < 0) {
        echo "$number là một số âm";
    } else {
        echo "$number là số không";
    }
    // Switch case trong PHP
    $currentDate = getdate();
    $dayOfWeek = $currentDate['wday'] == 0 ? 7 : $currentDate['wday']; // Chuyển đổi wday (0-6) thành 1-7
    switch ($dayOfWeek) {
        case 1:
            echo "Hôm nay là thứ Hai";
            break;
        case 2:
            echo "Hôm nay là thứ Ba";
            break;
        case 3:
            echo "Hôm nay là thứ Tư"; // Kết quả: Hôm nay là thứ Tư
            break;
        case 4:
            echo "Hôm nay là thứ Năm";
            break;
        case 5:
            echo "Hôm nay là thứ Sáu";
            break;
        case 6:
            echo "Hôm nay là thứ Bảy";
            break;
        case 7:
            echo "Hôm nay là Chủ Nhật";
            break;
        default:
            echo "Giá trị không hợp lệ cho ngày trong tuần";
    }
?>