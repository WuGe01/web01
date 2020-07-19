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
