// JavaScript Document
	function register(){
		toname=list.toname.value;
		remark=list.remark.value;
		if(toname==""){
			alert("��ҪΪ˭��裿");
			list.toname.focus();
			return false;
		}
		else if(remark==""){
			alert("����д����ף��");
			list.remark.focus();
			return false;
		}
		else {
			list.submit();
		}			
	}