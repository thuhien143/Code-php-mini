<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm số nguyên tố</title>
</head>
<body>
    <?php
    function kt_snt($so)
    {
        if($so < 2) return 0;
        for($i = 2; $i <= sqrt($so); $i++)
        {
            if($so % $i == 0) return 0;
        }
        return 1;
    }

    if(isset($_POST['submit']))
    {
        $n = $_POST['n'];
        $chuoi = "";
        if($n < 2)
        {
            $chuoi = "Không có số nguyên tố nào <= " .$n;
        }
        else
        {
            $chuoi = "2";
            for($i = 3; $i <= $n; $i++)
            {
                if(kt_snt($i))
                {
                    $chuoi = $chuoi . ", " .$i;
                }
            }
        }
    }
    ?>
    <form method="post" action="">
        <center>
            <table>
                <tr bgcolor="#fecc69">
                    <td colspan="2" align="center"><h2>TÌM SỐ NGUYÊN TỐ</h2></td>
                </tr>
                <tr bgcolor = "#feebcb">
                    <td>Nhập số N:</td>
                    <td><input type="text" name="n" value="<?php if(isset($n)) echo $n; ?>" size="10"></td>
                </tr>
                <tr bgcolor = "#feebcb">
                    
                    <td colspan="2" align="center">
                        <input type="submit" name="submit" value="Tìm số nguyên tố">
                    </td>
                </tr>
                <?php if(isset($_POST['submit'])) { ?>
                <tr bgcolor="#fefb99" align="center">
                    <td colspan="2"><br><center>Các số nguyên tố <= <?php echo $n; ?></center></td>
                </tr>
                <tr >
                    <td colspan="2" style="background-color:#f8cfd8">
                        <center>
                            <?php echo $chuoi; ?>
                        </center>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </center>
    </form>
</body>
</html>