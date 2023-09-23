<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT</title>
</head>
<body>
<form action="<?php echo base_url('update/'.$employeedetails->id);?>" name="form" method="POST">
        

        <label>NAME</label>
        <input type="text" name="name" value="<?php echo $employeedetails->name;?>">
        <small><?php echo form_error('name');?></small>

        <br></br>
        <label>EMAIL</label>
        <input type="text" name="email" value="<?php echo $employeedetails->email;?>">
        <small><?php echo form_error('email');?></small>

        <br></br>
        <label>PHONE NUMBER</label>
        <input type="text" name="phone" value="<?php echo $employeedetails->phonenumber;?>">
        <small><?php echo form_error('phone');?></small>

        <br></br>
        <label>ADDRESS</label>
        <input type="text" name="address" value="<?php echo $employeedetails->address;?>">
        <small><?php echo form_error('address');?></small>

        <br></br>
        <label>GENDER</label>
        <input type="text" name="gender" value="<?php echo $employeedetails->gender;?>">
        <small><?php echo form_error('gender');?></small>

        <br></br>
        <label>DOB</label>
        <input type="text" name="dob" value="<?php echo $employeedetails->dob;?>">
        <small><?php echo form_error('dob');?></small>

        <br></br>
        <input type="submit" name="save" value="update">
    
        </form>
    
</body>
</html>