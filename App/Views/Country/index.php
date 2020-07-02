<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista agregada</title>
</head>
<body>
    <table>
    <td>
    <caption>Lista de Paises</caption>
        <tr>
            <th>Id</th>
            <th>Pais</th>
            <th>Ultima actualizacion</th>
        </tr>
<?php
    foreach ($countryList as $key => $item) {
?>
    <tr>
        <td>
<?php
        echo $item['country_id'];
?>
        </td>
        <td>
<?php
        echo $item['country'];
?>
        </td>
        <td>
<?php
        echo $item['last_update'];
?>
        </td>
        
    </tr>
<?php
    }
?>    
    </table>
</body>
</html>