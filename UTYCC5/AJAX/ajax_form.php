<html>
 <head>
 <script>
 function showHint(str)
 {
 if (str.length==0)
   { 
   document.getElementById("txtHint").innerHTML="";
   return;
   }
 if (window.XMLHttpRequest)
   { // code for IE7+, Firefox, Chrome, Opera, Safari
   xmlhttp=new XMLHttpRequest();
   }
 else
   { // code for IE6, IE5
   xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
   }
 xmlhttp.onreadystatechange=function()
   {
   if (xmlhttp.readyState==4 && xmlhttp.status==200)
     {
     document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
     }
   }
 xmlhttp.open("GET","ajax.php?q="+str,true);
 xmlhttp.send();
 }
 </script>
 </head>
 <body>

 <p><b>name</b></p>
 <form> 
 name: <input type="text" onkeyup="showHint(this.value)">
 </form>
 <p>name: <span id="txtHint"></span></p>

 </body>
 </html>