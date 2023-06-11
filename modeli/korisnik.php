<?php
class Korisnik{
    public $korisnikId;
    public $username;
    public $password;
    

    public function __construct($korisnikId=null,$username=null,$password=null)
    {
        $this->korisnikId = $korisnikId;
        $this->username=$username;
        $this->password=$password;
    }


}