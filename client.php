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
        echo "<u>Réservation de <b>".$this."</b><br></u>";
        $total=0;
        foreach($this->_reservations as $reservation)
        {
            echo $reservation;
            $total+=$reservation->get_price_this_reservation();
        }
        return "Le prix total est : ".$total." €";
    }
    // Add
    public function addReservation($reservation)
    {
        $this->_reservations[]=$reservation;
    }
    public function addPrice($price)
    {
        $this->_price_all_client_reservations[]=$price;
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