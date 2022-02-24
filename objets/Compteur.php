<?php
class Compteur {

    public $file;

    public function __construct (string $file)
    {
        $this->file = $file;
    }

    public function incrementer()
    {
        $compteur = 1;
        if(file_exists($this->file)){
            $compteur = (int)file_get_contents($this->file);
            $compteur++;
        }
        file_put_contents($this->file, $compteur);
    }


    public function recuperer()
    {   
        if(!file_exists($this->file))
        {
            return 0;
        }
        return file_get_contents($this->file);
    }


}

?>