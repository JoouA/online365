// JavaScript Document
function register(){
	toname=list.toname.value;
	remark=list.remark.value;
	if(toname==""){
		alert("您为谁点歌？");
		list.toname.focus();
		return false;
	}else if(remark==""){
		alert("请填写祝福语！");
		list.remark.focus();
		return false;
	}
	else {
		list.submit();
	}
}