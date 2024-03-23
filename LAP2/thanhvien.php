/* The class `member` in the PHP code defines a structure for creating member objects with properties
like full name, email, and member ID. */
<?php
//* call to file containing external support
require_once("hotro.php");
class member{
    private $fullname;
    private $email;
    private $idmember;

    public function __construct($fullname, $email){
        $this->fullname = $fullname;
        $this->email = $email;
        $this-> idmember = idcontinue();
    }

    public function __destruct(){

        $this -> fullname = NULL;
        $this -> email = NULL;
        $this ->status = NULL;
        $this -> idmember = NULL;

    }
    public function get_fullname(){
        return $this->fullname;
    }
    public function get_email(){
        return $this->email;
    }
    public function get_id(){
        return $this->idmember;
    }
}