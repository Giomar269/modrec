<?php
    $servername = "mysql.hostinger.co.uk";
    $database = "u266072517_name";
    $username = "u266072517_user";
    $password = "buystuffpwd";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
    }

    echo "Connected successfully";

    $sql = "INSERT INTO Students (name, lastname, email) VALUES ('Thom', 'Vial', 'thom.v@some.com')";
    if (mysqli_query($conn, $sql)) {
          echo "New record created successfully";
    } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>

<?php
    $mysqli=new mysqli("localhost","root","","reportes"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos

    if(mysqli_connect_errno()){
        echo 'Conexion Fallida : ', mysqli_connect_error();
        exit();
    }
    $acentos = $mysqli->query("SET NAMES 'utf8'")
?>
