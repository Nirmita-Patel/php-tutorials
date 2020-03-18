<?php
//immutable
$name = "sumit";
var_dump($name);

echo "Length -> ". strlen($name)."<br>";

$name = "sumit more j";
echo "Word ->" .str_word_count($name)."<br>";

echo "reverse ->".strrev($name)."<br>";


echo "find ->".strpos($name,"more")."<br>";
echo "find ->".stripos($name,"More")."<br>";

echo "find and replace -> ".str_replace("sumit","SUMIT",$name)."<br>";


echo "Uppercase -> ".strtoupper($name)."<br>";
echo "Lower -> ".strtolower($name)."<br>";
echo "Ucfirst -> ".ucfirst($name)."<br>";
echo "Ucword -> ".ucwords($name)."<br>";




$name = "sumit more";
echo"split ->";
print_r(str_split($name,5));
echo"<br>";

$name = "more,sumit";
echo"split ->";
print_r(explode(",",$name));
echo"<br>";

$name = implode(" ",explode(",",$name));
echo "Join -> ".$name."<br>";

$name = "What is Lorem Ipsum?
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

Why do we use it?
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).


Where does it come from?
Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.

The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.

Where can I get some?
There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.";

$name = strtoupper(implode("-",explode(" ",$name)));
echo "Join -> ".$name."<br>";
/***
 *  salt = sumit
 * 
 *  adc
 * 
 * hash = 125dsdfs154
 */

$md5 = md5("sumit more");
echo $md5."<br>";
$md5 = sha1("sumit more");
echo $md5."<br>";

$pass = "sumit";
$pass = md5($pass);
$pass = sha1($pass);
$pass = md5($pass);
$pass = sha1($pass);
echo $pass."<br>";


$pass = "        sumit         ";
echo $pass . " -> ".strlen($pass)."<br>";
$pass = trim($pass);
echo $pass. " -> ".strlen($pass)."<br>";


$pass = "<h1><b>sumit</b></h1>";
echo strip_tags($pass)."<br>";
$pass = "<script>alert('sumit')</script>";
echo strip_tags($pass)."<br>";

$data = '<!DOCTYPE html><html>
<head>
</head>
<body>
<p style="text-align: center;"><span style="color: #bdc3c7;">&rarr; This is a full-featured editor demo. Please explore! &larr;</span></p>
<p style="text-align: center;">&nbsp;</p>
<h2 style="text-align: center;">TinyMCE provides a <span style="text-decoration: underline;">full-featured</span> rich text editing experience, and a featherweight download.</h2>
<p style="text-align: center;"><strong> <span style="font-size: 14pt;"> <span style="color: #7e8c8d; font-weight: 600;">No matter what you\'re building, TinyMCE has got you covered.</span> </span> </strong></p>
<table style="border-collapse: collapse; width: 85%; margin-left: auto; margin-right: auto; border: 0;">
<tbody>
<tr>
<td style="width: 25%; text-align: center; padding: 7px;"><span style="color: #95a5a6;">🛠 50+ Plugins</span></td>
<td style="width: 25%; text-align: center; padding: 7px;"><span style="color: #95a5a6;">💡 Premium Support</span></td>
<td style="width: 25%; text-align: center; padding: 7px;"><span style="color: #95a5a6;">🖍 Custom Skins</span></td>
<td style="width: 25%; text-align: center; padding: 7px;"><span style="color: #95a5a6;">⚙ Full API Access</span></td>
</tr>
</tbody>
</table>
</body>
</html>';
/**
 * htmlentities -> convert html to string
 * html_entity_decode -> conver htmlstring to html
 */
// echo htmlentities($data);

// echo html_entity_decode($data);

echo str_shuffle("Hello World");
echo "<br>";
$str = "INV201920";
echo str_pad($str,10,"00")."<br>";
$id = 12566;
$acid = str_pad($str,10,"00").str_pad($id,4,"00",STR_PAD_LEFT);
echo $acid;


/**
 * 
 * $input = "sumit";

 +------------+
 |   sumit    |
 +------------+

 +-----------------+
 |   sumit more    |
 +-----------------+

  */


$number = 9;
$str = "Beijing";
$sal = 70.20;
$txt = sprintf("There are %d million %f bicycles in %s.",$number,$sal,$str);
echo $txt."<br>";


$number = 9;
$str = "Beijing";
$txt = sprintf("There are %'$20u million bicycles in %'x20s.",$number,$str);
echo $txt."<br>";

$number = 9;
$str = "Beijing";
$sal = 7820.25536695;
$txt = sprintf("There are %'$20u million %.8f bicycles in %'x20s.",$number,$sal,$str);
echo $txt."<br>";


$name = "sUmit";
echo "find and replace -> ".str_ireplace("sumit","sumit",$name)."<br>";

$space = str_repeat(" ",12);
echo"<br>";
echo str_repeat("*",25);
echo"<br>";
echo "<pre>";
echo sprintf("|  %12s%s|",$name,$space);
echo "</pre>";
echo str_repeat("*",25);

echo "<br>";
echo strcasecmp("Hello world!","HELLO WORLD");
echo "<br>";

echo "<br>";
echo stripcslashes("Hello \World!");
echo "<br>";

echo "<br>";
echo stripslashes("Who\'s Peter Griffin?");
echo "<br>";

echo strpos("I love php, I love php too!","php");
echo "<br>";
echo stripos("I love php, I love php too!","PHP",0);
echo "<br>";
echo strrpos("I love php, I love php too!","php",-18);
echo "<br>";
echo "<br>";echo "<br>";

$occ = 1;
$i = strlen("php");
while($occ){
    $occ = stripos("I love php, I love php too!PHP I love php, I love php too!","PHP",$occ+$i);
    echo $occ;
    echo "<br>";
    // echo stripos("I love php, I love php too!","PHP",$occ+$i);
}



echo strstr("Hello World! Sumit",'ld');
echo "<br>";
echo stristr("Hello World! Sumit",'LD');
echo "<br>";
echo stristr("Hello World! Sumit",'LD',True);
