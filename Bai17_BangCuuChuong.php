<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bảng cửu chương</title>
    <style>
        .style1{
            color: #FFFFFF;
            font-weight: bold;
            font-style: italic;
        }
    </style>
</head>
<body>
<form action="" method="POST">
<?php
    if(isset($_POST['cuuchuong']))
    {
        $cuuchuong = $_POST['cuuchuong'];
        $chuoi = "";
        for($i = 1; $i <= 10; $i++)
        {
            $tich = $cuuchuong * $i;
            $chuoi = $chuoi . $cuuchuong . " X " .$i. " = " .$tich. "\n";
        }
    }
?>
    <center>
        <table width="350">
            <tr class="center">
                <td colspan="3" align="center" bgcolor="#039e9c">BẢNG CỬU CHƯƠNG</td>
            </tr>
            <tr bgcolor = "#c6edec">
                <td width ="114">Cửu chương: </td>
                <td width="173"> <label>
                    <input name= "cuuchuong" type="text" id="cuuchuong" value ="<?php echo $cuuchuong;?>" size="5">
                </label>
                </td>
                <td width="99"><label>
                    <input type="submit" name="Submit" value="Thực hiện">
                </label>
                </td>
            </tr>
            <tr bgcolor = "#c6edec">
                <td colspan="3" align="center" >
                    <?php if(isset($_POST['cuuchuong']))
                    { echo "<br>";?>
                        <table width = "400" border="0">
                            <tr>
                                <td align="center"bgcolor="#009b9a"><span class="style1">KẾT QUẢ</span></td>
                            </tr>
                            <tr>
                               <td align="center"><?php echo nl2br($chuoi)."<br>";?></td> 
                            </tr>
                        </table>
                </td>
                <?php } ;?>
            </tr>
        </table>
    </center>
</form>
</body>
</html>