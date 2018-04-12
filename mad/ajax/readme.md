## ajax
- [jqueryAjax](./jqueryAjax/readme.md)
#### 1.创建 XMLHttpRequest 对象
``` 
var xmlhttp;
if (window.XMLHttpRequest)
{
    //  IE7+, Firefox, Chrome, Opera, Safari 浏览器执行代码
    xmlhttp=new XMLHttpRequest();
}
else
{
    // IE6, IE5 浏览器执行代码
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
```
#### 2.XMLHttpRequest属性
1. *readyState*
| 状态        | 名称           | 描述  |
| :-------------: |:-------------:| :-----|
| 0      | Uninitialized | 初始化状态。XMLHttpRequest 对象已创建或已被 abort() 方法重置。 |
| 1      | Open      |   open() 方法已调用，但是 send() 方法未调用。请求还没有被发送。 |
| 2 | Send      |    Send() 方法已调用，HTTP 请求已发送到 Web 服务器。未接收到响应。 |
| 3 | Receiving      |    所有响应头部都已经接收到。响应体开始接收但未完成。 |
| 4 | Loaded      |    HTTP 响应已经完全接收 |
|
	> readyState 的值不会递减，除非当一个请求在处理过程中的时候调用了 abort() 或 open() 方法。

	> 每次这个属性的值增加的时候，都会触发 onreadystatechange 事件句柄。
	``` 
xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
		}
	}
	```

2. responseText
	> 目前为止为服务器接收到的响应体（不包括头部），或者如果还没有接收到数据的话，就是空字符串。

3. responseXML
	
	> 对请求的响应，解析为 XML 并作为 Document 对象返回

4. status

	> 由服务器返回的 HTTP 状态代码，如 200 表示成功，而 404 表示 "Not Found" 错误。
	
	> 当 readyState 小于 3 的时候读取这一属性会导致一个异常。

5. statusText

	> 当status为 200 的时候它是 "OK"，当status为 404 的时候它是 "Not Found"。
	
#### 3.XMLHttpRequest事件句柄
onreadystatechange
> 每次 readyState 属性改变的时候调用的事件句柄函数。当 readyState 为 3 时，它也可能调用多次。

#### 4.XMLHttpRequest方法
1. abort()

	> 取消当前响应，关闭连接并且结束任何未决的网络活动。
	
	> 重置为 readyState 为 0 
	
	> 如果请求用了太长时间，而且响应不再必要的时候，可以调用这个方法

2. open()

	> 初始化 HTTP 请求参数，但是并不发送请求。
	
	> 这个方法初始化请求参数以供 send() 方法稍后使用。
	
	> 它把 readyState 设置为 1

3. send()

	> 发送 HTTP 请求，使用传递给 open() 方法的参数，以及传递给该方法的可选请求体。

```
//示例
function loadXMLDoc()
{
	var xmlhttp;
	if (window.XMLHttpRequest)
	{
		//  IE7+, Firefox, Chrome, Opera, Safari 浏览器执行代码
		xmlhttp=new XMLHttpRequest();
	}
	else
	{
		// IE6, IE5 浏览器执行代码
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","/try/ajax/ajax_info.txt",true);
	xmlhttp.send();
}
```
