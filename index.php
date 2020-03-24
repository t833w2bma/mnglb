<?php

// require "../wwwsearch.php";

    $DIR = "./";
		$file_arr= [];                   //一覧表示するディレクトリ
    function printfile($dir) {
        $opendir = opendir($dir);
		global $file_arr;

			  while($file = readdir($opendir)) {
            if($file === "." or $file === "..") {
                continue;
            }
            $file = $dir . $file;
            if(is_dir($file)) {
                printfile($file);
                continue;
            }
						//正規表現 で論理積（AND）

            if(preg_match("/^(?=.*\d)(?=.*php+$)/", $file) and filesize($file) > 100) {
                $filename = preg_replace("/^[\.\/]+/", "", $file);
							$file_arr  += array($filename=>$file) ;
							//echo $filename;
               // echo "<a href=\"$file\">$filename</a><br>\n";
            }
        }
        closedir($opendir);
				return $file_arr ;
    }
?>

<html><head><title>カレー屋さんファイル一覧</title>
	<style>a {color: #337ab7;text-decoration: none;}a:hover, a:focus {color: #23527c;text-decoration: underline;}li{list-style: none;margin-left:2em;}</style></head><body>
<h2>Wordpressでお店のページを簡単に作る方法</h2>
<?php
$file_arr = printfile($DIR);
   ksort($file_arr);
	 foreach ($file_arr as $key => $value) {
		 echo "<li><a href='$value'> $key </a></li>";
	 }

?>

</body>
</html>