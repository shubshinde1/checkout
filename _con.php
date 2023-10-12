
<?php
if (!empty($_POST["send"])) {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $username = $_POST["username"];
    $email = $_POST["email"]; 
    $address = $_POST["address"];
    $address2 = $_POST["address2"];
    $country = $_POST["country"];
    $state = $_POST["state"];
    $cardname = $_POST["cardname"];
    $cardnumber = $_POST["cardnumber"];
    $zip = $_POST["zip"];
    $checkbox = $_POST["checkbox"];
    $date = $_POST["date"];
    $cvv = $_POST["cvv"];
    $conn = mysqli_connect("localhost", "root", "", "shu12") or die("Connection Error: " . mysqli_error($conn));

    $stmt = $conn->prepare("INSERT INTO adi(fname,lname,username,email,address,address2,country,state,cardname,cardnumber,zip,checkbox,date,cvv) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,?,?,?)");
    $stmt->bind_param("sssssssssidssd", $fname, $lname, $username, $email, $address, $address2, $country, $state, $cardname, $cardnumber, $zip, $checkbox, $date, $cvv);
    $stmt->execute();

    $Message = "Your contact information is saved successfully.";
    $type = "success";

    $stmt->close();
    $conn->close(); 
    
    ?>
    <script>
        alert("Data save succesfully");
        
        window.location.href="prod1.html";
    </script>
    <?php
}

?>
