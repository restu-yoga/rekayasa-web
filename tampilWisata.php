<?php
function curl($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

$send = curl("http://localhost/rekayasa/pertemuan1/getWisata.php");

$data = json_decode($send, TRUE);

?> 

<!DOCTYPE html>
<html>
<head>
    <title>PHP Foreach Table</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
        }
    </style>
</head>
<body>

    <table>
        <thead>
            <tr>
                <th>Kota</th>
                <th>Landmark</th>
                <th>Tarif</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $row) { ?>
                <tr>
                    <td><?php echo $row["kota"]; ?></td>
                    <td><?php echo $row["landmark"]; ?></td>
                    <td><?php echo $row["tarif"]; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</body>
</html>