<?php
namespace App\service;

class update
{
    
     private $message;
    public function __construct()
    {
        $message=false;
    }
    
    
    public function setmessage($message)
    {
        $this->message = $message ;
    }
    public function getmessage()
    {
       return $this->message  ;
    }
}