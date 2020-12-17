<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">

<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>    
</header>

<main>
<h2>Practice</h2>
<pre>
<?php
// if (date('G') < 9) {
//     print ('※　現在受付時間外です');
// } else {
//     echo ('ようこそ');
// }

$x = 0;
if (!$x) {
    print ('xは0です'. "\n");
}
$time = date('G');
if ($time <= 10 && $time <= 18){
    echo('営業時間外です');
} else{
    echo('営業中です');
}
?>




</pre>
</main>
</body>    
</html>