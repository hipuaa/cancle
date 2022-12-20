<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<title>http/3 & ipv6 test</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="#Content-Security-Policy" content="default-src 'none' www.gotestsec.net">
<meta http-equiv="refresh" content="10">
<meta
  name="description"
  content="This site can detect the compatibility results of your browser or web client with IPV6 and HTTP/3 protocols.">

</head>
 <body style="background-color:black;">
<h1><font color=white>This site can detect the compatibility results of your browser or web client with <font color=#9b8aff>IPV6</font> and <font color=#9b8aff>HTTP/3</font> protocols.</font></h1>

<h3>
<?php
echo "<b><font color=white>HTTP_SEC_CH_UA:</b><font color=#9b8aff>";
echo htmlspecialchars($_SERVER["HTTP_SEC_CH_UA"]);
echo "<br>";
echo "<b><font color=white>HTTP_SEC_CH_UA_MOBILE:</b><font color=#9b8aff>";
echo htmlspecialchars($_SERVER["HTTP_SEC_CH_UA_MOBILE"]);
echo "<br>";
echo "<b><font color=white>HTTP_SEC_CH_UA_PLATFORM:</b><font color=#9b8aff>";
echo htmlspecialchars($_SERVER["HTTP_SEC_CH_UA_PLATFORM"]);
echo "<br>";
echo "<b><font color=white>HTTP_USER_AGENT:</b><font color=#9b8aff>";
echo htmlspecialchars($_SERVER["HTTP_USER_AGENT"]);
echo "<br><b><font color=white>REMOTE_ADDR:</b><font color=#9b8aff>";
echo htmlspecialchars($_SERVER['REMOTE_ADDR']);
echo "<br><b><font color=white>HTTP VERSION:</b><font color=#9b8aff>";
echo htmlspecialchars($_SERVER['X_SPDY']);
echo "<br><b><font color=white>SSL PROTOCOL:</b><font color=#9b8aff>";
echo htmlspecialchars($_SERVER['SSL_PROTOCOL']);
echo "<br><b><font color=white>SSL CIPHER:</b><font color=#9b8aff>";
echo htmlspecialchars($_SERVER['SSL_CIPHER']);
echo "<br>";
echo "<img src=http3.webp width=240px alt=http3.webp><br>";
echo "<img src=ipv6.webp width=240px alt=ipv6.webp><br>";
echo "ok";
?>
</h3>
</body>
</html>
