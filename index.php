<?php
// main class
    class Animal {

       public function __construct($name){
           $this->name = $name;    
       }

        public function getName(){
           return $this->name;
        }
    }
// this class extends main one
    class Cat extends Animal {

        public function meow(){
            echo('<br><h2>Cat '.$this->name.' is saying: " meow!"</h2>');
        } 
        
        public function nocats(){
            echo('No cats on board.');
        } 
    }
?>
    <!--You can set name of the cat--> 

    <form name="cats" action="#" method="post">
        <input method="post" action="#" name="cats_name" required>
        <button type="submit" name="set_cats_name" value="Enter" >Enter</button>
    </form>

<?php
 
    if (empty($_REQUEST['set_cats_name'])) {
        $name = '';
        $cat = new Cat($name);
        $cat->nocats();
    } else {
        $name = $_REQUEST['cats_name'];
        $cat = new Cat($name);
        $cat->meow();
    } 

   


