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
function op(x,y)
{
	$(x).fadeIn()
	if(y)
	$(y).fadeIn()

}
function op2(x,y,c)
{
	$(x).fadeIn()
	if(y)
	$(y).fadeIn()
	$("#taget").val(c)
}
function cl(x)
{
	$(x).fadeOut();
}