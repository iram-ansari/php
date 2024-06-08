<html>
    <head>
    </head>
    <body>
        <h1>Register Page</h1>
        <?php
                session_start();
                $sesid=$_SESSION['user'];
                $conn=mysqli_connect("localhost","root","","php2024db");
                $sel="select * from register where email='$sesid'";
                $r=mysqli_query($conn,$sel);
                $k=mysqli_fetch_array($r,MYSQLI_BOTH);
                ?>
        <form action="changeprofilecode.php" method="post">
      
            Name<input type="text" name="name" value="<?php echo $k['name'] ?>"><br>
            Email<input type="email" name="email" value="<?php echo $k['email'] ?>"><br>
        Password<input type="password"  readonly name="pass" value="<?php echo $k['password']?>"><br>
            city<input type="text" name="city" value="<?php echo $k['city'] ?>"><br>
            <button name="btn">Submit</button>
        </form>
    </body>
        
    </body>
</html>