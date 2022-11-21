<?php
require_once 'User.php';
include("vendor/autoload.php");

use PHPUnit\Framework\TestCase;
class testUser extends TestCase{
    private $id=1;
    private $login='skipperini';
    private $placeOfBirth='Ukraine';
    private $email='skippeiniap@gmail.com';
    private $password='0000';
    private $password_confirm='0000';
    private $check_passwd='0010';
    

     protected function setUp():void{
        $this->UserTestInstance=new User();
    }
    public function testId(){
        $this->UserTestInstance->setId($this->id);
        $this->assertEquals($this->id, $this->UserTestInstance->getId());
    }
    public function testLogin(){
        $this->UserTestInstance->setLogin($this->login);
        $this->assertEquals($this->login, $this->UserTestInstance->getLogin());
    }
    public function testEmail(){
        $this->UserTestInstance->setEmail($this->email);
        $this->assertEquals($this->email, $this->UserTestInstance->getEmail());
    }
    public function testPlaceOfBirth(){
        $this->UserTestInstance->setPlaceOfBirth($this->placeOfBirth);
        $this->assertEquals($this->placeOfBirth, $this->UserTestInstance->getPlaceOfBirth());
    }
    public function testPassword(){
        $this->UserTestInstance->setPassword($this->password);
        $this->assertEquals($this->password, $this->UserTestInstance->getPassword());
    }
    public function testCheckPassword(){
        $this->UserTestInstance->setPassword($this->password);
        $this->assertFalse($this->UserTestInstance->checkPassWord($this->check_passwd));
    }
    public function testCheckPasswordConfirm(){
        $this->UserTestInstance->setPassword($this->password);
        $this->assertTrue($this->UserTestInstance->checkPassWordConfirm($this->UserTestInstance->getPassword(), $this->password_confirm));
    }
}
?>
