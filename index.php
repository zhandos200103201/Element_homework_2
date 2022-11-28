<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My site!!!</title>
</head>
<body>
<?php
/*
 * 1. Вывести две даты (+ время ) в Лондоне и Париже
 * 2. Вывести дату вашего рождения и кол-во дней до вашего дня рождения от текущего времени
 * 3. Вывести дату и время до нового года 2023
 * 4. Сгенерируйте число от 10 до 100, это будет кол-во дней, прибавьте сгенерированное кол-во дней к текущей дате и выведите дату
 * 5. Выведите возраст человека по его дате рождения. Допустим 06 декабря 1986 дата рождения, сегодня 25 ноября 2022, возраст 35.
 ***/
// 1st task
//date_default_timezone_set("Europe/London");
//echo "Date and time in London: \t" . date("Y.m.d") . " "  . date("h:i:s") . "<br>";
//date_default_timezone_set("Europe/Paris");
//echo "Date and time in Paris: \t" . date("Y.m.d") . " " . date("h:i:s");
//date_default_timezone_set("Asia/Almaty");
// 1st task is done
echo "<br>";
// 2nd task
//$_my_next_birthday = strtotime("5 February 2023");
//$_current_time = time();
//$_num_of_days_before_birthday = ($_my_next_birthday - $_current_time)/(60*60*24);
//echo "My next birthday: " . date("d.m.Y",$_my_next_birthday) . " - Current time: " . date("d.m.Y H:i:s", $_current_time) . " = " . round($_num_of_days_before_birthday, 0) ." days left.";
//2nd task is done
echo "<br>";
// 3rd task
//$_new_year = strtotime("1 January 2023 00:00:00");
//$_current_time = time();
//$_days_before_NY_2023 = round(($_new_year - $_current_time)/(60*60*24), 0);
//$_time_before_NY_2023 = date("H:i:s",$_new_year - $_current_time);
//echo "Before the new year 2023: " . $_days_before_NY_2023 . " days and " . $_time_before_NY_2023 . " left";
// 3rd task is done
echo "<br>";
// 4th task
//function getRandomNum() {
//    $_rand_max = 100;
//    $_rand_min = 1;
//    return rand($_rand_min, $_rand_max);
//}
//$_random_num_of_days = getRandomNum();
//$_random_num_of_days_in_seconds = $_random_num_of_days * 24 * 60 * 60;
//$_current_timestamp = time();
//$_X_date_in_timestamp = $_current_timestamp + $_random_num_of_days_in_seconds;
//echo "Current date: ".date("d.m.Y", $_current_timestamp)." after ".$_random_num_of_days." days date will be: ".date("d.m.Y", $_X_date_in_timestamp);
// 4th task is done
echo "<br>";
// 5th task
//$_X_date_of_birth = "6 december 1986";
//$_timestamp_of_X = strtotime($_X_date_of_birth);
//$_current_timestamp = time();
//$_difference_in_year = ($_current_timestamp - $_timestamp_of_X)/(60*60*24*365);
//echo "A person who was born on ".$_X_date_of_birth. " is now ".round($_difference_in_year,0). " years old";
// 5th task is done
?>
</body>
</html>
















