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
    // DISPLAY
    public function display_all_reservations()
    {
        echo "<u><b>".$this."'s reservations :</b><br></u>";
        $total=0;
        foreach($this->_reservations as $reservation)
        {
            echo $reservation;
            $total+=$reservation->get_price_this_reservation();
        }
        return "Total price for all reservations is ".$total." €";
    }
    // Add reservation considering its use in Class Reservation
    public function addReservation($reservation)
    {
        $this->_reservations[]=$reservation;
    }

    // GETTERS
    public function getReservation()
    {
    $resa="<b>Reservation of ".$this." : </b><br>";
        foreach($this->_reservations as $reservation)
        {
            $resa.=$reservation;
        }
    return $resa;
    }
    // TO STRING
    public function __toString()
    {
        return $this->_lastname . " " . $this->_firstname;
    }


}