<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=8">
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Untitled Page</title>
<style type="text/css">
html, body
{
   height: 100%;
}
div#space
{
   width: 1px;
   height: 50%;
   margin-bottom: -402px;
   float:left
}
div#container
{
   width: 994px;
   height: 805px;
   margin: 0 auto;
   position: relative;
   clear: left;
}
</style>
<style type="text/css">
body
{
   margin: 0;
   padding: 0;
   background-color: #FFFFFF;
   color: #000000;
}
</style>
<?php include 'BillAcceptorCode.inc';?>
</head>
<body onload="return window_onload();">
<div id="debug"></div>
<div id="space"><br></div>
<div id="container">
<div id="wb_Text1" style="margin:0;padding:0;position:absolute;left:400px;top:240px;width:190px;height:29px;text-align:center;z-index:1;">
<font style="font-size:24px" color="#FF0000" face="Arial"><b>Insert Bills Now</b></font></div>
<div id="wb_Image2" style="margin:0;padding:0;position:absolute;left:400px;top:430px;width:200px;height:257px;text-align:left;z-index:2;">
<img src="images/2011-08-05_21-05-54_767_01.jpg" id="Image2" alt="" border="0" style="width:200px;height:257px;"></div>
<form action="mtgox_buy.php" method="GET">
<!--Needed hidden field-->
<input type="hidden" id="deposited" name="deposited" />
<input type="submit" id="Button1" onclick="window.location.href='mtgox_buy.php'; ;return false;" name="" value="Place Order" style="position:absolute;left:370px;top:360px;width:250px;height:40px;border:1px #000000 dotted;background-color:transparent;font-family:Verdana;font-size:29px;z-index:3">
<div id="wb_Text2" style="margin:0;padding:0;position:absolute;left:270px;top:280px;width:150px;height:24px;text-align:right;z-index:4;">
<font style="font-size:21px" color="#000000" face="Arial"><b>USD Inserted: $<span id="dollarSpan">0</span></b></font></div>
<div id="wb_Image1" style="margin:0;padding:0;position:absolute;left:468px;top:50px;width:59px;height:59px;text-align:left;z-index:5;">
<img src="images/bitcoin530.png" id="Image1" alt="" border="0" style="width:59px;height:59px;"></div>
<div id="wb_Image3" style="margin:0;padding:0;position:absolute;left:300px;top:150px;width:388px;height:60px;text-align:left;z-index:6;">
<img src="images/mtgoxlogo.png" id="Image3" alt="" border="0" style="width:386px;height:130px;"></div>
<div id="wb_Text3" style="margin:0;padding:0;position:absolute;left:250px;top:320px;width:170px;height:24px;text-align:right;z-index:7;">
<font style="font-size:21px" color="#000000" face="Arial"><b>Total Bitcoins: &#3647;<span id="bitcoinSpan">0</span> </b></font></div>
</div>
</form>
<?php include 'BillAcceptorObj.inc';?>
</body>
</html>