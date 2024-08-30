<!DOCTYPE html>
<html>
<head>
	<title>Tìm năm nhuận</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
    if(isset($_POST['submit']))
    {
        $nam = $_POST['ngay'];
        $kq = "";

        function nam_nhuan($nam)
        {
            if (($nam % 400 == 0) || (($nam % 4 == 0) && ($nam % 100 != 0)))
                return 1;
            else
                return 0;
        }

        foreach (range(2000, $nam) as $year)
        {
            if(nam_nhuan($year))
                $kq .= $year.", ";
        }

        if ($kq != "")
            $thongbao = $kq."là năm nhuận";
        else
            $thongbao = "Không có năm nhuận";
    }
    ?>
	<form method="post" action="">
		<center>
			<table>
				<tr bgcolor="#0057b9"> 
					<td colspan="2" align="center">TÌM NĂM NHUẬN</td>
				</tr>
				<tr bgcolor="#a9e7fa">
					<td>Năm:</td>
					<td>
                        <input type="text" name="ngay" value="<?php if(isset($_POST['ngay'])) echo $_POST['ngay']; ?>" size="40">
					</td>
				</tr>
                <tr bgcolor="#a9e7fa">
                    <td colspan="2" align="center">
                        <input type="text" name="thongbao" value="<?php if(isset($thongbao)) { echo $thongbao; } ?>" size="50" readonly style="background-color:#fdfdcd" >
                    </td>
                </tr>
                <tr bgcolor="#a9e7fa">
                    <td colspan="2" align="center">
                        <input type="submit" value="Tìm năm nhuận" name="submit" style="background-color:#64cdfc;cursor: pointer">
                    </td>
                </tr>
			</table>
		</center>
	</form>
</body>