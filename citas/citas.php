<?php

$conn = mysqli_connect("localhost", "root", "Usqpj=Z$", "obra");

// Check connection
if ($conn === false) {
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}


?>
<html>
    <header-component></header-component>
    <script src="../js/header.js"></script>

<body>
    <form action="insert.php" method="post">
        <label class="required">Data</label>
        <input class="form-control date-input" type="date" name="data" id="data" data-trigger="hover" data-toggle="popover">

        <label class="required">Name</label>
        <input class="form-control" type="text" name="nome" id="nome">

        <label class="required">Hora de inicio</label>
        <input class="form-control time-input" type="text" name="horain" id="horain">

        <label class="required">Hora de salida</label>
        <input class="form-control time-input" type="text" name="horaout" id="horaout">

        <input type="submit" value="Confirmar">
    </form>

    <footer-component></footer-component>
    <script src="../js/footer.js"></script>
</body>

</html>