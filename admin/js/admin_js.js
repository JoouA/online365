// validate login

function l_chk() {
	if (document.a_login.manager.value==""){
		alert('请输入用户名！');
		document.a_login.manager.focus();
		return false;
	}

	if (document.a_login.pwd == ""){
		alert('请输入密码！');
		document.a_login.pwd.focus();
		return false;
	}
}

/**
 * check add audio content
 * @returns {boolean}
 */
function n_chk() {
	if (document.list.names.value == ''){
		alert('请输入目录名称！');
		document.list.names.focus();
		return false;
	}
}




