<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cạnh huyền Tam giac vuông</title>
</head>
<body>
<?php
        if (isset($_POST['tinh'])) {
            $a = $_POST['a'];
            $b = $_POST['b'];
            $huyen = sqrt($a * $a + $b * $b); 
        }      
    ?>
    <form action="" method="post">
        <center>
        <table  border="1" bordercolor="#feebcb">
            <tr class="center">
                <td colspan="2" align="center" bgcolor="#fecc69">Cạnh huyền tam giác vuông</td>
            </tr>
            <tr  bgcolor = "#feebcb">
                <td>Cạnh a</td>
                <td><input type="text" name="a" size="50"></td>
            </tr>
            <tr  bgcolor = "#feebcb">
                <td>Cạnh b</td>
                <td><input type="text" name="b" size="50"></td>
            </tr>
            <tr  bgcolor = "#feebcb">
                <td>Cạnh huyền</td>
                <td><input type="text" name="huyen" value="<?php echo $huyen ?>" size="50" readonly="true"></td>
            </tr>
            <tr class="center"  bgcolor = "#feebcb">
                <td colspan="2" align = "center"><button type="submit" name="tinh" bgcolor="cdccce" style="cursor: pointer">TÍNH</button> </td>
            </tr>
        </table>
        </center>
    </form>
</body>
</html>