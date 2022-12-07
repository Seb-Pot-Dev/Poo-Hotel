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
        echo "<span class='reservation'>".$this->get_nb_client_reservations()." RESERVATIONS </span></p>";
        $total=0;
        foreach($this->_reservations as $reservation)
        {
            echo $reservation;
            $total+=$reservation->get_price_this_reservation();
        }
        return "Total price for is ".$total." €<br><br>";
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
    public function get_nb_client_reservations()
    {
        return count($this->_reservations);
    }
    // TO STRING
    public function __toString()
    {
        return $this->_lastname . " " . $this->_firstname;
    }


}