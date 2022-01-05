<?php

class First {
    
    private $data; //donnée du formulaires


    public function __construct ($data) {
        $this->data = $data;

    }

    /**
     * Get the value of data
     */ 
    public function getData()
    {
        return $this->data;
    
    }

    public function getValue($key) {
    if(isset($this->data[$key])) 
    {
        return $this->data[$key];
    } else {
        return NULL;
    }
}

  
    public function createInput ($key, $class) {
        echo '<label for="' .$key. '">' .$key. '</label>';
        echo '<input type="text" class="' .$class.'" name="'.$key.'" value="'.$this->getValue($key).' ">';
    }    

    public function createSubmit($text, $class) {
        echo '<button type="submit" class=" ' .$class.' "> ' . $text . '</button>';

    }

}



?>