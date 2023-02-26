<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>


table {
    border: 1px solid black;
    width: 10%;
    background-color: lavenderblush;
}

table {
  border-collapse: collapse;
  border-spacing: 10px;
}

td, th {
  border-bottom: 1px solid black;
}


</style>
<body>
    <?php
    include("user.php");
    $user1 = new user();
    $user1->afficheUser();
    ?>

<table>
    <tr>
        <th>User</th>
    </tr>
    <tr>
        <td style="border-bottom: none;">-Nom : String</td>
    </tr>
    <tr>
        <td>-Prenom : String</td>
    </tr>
    <tr>
        <td>+afficheUser() : void</td>
    </tr>
</table>
</body>
