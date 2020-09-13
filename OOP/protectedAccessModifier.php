<!-- child class cannot access private property or method of parent class from it's own class. -->
<!-- But it can access the protected proerty or method of parent class from it's own class. -->
<?php
    class User{

        private $username;
        private $email;

        // protected $username;
        // protected $email;

        public function __construct($username, $email){
            $this->username = $username;
            $this->email = $email;
        }

        //GETTER METHOD
        public function getUser(){
            return "UserName= $this->username  Email= $this->email";
        }

    }


    class AdminUser extends User{
        private $level;

        function __construct($username, $email, $level){
            $this->level=$level;
            parent::__construct($username, $email);             //Similar to super;
        }
                
        //OVERRIDE getUser() Method.
        public function getUser(){
            return "UserName= $this->username  Email= $this->email" . "level= $this->level";
        }
    }

    //USERONE
    $userOne = new User('i_am_akash','akash@gmail.com');
    echo $userOne->getUser() . "<br>";

    //USERTWO
    $userTwo = new AdminUser('admin','admin@gmail.com',3);
    echo $userTwo->getUser() . "<br>";

?>