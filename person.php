<?php
class Person
{
    public $_lastname;
    public $_firstname;
    public $_sexe;
    public $_dateofbirth;


    public function __Construct($lastname, $firstname, $sexe, $dateofbirth)
    {
        $this->_lastname = $lastname;
        $this->_firstname = $firstname;
        $this->_sexe = $sexe;
        $this->_dateofbirth = new DateTime($dateofbirth);
    }
    public function __toString()
    {
        return $this->_lastname . " " . $this->_firstname;
    }

    function getAge()
    {
        // Def var
        $now =  new Datetime(); // pas d'argument datetime pour avoir date du jour
        //execute
        $age = $this->_dateofbirth->diff($now); //diff car pas desoustraction possible avec des date (datetime n'est pas float ou int)
        echo "$this a " . $age->y." ans.";

}
}
