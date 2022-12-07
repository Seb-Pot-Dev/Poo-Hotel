<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=$, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>My Hotels</title>
</head>
<body>
    
</body>
</html>


<?php
spl_autoload_register(function ($class_name) {

    require_once $class_name . '.php';
});
Class Room
{
    public $_hotel;
    public $_numero;
    public $_nb_beds;
    public $_wifi;
    public $_price;
    public $_availability;
// CONSTRUCT
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
    // When creating a new reservation, make availability false. (considering its use on Class Reservation)
    public function addReservation()
    {
        $this->_availability=false;
    }





    // GETTER
    public function get_price_room()
    {
        return $this->_price;
    }
    // Check if the room is available and return adequate sentence.
    public function get_strip_Availability()
    {
        if($this->_availability==false)
        {
            return "<p id='reserved'>Reserved</p>";
        }
        else
        {
            return "<p class='reservation'>Available</p>";
        }
    }   


    // to STRING
    public function __toString()
    {
        return "Room number: ".$this->_numero." (".$this->_nb_beds." beds - wifi: ".$this->_wifi."). Price for a night :".$this->_price."€.<br>";
    }

    /**
     * Get the value of _hotel
     */ 
    public function get_hotel()
    {
        return $this->_hotel;
    }

    /**
     * Get the value of _numero
     */ 
    public function get_numero()
    {
        return $this->_numero;
    }

    /**
     * Get the value of _nb_beds
     */ 
    public function get_nb_beds()
    {
        return $this->_nb_beds;
    }

    /**
     * Get the value of _wifi
     */ 
    public function get_wifi()
    {
        return $this->_wifi;
    }
    public function get_wifi_logo()
    {
        if($this->get_wifi()=="yes")
        {
        return "<span><i class='fa-solid fa-wifi'></i></span>";
        }
        else{
        return "";
        }
    }

    /**
     * Get the value of _price
     */ 
    public function get_price()
    {
        return $this->_price;
    }

    /**
     * Get the value of _availability
     */ 
    public function get_availability()
    {
        return $this->_availability;
    }
}
