<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    <?php if($this->session->flashdata('status')!=''):?> 
        <h1><?=$this->session->flashdata('status');?></h1>
    </div>
    <?php endif;?>
    
    <form action="<?php echo base_url('logininsert');?>" method="POST">
   
    <label>USERNAME</label>
    <input type="text" name="email">
    <small><?php echo form_error('email');?></small>
    <br></br>
    <label>PASSWORD</label>
    <input type="password" name="password">
    <small><?php echo form_error('password');?></small>

    <br></br>
    <input type="submit" value="LOGIN">
</form>
</body>
</html>