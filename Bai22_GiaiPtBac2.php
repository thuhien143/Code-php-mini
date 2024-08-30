<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giải phương trình bậc hai</title>
</head>
<body>
<?php
    if(isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c']))
    {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        function giai_ptb1($a, $b)
        {
            if($a == 0)
            {
                if($b == 0)
                {
                    return "Phương trình vô số nghiệm";
                }
                else
                {
                    return "Phương trình vô nghiệm";
                }
            }
            else
            {
                return "Phương trình có nghiệm x = " . (-$b/$a);
            }
        }
        function giai_ptb2($a, $b, $c)
        {
            if($a == 0) 
            {
                return giai_ptb1($b, $c);
            }
            else 
            {
                $delta = pow($b, 2) - 4*$a*$c;
                if($delta < 0) 
                {
                    return "Phương trình vô nghiệm";
                }
                else 
                    if($delta == 0) 
                    {
                        return "Phương trình có nghiệm kép x = " . (-$b/2*$a);
                    }
                    else 
                    {
                        $x1 = (-$b + sqrt($delta)) / (2*$a);
                        $x2 = (-$b - sqrt($delta)) / (2*$a);
                    return "Phương trình có hai nghiệm phân biệt x1 = $x1 và x2 = $x2";
                    }
            }
        }
        $nghiem = giai_ptb2($a, $b, $c);
        
    }    
    
    
?>
<form action="" method="POST">
    <center>
    <table  border="1" bordercolor="#feebcb">
        <tr class="center">
            <td colspan="2" align="center" bgcolor="#fecc69" >GIẢI PHƯƠNG TRÌNH BẬC HAI</td>
        </tr>
        <tr bgcolor = "#feebcb">
            <td>Phương trình : </td>
            <td width="263">
                <label for= "a"><label>
                <input name="a" type ="text" id="a" value="<?php echo $a;?>" size = "5">
                X^2 + 
                <label for= "b"><label>
                <input name="b" type ="text" id="b" value="<?php echo $b;?>" size = "5">
                X +
                <label for = "c"></label>
                <input name="c" type="text" id="c" value="<?php echo $c;?>" size = "5">
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