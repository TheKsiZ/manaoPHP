<?php
    class User{
        protected $username;
        protected $password;
        protected $email;
        protected $name;        
        /* salt + md5
        private $salt = "385e33f741";
        $password = md5($salt . $password);
        */
        public function __construct(string $username, string $password, string $email, string $name){
            $this->username = $username;
            $this->password = password_hash($password, PASSWORD_DEFAULT);
            $this->email = $email;
            $this->name = $name;
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
            $this->username = $username;
        }
        public function setPassword(string $password){
            $this->password = password_hash($password, PASSWORD_DEFAULT);
        }
        public function setEmail(string $email){
            $this->email = $email;
        }
        public function setName(string $name){
            $this->name = $name;
        }
    }
?>