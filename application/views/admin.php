<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adminpage</title>
</head>
<body>
<h1>Admin page</h1>
<?php if($this->session->flashdata('status')):?> 
        <h1><?=$this->session->flashdata('status');?></h1>
    </div>
    <?php endif;?>



<table border="1">
    <thead>
        <tr>
           <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>PHONE NUMBER</th>
            <th>ADDRESS</th>
            <th>DATE OF BIRTH</th>
            <th>GENDER</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
    </thead>
        
    <tbody>
        <?php foreach($employees as $row):?>
            <tr>
            <td><?php echo $row->id; ?></td>
            <td><?php echo $row->name; ?></td>
            <td><?php echo $row->email;?></td>
            <td><?php echo $row->phonenumber; ?></td>
            <td><?php echo $row->address; ?></td>
            <td><?php echo $row->dob; ?></td>
            <td><?php echo $row->gender; ?></td>
            <td><a href="<?php echo base_url('edit/'.$row->id);?>"><input type="submit" value="EDIT" name="EDIT"></a></td>
            <td><a href="<?php echo base_url('delete/'.$row->id);?>"><input type="submit" value="DELETE"></a></td>
        </tr>

        <?php  endforeach;?>
        
    </tbody>
    
    
</table>
























<br></br>
<a href="<?php echo base_url('logout');?>"><input type="submit" value="LOGOUT"></a>
    
</body>
</html>