<?php include 'header.php'; ?>
<div class="box generalbox book_content" id="yui_3_17_2_1_1474892889762_221"><h3 id="yui_3_17_2_1_1474892889762_220">7 3-5.投稿記事では「投稿日」が表示されるようにする</h3><div class="no-overflow"><section id="CategoryPostsWidget">
  
  <p>
<br>
  </p>
   <p>
<br>
  </p>
  <h5>Wordpressテーマのテンプレートを編集</h5>
  
  <section class="kiji">
    <ol>
       
      <li>投稿記事では「投稿日」が表示されるようにするということは､投稿記事でなければ｢投稿日｣が表示されないということです｡<br>
        つまり､投稿記事かどうかを何かで判定して､その結果を取得し条件分岐するということになります｡<br><br>
        htmlとスタイルシートでは条件分岐ができないことを念頭に置いて下さい｡<br><br>
        
        では､まずはじめにスライドショーの上の余白が気になりますので <br>
        要素を検証し、余白の原因を探してみましょう。

        <p>
          固定ページの投稿時にコメントアウトしたタイトルが見出し文字として書きだされていました。
          <br>
          <img src="ht06/ctwg16.png" alt="h1のマージン">
        </p>
        <p>
          さらにメインコンテンツが収まるdivのid、mainにも内側の余白としてパディングが設定してあります。
          <br>
          <img src="ht06/ctwg21.png" alt="#mainのパディング">
        </p>
        <p>
          もう2つ、スライドショーのプラグインからコメントだけの空のpタグが書きだされていることがわかりました。
          <br>
          スライダー画像の囲みにもパディングがあります。
          <br>
          <img src="ht06/ctwg22.png" alt="スライドショー上のp">
        </p>

        <p>
          <br>
          これら全てから余白をなくすとウィジェットと高さが揃うはずです。
          <br>
          <br>
          見出しタグはスタイルシートで非表示にするのは簡単ですが、このあとに作る他の固定ページからも見出し文字が消えてしまいます。
          <br>
          理想はトップページなら消えて、他の固定ページなら表示というように処理を分岐したいのですが、HTMLやスタイルシートにはこの機能がありません。
          <br>
          <br>
                <h3> 親テーマで作業しているのでここは不要</h3>
                 <div style="opacity: .3">
                     
                                        そこで、固定ページを表示しているテンプレートを編集してみます。
                          <br>
                          <em>Simplicity</em>のテーマフォルダからファイルを一つ<em>Simplicity_child</em>にコピーすることにします。
                          <br>
                         Aptanaでリモート設定します
                          <img src="ht06/ctwg170.png" alt="FFFTP">
                          <br>
                        </p>
                 </div>    
      </li>
      <li style="opacity: .3">
        FTPでサーバーに接続したら、WordPressが入っているフォルダのwp-content →themes →simplicity と開き、page.phpをコピーしてください。
        <br>
        その後、simplicity_child内へペーストします。
        <br>
        <img src="ht06/ctwg18.png" alt="FFFTP">
        <br>
      </li>
      <li style="opacity: .3">
        つぎに (page.php)をひらいて
     に以下の2行を追加してください。
        <br>
        場所は<em>画像</em>の通り、&lt;h1 タグの開始から&lt;/p&gt;のとじタグまでを<em>囲むように</em>します。
        <pre>        &lt;?php if (!is_front_page() &amp;&amp; !is_page()) { ?&gt;
       
       
        &lt;?php } ?&gt;
      </pre>
        ※全角のスペースなどを打たないように注意してください。
        <br>
        
        貼り付けがすんだら上書きしてください。<br />
        <img src="ht06/ctwg19.png" alt="page.php">
        <br>

      </li>

      <li>
   
 
        <div class="topics-container topics_width">
          <h2>TOPICS 固定ページテンプレート</h2>
          <p>
            <em>テンプレートとは</em>テーマの中にあるファイルのことです。<br>
            このファイルは「php」というプログラミング言語で書かれており、ユーザー(閲覧者)から呼び出されるとサーバー側で実行され、 
            その結果はサーバーからブラウザに送られるという仕組みです。<br>
            </p><p>htmlやスタイルシートは呼びだされると文字列をそのままユーザーに送るのに対して、
              phpは実行結果だけを返しますのでプログラムの中身はユーザーには見えません。<br>
              <br>
              一行目の ifは条件分岐、カッコ内は<em>フロントページ以外ならかつ固定ページ以外なら</em>という条件です。<br>
              条件合致なら、タイトルと更新日が表示されますが、そうでなければ表示されません。
              </p>
            wordpressのシステムはphpで構築されており、<em>独自テーマ</em>やプラグインを作る際にはphpの知識が必要です。
          <p></p>
        </div>       
        
        
      </li>
      <li>
        半分くらい余白は小さくなりましたが、まだだいぶ広いです。残りはスタイルシートを編集します。
        <br>
        <img src="ht06/ctwg25.png" alt="page.php"><br>
        ulタグにも上マージンが16pxもあるそうです｡
      </li>
      <li>
        simplicity_child内のスタイルシート(style.css)を開いてください。以下のスタイルを追加します。        
   <pre>  .widget ul{
    margin-top: 0;
    }
    
  <span>/* div id="the-content" 内の直接の子要素 の最初のpタグ */</span>
  div#the-content &gt; p:first-child {
    display: none
  }
  
  div#main {
    padding: 0 29px 20px; <span>/* 上は0 */</span>
    position: static;
  }
  .metaslider .theme-light.slider-wrapper {
      padding: 0px;
  }

      </pre>
      </li>
      <li>
        <i class="after"> </i>なんとか揃ったと思います。
        <br>
        <img src="ht06/ctwg24.png" alt="page.php">
        <br>
      </li>

    </ol>
  </section>
<p>   <a href="" onclick="scrollToTop(); return false">トップに戻る</a></p>
</section></div></div>