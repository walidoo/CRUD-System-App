<?php require_once 'C:\xampp\htdocs\CRUD_App\includes/DB.php'; ?>
<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of enter
 *
 * @author walid
 */
class enter {

    public $fname;
    public $lname;
    public $age;
    public $dept;

    public function enter_data() {

        global $conn;
        $sql = "insert into data (first_name , last_name , age , department) values ('$this->fname' , '$this->lname' , '$this->age' , '$this->dept' )";
        $sql_stmt = $conn->query($sql);
        if ($sql_stmt === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();
    }
    
    public function selectdb($varid) {
        
        global $conn;
        $sql="select * from data where id=".$varid;
        $sql_stmt=$conn->query($sql);
        $row=$sql_stmt->fetch_assoc();
        return $row["id"];
    
    }

}

