<?php
 // �迭(array)�� ���� ����ϴ�.
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
 $q=$_GET["q"]; // ajax_form.php ���� 'q'��� ������ �Ѿ�� ���� �޴� �κ�

 // �Էµ� ���� �ִ��� üũ�ϴ� ����(������ ���̰� 0���� ũ�Ķ�� �ǹ�)
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

 // ���� ��ġ�Ǵ� ���� ������ "no suggestion" �� ����ϰ� ���� ������ �̸� ��ü�� ����մϴ�.
 if ($hint == "")
   {
   $response="no suggestion";
   }
 else
   {
   $response=$hint;
   }

 // ���� �����
 echo iconv("euc-kr","utf-8",$response);  // �ѱ��� ������ euc-kr�� ���� ��ȯ��
 ?>