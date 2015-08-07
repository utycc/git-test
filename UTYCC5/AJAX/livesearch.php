<?php
 $xmlDoc=new DOMDocument();
 $xmlDoc->load("link.xml");

 $x=$xmlDoc->getElementsByTagName('link');

 // q의 매개변수 값을 가져옴
 $q=$_GET["q"];

 // $q 변수값이 있는지 여부를 체크
 if (strlen($q)>0) {
 $hint="";
 for($i=0; $i<($x->length); $i++)  {
   $y=$x->item($i)->getElementsByTagName('title');
   $z=$x->item($i)->getElementsByTagName('url');
   if ($y->item(0)->nodeType==1) {
     //find a link matching the search text
     if (stristr($y->item(0)->childNodes->item(0)->nodeValue,$q))  {
       if ($hint=="")   {
         $hint="<a href='" . 
         $z->item(0)->childNodes->item(0)->nodeValue . 
         "' target='_blank'>" . 
         $y->item(0)->childNodes->item(0)->nodeValue . "</a>";
       } else  {
         $hint=$hint . "<br /><a href='" . 
         $z->item(0)->childNodes->item(0)->nodeValue . 
         "' target='_blank'>" . 
         $y->item(0)->childNodes->item(0)->nodeValue . "</a>";
         }
       }
     }
   }
 }

 // 만약 xml 데이터에 검색값의 내용이 없을 경우 "no suggestion" 을 출력함
 if ($hint=="")  {
   $response="no suggestion";
 } else {
   $response=$hint;
 }

 // $response 값을 출력하라
 echo $response;
 ?> 