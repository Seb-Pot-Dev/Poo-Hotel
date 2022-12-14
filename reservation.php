<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=$, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a45e9c27c8.js" crossorigin="anonymous"></script>
    <title>My Hotels</title>
</head>
<body>
    
</body>
</html>
<?php
spl_autoload_register(function ($class_name) {

    require_once $class_name . '.php';
});
Class Reservation
{
    private $_client;
    private $_hotel;
    private $_room;
    private $_checkin;
    private $_checkout;

    //CONSTRUCT
    public function __construct(Client $client, Hotel $hotel, Room $room, $checkin, $checkout)
    {
        $this->_client = $client;
        $this->_client->addReservation($this);
        $this->_hotel = $hotel;
        $this->_hotel->addReservation($this);
        $this->_room = $room;
        $this->_room->addReservation($this);
        $this->_checkin=new DateTime ($checkin);
        $this->_checkout=new DateTime ($checkout);
    }
    // GETTERS
    public function get_price_this_reservation()
    {
        $nbnight=date_diff($this->_checkin, $this->_checkout)->d;
        $price=$nbnight*$this->_room->get_price_room();
        return $price;
    }

    public function get_client()
    {
        return $this->_client;
    }

    public function get_hotel()
    {
        return $this->_hotel;
    }
    
    public function get_room()
    {
        return $this->_room;
    }
    
    public function get_checkin()
    {
        return $this->_checkin->format('d-m-Y');
    }
    
    public function get_checkout()
    {
        return $this->_checkout->format('d-m-Y');
    }
    public function get_nb_nights()
    {
        $resultat = date_diff($this->_checkin, $this->_checkout);
        return $resultat;
    }
    
    // TO STRING
    public function __toString()
    {
        return "<b>Hotel : ".$this->get_hotel()."/ </b>".$this->get_room()." Reserved ".$this->get_nb_nights()->d." nights, from ".$this->get_checkin()." until ".$this->get_checkout()." Cost : ".$this->get_price_this_reservation()." ???<br>";
    }
}
