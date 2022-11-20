<?php

class User {
    private $id;
    private $login;
    private $placeOfBirth;
    private $email;
    private $password;
    private $password_confirm;
    

    public function getId() {
        return $this->id;
    } 
    public function setId($id) {
        $this->id = $id;
        return $this;
    }
    public function getLogin() {
        return $this->login;
    } 
    public function setLogin($login) {
        $this->login = $login;
        return $this;
    }
    public function getPlaceOfBirth() {
        return $this->placeOfBirth;
    } 
    public function setPlaceOfBirth($placeOfBirth) {
        $this->placeOfBirth = $placeOfBirth;
        return $this;
    }
    public function getEmail() {
        return $this->email;
    } 
    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }
    public function getPassword() {
        return $this->password;
    } 
    public function setPassword($password) {
        $this->password = $password;
        return $this;
    }
    public function checkPassWord($password) {
        if ($this->password == $password) {
            return true;
        }
        return false;
    } 
    public function checkPassWordConfirm($password, $password_confirm) {
        if ($password === $password_confirm) {
            return true;
        }
        return false;
    }

    
}
?>