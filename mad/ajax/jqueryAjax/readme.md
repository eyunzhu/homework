##jqueryAjax
- [jqueryAjax示例]()
- jQuery $.get() $.post() 方法
```JavaScript
//语法
$.get(URL,callback);
$.post(URL,data,callback);

//实例

```
	<script>
	$(document).ready(function(){
		$("#username").blur(function(){
			var username=$("#username").val();
			$.get("process.php?username="+username,function(data,status){
				$("#div1").html(data);
			});
			
	//	$.post("process.php",{username:username},function(data,status){
	//		$("#div1").html(data);
	//		});
		});
	});
	</script>
	<form>
		<input type="text" name="username" id="username"/>
		<p id="div1"></p>
	</form>
	
```




- jQuery load() 方法
```JavaScript
//语法
$(selector).load(URL,data,callback);
//示例
$("#div1").load("demo_test.txt");

//下面的例子把 "demo_test.txt" 文件中 id="p1" 的元素的内容，加载到指定的 <div> 元素中
$("#div1").load("demo_test.txt #p1");
//实例
 $("#div1").load("demo_test.txt",function(responseTxt,statusTxt,xhr){
    if(statusTxt=="success")
      alert("外部内容加载成功!");
    if(statusTxt=="error")
      alert("Error: "+xhr.status+": "+xhr.statusText);
  });
```

