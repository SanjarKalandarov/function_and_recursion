<?php
#1-topshiriq
#1.Q sonini P darajasini topuvchi funksiya tuzing.
 function daraja($q,$p){
     echo $q**$p;
 }
 $a=4;
 $b=5;
 daraja($a,$b);


#2.P sonini oxiridan L sonini qo‘shuvchi funksiya tuzing.
 function son($p,$l){
     echo $p.$l;
 }
 $a=12;
 $b=523;
 son($a,$b);


#3.	Berilgan to‘g‘ri burchakli uchburchakning katetlari yordamida gipotenuzasini topuvchi funksiya tuzing
 function gipotenuza($a,$b){
     return sqrt($a**2+$b**2);
 }
 $c=gipotenuza(5,7);
 echo $c;


#4.	Berilgan ikki nuqtaning koordinatasi asosida ular orasidagi masofani topuvchi funksiya tuzing.
 function masofa($x1,$x2,$y1,$y2){
     return sqrt(($x2-$x1)**2+($y2-$y1)**2);
 }
 $d=masofa(3,4,1,6);
 echo round($d,3);




#6.	Berilgan N soni ikkita tub sonni yig‘indisi bo‘lishini tekshiruvchi funksiya tuzing.
 function tub_son($n){
     $mas1=[];
     $mas2=[];
     for($i=2;$i<=$n;$i++){
         $k=true;
         for($j=2;$j*$j<=$i;$j++){
             if($i%$j==0) $k=false;
         }
         if($k){
             array_push($mas1,$i);
             array_push($mas2,$i);
         }
     }
     $m=count($mas1);
     for($i=0;$i<$m;$i++){
         $k=false;
         for($j=0;$j<$m;$j++){
             if($mas1[$i]+$mas2[$j]==$n){
                 echo "ha";
                 $k=true;
                 break;
             }
         }
         if($k) break;
     }
 }
 $son=10;
 tub_son($son);


#8-misol
 function son2($n){
     if($n%11==0) echo "1";
     else echo "0";
 }
 son2(2);


#9-misol
//9.	Berilgan sonni K o‘rindagi raqamini N o‘rindagi raqami bilan almashtiruvchi funksiya tuzing.
 function almashtirish($n,$k,$l){
     $t=$n[$k];
     $n[$k]=$n[$l];
     $n[$l]=$t;
     echo $n;
 }
 $n='1234';
 $a=1;
 $b=3;
 almashtirish($n,$a,$b);



//10.	Sonni raqamlarini o‘sish (kamayish) tartibida saralovchi funksiya tuzing.
 function osish($n){
     for($i=0;$i<strlen($n);$i++){
         for($j=0;$j<strlen($n)-1;$j++){
             if($n[$i]<$n[$j]){
                 $b=$n[$i];
                 $n[$i]=$n[$j];
                 $n[$j]=$b;
             }
         }
     }
     echo $n;
 }
 osish('52759');

//11.	Uchburchakni uchta uchining koordinatalari berilgan. Uning yuzasini topuvchi funksiya tuzing.
 function yuza($x1,$x2,$x3,$y1,$y2,$y3){
     $a=sqrt(($x2-$x1)**2+($y2-$y1)**2);
     $b=sqrt(($x3-$x1)**2+($y3-$y1)**2);
     $c=sqrt(($x3-$x2)**2+($y3-$y2)**2);
     $p=($a+$b+$c)/2;
     $s=sqrt($p*($p-$a)*($p-$b)*($p-$c));
     echo $s;
 }
 yuza(5,7.9,6,7,3,15);


//12.	Tomonlari a, b, c, d va e haqiqiy sonlardan iborat bo‘lgan beshburchak berilgan (2.1-rasm). Beshburchakni va undagi uchta uchburchaklarni yuzasini topuvchi alohida funksiyalar tuzing
 function uch_yuza($a,$b,$c){
     $p=($a+$b+$c)/2;
     $s=sqrt($p*($p-$a)*($p-$b)*($p-$c));
     return $s;
 }
 function besh_yuza($a,$b,$c){
     return $a+$b+$c;
 }
 $s1=uch_yuza(5,9,7.2);
 $s2=uch_yuza(7.2,8,6.50);
 $s3=uch_yuza(8,5.5,4);
 $s=besh_yuza($s1,$s2,$s3);
 echo $s1."<br>".$s2."<br>".$s3."<br>".$s;


//13.	Besh burchakning uchlarining koordinatalari x1, y1, x2, y2, …, x5, y5 berilgan (2.1-rasm). Beshburchakdagi   uchburchakni uchta uchining koordinatalari berilgan. Uning yuzasini topuvchi funksiya tuzing.
 function yuza1($x1,$x2,$x3,$y1,$y2,$y3){
     $a=sqrt(($x2-$x1)**2+($y2-$y1)**2);
     $b=sqrt(($x3-$x1)**2+($y3-$y1)**2);
     $c=sqrt(($x3-$x2)**2+($y3-$y2)**2);
     $p=($a+$b+$c)/2;
     $s=sqrt($p*($p-$a)*($p-$b)*($p-$c));
     echo $s;
 }
 yuza1(5,7.9,6,7,3,15);


#14-misol.Tub sonlikka tekshirish va 100 dan 1000gacha bolganlarni aniqlash.
 function Tub($n){
     $k=true;
     for($i=2;$i*$i<=$n;$i++){
         if($n%$i==0){
             $k=false;
             break;
         }
     }
     

     if($n==1) $k=false;
     if($k) echo "Tub<br>";
     else echo "Tub emas<br>";
 }
 Tub(9);
 for($i=100;$i<1000;$i++){
     $m=true;
     for($j=2;$j*$j<=$i;$j++){
         if($i%$j==0){
             $m=false;
             break;
         }
     }
     if($m) echo $i."<br>";
 }


#15-misol.	Barcha tub sonlar ichidan “egizak”larini topuvchi funksiya tuzing. Tub sonlar “egizak” deyiladi, agarda ular 3 ga farq qilsa. Masalan, 41 va 43. Uch xonali sonlar ichidan barcha “egizak”larni chiqaring.
 function Tub2($n,$a=2){
     $mas1=[];
     for($i=$a;$i<=$n;$i++){
         $k=true;
         for($j=2;$j*$j<=$i;$j++){
             if($i%$j==0){
                 $k=false;
                 break;
             }
         }
         if($k){
             array_push($mas1,$i);
         }
     }
     for($i=0;$i<count($mas1)-1;$i++){
         if($mas1[$i+1]-$mas1[$i]==2){
             echo $mas1[$i]."<br>".$mas1[$i+1]."<br>";
         }
     }
 }
 Tub2(999,100);


#16.Ikkita son berilgan. Ularni raqamlari yig‘indisi kattasini toping. Sonni raqamlari yig‘indisini topuvchi funksiya tuzing.
 function son3($n){
     $n="$n";
     $sum=0;
     for($i=0;$i<strlen($n);$i++){
         $sum+=$n[$i];
     }
     return $sum;
 }
 $a=son3(25);
 $b=son3(98);
 if($a>$b) echo $a;
 elseif($a<$b) echo $b;
 else echo "ikkala sonni raqamlari yigindisi teng!";


#17.Ikkita son berilgan. Ularning raqamlaridan soni ko‘pini toping. Sonni raqamlari sonini topuvchi funksiya tuzing
 function Raqam($a){
     $a="$a";
     return strlen($a);
 }
 $a=2346;
 $b=8453;
 if(Raqam($a)>Raqam($b)) echo $a;
 elseif(Raqam($a)<Raqam($b)) echo $b;
 else echo "Raqamlari soni teng";


#18.6 xonali barcha baxtli sonni toping. Agarda 6 xonali sonni dastlabki uchta raqamini yig‘indisi oxirgi uchta raqamini yig‘indisiga teng bo‘lsa baxtli son deyiladi. 6 xonali sonni raqamlarini uchtalab yig‘indisini topuvchi funksiya tuzing.
 function son5($n){
     $n="$n";
     $sum1=0;
     $sum2=0;
     for($i=0;$i<3;$i++){
         $sum1+=$n[$i];
         $sum2+=$n[$i+3];
     }
     if($sum1==$sum2) return true;
     else return false;
 }
 $i=100000;
 while($i<1000000){
     if(son5($i)) echo $i." ";
     $i++;
 }


#19.Berilgan sonni palindromlikka tekshiruvchi funksiya tuzing. Masalan, 1221. Son palindrom bo‘lsa “Palindrom”, aks holda “Palindrom emas” so‘zini chiqaring.
 function palindrom($n){
     $n="$n";
     $a=strrev($n);
     if($a==$n) echo "Palindrom";
     else echo "Palindrom emas";
 }
 palindrom(123321);


#20.Berilgan a va b sonlarini EKUBini topuvchi funksiya tuzing.
 function ekub($a,$b){
     while($b!=0){
         $m=$a%$b;
         $a=$b;
         $b=$m;
     }
     return $a;
 }
 $q=ekub(6,8);
 echo $q;


#21.Berilgan a va b sonlarini EKUKini topuvchi funksiya tuzing.
 function ekuk($a,$b){
     $ek=$a;
     while($ek%$a!=0 || $ek%$b!=0){
         $ek++;
         // echo "$ek<br>";
     }
     return $ek;
 }
 echo ekuk(10,5);

#22.Berilgan a, b va c sonlarini EKUBini topuvchi funksiya tuzing.
 function ekub2($a,$b,$c){
     while($b!=0){
         $m=$a%$b;
         $a=$b;
         $b=$m;
     }
     while($c!=0){
         $n=$a%$c;
         $a=$c;
         $c=$n;
     }
     return $a;
 }
 $q=ekub2(20,10,20);
 echo $q;


#23
 function f($a,$b,$c){
     return (2*$a-$b-sin($c))/(5+abs($c));
 }
 $s=1;
 $t=2.1;
 $sum=f($t,-2*$s,1.17)+f(2.2,$t,$s-$t);
 echo round($sum,3);


#24. S, t хakikiy sоnlar bеrilgan. G(1.2,s)+G(t,s)+G(2s-1,st) ni хisоblang
 function g($a,$b){
     return ($a*$a+$b*$b)/($a*$a+2*$a*$b+3*$b*$b+4);
 }
 $s=1;
 $t=2.1;
 $sum=g(1.2,$s)+g($t,$s)+g(2*$s-1,$s*$t);
 echo round($sum,3);


#25Xakikiy sоn bеrilgan. Хisоblang
 function t($x){
     $s=0;
     $sum=0;
     for($k=0;$k<=10;$k++){
         $p1=1;
         $p2=1;
         for($i=1;$i<=2*$k+1;$i++){
             $p1*=$i;
         }
         for($j=0;$j<=2*$k;$j++){
             if($j==0) $p2=1;
             else $p2*=$j;
         }
         $s+=pow($x,2*$k+1)/$p1;
         $sum+=pow($x,2*$k)/$p2;
     }
     return $s/$sum;
 }
 $y=2.1;
 $a=(1.7*t(0.25)+2*t(1+$y))/(6-t($y*$y-1));
 echo round($a,3);


#2626.	 a , b va c хakikiy sоn bеrilgan. Хisоblang
 $a=2.2;
 $b=5.1;
 $c=3.7;
 $y=(max($a,$a+$b)+max($a,$b+$c))/(1+max($a+$b*$c,1.15));
 echo round($y,3);


#27a va b хakikiy sоn bеrilgan. Хisоblang
//u=min(a,b)  v=min(ab, max(a,b))  s=min(u+v, 3.14).

 $a=2.1;
 $b=5.7;
 $u=min($a,$b);
 $v=min($a*$b,max($a,$b));
 $s=min($u+$v,3.14);
 echo $u."<br>".$v."<br>".$s;


#28s, t хaqiqiy sоnlar bеrilgan.  Хisоblang:
//h(s,t)+max(h(s-t,st), h(s-t,s+t))+h(1 , 1), bu еrda

 function h($a,$b){
     return $a/(1+$b*$b)+$b/(1+$a*$a)-pow($a-$b,3);
 }
 $s=2.1;
 $t=1.5;
 $sum=h($s,$t)+max(h($s-$t,$s*$t),h($s-$t,$s+$t))+h(1,1);
 echo round($sum,3);


#2929.	 f(n) funksiyasi quyidagicha xisoblanadi:
//f(0)=0, f(1)=1, f(2n)=f(n), f(2n+1)=f(n)+f(n+1).
//Sizga natural n soni beriladi. Sizdan topish talab qilinadi f(n)

 function f2($n){
     if($n==0) return 0;
     if($n==1) return 1;
     if($n%2==0) return f($n/2);
     else return f($n/2)+f($n/2+1);
 }
 echo f2(2);


#Rekursiv funksiya
#1.Sonni raqamlar yig‘indisini topuvchi rekursiv funksiya tuzing.
 function son6($n){
     if($n==0) return;
     else return $n%10+son(intdiv($n,10));
 }
 $m=son6(123456789);
 echo $m;


#2.	Sonni raqamlar sonini topuvchi rekursiv funksiya tuzing.
 function raqam2($n){
     if($n==0) return;
     elseif(intdiv($n,10)==0) return 1;
     elseif(intdiv($n,10)!=0) return 1+raqam2(intdiv($n,10));
 }
 $m=raqam2(100);
 echo $m;


//#3  3.	Berilgan sonning raqamli ildizini topuvchi rekursiv funksiya tuzing.  Sonning raqamlar yig‘indisini topamiz va bu yig‘indini ham raqamlar yig‘indisi ustma-ust tushsa sonni raqamli ildizi deb ataladi.
 function sonr($n){
     if($n==0) return;
     return $n%10+son(intdiv($n,10));
 }
 $m=sonr(123);
 echo $m;
 $n=sonr($m);
 if($n==$m) echo "Raqamli ildiz: $m";


#4.Arifmetik progressiyani birinchi hadi va ayirmasi berilgan. N ta hadini aniqlovchi rekursiv funksiya tuzing.
 function amal($n){
     $a=1;
     $d=2;
     if($n==0) return 0;
     if($n==1) return $a;
     else return amal($n-1)+$d;
 }
 $m=amal(3);
 echo $m;


#5.Arifmetik progressiyani birinchi hadi va ayirmasi berilgan. N ta hadini yig‘indisini hisoblovchi rekursiv funksiya tuzing.
 function arifmetik($a,$d,$n){
     if($n==1) return $a;
     else{
         return ($a+($n-1)*$d)+arifmetik($a,$d,$n-1);
     }
 }
 echo arifmetik(1,1,9);


#6.	Fibonachi sonini k-hadini topuvchi rekursiv funksiya tuzing.
 function fibonaci($k){
     if($k<=1) return $k;
     else return fibonaci($k-1)+fibonaci($k-2);
 }
 $m=fibonaci(6);
 echo $m;


#7.Fibonachi sonini k ta hadini yig‘indisini hisoblovchi rekursiv funksiya tuzing.
 function fibonaci2($k){
     if($k<=1) return $k;
     else {
         return fibonaci2($k-1)+fibonaci2($k-2);
     }
 }
 function yig($k){
     $s=0;
     for($i=0;$i<=$k;$i++){
         $s+=fibonaci2($i);
     }
     return $s;
 }
 echo yig(4);


#8.	Manfiy bo‘lmagan n va m sonlari uchun Akkerman funksiyasini hisoblovchi rekursiv funksiya tuzing.
 function akkerman($n,$m){
     if($m==0&&$n!=0) return akkerman($n-1,1);
     if($n>0&&$m>0) return akkerman($n-1,akkerman($n,$m-1));
     if($n==0) return $m+1;
 }
 $m=akkerman(2,1);
 echo $m;


#9.	Berilgan a va b sonlarining  EKUBini topuvchi rekursiv funksiya tuzing.
 function ekub3($a,$b){
     if($b==0) return $a;
     else {
         $m=$a%$b;
         $a=$b;
         $b=$m;
         return ekub3($a,$b);
     }
 }
 echo ekub3(2,6);


#10.	Berilgan a va b sonlarining  EKUKini topuvchi rekursiv funksiya tuzing.
// function ekuk($a,$b,$ek=1){
//     if($ek%$a==0 && $ek%$b==0) return $ek;
//     return ekuk($a,$b,$ek+1);
// }
// echo ekuk(5,3);


#11.Berilgan a, b va c sonlarining EKUBini topuvchi rekursiv funksiya tuzing.
 function ekub4($a,$b,$c){
     if($b==0 && $c==0) return $a;
     if($b!=0){
         $m=$a%$b;
         $a=$b;
         $b=$m;
         return ekub4($a,$b,$c);
     }
     if($c!=0){
         $m=$a%$c;
         $a=$c;
         $c=$m;
         return ekub4($a,$b,$c);
     }
 }
 echo ekub4(9,18,3);


#12.Berilgan sonning raqamlarini teskarisiga yozuvchi rekursiv funksiya tuzing.
 function sonr2($a){
     if(intdiv($a,10)==0) return $a;
     else{
         return ($a%10).sonr2(intdiv($a,10));
     }
 }
 echo sonr2(1234);


#13.Soni noma’lum bo‘lgan sonlar ketma-ketligini massiv ishlatmagan holda teskarisiga yozuvchi rekursiv funksiya tuzing
 function gett(...$a){
     // var_dump($a);
     for($i=count($a)-1;$i>=0;$i--){
         echo $a[$i]."<br>";
     }
 }
 gett(1,2,3,4,5,6,8);


#14.N-Fibonachi sonini oxirgi 17 xonasini aniqlovchi rekursiv dastur tuzing.
 function fibonaci4($k){
     if($k==0) return 0;
     if($k==1) return 1;
 else return fibonaci4($k-1)/*%(10**17)*/+fibonaci4($k-2)/*%(10/**17)*/;
 }
 $m=fibonaci4(5);
 echo $m;


#15.Maxraji n bo‘lgan [0;1] orasidagi barcha qisqarmas kasrlarni topuvchi rekursiv dastur tuzing.
 function ekub5($a,$b){
     while($b!=0){
         $m=$a%$b;
         $a=$b;
         $b=$m;
     }
     return $a;
 }
 function kasr($n,$a=1){
     if($n==$a) return;
     if($a==1) echo $a/$n."<br>";
     elseif(ekub5($n,$a)==1) echo $a/$n."<br>";
     ++$a;
     return kasr($n,$a);
 }
 kasr(10);


#16.Berilgan sonni necha N faktorialga tengligini aniqlovchi rekursiv funksiya tuzing.
 function faktarial($n,$a=1,$k=1){
    if($n==$a) return $k;
    ++$k;
    return faktarial($n,$a*$k,$k);
 }
 echo faktarial(1);


#17.22^n ning 109 ga bo‘lgandagi qoldiqni hisoblovchi rekursiv funksiya tuzing
 function daraja2($n){
     if($n==1) return 4;
     else{
         return 4*daraja2($n-1)%pow(10,9);
     }
 }
 echo daraja2(20);






#---------------------------
// $ary=[1,2,3,4,5,6,7];
// $ar1=array_reverse($ary);
// foreach($ar1 as $arr){
//     echo $arr."<br>";
// }