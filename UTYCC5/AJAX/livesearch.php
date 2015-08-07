<?php
 $xmlDoc=new DOMDocument();
 $xmlDoc->load("link.xml");

 $x=$xmlDoc->getElementsByTagName('link');

 // q�� �Ű����� ���� ������
 $q=$_GET["q"];

 // $q �������� �ִ��� ���θ� üũ
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

 // ���� xml �����Ϳ� �˻����� ������ ���� ��� "no suggestion" �� �����
 if ($hint=="")  {
   $response="no suggestion";
 } else {
   $response=$hint;
 }

 // $response ���� ����϶�
 echo $response;
 ?> 