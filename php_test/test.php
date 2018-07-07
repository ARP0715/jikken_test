<!DOCTYPE html>
<html lang="ja" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>test</title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: Shunya
 * Date: 2018/07/08
 * Time: 0:33
 */
$url = "./test.json";
$json = file_get_contents($url);
$json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
$arr = json_decode($json, true);

print("<table border=1>");

foreach ($arr as $elm) {
    print("<tr>");
    print("<td>" . $elm['trends']['name'] . "</td>");
    print("<td>" . $elm['trends']['url'] . "</td>");
    print("</tr>");
}
print("</table>");
?>
</body>
</html>
