<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm UCLN và BCNN</title>
</head>
<body>
<?php
    if(isset($_POST['a']) && isset($_POST['b']))
    {
        $a = $_POST['a'];
        $b = $_POST['b'];
        //tìm USCLN
        $ucln = 0;
        $i = 1;
        do{
            if($a % $i == 0 && $b % $i == 0){
                $ucln = $i;
            }
            $i++;
        }while($i <= $a && $i <= $b);
        //tìm BSCNN
        $bcnn = ($a*$b)/$ucln;
    }
?>
<form action="" method="POST">
    <center>
    <table  border="1" bordercolor="#feebcb">
        <tr class="center">
            <td colspan="2" align="center" bgcolor="#fecc69" >ƯỚC SỐ CHUNG LỚN NHẤT và BỘI SỐ CHUNG NHỎ NHẤT</td>
        </tr>
        <tr bgcolor = "#feebcb">
            <td>Số A: </td>
            <td><input type="text" name="a" size="50" value="<?php echo $a;?>"></td>
        </tr>
        <tr bgcolor = "#feebcb">
            <td>Số B: </td>
            <td><input type="text" name="b" size="50" value="<?php echo $b;?>"></td>
        </tr>
        <tr bgcolor = "#feebcb">
            <td>USCLN: </td>
            <td><input type="text" name="ucln" size="50" value="<?php echo $ucln;?>" readonly="true" style="background-color:#f8cfd8"></td>
        </tr>
        <tr bgcolor = "#feebcb">
            <td>BSCNN: </td>
            <td><input type="text" name="bcnn" size="50" value="<?php echo $bcnn;?>" readonly="true" style="background-color:#f8cfd8"></td>
        </tr>
        <tr bgcolor = "#feebcb">
            <td colspan="2" align="center"><input type="submit" name="submit" value="Tìm USCLN và BSCNN" bgcolor="cdccce" style="cursor: pointer"></td>
        </tr>
    </table>
    </center>
</form>
</body>
</html>