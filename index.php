<?php
include_once "Class/DBConnect.php";
include_once "Class/manager.php";
include_once "Class/classManager.php";

$manager = new classManager();
$student = $manager->getAll();
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
<form action="" method="post">
    <table border="1" style="width: 100%;text-align: center">
        <tr>
            <td><h3>STT</h3></td>
            <td><h3>orderNumber</h3></td>
            <td><h3>orderDate</h3></td>
            <td><h3>orderDate</h3></td>
            <td><h3>status</h3></td>
            <td><h3>priceEach</h3></td>
        </tr>
        <?php foreach ($student as $key => $value): ?>
            <tr>
                <td><?php echo ++$key ?></td>
                <td><a href="Class/orderDetail.php?id='<?php echo $value->orderNumber ?>'"</a><?php echo $value->orderNumber ?></td>
                <td><?php echo $value->orderDate ?></td>
                <td><?php echo $value->shippedDate ?></td>
                <td><?php echo $value->status ?></td>
                <td><?php echo $value->priceEach ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</form>
</body>
</html>
