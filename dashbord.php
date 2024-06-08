<html>
    <head>
        <head>
            <body>
                <h1>Dashboard Page</h1>

                <?php
                session_start();
                $sesid=$_SESSION['user'];
                $conn=mysqli_connect("localhost","root","","php2024db");
                $sel="select * from register where email='$sesid'";
                $r=mysqli_query($conn,$sel);
                $k=mysqli_fetch_array($r,MYSQLI_BOTH);
                ?>
                <h1>Welcome <?php echo $k['name'];?></h1>
                <a href="changepassword.php">Change Password</a><br>
                <a href="logout.php">Logout</a><br>
                <a href="profile.php">Profile</a><br>
            </body>
</html>