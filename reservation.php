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

    public function __construct(Client $client, Hotel $hotel, Room $room, $checkin, $checkout)
    {
        $this->_client = $client;
        $this->_client->addReservation($this);
        $this->_hotel = $hotel;
        $this->_hotel->addReservation($this);
        $this->_room = $room;
        $this->_checkin=$checkin;
        $this->_checkout=$checkout;
        
    }
    public function __toString()
    {
        return "<b>Hotel : ".$this->get_hotel()."/ </b>".$this->get_room()." du ".$this->get_checkin()." au ".$this->get_checkout()."<br>";
    }

    /**
     * Get the value of _client
     */ 
    public function get_client()
    {
        return $this->_client;
    }

    /**
     * Get the value of _hotel
     */ 
    public function get_hotel()
    {
        return $this->_hotel;
    }

    /**
     * Get the value of _room
     */ 
    public function get_room()
    {
        return $this->_room;
    }

    /**
     * Get the value of _checkin
     */ 
    public function get_checkin()
    {
        return $this->_checkin;
    }

    /**
     * Get the value of _checkout
     */ 
    public function get_checkout()
    {
        return $this->_checkout;
    }
}
