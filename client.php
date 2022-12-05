<?php
spl_autoload_register(function ($class_name) {

    require_once $class_name . '.php';
});
class Client
{
    private $_lastname;
    private $_firstname;
    private $_reservations;

    public function __Construct($lastname, $firstname)
    {
        $this->_lastname = $lastname;
        $this->_firstname = $firstname;
        $this->_reservations=[];
    }

    public function addReservation($reservation)
    {
        $this->_reservations[]=$reservation;
    }

    public function getReservation()
    {
    $resa="<b>Reservation of ".$this." : </b><br>";
        foreach($this->_reservations as $reservation)
        {
            $resa.=$reservation;
        }
    return $resa;
    }
    public function __toString()
    {
        return $this->_lastname . " " . $this->_firstname;
    }


}