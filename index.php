<?php
$nextFriday = strtotime('next friday');
$y = date('Y', $nextFriday);
$m = date('m', $nextFriday);
$d = date('d', $nextFriday);
$l = 18;
?>
<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>幾撚時先放假？</title>
    <style>
	body{
		background-color: #EFEFEF;
	}
	table td{
		white-space:nowrap;
		width: 1%;
	}
	table tr.heading td{
		border-bottom:1px solid black;	
	}
	#y{width:40px}#m{width:20px}#d{width:20px}#h{width:20px}
	img{height:130px; width:auto}
	</style>
</head>

<body>
<!--<table style="width:200px">
<tr>
<td><img src="http://i183.photobucket.com/albums/x34/ccjpopkpop/zard/G049.jpg"></td>
<td><img src="http://i51.photobucket.com/albums/f394/c000540ck/zard.jpg">
	<img src="http://img1.yytcdn.com/uploads/http://img1.yytcdn.com/uploads/wOJQsp1Gm3.jpeg?size=600x600">
    <img src="http://blogimg.goo.ne.jp/user_image/41/43/097c66101d29099c666d8679edc3fb97.jpg">
	<img src="http://look.atmovies.com.tw/news/0805/NF0805233325/NF0805233325-00.jpg"></td>
<td><img src="http://img1.yytcdn.com/uploads/http://img1.yytcdn.com/uploads/sSA9DX9ek3.jpg?size=600x600"></td>
</tr>
<tr>
<td><img src="http://scandaling.net/wp-content/uploads/2015/09/ZARD.jpg"></td>
<td style="text-align:center;"><div name="remains" id="remains"></div></td>
<td><img src="http://upload.lsforum.net/users/public/k114901009p162.png"></td>
</tr>
<tr>
<td><img src="http://fileserver.k-plaza.com/blog/Files1/QQQ/300.jpg"></td>
<td><img src="http://www.sinaimg.cn/ent/y/2007-05-28/U1978P28T3D1573907F359DT20070528153702.jpg">
	<img src="http://www.musicman-net.com/files/2011/12/f4ef95faeae195.jpg">
    <img src="http://userdisk.webry.biglobe.ne.jp/002/846/11/N000/000/000/RSCN3998.JPG">
    <img src="http://pharan.ivyro.net/powring/attach/1/1266089455.jpg"></td>
<td><img src="http://cfs15.tistory.com/upload_control/download.blog?fhandle=YmxvZzE0MDA2NEBmczE1LnRpc3RvcnkuY29tOi9hdHRhY2gvNC80NzguanBn"></td>
</tr>
</table>-->
<div name="remains" id="remains"></div>
<form name="count" style="position:fixed; bottom:0px; right:0px; display:none;">
    <input type="text" id="y" value="<?=$y?>">
    <input type="text" id="m" value="<?=$m?>">
    <input type="text" id="d" value="<?=$d?>">
    <input type="text" id="h" value="<?=$l?>">
</form>


<script>

var montharray=new Array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");

function countdown(yr,m,d,hr){
theyear=yr;themonth=m;theday=d;thehr=hr
var today=new Date()
var todayy=today.getYear()
if (todayy < 1000)
todayy+=1900
var todaym=today.getMonth()
var todayd=today.getDate()
var todayh=today.getHours()
var todaymin=today.getMinutes()
var todaysec=today.getSeconds()
var todaystring=montharray[todaym]+" "+todayd+", "+todayy+" "+todayh+":"+todaymin+":"+todaysec
var futurestring=montharray[m-1]+" "+d+", "+yr+" "+hr+":00:00"
dd=Date.parse(futurestring)-Date.parse(todaystring)
dhr=Math.floor(dd/(60*60*1000))
drm=Math.floor(((dd%(60*60*1000*24))%(60*60*1000))/(60*1000)*1)
drs=Math.floor((((dd % (60 * 60 * 1000 * 24)) % (60 * 60 * 1000)) % (60 * 1000)) / 1000 * 1)
dm=Math.floor(dd/(60*1000))
ds=Math.floor(dd/(1000))
if(dhr==0&&dm==0&&ds==1){
document.getElementById('remains').innerHTML="放假啦屌你老味!!!";;
return
}
else
//document.getElementById('remains').innerHTML="乜既啦依爹 麼喎雪哥是 哂依高媽爹哈是裂嚕既爹 距離放假淨番最後 "+dhr+"個鐘零"+drm+"分鐘 咋";
document.getElementById('remains').innerHTML="仲有 "+dhr+" 個鐘 "+drm+" 分零 "+drs+" 秒先放假<br />點撚樣捱？";
setTimeout("count()",1000)
}

function count(){
	countdown(document.getElementById('y').value,document.getElementById('m').value,document.getElementById('d').value,document.getElementById('h').value)
}

count()
</script>

</body>

</html>


