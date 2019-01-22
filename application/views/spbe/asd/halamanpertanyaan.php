<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="<?php base_url('tes/tambah') ?>" method="post" enctype="multipart/form-data">
        <table>
        <tr>
            <td>masukkan pertanyaan</td>
            <td>:</td>
            <td>
                <input class="form-control" type="text" id="APLIKASI_FUNGSIONAL" name="APLIKASI_FUNGSIONAL" placeholder="Aplikasi Fungsional">
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>
                <input type="submit" name="btn" value="Save">
            </td>
        </tr>
    </table>
    </form>
    <br>
    <hr>
    <table>
        <tr>
            <td>no</td>
            <td>aplikasi fungsional</td>
        </tr>
        <?php foreach ($APLIKASI_FUNGSIONAL as $key => $value) { ?>
            <tr>
                <td><?php echo ($key + 1) ?></td>
                <td><?php echo $value->APLIKASI_FUNGSIONAL ?></td>
                <td><table>
                    <tr>
                        <td><input type="button" value="Edit"></td>
                        <td><input type="button" value="Delete"></td>
                    </tr>
                </table></td>
            </tr>
       <?php 
    } ?>
    </table>
    <br>
    <hr>
    <a href="<?php echo base_url('tes') ?>">halaman 1</a>
    <a href="<?php echo base_url('tes/halaman2') ?>">halaman 2</a>
    <a href="<?php echo base_url('tes/halaman3') ?>">halaman 3</a>
</body>
</html>