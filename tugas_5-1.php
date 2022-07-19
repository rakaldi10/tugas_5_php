<?php
// Buatlah tabel logika sehingga akan tampil seperti gambar berikut ini 
// (wajib menggunakan Operator Logika dan nilai pada 0 dan 1 
// tidak boleh di hardcode) :
// contoh nilai kosong di dapat dari perbandingan printf(true && false).
$input1 = array(false, false, true, true);
$input2 = array(false, true, false, true);

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
    <table border="1">
        <caption>Tabel Logika 1111</caption>
        <thead>
            <th>Input 1</th>
            <th>Input 2</th>
            <th>AND</th>
            <th>OR</th>
        </thead>
        <tbody>
            <?php for ($i = 0; $i < count($input1); $i++) { ?>
                <tr>
                    <td><?= var_dump($input1[$i]); ?></td>
                    <td><?= var_dump($input2[$i]); ?></td>
                    <td><?php echo ((int)($input1[$i] && $input2[$i])); ?></td>
                    <td><?php echo ((int)($input1[$i] || $input2[$i])); ?></td>
                </tr>
            <?php   } ?>
        </tbody>
    </table>
</body>

</html>