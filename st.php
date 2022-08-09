
<?php

    class Teacher{
        public $name;

        public function setName($name){
          return  $this->name = $name;
        }
    }
 
    $teacher = new Teacher();
    echo $teacher->setName("Arif");

?>
       