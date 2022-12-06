<?php
spl_autoload_register(function ($class_name) {

    require_once $class_name . '.php';
});
Class Room
{
    private $_hotel;
    private $_numero;
    private $_nb_beds;
    private $_wifi;
    private $_price;
    private $_availability;

    public function __construct($hotel, int $numero, int $nb_beds, $wifi, int $price)
    {
        $this->_hotel=$hotel;
        $this->_hotel->addRoom($this);
        $this->_numero=$numero;
        $this->_nb_beds=$nb_beds;
        $this->_wifi=$wifi;
        $this->_price=$price;
        $this->_availability=true;
    }
    public function __toString()
    {
        return "Room number: ".$this->_numero." (".$this->_nb_beds." beds - wifi: ".$this->_wifi."). Price :".$this->_price;
    }
    public function addReservation()
    {
        $this->_availability=false;
    }
    public function get_price_room()
    {
        return $this->_price;
    }
    public function CheckAvailability()
    {
        if($this->_availability==false)
        {
            return "<br>**********************<br><b>Room number ".$this->_numero."</b> at <u>".$this->_hotel."</u> is not available.<br>**********************<br>";
        }
        else
        {
            return "<br>**********************<br><b>Room number ".$this->_numero."</b> at <u>".$this->_hotel."</u> is available.<br>**********************<br>";
        }
    }
}
