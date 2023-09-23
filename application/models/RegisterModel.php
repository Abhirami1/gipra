<?php

class RegisterModel extends CI_Model
{
    function insertEmployees($data)
    {
        if($data['user']=='Admin')
        {
            $user=2;
        }
        else{
            $user=1;
        }
        $time=time();
        $query="INSERT INTO employeetable_web (name,email,address,dob,gender,phonenumber,user_type,password,create_date,user_id)
        VALUES(:name,:email,:address,:dob,:gender,:phone,:usertype,:password,:crd,:userid)";
        $stmt=$this->db->conn_id->prepare($query);
        $stmt->bindValue(":name",$data['name']);
        $stmt->bindValue(":email",$data['email']);
        $stmt->bindValue(":address",$data['address']);
        $stmt->bindValue(":dob",$data['dob']);
        $stmt->bindValue(":gender",$data['gender']);
        $stmt->bindValue(":phone",$data['phone']);
        $stmt->bindValue(":usertype",$data['usertype']);
        $stmt->bindValue(":password",$data['password']);
        $stmt->bindValue(":crd",$time);
        $stmt->bindValue(":userid",$user);
        
        if($stmt->execute())
        {
            return 'true';
        }return 'false';
    }
}












?>