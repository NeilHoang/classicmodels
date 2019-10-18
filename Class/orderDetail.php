<?php
include_once "DBConnect.php";
include_once "manager.php";
include_once "classManager.php";

$id = $_GET['id'];
$classManager = new classManager();
$managerMyId = $classManager->informationCustomers($id);
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
<h1>Thông tin khách hàng</h1>
<form action="">
    <table border="1" style="width: 100%;text-align: center">
        <tr>
            <td><h3>customersName</h3></td>
            <td><h3>phone</h3></td>
            <td><h3>city</h3></td>
            <td><h3>customersNumber</h3></td>
        </tr>
        <tr>
            <td><?php echo $managerMyId->customersNumber?></td>
            <td><?php echo $managerMyId->phone?></td>
            <td><?php echo $managerMyId->city?></td>
            <td><?php echo $managerMyId->customersNumber?></td>
        </tr>
    </table>
</form>
</body>
</html>
