<?php
class Person {

    public $firstname;
    public $lastname;
    public $birth_day;

    public function __construct($firstname,$lastname,$birth_day){

        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->birth_day = $birth_day;

    }

    public function getFirstName(){

        return $this->firstname;

    }

    public function setFirstName($new_first_name){

        $this->firstname = $new_first_name;

    }

    public function getLastName(){

        return $this->$lastname;

    }

    public function setLastName($new_last_name){

        $this->lastname = $new_last_name;

    }

    public function getAge(){

            $today = date("Y-m-d");
            $diff = date_diff(date_create($this->birth_day), date_create($today));
    
            $this->birth_day =  $diff->format('%y');
        }

        public function setAge($new_birth_day){

           $this->birth_day = $new_birth_day;
        }

    }    

//Student class
    class Student extends Person{
        function displayPersonFirstName(){

            return $this->firstname;

        }

        public function setFirstName($new_first_name){

            $this->firstname = $new_first_name;
    
        }

        function displayPersonLastName(){

            return $this->lastname;

        }

        public function setLastName($new_last_name){

            $this->lastname = $new_last_name;
    
        }

        function displayPersonAge(){

            return $this->birth_day;

        }

        public function setAge($new_birth_day){

            $this->birth_day = $new_birth_day;
         }

    }
    
    $person = new Person ("Anna","Petrosyan","1995-11-10");
    echo "<pre>";
    print_r($person);
    $person->setFirstName("Davit");
    $person->setAge("1993-11-16");
    echo"<pre>";
    print_r($person);
    $person->setLastName("Karapetyan");
    $person->setAge("1997-06-18");
    echo"<pre>";
    print_r($person);

    $student = new Student("Anna","Petrosyan","1995-11-10");
    echo "<pre>";
    print_r($student);
    $student->setFirstName("Davit");
    $student->setAge("1993-11-16");
    echo"<pre>";
    print_r($student);
    $student->setLastName("Karapetyan");
    $student->setAge("1997-06-18");
    echo"<pre>";
    print_r($student);

?>