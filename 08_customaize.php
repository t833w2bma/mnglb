<?php include 'header.php'; ?>
<div class="box generalbox book_content" id="yui_3_17_2_1_1474893151053_221"><h3>9 3-7.サイドバーTOPに今週のランチ情報が表示されるようにする</h3><div class="no-overflow" id="yui_3_17_2_1_1474893151053_220"><p><br></p>
<section id="lunch">

  <p>こんな感じにしてみます。<br> 
    <img src="mt01/widget-left4.png" alt="カスタム ウィジェット背景"> </p>

  <section class="kiji">
    <ol>
      <li>再びプラグイン「Category Posts」を使いますので、先に投稿→カテゴリ→で今週のランチを追加してください。<br>
        スラッグにも lunchと入力。<br>
        <img src="ft08/lnch01.png" alt="カテゴリを追加">
      </li>
      <li>外観 → ウィジェット →Category Postsを もう一つ追加。以下の設定内容で追加してください。<br>

      
      <img src="ft08/lnch0112.png" alt="カテゴリを追加">
      
      
    </p>
    <img src="ft08/lnch020.png" alt="Category Posts ウィジェット設定">
  </li>
  
  <li>今週のランチ カテゴリに記事を一つ投稿してみましょう。<br>
  <img src="ft08/lnch03.png" alt="投稿記事を追加"><br>
  <a href="ft08/curry-india-103.jpg" download="curry-india-103.jpg" style="display:block;width: 200px;overflow: hidden">
  ダウンロード素材<img src="ft08/curry-india-103.jpg" alt="ダウンロード素材" style="width: 200px;"></a>
  <br /><br />ウィジェットで(アイキャッチ)サムネイル画像が映るように設定<br />
</li>


<li>とりあえず描画してみましょう。<br>
<img src="ft08/lnch04.png" alt="サイトを表示"><br>
ウィジェットのタイトルが出ていないのと、記事のタイトルには囲みがあります。<br>
デザインは多少(どころかだいぶ)変更する必要がありそうです。
<br><br>
  タイトルには改行してアイコンを出したいので以下を「footer-insert.php」にコピペしてください。<br>
  <pre class="wordwrap"> 
  
&lt;script>
jQuery("#category-posts-2 h3").eq(0).html("&lt;i class='fa fa-cutlery'>&lt;/i> &lt;span>WEEKLY LUNCH&lt;/span>&lt;br>今週のランチ");
// この要素の最初のh3の中身を ()内に書いたタグで上書きするスクリプト
&lt;/script>


  </pre>
</li>
      <li> <p>多分消えてないと思うのでここは省略.</p><s>まずはウィジェットのタイトルが消えている件<br>
        下は以前ウィジェットのタイトルを消したい時にスタイルシートに書いたものです。
        <pre>    #sidebar h4 {
      display: none;
    }
        </pre>
       これでサイドバーのタイトルが全部消えてましたが、もっと詳細な指定が必要です。<br>
       サイトの赤枠のあたりで右クリック → 検証 してください。<br>
       <img src="ft08/lnch05.png" alt="デベロッパーツール">
       <br>
       サンプル画像では「id= "category-posts-2"」がh4タグを囲っていますのでこうします。
        <pre>    #sidebar #category-posts-2 h4 {
      display: none;
    }
        </pre> ※-2に該当する部分は必ず、<em>自サイトで対応する番号</em>にしてください。<br>
タイトルが出てきました。</s><br>

     <br>
   一方の「カレーマニア」の見出しは表示されていません。<br>
   "category-posts-2"を追加したことで、このクラスに囲まれいる部分への適用のみに制限できました。<br>
   このようにスタイルシートの要素名を工夫すると適用の範囲を自在に調整することができるようになります。   
       
       
<div class="topics-container">
  <h2>wordpressが出力するID番号</h2>
  <p>投稿する全ての記事にはID番号が連番で振られています。<br>
    これはウィジェットに登録されたメニューについても同様で、IDを指定すると個別にスタイルを書き分ける事が可能です。<br>
    番号は自動なので、検証して調べるのが一番です。
  </p>
</div>

      </li>
      <li>背景画像を適用します。<br>
        画像はここからダウンロードして下さい｡
        <br>
        <table>
          <tbody><tr>
            <td><a href="ft08/curry-india-004.png" download="curry-india-004.png"> curry-india-004.png
            <br>
            <img src="ft08/curry-india-004.png" height="120"></a></td>
            <td><a href="ft08/dog-limited-90r.png" download="dog-limited-90r.png"> dog-limited-90r.png
            <br>
            <img src="ft08/dog-limited-90r.png" s=""></a></td>
          </tr>
        </tbody></table><br>
        ダウンロードした画像はドキュメント/wp/wp-content/themes/simplicity2-child/images/ フォルダに保存してください。
        
      </li>
      
      <li>
      スタイルシートに追加してください。<br>
      「/wp/」のところはWPをインストールしたディレクトリに書き換えてください。<br>
      ドキュメントルートなら｢/wp/｣は消すだけでいいです｡<br>
      
 <pre class="wordwrap">#category-posts-3{
background-image:url(/wp/wp-content/themes/simplicity2-child/images/dog-limited-90r.png), 
url(/wp/wp-content/themes/simplicity2-child/images/curry-india-004.png);
  background-repeat: no-repeat;
  background-position: 174px 48px, top left;
  padding: 21px 13px 0 22px;
  min-height: 315px;
  margin-left: 9px;
}
      </pre>
  
      更新したら、描画してみましょう。こんな感じです。<br>
    <img src="ft08/lnch07.png" alt="wiget"><br>
    #category-posts-3の3も投稿の順序やによっては2か4になっている場合もありますので、<br>
      表示されない場合はブラウザで要素を検証してみてください。<br>
    <img src="ft08/lnch11.gif" alt="idを検証">
        <div class="topics-container topics_width">
          <h2>背景画像は何枚も指定できます。
          </h2><p>
            background-image:で指定したプロパティに、url()をカンマで区切ると複数の画像が背景として設定できます。<br>
            大きさの異なる画像でもbackground-position:で左上からの座標指定ができるので自在に配置が可能です。
          </p>
          <p>はじめの方は犬のアイコンですが、左から174、上から48の位置に置いてます。<br>
            国旗は一番左上からの描画なので、 top left と書いてます。座標で言うと 0 0 と同じです。
            
          </p>
        </div>
      </li>
  
      <li>まずはじめに画像が全部写っていないのをなんとかします｡<br />次に背景の色をなくして、タイトルの位置とフォントカラーを直します。
      <pre> 
    
     /*はみ出した部分を表示しない hiddenを上書きする*/
      #category-posts-3-internal .cat-post-crop {
          overflow: unset !important;
      }
             #category-posts-3 .cat-post-item{
    background-color:rgba(255,255,255,0);
    <span>/*背景色はこんな書き方もできます。最後の0は透明度
     0~1までで 0が完全透明*/</span>
  }
  #category-posts-3 h3:first-child {
    color: #fff;
    font-size: 1.25em;
    padding-left: 1em;
    margin-top: 0;;
  }
      </pre>  
        <p>フォークとナイフのアイコンはbefore-main.phpにthums-upと同じやり方で追加してください
</p>  
      描画してみましょう。<br>
      <img src="ft08/lnch08.png" alt="透明な背景">
      </li>
      
      <li>
      次は記事本文のフォントカラーと、見出しの2行目のサイズです。
      <pre>  #category-posts-3 li.cat-post-item ,
  #category-posts-3 h4.widgettitle span{
    color: #fff;
    font-size: .75em;
    margin-top: 22px
  }
  
  #category-posts-3-internal p {  <span>/*ランチタイムの位置を上げる*/</span>
    margin-top: 30px
    float: left;  <span>/*画像のいちに左右されなくなる*/</span>
    color: #fff; 
}
 
      </pre>
      <img src="ft08/lnch09.png" alt="見出しの2">  
      </li>
      
      <li>次はこまごまとした所です。
        <pre>  #category-posts-3 li.cat-post-item p{
    margin:0; <span>/*記事の余白が大きいので0に*/</span>
  }
 
 
 #category-posts-3-internal .cat-post-title {
    position: relative; <span>/*石焼きカレーの位置*/</span>
    top: 154px;
    padding-left: 16px;
    color: #fff;
    text-decoration: none;  <span>/*石焼きカレーリンクのボーダーは不要*/</span>
}

  #category-posts-3 li a.post-title{
    color: #fff;  
    text-decoration: none;  <span>/*リンク文字の下線はなし*/</span>
  }
  #category-posts-3 .cat-post-item img{
     margin-left: 7px !important;
    margin-top:-50px !important;   <span>/*画像サイズの位置を上げる*/</span>
    width: 219px; <span>/*画像サイズの最大値*/</span>
    margin: 0 auto;   <span>/*センタリングする*/</span>
    border: #ccc solid;
    height: auto;  <span>/*横幅に応じて伸縮させる*/</span>
    float: none;   <span>/*回りこみしない*/</span>
  }
        </pre>
      <i class="after"> </i>  こんな感じに出来ました。<br>
        <img src="ft08/lnch10.png" alt="コピペで完成">
      </li>
    </ol>
  </section>
     <a href="" onclick="scrollToTop(); return false">トップに戻る</a>
</section></div></div>