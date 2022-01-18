<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ereditarietà</title>

    <?php
        /**
     * 
     *      Definire classe Persona:
     *          - ATTRIBUTI (private):
     *              - nome
     *              - cognome
     *              - dataNascita (stringa)
     *          - METODI:
     *              - costruttore che accetta nome e cognome
     *              - setter/getter per ogni variabile
     *              - printFullPerson: che stampa "nome cognome: dataNascita"
     *              - toString: che ritorna "nome cognome: dataNascita"
     * 
     * 
     *      Definire classe Employee che eredita da Persona:
     *          - ATTRIBUTI (private):
     *              - stipendio
     *              - dataAssunzione
     *          - METODI:
     *              - costruttore che accetta nome, cognome e stipendio
     *              - setter/getter per variabili 
     *              - printFullEmployee: che stampa "nome cognome: stipendio (dataAssunzione)"
     *              - toString: che ritorna "nome cognome: stipendio (dataAssunzione)"
     * 
     */

     class Person {

        // attributi 
        private $name;
        private $surname;
        private $dateOfBirth;

        // metodi 
        // construct 
        public function __construct($name, $surname) {

            $this -> setName($name);
            $this -> setSurame($surname);
        }

        // setter/getter 
        public function getName() {

            return $this -> name;
        }

        public function setName($name) {

            $this -> name = $name;
        }

        public function getSurname() {

            return $this -> surname;
        }

        public function setSurame($surname) {

            $this -> surname = $surname;
        }

        public function getDateOfBirth() {

            return $this -> dateOfBirth;
        }

        public function setDateOfBirth($dateOfBirth) {

            $this -> dateOfBirth = $dateOfBirth;
        }


        public function printFullPerson() {

            return $this ->  getName() . " " 
            . $this -> getSurname() . ": " 
            . $this -> getDateOfBirth()
            . "<br>";
        }

        public function __toString() {

            return $this -> printFullPerson()
            . "<br>";
        }
     }

     class Employee extends Person {

        private $salary;
        private $dateOfHiring;

        // construct 
        public function __construct($name, $surname, $salary) {

            parent::__construct($name, $surname);
            $this -> setSalary($salary);
        }
        

        // setter/getter 
        public function getSalary() {

            return $this -> salary;
        }

        public function setSalary($salary) {

            $this -> salary = $salary;
        }

        public function getDateOfHiring() {

            return $this -> dateOfHiring;
        }

        public function setDateOfHiring($dateOfHiring) {

            $this -> dateOfHiring = $dateOfHiring;
        }

        public function printFullEmployee() {

            return parent::getName() . " " 
            . parent::getSurname() . ": " 
            . $this -> getSalary() . " " 
            . "(" . $this -> getDateOfHiring() . ")"
            . "<br>";
        }

        public function __toString() {
            return $this -> printFullEmployee()
            . "<br>";
        }
     }
    ?>
</head>
<body>
    <?php
        $person1 = new Person("Mario", "Rossi");
        $person2 = new Person("Marta", "Ambrosio");
        $person3 = new Person("Lucia", "Verdi");

        $employee1 = new Employee("Maria", "Filippi", "1200€");
        $employee2 = new Employee("Mirko", "Greco", "1400€");
        $employee3 = new Employee("Francesco", "Moretti", "1150€");



        $person1 -> setDateOfBirth("12-02-1982");
        $person2 -> setDateOfBirth("16-09-1993");
        $person3 -> setDateOfBirth("24-11-1989");

        $employee1 -> setDateOfHiring("10-01-2022");
        $employee2 -> setDateOfHiring("05-06-2021");
        $employee3 -> setDateOfHiring("15-07-2021");

        echo $person1;
        echo $person2;
        echo $person3;

        echo "<br>--------------------------------------<br>";
        echo "<br>";

        echo $employee1;
        echo $employee2;
        echo $employee3;
    ?>

</body>
</html>