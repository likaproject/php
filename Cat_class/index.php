<?php

// main class
    class Animal {
        
       public function __construct($name){
           $this->name = $name;    
       }
        
        public function setName($name){
			 if(is_string($name)){
                 $this->name = $name;
             }
        }
        
        public function getName(){
          return $this->name;
        }
    }

// this class extends main one
    class Cat extends Animal {

        public function meow(){
            return ('Cat '.$this->name.' is saying meow');
        } 
        
    }

    $cat = new Cat('dania');
    echo('<br>'.$cat->meow());

    $cat->setName('garfield');
    echo('<br>'.$cat->meow());
   
    $result = '';

    if ($cat->getName() === 'garfield'){
        $result = 'true'; // returns true
    } else { 
        $result = 'false';   
    }
echo ('<br><br>'.$result);
  
    if ($cat->meow() === 'Cat garfield is saying meow') {
        $result = 'true'; // returns true
    } else {
        $result = 'false';
    }
echo ('<br><br>'.$result);
  























