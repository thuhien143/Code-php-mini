<!DOCTYPE html>
<html>
<head>
	<title>Tìm từ trong chuỗi</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
        if(isset($_POST['submit'])){
            $chuoi = $_POST['chuoi'];
            $tu_tim = $_POST['a'];

			//tìm
            $kiem_tra = strpos($chuoi,$tu_tim);
			
            if($kiem_tra !== false){
                $kq = "Tìm thấy tại vị trí ".$kiem_tra;
            } else {
            $kq = "Không tìm thấy từ '".$tu_tim."' trong chuỗi";
            }
        }
    ?>
	<form method="post" action="">
		<center>
			<table>
				<tr bgcolor= "#fce2e3">
					<td colspan="2" align="center">TÌM TỪ TRONG CHUỖI</td>
				</tr>
				<tr bgcolor="#d7feec">
					<td>Chuỗi:</td>
					<td>
						<input type="text" name="chuoi" value="<?php if(isset($_POST['chuoi'])) echo $_POST['chuoi']; ?>" size="10">
					</td>
				</tr>
				<tr bgcolor="#d7feec">
					<td>Từ cần tìm:</td>
					<td>
						<input type="text" name="a" value="<?php if(isset($_POST['a'])) echo $_POST['a']; ?>" size="10">
					</td>
				</tr>
				<tr bgcolor="#d7feec">
					<td colspan="2" align="center">
						<input type="submit" value="Tìm kiếm" name="submit" style ="background-color:#359793;cursor: pointer">
					</td>
				</tr>
                <tr bgcolor="#d7feec">
					<td colspan="2" align="center">
                        <input type="text" name="kq" value="<?php if(isset($kq)) { echo $kq; } ?>" size="20" readonly style="background-color:#fdfdce" >
					</td>
				</tr>
			</table>
		</center>
	</form>
</body>