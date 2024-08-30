<!DOCTYPE html>
<html>
<head>
	<title>Nhập và tính trên dãy số</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
        if(isset($_POST['submit'])){
            $ngay = $_POST['ngay'];
            $mang = explode(",", $ngay); //tách dãy số vào mảng
    
            $tong = 0;
            for($i=0;$i<count($mang);$i++){
                $tong += $mang[$i]; //tính tổng các phần tử trong mảng
            }
    
            $thongbao = $tong;
        }
    ?>
	<form method="post" action="">
		<center>
			<table>
				<tr bgcolor="#319a99">
					<td colspan="3" align="center">NHẬP VÀ TÍNH TRÊN DÃY SỐ</td>
				</tr>
				<tr bgcolor="#d1ded4">
					<td>Nhập dãy số:</td>
					<td>
                        <input type="text" name="ngay" value="<?php if(isset($_POST['ngay'])) echo $_POST['ngay']; ?>" size="35">
					</td>
                    <td>(*)</td>
				</tr>
                <tr bgcolor="#d1ded4">
                    <td colspan="3" align="center">
                        <input type="submit" value="Tổng dãy số" name="submit" style="background-color:#fefd97;cursor: pointer">
                    </td>
                </tr>
                <tr bgcolor="#d1ded4">
                    <td>Tổng dãy số:</td>
                    <td colspan="3" align="center">
                        <input type="text" name="thongbao" value="<?php if(isset($thongbao)) { echo $thongbao; } ?>" size="40" readonly style="background-color:#ccfe9a">
                    </td>
                </tr>
                <tr bgcolor="#d1ded4">
                    <td colspan="3" align="center">(*) Các số được nhập cách nhau bằng dấu ","</td>
                </tr>
			</table>
		</center>
	</form>
</body>