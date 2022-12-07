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
class Hotel
{
    private $_hotelname;
    private $_stars;
    private $_adress;
    public $_rooms;
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
        $allresa="<b>Reserved rooms of ".$this.": </b><br>"."<span class='reservation'>".$this->get_nb_rooms_reserverd()." RESERVATIONS<br></span>";
        
        foreach ($this->_reservations as $reservation)
        {
        $allresa.= "<b>Client : ".$reservation->get_client()."</b> ".$reservation;
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




    //DISPLAY TABLE 
    public function DisplayTableReservation()
    {
        // sort($hotel->_rooms, SORT_NUMERIC); // trier par ordre numérique sur la clé "key"
        $table_reservation= 
        "<table border=1px>
        <thead>
            <tr id='tableheader'>
                <th>ROOM</th>
                <th>PRICE</th>
                <th>WIFI</th>
                <th>AVAILABILITY<th>
            </tr>
        </thead>
        <tbody>";
        foreach($this->_rooms as $room)//????)
        $table_reservation.= // La concaténation "." avant le égal permet de concatener et de ne pas remplacer le contenu de $table_reservation, mais de lui rajouter des éléments.
            "<tr>
                <td>Room ".$room->get_numero()."</td>
                <td>".$room->get_price()/*logo()*/." €</td>
                <td>".$room->get_wifi_logo()."</td>
                <td>".$room->get_strip_Availability()." </td>
            </tr>";
            $table_reservation.="</tbody></table>";
    return $table_reservation;
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

    /**
     * Get the value of _rooms
     */ 
    public function get_rooms()
    {
        return $this->_rooms;
    }
}
