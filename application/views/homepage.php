<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
</head>
<body>
    <h1>welcome to homepage</h1>
    

    <h2>login here</h2>
    <a href="<?php echo base_url('loginpage');?>"><input type="submit" value="LOGIN"></a>
    <br></br>
    <h2>Register here</h2>
    <a href="<?php echo base_url("registerpage");?>"><input type="submit" value="REGISTER"></a>
</body>
</html>