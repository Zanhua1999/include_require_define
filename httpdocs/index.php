<?php

include('../private/connectvars.php');

$dbc = mysqli_connect(HOST, USER, PASS, DBNAME) or die ('Erorr connecting');
echo 'Succes!';