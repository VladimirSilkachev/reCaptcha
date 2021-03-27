<?

$message = $_POST["message"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="myrk.css" rel="stylesheet" type="text/css">
</head>
<body background="5a9ee783c3f3a.jpg">

<h5 id='kaptcha' class="ramka">
<?
echo $message;
?>
</h5>

</body>
</html>
