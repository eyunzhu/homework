<meta charset="utf-8" />
<script src="http://cdn.static.runoob.com/libs/jquery/1.10.2/jquery.min.js">
</script>
<script>
	$(document).ready(function(){
		$("#username").blur(function(){
			var username=$("#username").val();
//			$.get("judge.php?username="+username,function(data,status){
//				$("#div1").html("用户名："+username+data);
//			});
			$.post("judge.php",{username:username},function(data,status){
				$("#div1").html("用户名："+username+data);
			});
		});
		
	});
</script>
<form>
	<input type="text" name="username" id="username" placeholder="请输入用户名"/>
	<p id="div1"></p>
</form>
<?php

?>