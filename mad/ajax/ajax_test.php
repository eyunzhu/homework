
<?php
	
	header("content-type:text/html;charset=utf8");
	$conn=mysqli_connect('localhost','root','root','test')or('error');
	mysqli_query($conn,'set names utf8');
	$result=mysqli_query($conn,"select * from test");
	while($row=mysqli_fetch_array($result)){
		echo $row['username']."<br />";
	}
echo '这是个从PHP文件中读取的数据。';
?>