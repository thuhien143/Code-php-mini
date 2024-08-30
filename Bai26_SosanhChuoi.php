<!DOCTYPE html>
<html>
<head>
	<title>So sánh chuỗi</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
        if(isset($_POST['submit'])){
            $chuoi1 = $_POST['a'];
            $chuoi2 = $_POST['b'];
            
            //so sánh
            $kq = strcasecmp($chuoi1,$chuoi2);

            if($kq == 0){
                $thongbao = "Hai chuỗi giống nhau";
            } elseif ($kq > 0) {
                $thongbao = "Chuỗi thứ nhất dài hơn chuỗi thứ hai";
            } else {
                $thongbao = "Chuỗi thứ nhất ngắn hơn chuỗi thứ hai";
            }
        }
    ?>
	<form method="post" action="">
		<center>
			<table>
				<tr bgcolor="#339a99">
					<td colspan="2" align="center">SO SÁNH CHUỖI</td>
				</tr>
				<tr bgcolor="#d1ded4">
					<td>Chuỗi 1:</td>
					<td>
						<input type="text" name="a" value="<?php if(isset($_POST['a'])) echo $_POST['a']; ?>" size="20">
					</td>
				</tr>
				<tr bgcolor="#d1ded4">
					<td>Chuỗi 2:</td>
					<td>
						<input type="text" name="b" value="<?php if(isset($_POST['b'])) echo $_POST['b']; ?>" size="20">
					</td>
				</tr>
				<tr bgcolor="#d1ded4">
					<td colspan="2" align="center">
						<input type="submit" value="So sánh" name="submit" style ="background-color:#2e9a9b">
					</td>
				</tr>
                <tr bgcolor="#d1ded4">
					<td colspan="2" align="center">
                        <input type="text" name="kq" value="<?php if(isset($kq)) { echo $thongbao; } ?>" size="40" readonly style ="background-color:#fefbd1;cursor: pointer">
					</td>
				</tr>
			</table>
		</center>
	</form>
</body>