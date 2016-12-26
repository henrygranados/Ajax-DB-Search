<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
<form>  
Search Client: <input type="text" placeholder = "Enter client's name" onkeyup="showResult(this.value)"/>
<div id="information"></div>
</form>  

<script type="text/javascript">
function showResult(str) {

  if (str.length==0) { 
    document.getElementById("information").innerHTML="";
    document.getElementById("information").style.border="0px";
    return;
  }

  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState === 4 && this.status === 200) { 
      document.getElementById("information").innerHTML=this.responseText;
      document.getElementById("information").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","information.php?name="+str,true);
  xmlhttp.send();
}	

</script>
</body>
</html>