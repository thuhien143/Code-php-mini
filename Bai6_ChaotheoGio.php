<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chào Theo Giờ</title>
</head>
<body >
    
    <form action="" method = "POST" >
        <center>
        <table border = "1" bordercolor = "#92cbfc">
        <tr class="center">
            <td colspan="2" align="center" bgcolor="#92cbfc" forecolor="8a3d03">CHÀO THEO GIỜ</td>
        </tr>
        <tr bgcolor = "#c4eaeb">
            <td>Nhâp giờ: </td>
            <td><input type="text" name="giờ" id="giờ" size="50"></td>
        </tr>
        <tr bgcolor = "#c4eaeb">
            <td colspan = "2" align = "center">
                <label>
                    <?php
                        if(isset($_POST["giờ"]))
                        {
                            $gio = $_POST["giờ"];
                            if ($gio >=0 && $gio < 13) 
                                $chao = "Chào buổi sáng";
                            elseif ($gio >= 13 && $gio <18)
                                $chao = "Chào buồi chiều";
                            else
                                $chao = "Chào buổi tối";
                            echo $chao;
                        }
                    ?>
                </label>
            </td>
        </tr>
        <tr bgcolor = "#92cbfc">
            <td colspan="2" align="center"><input type="submit" name="Submit" value="Chào" bgcolor="cdccce" style="cursor: pointer"></td>
        </tr>
        </table>
        </center>
    </form>
    
</body>
</html>