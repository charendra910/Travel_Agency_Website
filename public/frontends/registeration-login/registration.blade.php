<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Everest Agency Registration</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $().ready(function () {
        $("#register").validate({
         rules:{
            username:"required",
            email:{
                required:true,
                email:true
            },
            password:{
                required:true,
                minlength:6
            },
            conpassword:{
                required:true,
                minlength:6,
                equalTo: "#password"
            },
           message:{
            username:"Please enter username name",
            email:"Please enter valid email address",
            password:"Please enter password",
            conpassword:"Please enter comform password",
          }},
          submitHandler: function(form) {
         form.submit();
          }
    });
    });
  </script>
    <style>
    .error{
    color:red;
    width:100%;
    margin-top:10px;
    padding-left:50px;
    }
        body {
    background:black;
}
.form {
    margin: 50px auto;
    width: 300px;
    padding: 30px 25px;
    background: white;
}
h1.login-title {
    color: #666;
    margin: 0px auto 25px;
    font-size: 25px;
    font-weight: 300;
    text-align: center;
}
.login-input {
    font-size: 15px;
    border: 1px solid #ccc;
    padding: 10px;
    margin-bottom: 25px;
    height: 25px;
    width: calc(100% - 23px);
}
.login-input:focus {
    border-color:#6e8095;
    outline: none;
}
.login-button {
    color: #fff;
    background: #55a1ff;
    border: 0;
    outline: 0;
    width: 100%;
    height: 50px;
    font-size: 16px;
    text-align: center;
    cursor: pointer;
}
.link {
    color: #666;
    font-size: 15px;
    text-align: center;
    margin-bottom: 0px;
}
.link a {
    color: #666;
}
h3 {
    font-weight: normal;
    text-align: center;
}

</style>
</head>
<body style="background-image:url(https://wallpaperaccess.com/full/7035.jpg)">
<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $conpassword = stripslashes($_REQUEST['conpassword']);
        $conpassword = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password,conpassword, email, create_datetime)
                     VALUES ('$username', '$password','$conpassword', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" action="{{url('/')}}/register" method="post" name="register" id="register" style="background-color:lightgreen;">
        @csrf

        <h1 class="login-title" style="color:black;"><b>Everest Travel Agency <br>Registration</b></h1>
        <input type="text" class="login-input" name="username" placeholder="Username" />
        <input type="text" class="login-input" name="email" placeholder="Email Adress"/>
        <input type="password" class="login-input" id="password" name="password" placeholder="Password" />
        <input type="password" class="login-input" id="conpassword" name="conpassword" placeholder="ConformPassword"/>
        <input style="color:black;" type="submit" name="submit" value="Register" class="login-button"/>
        <p class="link" style="color:black;">Already have an account? <a style="color:black;" href="login.php">Login here</a></p>
    </form>
<?php
    }
?>
</body>
</html>
