<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giải phương trình bậc nhất</title>
</head>
<body>
<?php
    if(isset($_POST['a']) && isset($_POST['b']))
    {
        $a = $_POST['a'];
        $b = $_POST['b'];

        if($a == 0 )
        {
            if($b == 0)
                $nghiem = "Phương trình có vô số nghiệm";
            if($b <> 0)
                $nghiem = "Phương trình vô nghiệm";
        }
        else {
            $x = - ($b/$a);
            $x = round($x,2);
            $nghiem = "X = $x";
        }
    }    
?>
<form action="" method="POST">
    <center>
    <table  border="1" bordercolor="#feebcb">
        <tr class="center">
            <td colspan="2" align="center" bgcolor="#fecc69" >GIẢI PHƯƠNG TRÌNH BẬC NHẤT</td>
        </tr>
        <tr bgcolor = "#feebcb">
            <td>Phương trình : </td>
            <td width="263"><label for= "a"><label>
                <input name="a" type ="text" id="a" value="<?php echo $a;?>" size = "5">
                X + 
                <label for = "b"></label>
                <input name="b" type="text" id="b" value="<?php echo $b;?>" size = "5">
                = 0 </td>
        </tr>
        <tr bgcolor = "#feebcb">
            <td>Nghiệm: </td>
            <td><input type="text" name="nghiem" size="50" value="<?php echo $nghiem;?>" readonly="true"></td>
        </tr>
        <tr bgcolor = "#feebcb">
            <td colspan="2" align="center"><input type="submit" name="tinh" value="Giải phương trình" bgcolor="cdccce" style="cursor: pointer"></td>
        </tr>
    </table>
    </center>
</form>
</body>
</html>