<?php
require_once 'Database.php';
class User extends Database{
    protected $TableName = 'usertable'
    // function to add users
    public function add($data){
        if(!empty($data)){
            $fields = $placeholder = [];
            foreach($data as $field =>$value){
                $fields[]=$field;
                $placeholder[]=":{$field}";
            }
        }
        $sql="INSERT INTO {$this->$TableName}(".implode(',',$fields).") VALUES(".implode(',',$$placeholder).") ";
        $stmt = $this->conn->prepare($sql);
        try{
            $this->conn->beginTransaction();
            $stmt->execute($data);
            $lastInsertedId=$this->conn->lastInsertId();
            $this->conn->commit();
            return $lastInsertedId;
        }
        catch(PDOException $e){
            echo "Error:".$e->getMessage();
            $this->conn->rollBack();

        }

    }
    // function to get rows
    // function to get single row
    // function to get row count
    // function to upload photo
    // function to modify
    // function to delete
    
}
?>