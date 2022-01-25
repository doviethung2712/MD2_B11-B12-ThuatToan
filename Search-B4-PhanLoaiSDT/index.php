<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phone = $_REQUEST["phone"];
    function checkPhoneNumber($phone)
    {
        $arr = strlen($phone);
        $arr1 = [];
        for ($i = 0; $i < $arr; $i++) {
            if ($i < 3) {
                $arr1[] = $phone[$i];
            }
        }
        return implode($arr1);
    }

    function nhaMang($phone)
    {
        $arrViettel = ["086", "096", "097", "098", "032", "033", "034", "035", "036", "037", "038", "039"];
        $arrVina = ["088", "091", "094", "081", "082", "083", "084", "085"];
        $arrMobi = ["089", "090", "093", "070", "076", "077", "078", "079"];
        foreach ($arrViettel as $value) {
            if (checkPhoneNumber($phone) == $value) {
                return "Viettel";
            }
        }
        foreach ($arrMobi as $value) {
            if (checkPhoneNumber($phone) == $value) {
                return "Mobi";
            }
        }
        foreach ($arrVina as $value) {
            if (checkPhoneNumber($phone) == $value) {
                return "Vina";
            }
        }

    }
//   echo nhaMang($phone);
}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <input type="textarea" name="phone">
    <button>Check</button>
</form>

<p>Nhà mạng : <span><?php echo nhaMang($phone) ?></span></p>
</body>
</html>
