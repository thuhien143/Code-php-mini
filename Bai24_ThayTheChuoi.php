<!DOCTYPE html>
<html>
<head>
	<title>thay thế từ trong chuỗi</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
        if (isset($_POST['submit'])) {
            $chuoi = $_POST['chuoi'];
            $a = $_POST['a'];
            $b = $_POST['b'];
			
			// thay thế
            $kq = str_replace($a,$b,$chuoi);
        }
    ?>
	<form method="post" action="">
		<center>
			<table>
				<tr bgcolor= "#dc4800">
					<td colspan="2" align="center" >THAY THẾ TỪ TRONG CHUỖI</td>
				</tr>
				<tr bgcolor="#fecccd">
					<td>Chuỗi:</td>
					<td>
						<input type="text" name="chuoi" value="<?php if(isset($_POST['chuoi'])) echo $_POST['chuoi']; ?>" size="10">
					</td>
				</tr>
				<tr bgcolor="#fecccd">
					<td>Từ gốc:</td>
					<td>
						<input type="text" name="a" value="<?php if(isset($_POST['a'])) echo $_POST['a']; ?>" size="10">
					</td>
				</tr>
                <tr bgcolor="#fecccd">
					<td>Thay thế:</td>
					<td>
						<input type="text" name="b" value="<?php if(isset($_POST['b'])) echo $_POST['b']; ?>" size="10">
					</td>
				</tr>
				<tr bgcolor="#fecccd">
					<td colspan="2" align="center">
						<input type="submit" value="Thay thế" name="submit" style="cursor: pointer">
					</td>
				</tr>
                <tr bgcolor="#fecccd">
					<td colspan="2" align="center">
                        <input type="text" name="kq" value="<?php if(isset($kq)) { echo $kq; } ?>" size="10" readonly style="background-color:#fafcca">
					</td>
				</tr>
			</table>
		</center>
	</form>
</body>