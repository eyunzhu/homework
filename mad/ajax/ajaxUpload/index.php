
<meta charset="utf-8">

<script src="http://cdn.static.runoob.com/libs/jquery/1.10.2/jquery.min.js">
</script>
<script>
$(document).ready(function(){
	$("#but1").click(function(){
		$("#div1").load("uploadTx.php");
	});

});

</script>
</head>
<body>

<div id="div1"><h2>使用 jQuery AJAX 修改文本内容</h2></div>
<button id="but1">获取外部内容</button>
<input type="file" name="myfile"/>
<button id="but2">发送一个 HTTP GET 请求并获取返回结果</button>
 <div class="box">
            <a href="javascript:;" class="file">选择图片
                <input type="file" multiple="multiple" id="inputfile" name="" class="photo">
            </a>
            <a href="javascript:;" class="file close">重新选择
                <input type="buttom" class="photo">
            </a>
        </div>
</body>
</html>