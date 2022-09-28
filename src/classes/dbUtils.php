<?php
    require_once "../classes/user.php";

    class dbUtils{
        private $path = "../db/users.json";                     

        //Add a new user to database
        public function Insert($userToAdd){                           
            $json = file_get_contents($this->getFile()); 
            $jsonArray = json_decode($json, true);            
            //Push user to all
            $jsonArray[] = array(                
                    "username" => $userToAdd->getUsername(),
                    "password" => $userToAdd->getPassword(),
                    "email" => $userToAdd->getEmail(),
                    "name" => $userToAdd->getName()                
            );                              
            file_put_contents($this->getFile(), json_encode($jsonArray));                    
        }
        //Read all users from json file
        public function Read(){
            $json = file_get_contents($this->getFile()); 
            //print_r($json);                   
            $jsonArray = json_decode($json, true);                           
            foreach($jsonArray as $user){                                
                foreach($user as $key => $value){
                    echo "[$key] : $value <br>";
                }                         
                echo "<br>";      
            }
        }
        //Edit an user's profile in database
        public function Edit($userToEdit){
            $json = file_get_contents($this->getFile()); 
            $jsonArray = json_decode($json, true);
            foreach($jsonArray as &$user){        
                //Finding user by username                        
                if($user["username"] == $userToEdit->getUsername()){
                    //Edit user's profile with new changes
                    //$user["username"] = $userToEdit->getUsername(); unique - can not be edited
                    $user["password"] = $userToEdit->getPassword();
                    //$user["email"] = $userToEdit->getEmail();       unique - can not be edited
                    $user["name"] = $userToEdit->getName();

                    break;
                }                                     
            }
            file_put_contents($this->getFile(), json_encode($jsonArray));   
        }
        //Delete an user's profile from database
        public function Delete($userToDelete){
            $json = file_get_contents($this->getFile()); 
            $jsonArray = json_decode($json, true);
            //Finding user by username
            for($i = 0; $i < count($jsonArray); $i++){
                if($jsonArray[$i]["username"] ==  $userToDelete->getUsername()){
                    unset($jsonArray[$i]);
                    break;
                }
            }
            //Fixing indexes
            $jsonArray = array_values($jsonArray);          
            file_put_contents($this->getFile(), json_encode($jsonArray));   
        }

        //If file do not exists it stop to work
        public function getFile(){            
            return file_exists($this->path) ? $this->path : exit("File does not exist.");
        }             
    }
?>