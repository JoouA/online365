/**
 * Created by TANG on 2017/9/19.
 */
// JavaScript Document
//index.php
function chk_log(){
    if(document.login.name.value == ""){
        alert("亲输入用户名!");
        document.login.name.focus();
        return false;
    }
    if(document.login.password.value == ""){
        alert("请输入密码!");
        document.login.password.focus();
        return false;
    }
}

function reg_chk(){
    if(document.reg.name.value == ""){
        alert("用户名不能为空!");
        document.reg.name.focus();
        return false;
    }
    if(document.reg.password.value == ""){
        alert("密码不能为空!");
        document.reg.password.focus();
        return false;
    }
    if(document.reg.password.value.length < 3){
        alert("密码长度不能少于3位！");
        document.reg.password.focus();
        return false;
    }
    if(document.reg.password.value != document.reg.t_password.value){
        alert("两次输入的密码不一致");
        document.reg.password.focus();
        return false;
    }
    if(document.reg.question.value == ""){
        alert("问题不能为空!");
        document.reg.question.focus();
        return false;
    }
    if(document.reg.answer.value == ""){
        alert("问题答案不能为空!");
        document.reg.answer.focus();
        return false;
    }
    if(document.reg.email.value != ""){
        var mailObj = document.reg.email;
        var email_ch= /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
        if(! email_ch.test(mailObj.value)){
            alert("邮箱格式不正确");
            mailObj.focus();
            return false;
        }
    }
}

function modify_check(){
    if(document.reg.name.value == ""){
        alert("用户名不能为空!");
        document.reg.name.focus();
        return false;
    }
    if(document.reg.password.value == ""){
        alert("密码不能为空!");
        document.reg.password.focus();
        return false;
    }
    if(document.reg.password.value.length < 3){
        alert("密码长度不能少于3位！");
        document.reg.password.focus();
        return false;
    }
    if(document.reg.password.value != document.reg.t_password.value){
        alert("两次输入的密码不一致");
        document.reg.password.focus();
        return false;
    }
    if(document.reg.email.value != ""){
        var mailObj = document.reg.email;
        var email_ch= /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
        if(! email_ch.test(mailObj.value)){
            alert("邮箱格式不正确");
            mailObj.focus();
            return false;
        }
    }
}

function logout () {
     if (confirm('确定退出登录吗？') === true){
         window.location.href='logout.php';
     }else{
         return false;
     }
}

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

function trans_audio_chk(){
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
        alert('电影名称不能为空！');
        document.list.names.focus();
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