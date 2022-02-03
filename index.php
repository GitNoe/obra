<?php
session_start();
if (isset($_SESSION['usuario']) && $_SESSION['estado'] == "conectado") {
    "El usuario si esta online";
} else {
    header('Location:login/login.php');
}

$servername = "localhost";
$username = "root";
$password = "Usqpj=Z$";
$dbname = "obra";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<html>



<head>

    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <!-- <link rel='stylesheet' href='index.css'> -->
    <header-component></header-component>
    <script src="../js/header.js"></script>
</head>

<body>
    <h1>Resumo do día</h1>
    <?php
    $sql = "SELECT * FROM citas";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table><tr><th>Data</th><th>Nome</th><th>Hora de comezo</th><th>Hora de remate</th></tr>";
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["data"] . "</td><td>" . $row["nome"] . "</td><td>" . $row["horain"] . "</td><td>" . $row["horaout"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

    $conn->close();
    ?>
    <div class="container">
        <h2>Notas</h2>
        <div class="list__items">
            <ul>
            </ul>
        </div>
        <div class="input__box">
            <input type="text" name="" id="#input__text" placeholder="Nova nota">
            <button class="add__btn"><i class="fi-rr-arrow-small-up"></i></button>
        </div>
        <div class="cat__details">
            <span data-color="#f1c40f">
                <p>Empresa</p>
                <div class="cat__type" style="background:#f1c40f;"></div>
            </span>
            <span data-color="#3498db">
                <p>Estudante</p>
                <div class="cat__type" style="background:#3498db;"></div>
            </span>
            <span data-color="#8e44ad">
                <p>Traballo</p>
                <div class="cat__type" style="background:#8e44ad;"></div>
            </span>
            <span data-color="#34495e">
                <p>Charla</p>
                <div class="cat__type" style="background:#34495e;"></div>
            </span>
        </div>
    </div>
    <script src="index.js"></script>
</body>

<footer-component></footer-component>
<script src="../js/footer.js"></script>

</html>