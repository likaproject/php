
<?php

class Animal {

   public function __construct($name){
       $this->name = $name;    
   }

    public function getName(){
       return $this->name;
    }
}

class Cat extends Animal {
    
    public function meow(){
        echo('<br>Cat '.$this->name.' is saying meow!');
    }
}

$cat = new Cat('Hek');

//print_r($cat);
echo('My cats name is '.$cat->name.'.');
$cat->meow();



