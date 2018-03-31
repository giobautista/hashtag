<?php
function getHashTags($str){
	// RegEx matching hashtag
	$regex = "/#+([a-zA-Z0-9_]+)/";
	$str = preg_replace($regex, '<a href="hashtag.php?tag=$1">$0</a>', $str);
	return($str);
}

$string = "I like to code in #css, #html, and #php. It makes me #happy.";
$string = getHashTags($string);
echo $string;
?>
