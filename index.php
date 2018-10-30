<!DOCTYPE html>
<html>
<head>
    <title>Welcome to MYCHATAPP</title>
</head>
<body>
    <div id="LoginDiv">
        <form id="form1" method="post" action="UserLogin.php">
            <h2>Login Form</h2>
            <table>
                <tr>
                    <td><input type="Email" name="UserMailLogin" placeholder="Enter Your Email" required> </td>
                </tr>
                <tr>
                    <td><input type="password" name="UserPasswordLogin" placeholder="Enter Your Password" required></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Login"></td>
                </tr>
                <?php
                    if(isset($_GET['error'])){

                ?>
                <tr>
                    <td></td><td><span style="color: red;">Check Your Email Or Password</span></td>
                </tr>
                <?php
                    }
                ?>
            </table>
        </form>
    </div>
</body>
</html>