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


<hr>

<style>ol.s li,pre,h1{font:1em consolas}</style></head><body>
  <h1>ファイル内文字列検索</h1>
  <form action="" method="post">
    <input type="text" size="55" name="s" />
    <input type="submit" name="findcommand"  value="文字列検索" />
    <input type="submit" name="findname"  value="ファイル名検索" />
    <input type="submit" name="findphp" value="php検索" />
<?php
$dirName = './';
$dirName = realpath($dirName) ;


    // ディレクトリからディレクトリ・ファイル名を昇順で取得します。
$fileArrayAsc = scandir($dirName);
?>

</form><div id="contentbar"> <ol class="s">
<?php


//  main
if(!empty($_POST['s'])  ){

    if(!empty($_POST['findphp']) ){
        recursiv($dirName);
    }elseif( !empty($_POST['findname']) ){
    	find_name();
    }elseif( !empty($_POST['findcommand']) ){
    	
        find_grep();
    }

}


//ファイル名検索
function find_name(){
   $str = $_POST['s'];
   $result = `find ./ -name $str`;
    echo "<pre>". h($result) ."</pre>";
}

//// find コマンド
function find_grep(){
   $str = $_POST['s'];
   $result = `find ./ -type f -print | xargs grep '.$str.'`;
    echo "<pre>". h($result) ."</pre>";
}



function recursiv($dirName) {

 $str = $_POST['s'];
    // ディレクトリからディレクトリ・ファイル名を昇順で取得します。
      $fileArrayAsc = scandir($dirName);  // ./
    	$kac = "";
//$jogai=impload('|',$_POST['jogai[]']);
//var_dump($_POST['jogai[]']);
      foreach($fileArrayAsc as $val){
          $v = $dirName."/".$val;
          //echo '<p>' . $v;

            $path_parts= pathinfo($v); //ファイル情報取得

            $basename= $path_parts['basename'];
              if(isset($path_parts['extension']))
		    			$kac= $path_parts['extension']; //拡張子取得

    		//拡張子がphp |html |htm |txt |csvの時にのみ探す。
		    			if(isset($kac) ){
		    			    if(preg_match('/php|html|htm|txt|csv|css|js|cgi|json|htaccess|log/', $kac))
                             wserch($v,$str); //ファイル内検索実行関数
		    			}
		    			else{  // 拡張子がない=ディレクトリなら
		    				if(is_dir($v) ){

		    			       recursiv($v);
		    			    }
		    			    }
		    			}
    	}




function wserch($fname,$s){
 //   echo $fname .' | ' . $s;
 $fp = fopen($fname, "r"); //ファイルオープン
	while( ! feof($fp) ) {
	$buffer = fgets( $fp, 4096 ); //1行ずつ読み込み

		if (strstr($buffer,$s)){ //postされた文字列が含まれる場合はtrue
			$aaa=$buffer; //初めて検索できた行をaaaにセット
				echo "<li>".$fname ."=>". h($aaa)."</li>";
				break;
		}
	}
fclose ($fp);
}


function h($var) { // HTMLでのエスケープ処理をする関数
  if (is_array($var)) {
    return array_map('h', $var);
  } else {
    return htmlspecialchars($var, ENT_QUOTES);
  }
}

?>
</body>
</html>