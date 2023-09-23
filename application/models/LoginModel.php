<?php 

class LoginModel extends CI_Model
{
    function checkuser($data)
    {
        $query="SELECT id,name,email,user_id FROM employeetable_web WHERE email=:email AND password=:pass";
        $stmt=$this->db->conn_id->prepare($query);
        $stmt->bindValue(":email",$data['email']);
        $stmt->bindValue(":pass",$data['password']);
        if($stmt->execute())
        {
            return $stmt->fetch(PDO::FETCH_OBJ);
        }
      
    }
}














?>