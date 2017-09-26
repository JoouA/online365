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

/**
 * confirm del content
 * @returns {boolean}
 */
function del_chk(){
	if (confirm("真的要删除这个目录，删除后无法恢复！") === true){
		return true;
	}else{
		return false;
	}
}

/**
 * confirm the video data
 * @returns {boolean}
 */
function trans_video_chk(){
    var pic = document.getElementsByName('picture');
    if (pic[0].value == ""){
        alert('照片信息不能为空！');
        document.list.picture.focus();
        return false;
    }

    var media = document.getElementsByName('address');
    if(media[0].value == ""){
        alert('上传数据不能为空！');
        document.list.picture.focus();
        return false;
    }

    if (document.list.names.value == ""){
        alert('歌曲名称不能为空！');
        document.list.names.focus();
        return false;
    }

    if (document.list.actor.value == ""){
        alert('演唱者不能为空！');
        document.list.actor.focus();
        return false;
    }

    if (document.list.actortype.value == ""){
        alert('演唱者类型不能为空！');
        document.list.actortype.focus();
        return false;
    }

    if (document.list.ci.value == ""){
        alert('作词不能为空！');
        document.list.ci.focus();
        return false;
    }

    if (document.list.qu.value == ""){
        alert('作曲不能为空！');
        document.list.qu.focus();
        return false;
    }

    if (document.list.publisher.value == ""){
        alert('发行商不能为空！');
        document.list.publisher.focus();
        return false;
    }

    if (document.list.language.value == ""){
        alert('语言不能为空！');
        document.list.language.focus();
        return false;
    }

    if (document.list.style.value == ""){
        alert('二级分类不能为空！');
        document.list.style.focus();
        return false;
    }

    if (document.list.type.value == ""){
        alert('一级分类不能为空！');
        document.list.type.focus();
        return false;
    }
    if (document.list.from.value == ""){
        alert('发行国家不能为空！');
        document.list.from.focus();
        return false;
    }
    if (document.list.publishtime.value == ""){
        alert('发行时间不能为空！');
        document.list.publishtime.focus();
        return false;
    }
    if (document.list.remark.value == ""){
        alert('简要介绍不能为空！');
        document.list.remark.focus();
        return false;
    }
}

/**
 * confirm audio data
 * @returns {boolean}
 */
function trans_audio_chk(){
    if (document.list.names.value == ""){
        alert('电影名称不能为空！');
        document.list.names.focus();
        return false;
    }

    var pic = document.getElementsByName('picture');
    if (pic[0].value == ""){
        alert('照片信息不能为空！');
        document.list.picture.focus();
        return false;
    }

    var media = document.getElementsByName('address');
    if(media[0].value == ""){
        alert('上传数据不能为空！');
        document.list.picture.focus();
        return false;
    }


    if (document.list.grade.value == ""){
        alert('等级不能为空！');
        document.list.grade.focus();
        return false;
    }

    if (document.list.publisher.value == ""){
        alert('发行商不能为空！');
        document.list.publisher.focus();
        return false;
    }

    if (document.list.actor.value == ""){
        alert('主要演员不能为空！');
        document.list.actor.focus();
        return false;
    }

    if (document.list.director.value == ""){
        alert('导演不能为空！');
        document.list.director.focus();
        return false;
    }

    if (document.list.marker.value == ""){
        alert('制片人不能为空！');
        document.list.marker.focus();
        return false;
    }

    if (document.list.language.value == ""){
        alert('语言不能为空！');
        document.list.language.focus();
        return false;
    }

    if (document.list.style.value == ""){
        alert('二级分类不能为空！');
        document.list.style.focus();
        return false;
    }

    if (document.list.types.value == ""){
        alert('一级分类不能为空！');
        document.list.type.focus();
        return false;
    }
    if (document.list.from.value == ""){
        alert('发行国家不能为空！');
        document.list.from.focus();
        return false;
    }
    if (document.list.publishtime.value == ""){
        alert('发行时间不能为空！');
        document.list.publishtime.focus();
        return false;
    }
    if (document.list.news.value == ""){
        alert('是否新品不能为空！');
        document.list.publishtime.focus();
        return false;
    }
    if (document.list.remark.value == ""){
        alert('简要介绍不能为空！');
        document.list.remark.focus();
        return false;
    }
}