
function f(){
	var object1=document.getElementById("menu");
	if(object1.style.width=="230px"){
		object1.style.width="100px";
	}
	else
		object1.style.width="230px";
	
	var object2=document.getElementById("menu-li");
	if(object2.style.display=="block")
		object2.style.display="none"
	else
		object2.style.display="block"
}


function change(){
				if(document.getElementById("bgcolor-box").style.display=="block")
					document.getElementById("bgcolor-box").style.display="none";
				else
					document.getElementById("bgcolor-box").style.display="block";
			}
			function changecolor1(){
				document.getElementById("bgcolor").style.background="black";
				document.getElementById("bgcolor").style.color="white";
			}
			function changecolor2(){
				document.getElementById("bgcolor").style.background="white";
				document.getElementById("bgcolor").style.color="black";
			}
			function changecolor3(){
				document.getElementById("bgcolor").style.background="#CACACA";
				document.getElementById("bgcolor").style.color="firebrick";
			}