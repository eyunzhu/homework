## JQueryNote
##### 定义、功能
> jQuery是一个JavaScript函数库。
- HTML 元素选取
- HTML 元素操作
- CSS 操作
- HTML 事件函数
- JavaScript 特效和动画
- HTML DOM 遍历和修改
- AJAX
- Utilities

代码安装：
``` html
    <script src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js">
```
为了防止文档在完全加载（就绪）之前运行 jQuery 代码，所有 jQuery 函数位于一个 document ready 函数中
(为防止：获得未完全加载的图像的大小，试图隐藏一个不存在的元素，这种没完全加载就执行会出错)
``` javascript
    $(document).ready(function(){
    //开始写 jQuery 代码...
    
    });
``` 
