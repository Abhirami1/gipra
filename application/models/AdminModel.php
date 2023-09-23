
<?php
class AdminModel extends CI_Model
{
    function fetchdata()
    {
        $query="SELECT * FROM employeetable_web WHERE user_id=1";
        $stmt=$this->db->conn_id->prepare($query);
        if($stmt->execute())
        {
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }
    }

    function fetcheditdetails($id)
    {
    
        $query="SELECT * FROM employeetable_web WHERE id=:id AND user_id=1";
        $stmt=$this->db->conn_id->prepare($query);
        $stmt->bindValue(":id",$id);
        if($stmt->execute())
        {
            return $stmt->fetch(PDO::FETCH_OBJ);
        }

        
    }
 


    function updatedata($id,$data)
    {
        $query="UPDATE employeetable_web SET name=:name,email=:email,phonenumber=:phonenumber,
        address=:address,gender=:gender,dob=:dob WHERE id=:id";
        $stmt=$this->db->conn_id->prepare($query);
        $stmt->bindvalue(":name",$data['name']);
        $stmt->bindvalue(":email",$data['email']);
        $stmt->bindvalue(":phonenumber",$data['phone']);
        $stmt->bindvalue(":address",$data['address']);
        $stmt->bindvalue(":gender",$data['gender']);
        $stmt->bindvalue(":dob",$data['dob']);
        $stmt->bindvalue(":id",$id);
        if($stmt->execute())
        {
            return true;
        }

    }

    function deleteData($id)
    {
        $query="DELETE FROM employeetable_web WHERE id=:id";
        $stmt=$this->db->conn_id->prepare($query);
        $stmt->bindValue(":id",$id);
        if($stmt->execute())
        {
            return true;
        }
    }

}















?>