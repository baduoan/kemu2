
<!DOCTYPE html>
<html>
<head>



<meta name="viewport" content="width=device-width, initial-scale=1">



<script type="text/javascript" src="jquery.min.js"></script>


//js部分代码




//html  部分代码





<?php 

error_reporting(E_ALL^E_NOTICE^E_WARNING);      // php关闭错误报告

echo "<br>";

//echo "打印出――――>输入的前区号码";

echo "<br>";


print_r($_POST['a']);   



print_r($_POST['b']);   




echo "<hr>";


$a=$_POST["a"];

//["a"]是数组名称



$result=array_flip($a);//交换数组的键和值

//input text 传过来的是值

//array_rand  随机的是键名


//把值变成键


//$result=array_flip($a);//交换数组的键和值


echo "<br>";



echo "<br>";


 $array_name5=array_rand($result,1);   


sort($array_name5);


$age=array("Peter"=>$array_name5);
//

$xy=join("",$age);


//echo $xy;




//         以下是后区代码



$b=$_POST["b"];



$result2=array_flip($b);//交换数组的键和值

//input text 传过来的是值

//array_rand  随机的是键名


//把值变成键


//$result=array_flip($a);//交换数组的键和值

echo "<hr>";

echo "前区起点与尾巴―-->随机后的号码";


echo "<br>";


 $array_name2=array_rand($result2,1);   //array_rand()随机出1个是字符串，
 
 //array_rand()随机出2个是数组对，
 


sort($array_name2);


$age2=array("Peter"=>$array_name2);
//把单个字符串转换成单个数组


$y2=join("",$age2);

//把单个数组转换成单个字符串


//echo $y2;


echo  "<br>";



//在两单个字符串之间随机



//$s=mt_rand($xy,$y2);


//在两单个字符串之间随机




if ($xy<$y2)
{
      $s=mt_rand($xy,$y2);
}
else
{
      $s=mt_rand($y2,$xy);


  }



if ($xy<$y2)
{
    $s2=mt_rand($xy,$y2);
}
else
{
    $s2=mt_rand($y2,$xy);


  }


if ($xy<$y2)
{
    $s3=mt_rand($xy,$y2);
}
else
{
    $s3=mt_rand($y2,$xy);


  }



if ($xy<$y2)
{
    $s4=mt_rand($xy,$y2);
}
else
{
    $s4=mt_rand($y2,$xy);


  }



if ($xy<$y2)
{
    $s5=mt_rand($xy,$y2);
}
else
{
    $s5=mt_rand($y2,$xy);


  }
  
  
if ($xy<$y2)
{
    $s6=mt_rand($xy,$y2);
}
else
{
    $s6=mt_rand($y2,$xy);


  }
  
  
  
if ($xy<$y2)
{
    $s7=mt_rand($xy,$y2);
}
else
{
    $s7=mt_rand($y2,$xy);


  }
  
  
  
  
  
$ag2=array("a"=>$s,"b"=>$s2,"c"=>$s3

,"d"=>$s4,"e"=>$s5,"f"=>$s6,"g"=>$s7);

$ag3=array_unique($ag2);


sort($ag3);


$arrlength=count($ag3);


for($x=0;$x<$arrlength;$x++)
   {
   echo $ag3[$x];
   echo "+";
   }



?>  





    </form>
  </div>
</div>
​
</body>
</html>
​
