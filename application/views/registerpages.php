<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>

</head>
<body>
    <a href="<?php echo base_url('homepage');?>"><input type="submit" value="BACK"></a>

    <br></br>
    <form action="<?php echo base_url('registerinsert');?>" method="POST">

    <label>Name</label>
    <input type="text" name="name" value="<?php echo set_value('name');?>">
    <small><?php echo form_error('name');?></small>
    <br></br>
    <label>Email</label>
    <input type="text" name="email" value="<?php echo set_value('email');?>">
    <small><?php echo form_error('email');?></small>

    <br></br>
    <label>Address</label>
    <input type="text" name="address" value="<?php echo set_value('address');?>">
    <small><?php echo form_error('address');?></small>

    <br></br>
    <label>Date of Birth</label>
    <input type="date" name="dob" value="<?php echo set_value('dob');?>">
    <small><?php echo form_error('dob');?></small>

    <br></br>
    <label>Gender</label>
    <input type="text" name="gender" value="<?php echo set_value('gender');?>">
    <small><?php echo form_error('gender');?></small>

    <br></br>
    <label>USER</label>
     <select id="ids">
        <option value="Admin">Admin</option>
        <option value="User">user</option>
    </select>
    <input id="details" name="user"/>
    <script>
        ids.addEventListener("change",changeTextBox);
        function changeTextBox()
        {
            details.value=this.value;

        }
    </script>

    <br></br>
    <label>Phone number </label>
    <input type="int" name="phone" value="<?php echo set_value('phone');?>">
    <small><?php echo form_error('phone');?></small>

    <br></br>
    <label>User type</label>
    <select id="values">
        <option value="manager">manager</option>
        <option value="developer">developer</option>
    </select>
    <input id="result" name="usertype"/>
    <script>
        values.addEventListener("change",changeTextBoxText);
        function changeTextBoxText()
        {
            result.value=this.value;

        }
    </script>
    

    <br></br>
    <label>Password</label>
    <input type="password" name="password">
    <small><?php echo form_error('password');?></small>

    <br></br>
    <label>Confirm Password</label>
    <input type="password" name="cpassword">
    <small><?php echo form_error('cpassword');?></small>

    <br></br>
   

    <input type="submit" name="REGISTER">

    </form>
    
</body>
</html>