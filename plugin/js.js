// JavaScript Document
$(document).ready(function(e) {
    $(".mainmu").mouseover(
		function()
		{
			$(this).children(".mw").stop().show()
		}
	)
	$(".mainmu").mouseout(
		function ()
		{
			$(this).children(".mw").hide()
		}
	)
});
function lo(x)
{
	location.replace(x)
}
function op(x,y,url)
{
	$(x).fadeIn()
	if(y)
	$(y).fadeIn()
	if(y&&url)
	$(y).load(url)
}
function cl(x)
{
	$(x).fadeOut();
}


	

function ckfile(e){
	$(e).next().click();
}
function readURL(e) {
	let img=$(e).parents('tr').find('img')[0];
	if(e.files && e.files[0]){
		var a=new FileReader();
		a.onload=(k)=>{
			img.src=k.target.result;
		}
		a.readAsDataURL(e.files[0])
	}
}
function ww() {
	$("#mwww").html("<embed loop=true src='./img/" + lin[now] + "' style='width:99%; height:100%;'></embed>")
	//$("#mwww").attr("src",lin[now])
	now++;
	if (now >= lin.length)
		now = 0;
}
function page(e) {
	let total=$(".GetImg").length;
	let p=Math.ceil(total/3);
	let str="";
	$(".GetImg").hide()
	if(e>1)str=`<a class="btnP" onclick='page(${e-1}'><</a>`;
	else str=`<a class="btnP" onclick='page(1)'><</a>`;
	for (let i = 1; i <= p; i++) {
		if(e==i)str=`${str}<a class="btnP acc" onclick='page(${i})'>${i}</a>`;	
		else str=`${str}<a class="btnP" onclick='page(${i})'>${i}</a>`;	
	}
	if(e<p)str=`${str}<a class="btnP" onclick='page(${e+1})'>></a>`;
	else str=`${str}<a class="btnP" onclick='page(${p})'>></a>`;
	$('#tagetP').html(str);
	for (let j = ((e-1)*3); j < ((e)*3); j++) {
		$(".GetImg").eq(j).show()
	}	
}