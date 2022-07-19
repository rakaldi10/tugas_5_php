<?php
// Buatlah operator String dan buatlah output seperti gambar dibawah ini 
// (wajib menggunakan Operator String 
// dan nilai pada hasil tidak boleh hardcode) :
$input1 = array("Ayo", "Bersama");
$input2 = array("Bersama", "NIOMIC");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Operator String</h1>
    <table border="1">
        <thead>
            <th>Input 1</th>
            <th>Input 2</th>
            <th>Hasil</th>
        </thead>
        <tbody>
            <tr>
                <td><?= $input1[0]; ?></td>
                <td><?= $input1[1]; ?></td>
                <td><?php echo $input1[0] . " " . $input1[1]; ?></td>
            </tr>
            <tr>
                <td><?= $input2[0]; ?></td>
                <td><?= $input2[1]; ?></td>
                <td><?php echo $input2[0] . " " . $input2[1]; ?></td>
            </tr>
        </tbody>
    </table>
    <p>Gabungan : <?= $input1[0] . " " . $input1[1] . " " . $input2[0] . " " . $input2[1]; ?></p>
</body>

</html>