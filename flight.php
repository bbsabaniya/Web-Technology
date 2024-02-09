<?php

class Flight {
    // Properties
    private $flightNumber;
    private $departureCity;
    private $arrivalCity;
    

    // Constructor
    public function __construct($flightNumber, $departureCity, $arrivalCity) {
        $this->flightNumber = $flightNumber;
        $this->departureCity = $departureCity;
        $this->arrivalCity = $arrivalCity;
        
    }

    // Getter methods
    public function getFlightNumber() {
        return $this->flightNumber;
    }

    public function getDepartureCity() {
        return $this->departureCity;
    }

    public function getArrivalCity() {
        return $this->arrivalCity;
    }

    // Function to display flight details
    public function displayFlightDetails() {
        echo "Flight Number: " . $this->getFlightNumber() . "<br>";
        echo "Departure City: " . $this->getDepartureCity() . "<br>";
        echo "Arrival City: " . $this->getArrivalCity() . "<br> <br>";
        
    }
}

// Create an instance of the Flight class
$flight1 = new Flight("F123", "Kathmandu", "Pokhara");
$flight2 = new Flight("F456", "Nepal", "Australia");

// Display flight details
$flight1->displayFlightDetails();
$flight2->displayFlightDetails();

?>
