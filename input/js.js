// JavaScript Document
function lo(th,url)
{
	$.ajax(url,{cache:false,success: function(x){$(th).html(x)}})
}
function good(id,type,user)
{
	$.post("back.php?do=good&type="+type,{"id":id,"user":user},function()
	{
		if(type=="1")
		{
			$("#vie"+id).text($("#vie"+id).text()*1+1)
			$("#good"+id).text("收回讚").attr("onclick","good('"+id+"','2','"+user+"')")
		}
		else
		{
			$("#vie"+id).text($("#vie"+id).text()*1-1)
			$("#good"+id).text("讚").attr("onclick","good('"+id+"','1','"+user+"')")
		}
	})
}
function chmain(e){
	$(".maint").hide()
	$(".mainh").removeClass("mainA")
	switch (e) {
		case 1:
			$(".maint").eq(0).show()
			$(".mainh").eq(0).addClass("mainA")
			break;
		case 2:
			$(".maint").eq(1).show()
			$(".mainh").eq(1).addClass("mainA")
			break;
		case 3:
			$(".maint").eq(2).show()
			$(".mainh").eq(2).addClass("mainA")
			break;
		case 4:
			$(".maint").eq(3).show()
			$(".mainh").eq(3).addClass("mainA")
			break;
	

	}
}