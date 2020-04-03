<!-- Author:Hanyong He  -->
<!-- Date: 04/02/2020 -->


<!-- part 1 Study and test the code below from page 202: -->
<?php
     $userinfo = "Name: <b>Zeev Suraski</b> <br> Title: <b>PHP Guru</b>";
     preg_match_all ("/<b>(.*)<\/b>/U", $userinfo, $pat_array);
     print $pat_array[0][0]." <br> ".$pat_array[0][1]."\n";
 ?>

 <!-- part 2 Write a php program that retrieves the domain name out of a URL -->
<!-- I will use also the URl as example:
http://www.youtube.com
http://www.facebook.com
http://www.baidu.com
http://www.yahoo.com
http://www.amazon.com -->

<?php
echo "<br><br>";
function findDomain($url){
  // the regexp the domain is always following a www and it end before /
  $regexp = '/(?<=www\.)[^\/]*/';
  echo "the url is------------- $url<br>";
  preg_match($regexp,$url,$domain);
  echo "domain name is-----".$domain[0]."<br><br><br>";
}
findDomain("http://www.sdev253.net/home.html");
findDomain("www.google.com");
findDomain("https://www.ivytech.edu/index.php");
?>
