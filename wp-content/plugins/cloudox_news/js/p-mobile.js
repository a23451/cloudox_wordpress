var mobile,os;
    alert(2222);
$(document).ready(function(){
    alert(3333);
    if(!localStorage.uniqid){var num=Math.round(Math.random()*100000);localStorage.uniqid=num;}
    localStorage.move=0;
    window.ico=Math.round(Math.random()*100000);//标记当前页面
    $(window).scroll( function(e) { console.log("scrollTop:"+$(this).scrollTop());
        localStorage.move=$(this).scrollTop();
        console.log("move"+localStorage.move) } );
       
       // 设备型号操作系统
        var arr=new Array();
        arr=shebeixx();
        os=arr['os'];mobile=arr['model'];
        href=window.location.href;
        //alert(localStorage.uniqid+"---"+1+"---"+localStorage.move+"---"+os+"---"+mobile+"---"+href);
    $.get("/liu/cookhind/hind.php",{uniqid:localStorage.uniqid,pageid:window.ico,action:1,move:localStorage.move,os:os,mobile:mobile,href:href},function(data){
    console.log(data)});
});
window.onbeforeunload=function(){
    href=window.location.href;
    $.get("/liu/cookhind/hind.php",{uniqid:localStorage.uniqid,pageid:window.ico,action:2,move:localStorage.move,os:os,mobile:mobile},function(data) {
        
    });
    
}

function shebeixx() {
    //判断数组中是否包含某字符串
    Array.prototype.contains = function(needle) {
        for (i in this) {
            if (this[i].indexOf(needle) > 0)
                return i;
        }
        return -1;
    }    
    var device_type = navigator.userAgent;//获取userAgent信息
    //document.write(device_type);//打印到页面
    var md = new MobileDetect(device_type);//初始化mobile-detect
    var os = md.os();//获取系统
    var model = "";
    if (os == "iOS") {//ios系统的处理
        os = md.os() + md.version("iPhone");
        model = md.mobile();
    } else if (os == "AndroidOS") {//Android系统的处理
        os = md.os() + md.version("Android");
        var sss = device_type.split(";");
        var i = sss.contains("Build/");
        if (i > -1) {
            model = sss[i].substring(0, sss[i].indexOf("Build/"));
        }
    }
    console.log(os + "---" + model);//打印系统版本和手机型号
    
    var osMobile=new Array();
    osMobile['os']=os;
    osMobile['model']=model;
    return osMobile;

}