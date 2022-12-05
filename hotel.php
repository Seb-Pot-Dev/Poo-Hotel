<?php
spl_autoload_register(function ($class_name) {

    require_once $class_name . '.php';
});
class Hotel
{
    private $_hotelname;
    private $_stars;
    private $_adress;
    private $_rooms;
    private $_reservations;

    public function __construct($hotelname, $stars, $adress)
    {
        $this->_hotelname = $hotelname;
        $this->_stars = $stars;
        $this->_adress = $adress;
        $this->_rooms = [];
        $this->_reservations=[];
        
    }
    //ROOMS
    public function get_all_rooms()
    {
        $allrooms="<b>Available and Non-Available rooms: </b><br>";
        foreach ($this->_rooms as $room)
        {
        $allrooms.=$room."<br>";
        }
        return $allrooms."<br>";
    }
    public function addRoom($room)
    {
        $this->_rooms[]=$room;
    }
    //RESERVATIONS
    public function get_all_reservation()
    {
        $allresa="<b>Reserved rooms : </b><br>";
        foreach ($this->_reservations as $reservation)
        {
        $allresa.= $reservation;
        }
        return $allresa."<br>";
    }
    public function addReservation($reservation){
        $this->_reservations[]=$reservation;
    }
    //INFOS HOTEL / GET / TOSTRING
    public function getInfo()
    {
        return $this->get_hotelname()."<br>".
        $this->get_adress()."<br>".
        "Number of rooms : ".$this->get_nb_rooms()."<br>".
        "Number of Reserved rooms: : ".$this->get_nb_rooms_reserverd()."<br>".
        "Number of Available rooms : ".$this->get_nb_rooms_available()."<br><br>";
    }
    public function get_nb_rooms_reserverd()
    {
        $reserved=count($this->_reservations);
        return $reserved;
    }
    public function get_nb_rooms_available()
    {
        $reserved=count($this->_reservations);
        $allroom=count($this->_rooms);
        $available=$allroom-$reserved;
        return $available;
    }
    
    /**
     * Get the value of _hotelname
     */ 
    public function get_hotelname()
    {
        return $this->_hotelname;
    }
    
    /**
     * Set the value of _hotelname
     *
     * @return  self
     */ 
    public function set_hotelname($_hotelname)
    {
        $this->_hotelname = $_hotelname;
        
        return $this;
    }
    
    
    /**
     * Get the value of _stars
     */ 
    public function get_stars()
    {
        return $this->_stars;
    }
    
    /**
     * Get the value of _adress
     */ 
    public function get_adress()
    {
        return $this->_adress;
    }
    
    /**
     * Get the value of _nb_rooms
     */ 
    public function get_nb_rooms()
    {
        return count($this->_rooms);
    }
    public function __toString()
    {
        return $this->_hotelname." ".$this->_stars;
    }
}
