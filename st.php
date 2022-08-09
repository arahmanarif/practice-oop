
<?php

    class Teacher{
        public $name;

        public function setName($name){
          return  $this->name = $name;
        }
        public function getName()
        {
          return  $this->name;
        }
    }
 
    
    $teacher = new Teacher();

    $teacher->setName("Arif");
    echo $teacher->getName();
    

?>
       