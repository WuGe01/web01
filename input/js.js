// JavaScript Document
function lof(x)
{
	location.href=x
}
function del(table,id) {
	$.post("./api/del.php",{table,id},(e)=>{
		console.log(table,id)
		location.reload();
	})
}