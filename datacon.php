
<?php
if (!empty($_POST["send"])) {
    $name = $_POST["name"];
    $price = $_POST["price"];
    $size = $_POST["size"];
    $color = $_POST["color"]; 
    $file = rand(1000,10000)."-".$_FILES['img']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
    $folder ="cvdata";
    
    $conn = mysqli_connect("localhost", "root", "", "shu12") or die("Connection Error: " . mysqli_error($conn));

    $stmt = $conn->prepare("INSERT INTO addto(name,price,size,color,img) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sdsss", $name, $price,$size,$color,$img);
    $stmt->execute();

    $Message = "Your contact information is saved successfully.";
    $type = "success";

    $stmt->close();
    $conn->close(); 
    
    ?>
    <script>
        alert("Data save succesfully");
        
        // window.location.href="add.html";
    </script>
    <?php
}

?>
