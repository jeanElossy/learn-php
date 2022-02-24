<?php

class Message {

    private $username;
    private $message;
    private $date;

    public function __construct (string $username, string $message, ?DateTime $date = null) 
    {
        $this->username = $username;
        $this->message = $message;
        $this->date = $date;
    }

    public function isValid(): bool
    {
        return strlen($this->username) >= 3 && strlen($this->message) >= 10;
    }

    public function getError(): array
    {

    }
    
    public function toHTML(): string
    {

    }

    public function toJSON(): string
    {

    }



}


?>