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