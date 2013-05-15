<head>
<font color="#dedede" face="Verdana" size="6">
		Runners Records
</font><br>
<font color="#37FDFF" face="Verdana" size="4">
		copyright SooChow
</font>
</head>
<br>
<br>
<br>
<body bgcolor="black">
<table border="1" align="center">
<form method ="post"   onSubmit="return check(this)"  action="jo.php">
 <tr><td width="5px" align="center"><font size="2" face="Verdana" color="#dedede">SEQ：</td><td><input name="SEQnumber" type="text"> <br></td></tr>
 <tr><td width="5px" align="center"><font size="2" face="Verdana" color="#dedede">ID：</td><td><input name="idnumber" type="text"> <br></td></tr>
 <tr><td width="5px" align="center"><font size="2" face="Verdana" color="#dedede">ATime：</td><td><input name="TimeArrive" type="text"> <br></td></tr>
 <tr><td width="5px" align="center"><font size="2" face="Verdana" color="#dedede">Time：</td><td><input name="SpendTime" type="text"> <br></td></tr>
 <tr><td width="5px" align="center"><font size="2" face="Verdana" color="#dedede">Name：</td><td><input name="name" type="text" > <br></td></tr>
 <tr><td width="5px" align="center"><font size="2" face="Verdana" color="#dedede">Gender：</td><td><input name="sex" type="text"> <br></td></tr>
 
 <tr><td width="5px" align="center"><font size="2" face="Verdana" color="#dedede">Cate：</td><td><input name="tpyesofgame" type="text"> <br></td></tr>
 <tr></tr>
 <tr><td colspan="2" width="5px" align="center"><font color="#dedede">

<form name="groovyform1">
<style type="text/css">

input.groovybutton1
{
   float:right;
   display:inline;
   font-size:10px;
   font-family:Verdana,sans-serif;
   color:#FFFFFF;
   background-color:#000000;
}

</style>

<input
   type="button"
   name="groovybtn1"
   class="groovybutton1"
   value="Reset"
   title="">
</form>

<form name="groovyform2">
<style type="text/css">
input.groovybutton2
{
   float:right;
   display:inline;
   font-size:10px;
   font-family:Verdana,sans-serif;
   color:#FFFFFF;
   background-color:#000000;
}
</style>
 <input
   type="button"
   name="groovybtn2"
   class="groovybutton2"
   value="Submit"
   title="">
</form>
</td>

<Script Language='JavaScript'>
function check(form) {
 
if(form.SEQnumber.value == "") {
alert("未輸序號");
 return false;
}
 
else if(form.idnumber.value == "") {
alert("未輸入ID");
 return false;
}
 
else if(form.TimeArrive.value == "") {
alert("未輸入抵達時間");
 return false;
}
 
else if(form.SpendTime.value == "") {
alert("未輸入花費時間");
 return false;
}
 
else if(form.name.value == "") {
alert("未輸入姓名");
 return false;
}
 else if(form.sex.value == "") {
alert("未輸入性別");
 return false;
}
else if(form.tpyesofgame.value == "") {
alert("未輸入參賽組別");
 return false;
}
else{
 form.submit();}
 }
</script>
</table>
	
</body>
</html>