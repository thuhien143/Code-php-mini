<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bảng cửu chương mở rộng</title>
    <style>
        .style1{
            color: #FFFFFF;
            font-weight: bold;
            font-style: italic;
        }
        td{
            border: 1px solid black;
            padding: 5px;
        }
    </style>
</head>
<body>
    <?php
    if(isset($_POST['submit']))
    {
        $sobatdau = $_POST['sobatdau'];
        $soketthuc = $_POST['soketthuc'];
    }
    ?>
    <form method="post" action="">
        <center>
            <table width="350">
                <tr bgcolor="#045bb5">
                    <td colspan="2" align="center"><h2>BẢNG CỬU CHƯƠNG</h2></td>
                </tr>
                <tr bgcolor="#cee7fd">
                    <td>Số bắt đầu:</td>
                    <td><input type="text" name="sobatdau" value="<?php if(isset($sobatdau)) echo $sobatdau; ?>" size="15"></td>
                </tr>
                <tr bgcolor="#cee7fd">
                    <td>Số kết thúc:</td>
                    <td><input type="text" name="soketthuc" value="<?php if(isset($soketthuc)) echo $soketthuc; ?>" size="15"></td>
                </tr>
                <tr bgcolor="#cee7fd">
                    <td colspan="2" align="center" >
                        <input type="submit" name="submit" value="In bảng cửu chương">
                    </td>
                </tr>
                <?php
                if(isset($_POST['submit']))
                {
                    $sobatdau = $_POST['sobatdau'];
                    $soketthuc = $_POST['soketthuc'];
                    $sohang = 10;
                    $socot = $soketthuc - $sobatdau;
                ?>
                <!-- <tr>
                    <td align ="center" <?php echo $socot;?>>
                        <center><h3>BẢNG CỬU CHƯƠNG</h3></center>
                    </td>
                </tr> -->
                <?php
                    for($i = 1; $i <= $sohang; $i++)
                    {
                ?>
                <tr bgcolor="#cee7fd">
                    <?php
                        for($j = $sobatdau; $j <= $soketthuc; $j++)
                        {
                            $tich = $j * $i;
                    ?>
                    <td>
                        <center>
                            <?php echo $j. " x " .$i. " = " .$tich; ?>
                        </center>
                    </td>
                    <?php } ?>
                </tr>
                <?php } } ?>
            </table>
        </center>
    </form>
</body>
</html>
