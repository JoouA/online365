var has_showModalDialog = !!window.showModalDialog;//定义一个全局变量判定是否有原生showModalDialog方法  

if(!has_showModalDialog &&!!(window.opener)){         
    window.onbeforeunload=function(){  
        window.opener.hasOpenWindow = false;        //弹窗关闭时告诉opener：它子窗口已经关闭  
    }  
}  
//定义window.showModalDialog如果它不存在  
if(window.showModalDialog == undefined){  
    window.showModalDialog = function(url,mixedVar,features){  
        if(window.hasOpenWindow){  
            alert("您已经打开了一个窗口！请先处理它");//避免多次点击会弹出多个窗口  
            window.myNewWindow.focus();  
        }  
        window.hasOpenWindow = true;  
        if(mixedVar) var mixedVar = mixedVar;  
        //因window.showmodaldialog 与 window.open 参数不一样，所以封装的时候用正则去格式化一下参数  
        if(features) var features = features.replace(/(dialog)|(px)/ig,"").replace(/;/g,',').replace(/\:/g,"=");  
        //window.open("Sample.htm",null,"height=200,width=400,status=yes,toolbar=no,menubar=no");  
        //window.showModalDialog("modal.htm",obj,"dialogWidth=200px;dialogHeight=100px");   
        var left = (window.screen.width - parseInt(features.match(/width[\s]*=[\s]*([\d]+)/i)[1]))/2;
        var top = (window.screen.height - parseInt(features.match(/height[\s]*=[\s]*([\d]+)/i)[1]))/2;  
        window.myNewWindow = window.open(url,"_blank",features);  
    }  
}  

// JavaScript Document
function loadCalendar(field)
{	
	alert('hahah');
	var rtn = window.showModalDialog("inc/calender.php","","dialogWidth:280px;dialogHeight:250px;status:no;help:no;scrolling=no;scrollbars=no");

	if(rtn!=null)
	field.value=rtn;

	return ;
}