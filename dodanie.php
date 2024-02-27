<?php
    $conn = mysqli_connect('localhost', 'root', '', 'ee09');

    if(isset($_POST["nr"]) && isset($_POST["rat1"]) && isset($_POST["rat2"]) && isset($_POST["rat3"])){
        $numer = $_POST["nr"];
        $rat1 = $_POST["rat1"];
        $rat2 = $_POST["rat2"];
        $rat3 = $_POST["rat3"];

        $q = "INSERT INTO ratownicy VALUES (NULL, $numer,'$rat1', '$rat2', '$rat3')";

        mysqli_query($conn, $q);
        

        echo "Do bazy zostało wysłane: $q";
    }

    mysqli_close($conn);

?>
