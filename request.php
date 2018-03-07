<?php include 'header.php';

if(isset($_SESSION["logged_in"]) && $_SESSION["logged_in"]){
    ?>
    <form name="form2" action="actionrequest.php" method="post">
    <div class="container"> 
            <h1>Request a ride</h1>
           <label>Date</label>
            <input type="date" placeholder="Enter the date you want" name="date" required>
            <br>
           <label>Chose your vehicle</label><br>
             <select name="vehicle_id">
           <?php 
            require 'database.php';
            $sql = "SELECT * FROM vehicles";
            $result = $connect->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<option value='". $row["carno"]."'>" . $row["type"]."</option>";
                }
            } else {
                echo "0 results";
            }
            $connect->close();
            ?>
           
             
            </select><br>
           <label>Your Pickup Location</label>
            <input type="text" placeholder="Enter your pickup location" name="pickup" required>
            <br>
           <label>Your Destination</label>
            <input type="text" placeholder="Enter your destination" name="destination" required>
            <br>
        
                        <button type="submit" class="signupbtn">Request</button>    
        </div>
 </form>
    <?php
}else{
    echo "<a href='login.php'>Please log in to request</a>";
}
?>

<?php include 'footer.php'?>