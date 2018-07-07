<?php
ini_set('display_errors', true);
error_reporting(E_ALL);

function h($string)
{
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}

$url = "./test.json";
$json = file_get_contents($url);

// 不要JSONの仕様上UTF-8であることは明らか
//$json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
$arr = json_decode($json, true);

//var_dump($arr);
?>
<!DOCTYPE html>
<html lang="ja" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>test</title>
</head>
<body>
<table border="1" width="1000"  >
    <?php foreach ($arr[0]['trends'] as $item) : ?>
        <tr>
            <td width="300"><?= h($item['name']) ?></td>
            <td width="700">'<a href=<?= h($item['url'])?>><?= h($item['name']) ?></a>'</td>
        </tr>
    <?php endforeach; ?>
    <?php
     echo $arr[0]['created_at'];
    echo $arr[0]['locations'][0]['woeid'];
    echo $arr[0]['locations'][0]['name'];
    ?>
</table>
</body>
</html>