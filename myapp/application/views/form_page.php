<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Welcome to CodeIgniter</title>

</head>

<body>
    <h1>Form page</h1>


    <h1>Contact</h1>
    <form method="post">
        <label>Nom</label>
        <input type="text" name="name">
        <label>Email</label>
        <input type="email" name="email">
        <label>Date</label>
        <textarea name="date" required></textarea>
        <label>Message</label>
        <textarea name="message"></textarea>
        <input type="submit">
    </form>
    <?php

    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['date']) && isset($_POST['message'])) {
        $date = $_POST['date'];
        $email = $_POST['email'];








        // vérification de l'email 
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

            // Vérification de la date
            function date_validation($date)
            {
                // Formatage de la date de type dd-mm-yyyy
                if (preg_match("/^(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])-[0-9]{4}$/", $date)) {
                    var_dump("la date a un format dd-mm-yyyy");
                    $date_explode = explode("-", $date);
                    $date_forma = $date_explode[0] . '-' . $date_explode[1] . '-' . $date_explode[2];
                    echo $date_forma;
                } else if (preg_match("/^(0[1-9]|[1-2][0-9]|3[0-1])+\/(0[1-9]|1[0-2])+\/[0-9]{4}$/", $date)) {
                    var_dump("la date à un format dd/mm/yyyy");
                    $date_explode = explode("/", $date);
                    $date_forma = $date_explode[0] . '-' . $date_explode[1] . '-' . $date_explode[2];
                    echo $date_forma;
                } else if (preg_match("/^(0[1-9]|[1-2][0-9]|3[0-1])(0[1-9]|1[0-2])[0-9]{4}$/", $date)) {
                    var_dump("la date à un format ddmmyyyy");
                    $date_explode = str_split($date);
                    $date_forma = $date_explode[0] .  $date_explode[1] . '-' . $date_explode[2] .  $date_explode[3] . '-' . $date_explode[4] .  $date_explode[5] . $date_explode[6] .  $date_explode[7];
                    echo $date_forma;
                } else if (preg_match("/^(0[1-9]|[1-2][0-9]|3[0-1]).(0[1-9]|1[0-2]).[0-9]{4}$/", $date)) {
                    var_dump("la date à un format dd.mm.yyyy");
                    $date_explode = explode(".", $date);
                    $date_forma = $date_explode[0] . '-' . $date_explode[1] . '-' . $date_explode[2];
                    echo "$date_forma";
                } else if (preg_match("/^(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])-[0-9]{4}$/", $date)) {
                    var_dump("la date à un format mm-dd-yyyy");
                    $date_explode = explode("-", $date);
                    $date_forma = $date_explode[1] . '-' . $date_explode[0] . '-' . $date_explode[2];
                    echo  $date_forma;
                } else if (preg_match("/^(0[1-9]|1[0-2])+\/(0[1-9]|[1-2][0-9]|3[0-1])+\/[0-9]{4}$/", $date)) {
                    var_dump("la date à un format mm/dd/yyyy");
                    $date_explode = explode("/", $date);
                    $date_forma = $date_explode[1] . '-' . $date_explode[0] . '-' . $date_explode[2];
                    echo  $date_forma;
                } else if (preg_match("/^(0[1-9]|1[0-2])(0[1-9]|[1-2][0-9]|3[0-1])[0-9]{4}$/", $date)) {
                    var_dump("la date à un format mmddyyyy");
                    $date_explode = str_split($date);
                    $date_forma = $date_explode[2] .  $date_explode[3] . '-' . $date_explode[0] .  $date_explode[1] . '-' . $date_explode[4] .  $date_explode[5] . $date_explode[6] .  $date_explode[7];
                    echo $date_forma;
                } else if (preg_match("/^[0-9]{4}-(0[1-9]|[1-2][0-9]|3[0-1])-(0[1-9]|1[0-2])$/", $date)) {
                    var_dump("la date à un format yyyy-dd-mm");
                    $date_explode = explode("-", $date);
                    $date_forma = $date_explode[1] . '-' . $date_explode[2] . '-' . $date_explode[0];
                    echo $date_forma;
                } else if (preg_match("/^[0-9]{4}+\/(0[1-9]|[1-2][0-9]|3[0-1])+\/(0[1-9]|1[0-2])$/", $date)) {
                    var_dump("la date à un format yyyy/dd/mm");
                    $date_explode = explode("/", $date);
                    $date_forma = $date_explode[1] . '-' . $date_explode[2] . '-' . $date_explode[0];
                    echo $date_forma;
                } else if (preg_match("/^[0-9]{4}(0[1-9]|[1-2][0-9]|3[0-1])(0[1-9]|1[0-2])$/", $date)) {
                    var_dump("la date à un format yyyyddmm");
                    $date_explode = str_split($date);
                    $date_forma = $date_explode[4] .  $date_explode[5] . '-' . $date_explode[6] .  $date_explode[7] . '-' . $date_explode[0] .  $date_explode[1] . $date_explode[2] .  $date_explode[3];
                    echo $date_forma;
                } else if (preg_match("/^[0-9]{4}.(0[1-9]|[1-2][0-9]|3[0-1]).(0[1-9]|1[0-2])$/", $date)) {
                    var_dump("la date à un format yyyy.dd.mm");
                    $date_explode = explode(".", $date);
                    $date_forma = $date_explode[1] . '-' . $date_explode[2] . '-' . $date_explode[0];
                    echo $date_forma;
                } else if (preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $date)) {
                    var_dump("la date à un format yyyy-mm-dd");
                    $date_explode = explode("-", $date);
                    $date_forma = $date_explode[2] . '-' . $date_explode[1] . '-' . $date_explode[0];
                    echo $date_forma;
                } else if (preg_match("/^[0-9]{4}+\/(0[1-9]|1[0-2])+\/(0[1-9]|[1-2][0-9]|3[0-1])$/", $date)) {
                    var_dump("la date à un format yyyy/mm/dd");
                    $date_explode = explode("/", $date);
                    $date_forma = $date_explode[2] . '-' . $date_explode[1] . '-' . $date_explode[0];
                    echo $date_forma;
                } else if (preg_match("/^[0-9]{4}(0[1-9]|1[0-2])(0[1-9]|[1-2][0-9]|3[0-1])$/", $date)) {
                    var_dump("la date à un format yyyymmdd");
                    $date_explode = str_split($date);
                    $date_forma = $date_explode[6] .  $date_explode[7] . '-' . $date_explode[4] .  $date_explode[5] . '-' . $date_explode[0] .  $date_explode[1] . $date_explode[2] .  $date_explode[3];
                    echo $date_forma;
                } else if (preg_match("/^[0-9]{4}.(0[1-9]|1[0-2]).(0[1-9]|[1-2][0-9]|3[0-1])$/", $date)) {
                    var_dump("la date à un format yyyy.mm.dd");
                    $date_explode = explode(".", $date);
                    $date_forma = $date_explode[2] . '-' . $date_explode[1] . '-' . $date_explode[0];
                    echo $date_forma;
                } else {
                    echo "la date entrée n'est pas valide";
                }
            }
            date_validation($date);
        } else {
            echo "email invalide";
        }
    }

    ?>


</body>

</html>