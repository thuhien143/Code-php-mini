<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TNhận dạng tam giác</title>
</head>
<body>
<?php
    if (isset($_POST['c1']) && isset($_POST['c2']) && isset($_POST['c3'])) 
    {
        $c1 = $_POST['c1'];
        $c2 = $_POST['c2'];
        $c3 = $_POST['c3'];
        
        if($c1+$c2 >$c3 && $c1+$c3 >$c2 && $c3+$c2 >$c1)
        {
            if($c1 == $c2 && $c2==$c3)
                $loai = "Tam giác đều";
            elseif($c1==$c2 || $c1==$c3 || $c3==$c2) 
                $loai = "Tam giac cân";
            elseif (pow($c1,2) == pow($c2,2) + pow($c3,2) || pow($c2,2) == pow($c1,2) + pow($c3,2) || pow($c3,2) == pow($c1,2) + pow($c2,2) )
                $loai = "Tam giác vuông";
            elseif(($c1==$c2 || $c1==$c3 || $c3==$c2) && (pow($c1,2) == pow($c2,2) + pow($c3,2) || pow($c2,2) == pow($c1,2) + pow($c3,2) || pow($c3,2) == pow($c1,2) + pow($c2,2)) )
                $loai = "Tam giác vuông cân";
            else 
                $loai = "Tam giác thường";
        }
        else
            $loai = "Đây không phải là một tam giác";
    }          
?>
<form action="" method="POST">
    <center>
    <table  border="1" bordercolor="#feebcb">
        <tr class="center">
            <td colspan="2" align="center" bgcolor="#fecc69" >NHẬN DẠNG TAM GIÁC</td>
        </tr>
        <tr bgcolor = "#feebcb">
            <td>Cạnh 1: </td>
            <td><input type="text" name="c1" size="50" value="<?php echo $c1;?>"></td>
        </tr>
        <tr bgcolor = "#feebcb">
            <td>Cạnh 2: </td>
            <td><input type="text" name="c2" size="50" value="<?php echo $c2;?>" ></td>
        </tr>
        <tr bgcolor = "#feebcb">
            <td>Cạnh 3: </td>
            <td><input type="text" name="c3" size="50" value="<?php echo $c3;?>" ></td>
        </tr>
        <tr bgcolor = "#feebcb">
            <td>Loại tam giác: </td>
            <td><input type="text" name="loai" size="50" value="<?php echo $loai;?>" readonly="true"></td>
        </tr>
        <tr bgcolor = "#feebcb">
            <td colspan="2" align="center"><input type="submit" name="submit" value="Nhận dạng" bgcolor="cdccce" style="cursor: pointer"></td>
        </tr>
    </table>
    </center>
</form>
</body>
</html>