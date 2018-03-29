<meta charset="utf-8" />
<?php
	$conn=mysqli_connect('localhost','root','root','4zu')or('error');
	mysqli_query($conn,'use names utf8');
	$result=mysqli_query($conn,"select * from user");
	while($row=mysqli_fetch_array($result)){
		echo $row['username']."<br />";
	}
echo '这是个从PHP文件中读取的数据。';
?>