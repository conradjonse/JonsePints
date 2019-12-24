<?php 
    function db() {
        $con = mysqli_connect('localhost', 'beers', 'pass8272', 'raspberrypints');
        return $con;
    }
    $rpintsversion="1.0.0.279";
?>