<?php
    class RegisterUser{
        private $username;
        private $raw_password;
        private $encrypted_password;
        private $storage = "data.json";
        private $stored_users;
        private $new_user;
        public $error;
        public $success;

        public function __construct($username,$password)
        {
            $this->username = trim($username);
            $this->username = filter_var($username,FILTER_UNSAFE_RAW);

            $this->raw_password = filter_var(trim($password),FILTER_UNSAFE_RAW);
            $this->encrypted_password = password_hash($this->raw_password,PASSWORD_DEFAULT);

            $this->stored_users = json_decode(file_get_contents($this->storage), true);

            $this -> new_user = [
                "username" => $this->username,
                "password" => $this->encrypted_password,
            ];

            if($this->checkFieldValues()){
                $this->insertUser();
            }
        }

        private function checkFieldValues(){
            if(empty($this->username) || empty($this->raw_password)){
                $this->error = "Both fields are required.";

                return false;
            }
            else{
                return true;
            }
        }

        private function userNameExists(){
            foreach($this->stored_users as $user){
                if($this->username == $user["username"]){
                    $this->error = "Username already exists.";
                    return true;
                }
            }
            return false;
        }

        private function insertUser(){
            if($this->userNameExists() == false){
                array_push($this->stored_users,$this->new_user);
                if(file_put_contents($this->storage, json_encode($this->stored_users, JSON_PRETTY_PRINT))){
                    return $this->success = "Your registraion was successful!";
                }
                else{
                    return $this->error = "Something went wrong, please try again.";
                }
            }
        }
    }
?>