<?php 

class Message {

    private $username;
    private $message;
    private $date;
    private $error;


    public function __construct (string $username, string $message, ?DateTime $date = null) 
    {
        $this->username = $username;
        $this->message = $message;
        $this->date = $date;
        $this->error = $error;
    }

    public function isValid(): bool 
    {
        if(strlen($this->username) > 3 && strlen($this->message > 10)){
            
        }
        
    }
}

?>