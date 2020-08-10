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
function ckmain(e){
	$(".mainIn").removeClass("mactive");
	$(".mainbody").hide();
	$(`#mh${e}`).addClass("mactive")
	$(`#mal${e}`).show();
}
function chkmore(id) {
    $(`#newf${id}`).toggle()
    $(`#newd${id}`).toggle()
}
function sayGoof(e) {
    let id=e.dataset.id;
    if(e.value=="讚"){
        e.value="收回讚"
    }else{
        e.value="讚"
    }
$.post('./api/savenews.php',{id},()=>{
	location.reload()
})

}
function more() {
	$("#ft").prepend(`
	<div>選項：
    <input type='text' name='Sname[]' >
</div>
	`)
}