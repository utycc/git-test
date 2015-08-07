<?php
 // 배열(array)에 값을 담습니다.
 $a[]="Ma Tazin win Lelt";
 $a[]="Ma thinzar win Lelt";
 $a[]="Mg Yan Lin Htet";
 $a[]="Mg Aung Kyaw Thura";
 $a[]="Mg Sithu Kyaw";
 $a[]="Ma Khin Hsu Myat";
 $a[]="Ma Su Su Hlaing";
 $a[]="Ma Khaing Zar Mon";
 $a[]="Ma Yi Yi Htur";
 $a[]="Ma Ei Thardar Phyu";
 $a[]="Ma Ei Zin Htun";
 $a[]="Ma Cho Cho Mar";
 $a[]="Ma Lin Lin Khine";
 $a[]="Ma Thazin Myint";
 $a[]="Ma Htoo Mon Kyaw";
 $a[]="Ma Win Win Phyo";
 $a[]="Ma Su Wai Myo";
 $a[]="Ma Wint Shwe Yee";
 $a[]="Ma Khin Htet Htet Hsu";
 $a[]="Ma Shin Thant";
 $a[]="Ma jue Jue Paing";
 $a[]="Ma Ei Ei Phyo";
 $a[]="Ma Phu Wai Paing";
 $a[]="Ma Hsu Wutyi";
 $a[]="Ma Ra nee";
 $a[]="Ma Aye Chan Thu";
 $a[]="Ma Myo Mar Thinn";
 $a[]="Ma Jue Jue Pairg";
 $a[]="Ma Wint Phu Aung";
 $a[]="Ma Pan su Kyi";

 //get the q parameter from URL
 $q=$_GET["q"]; // ajax_form.php 에서 'q'라는 변수로 넘어온 값을 받는 부분

 // 입력된 값이 있는지 체크하는 구문(글자의 길이가 0보다 크냐라는 의미)
 if (strlen($q) > 0)
   {
   $hint="";
   for($i=0; $i<count($a); $i++)
     {
     if (strtolower($q)==strtolower(substr($a[$i],0,strlen($q))))
       {
       if ($hint=="")
         {
         $hint=$a[$i];
         }
       else
         {
         $hint=$hint." , ".$a[$i];
         }
       }
     }
   }

 // 성과 일치되는 값이 없으면 "no suggestion" 을 출력하고 값이 있으면 이름 전체를 출력합니다.
 if ($hint == "")
   {
   $response="no suggestion";
   }
 else
   {
   $response=$hint;
   }

 // 값을 출력함
 echo iconv("euc-kr","utf-8",$response);  // 한글이 깨져서 euc-kr로 값을 변환함
 ?>