
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USERPAGE</title>
</head>
<body>
    <h1>user page</h1>
<?php if($this->session->flashdata('status')):?>
    <div class="alert alert-success">
    <h2><?= $this->session->flashdata('status');?></h2>
    </div>
<?php endif;?>

<h5>USERNAME: <?= $this->session->userdata('auth_user')['name'];?></h5>
<h5>EMAIL: <?= $this->session->userdata('auth_user')['email'];?></h5>   

<br></br>
<a href="<?php echo base_url('logout');?>"><input type="submit" value="LOGOUT"></a>
    
</body>
</html>



