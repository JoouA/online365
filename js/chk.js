/**
 * Created by TANG on 2017/9/19.
 */
// JavaScript Document
//index.php
function chk_log(){
    if(this.login.name.value == ""){
        alert("亲输入用户名!");
        this.login.name.focus();
        return false;
    }
    if(this.login.password.value == ""){
        alert("请输入密码!");
        this.login.password.focus();
        return false;
    }
}

function reg_chk(){
    if(this.reg.name.value == ""){
        alert("用户名不能为空!");
        this.reg.name.focus();
        return false;
    }
    if(this.reg.password.value == ""){
        alert("密码不能为空!");
        this.reg.password.focus();
        return false;
    }
    if(this.reg.password.value.length < 3){
        alert("密码长度不能少于3位！");
        this.reg.password.focus();
        return false;
    }
    if(this.reg.password.value != this.reg.t_password.value){
        alert("两次输入的密码不一致");
        this.reg.password.focus();
        return false;
    }
    if(this.reg.question.value == ""){
        alert("问题不能为空!");
        this.reg.question.focus();
        return false;
    }
    if(this.reg.answer.value == ""){
        alert("问题答案不能为空!");
        this.reg.answer.focus();
        return false;
    }
    if(this.reg.email.value != ""){
        var mailObj = this.reg.email;
        var email_ch= /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
        if(! email_ch.test(mailObj.value)){
            alert("邮箱格式不正确");
            mailObj.focus();
            return false;
        }
    }
}

function modify_check(){
    if(this.reg.name.value == ""){
        alert("用户名不能为空!");
        this.reg.name.focus();
        return false;
    }
    if(this.reg.password.value == ""){
        alert("密码不能为空!");
        this.reg.password.focus();
        return false;
    }
    if(this.reg.password.value.length < 3){
        alert("密码长度不能少于3位！");
        this.reg.password.focus();
        return false;
    }
    if(this.reg.password.value != this.reg.t_password.value){
        alert("两次输入的密码不一致");
        this.reg.password.focus();
        return false;
    }
    if(this.reg.email.value != ""){
        var mailObj = this.reg.email;
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
        this.list.picture.focus();
        return false;
    }

    var media = document.getElementsByName('address');
    if(media[0].value == ""){
        alert('上传数据不能为空！');
        this.list.picture.focus();
        return false;
    }

    if (this.list.names.value == ""){
        alert('歌曲名称不能为空！');
        this.list.names.focus();
        return false;
    }

    if (this.list.actor.value == ""){
        alert('演唱者不能为空！');
        this.list.actor.focus();
        return false;
    }

    if (this.list.actortype.value == ""){
        alert('演唱者类型不能为空！');
        this.list.actortype.focus();
        return false;
    }

    if (this.list.ci.value == ""){
        alert('作词不能为空！');
        this.list.ci.focus();
        return false;
    }

    if (this.list.qu.value == ""){
        alert('作曲不能为空！');
        this.list.qu.focus();
        return false;
    }

    if (this.list.publisher.value == ""){
        alert('发行商不能为空！');
        this.list.publisher.focus();
        return false;
    }

    if (this.list.language.value == ""){
        alert('语言不能为空！');
        this.list.language.focus();
        return false;
    }

    if (this.list.style.value == ""){
        alert('二级分类不能为空！');
        this.list.style.focus();
        return false;
    }

    if (this.list.type.value == ""){
        alert('一级分类不能为空！');
        this.list.type.focus();
        return false;
    }
    if (this.list.from.value == ""){
        alert('发行国家不能为空！');
        this.list.from.focus();
        return false;
    }
    if (this.list.publishtime.value == ""){
        alert('发行时间不能为空！');
        this.list.publishtime.focus();
        return false;
    }
    if (this.list.remark.value == ""){
        alert('简要介绍不能为空！');
        this.list.remark.focus();
        return false;
    }
}

function trans_audio_chk(){
    var pic = document.getElementsByName('picture');
    if (pic[0].value == ""){
        alert('照片信息不能为空！');
        this.list.picture.focus();
        return false;
    }

    var media = document.getElementsByName('address');
    if(media[0].value == ""){
        alert('上传数据不能为空！');
        this.list.picture.focus();
        return false;
    }

    if (this.list.names.value == ""){
        alert('电影名称不能为空！');
        this.list.names.focus();
        return false;
    }

    if (this.list.grade.value == ""){
        alert('等级不能为空！');
        this.list.grade.focus();
        return false;
    }

    if (this.list.publisher.value == ""){
        alert('发行商不能为空！');
        this.list.publisher.focus();
        return false;
    }

    if (this.list.actor.value == ""){
        alert('主要演员不能为空！');
        this.list.actor.focus();
        return false;
    }

    if (this.list.director.value == ""){
        alert('导演不能为空！');
        this.list.director.focus();
        return false;
    }

    if (this.list.marker.value == ""){
        alert('制片人不能为空！');
        this.list.marker.focus();
        return false;
    }

    if (this.list.language.value == ""){
        alert('语言不能为空！');
        this.list.language.focus();
        return false;
    }

    if (this.list.style.value == ""){
        alert('二级分类不能为空！');
        this.list.style.focus();
        return false;
    }

    if (this.list.type.value == ""){
        alert('一级分类不能为空！');
        this.list.type.focus();
        return false;
    }
    if (this.list.from.value == ""){
        alert('发行国家不能为空！');
        this.list.from.focus();
        return false;
    }
    if (this.list.publishtime.value == ""){
        alert('发行时间不能为空！');
        this.list.publishtime.focus();
        return false;
    }
    if (this.list.news.value == ""){
        alert('是否新品不能为空！');
        this.list.publishtime.focus();
        return false;
    }
    if (this.list.remark.value == ""){
        alert('简要介绍不能为空！');
        this.list.remark.focus();
        return false;
    }
}