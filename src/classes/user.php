<?php
    class User{
        protected $username;
        protected $password;
        protected $email;
        protected $name;        

        static private $salt = "385e33f741"; //password_hash(); password_verify();
                
        public function __construct(string $username, string $password, string $email, string $name){
            $this->username = htmlspecialchars($username);
            $this->password = md5($salt . htmlspecialchars($password));
            $this->email = htmlspecialchars($email);
            $this->name = htmlspecialchars($name);
        }        

        //Getters
        public function getUsername(){
            return $this->username;
        }
        public function getPassword(){
            return $this->password;
        }
        public function getEmail(){
            return $this->email;
        }
        public function getName(){
            return $this->name;
        }
        //Setters
        public function setUsername(string $username){
            $this->username = htmlspecialchars($username);
        }
        public function setPassword(string $password){
            $this->password = md5($salt . htmlspecialchars($password));
        }
        public function setEmail(string $email){
            $this->email = htmlspecialchars($email);
        }
        public function setName(string $name){
            $this->name = htmlspecialchars($name);
        }
    }
?>