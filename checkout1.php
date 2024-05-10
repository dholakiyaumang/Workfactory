<?php
session_start();
if(isset($_GET['checkout1'])){
    $iname=$_GET['Item_name'];
    $ifees=$_GET['Item_Fees'];
    $iquntity=$_GET['Item_Quantity'];

    echo $iname;
    $query = "INSERT INTO bookings( BName, BFees, BQuantity) VALUES ('$iname','$ifees','$iquntity')";
    $result= mysqli_query($con,$query);

    if($result){
        echo'<script>alert("Booked  Successfully!!");
            location.replace("index.php");</script>';
    }else{
        echo'<script>alert("Problem In Booking");
            location.replace("cart.php");</script>';
    }

}
?>