<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
                session_start();
                $sesid=$_SESSION['user'];
                $conn=mysqli_connect("localhost","root","","php2024db");
                $sel="select * from register where email='$sesid'";
                $r=mysqli_query($conn,$sel);
                $k=mysqli_fetch_array($r,MYSQLI_BOTH);
                ?>
    <table>
        <tr>
            <th>name</th>
            <td><?php echo $k['name'] ?></td>
        </tr>
        <tr>
            <th>email</th>
           <td><?php echo $k['email'] ?></td>
        </tr>
        <tr>
            <th>password</th>
            <td><?php echo $k['password'] ?></td>
        </tr>
        <tr>
            <th>city</th>
           <td><?php echo $k['city'] ?></td>
        </tr>
        <tr>
            <th>action</th>
            <td><a href="changeprofile.php">change</a></td>
        </tr>
    </table>
</body>
</html>