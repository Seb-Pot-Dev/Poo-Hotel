<?php
spl_autoload_register(function ($class_name) {

    require_once $class_name . '.php';
});
//CLIENT
$micka = new Client("Micka", "MURMANN");

//HOTEL
$hilton = new Hotel("Hilton Strasbourg", "****", "10 route de la gare", 30);

//ROOMS
$room1 = new Room($hilton, 1, 1, "yes", "110€");
$room2 = new Room($hilton, 2, 1, "no", "100€");
$room3 = new Room($hilton, 3, 2, "yes", "130€");
$room4 = new Room($hilton, 4, 2, "yes", "130€");
$room5 = new Room($hilton, 5, 2, "yes", "130€");
$room6 = new Room($hilton, 6, 2, "yes", "130€");
$room7 = new Room($hilton, 7, 2, "yes", "130€");
$room8 = new Room($hilton, 8, 2, "yes", "130€");
$room9 = new Room($hilton, 9, 2, "yes", "130€");
$room10 = new Room($hilton, 10, 2, "yes", "130€");
$room11 = new Room($hilton, 11, 2, "yes", "130€");
$room12 = new Room($hilton, 12, 2, "yes", "130€");
$room13= new Room($hilton, 13, 2, "yes", "130€");
$room14= new Room($hilton, 14, 2, "yes", "130€");
$room15= new Room($hilton, 15, 2, "yes", "130€");
$room16 = new Room($hilton, 16, 2, "yes", "130€");
$room17 = new Room($hilton, 17, 2, "yes", "130€");
$room18 = new Room($hilton, 18, 2, "yes", "130€");
$room19 = new Room($hilton, 19, 2, "yes", "130€");
$room20 = new Room($hilton, 20, 2, "yes", "130€");
$room21 = new Room($hilton, 21, 2, "yes", "130€");
$room22 = new Room($hilton, 22, 2, "yes", "130€");
$room23= new Room($hilton, 23, 2, "yes", "130€");
$room24= new Room($hilton, 24, 2, "yes", "130€");
$room25= new Room($hilton, 25, 2, "yes", "130€");
$room26= new Room($hilton, 26, 2, "yes", "130€");
$room27= new Room($hilton, 27, 2, "yes", "130€");
$room28= new Room($hilton, 28, 2, "yes", "130€");
$room29= new Room($hilton, 29, 2, "yes", "130€");
$room30= new Room($hilton, 30, 2, "yes", "130€");


//RESERVATIONS
$resa1 = new Reservation($micka, $hilton, $room1, "11-03-2021", "15-03-2021");
$resa2 = new Reservation($micka, $hilton, $room3, "01-04-2021", "17-04-2021");

//RESULTATS:
echo $hilton->getInfo();
echo $hilton->get_all_rooms();
echo $hilton->get_all_reservation();
echo $micka->getReservation();