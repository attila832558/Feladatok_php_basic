<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regex</title>
</head>
<body>
    <p>  <a href="http://vbence.web.elte.hu/regex_leiras.html" target=blank>Forrás</a></p>
<script type="text/javascript">
	function mailcheck() {
		var reg = /^[0-9a-z\.-]+@([0-9a-z-]+\.)+[a-z]{2,4}$/i;
		var s = document.getElementById('email').value;
		alert(reg.test(s));
	}
</script>
<input type="text" id="email"/>
<input type="button" onclick="mailcheck();" value="Email?"/><br/><br/>
<script type="text/javascript">
	function szamlaCheck() {
		var reg = /^[0-9]{8}([ -]?[0-9]{8}){1,2}$/;
		var s = document.getElementById('szamlaszam').value;
		alert(reg.test(s));
	}
</script>
<input type="text" id="szamlaszam"/>
<input type="button" onclick="szamlaCheck();" value="Számlaszám?"/>
<?php
   
    ?>
</body>
</html>