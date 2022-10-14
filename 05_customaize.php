<?php include 'header.php'; ?>

<div class="box generalbox book_content"><h3>6 3-4.特定のカテゴリーの最新記事リストを表示する</h3><div class="no-overflow"><p><br></p>
<section id="CategoryPostsWidget">

  <p>
    「新着情報」が表示されるようにはなりましたが､気になるところが出てきました｡
    <br>
    現在の状況です｡
    <br>
    <img src="it05/ctwg01.png" width="600" alt="ここまでの見本">
    <br>
    Simplicityのウィジェットで新着の記事がすべて右側に出ているので､新着情報は2箇所に表示されることになります｡
    <br>
    これだとややくどいので､ウィジェットからは消したいと思います｡
    <br>
  </p>
  <p>
    一見簡単にできそうだったのですが､プログラムのソースコードを書き換えるところまでやらないとできなかったので､ここでは簡単な方法としてプラグインの導入で実現してみたいと思います｡
  </p>

  <h3>特定のカテゴリーの最新記事リストを表示するプラグイン「Category Posts Widget」</h3>
  <p>
    まずははじめに管理画面からプラグイン→新規追加から検索をしてみましょう｡
  </p>
  </section>

  <section class="kiji">
    <ol>
      <li>
        右のほうです｡
        <br>
        <img src="it05/ctwg02.png" alt="Category Posts Widget">
      </li>
      <li>
        インストールし有効化すると､ウィジェットが一つ追加されています｡
        <br>
        <img src="it05/ctwg03.png" alt="Category Posts Widget">
        <br>
        早速サイドバーウィジェットにドロップして登録してみましょう｡<br />
        新着情報は削除します      </li>
      <li>
        設定は赤丸のところだけでいいと思います｡
        <br>
        サムネイルの設定は画像サイズを変えてみます｡
        <br>
        <img src="it05/ctwg04.png" alt="Category Posts Widget">

      </li>
      <li>
        表示してみると､こんな感じになりました
        <br>
        <img src="it05/ctwg05.png" alt="Category Posts Widget">
        <br>
        画像の高さが設定値の75pxになっています｡アスペクト比が変わらない配慮があるようで､横には伸びてきませんでした｡
        <br>
        もともとの画像サイズがマチマチだったので統一感がありません｡
        <br>
        表示幅は284pxまで可能なようですので､そのサイズに直してからアイキャッチの画像を変更してみましょう｡

        <br>
        <img src="it05/ctwg06.png" alt="Category Posts Widget">
        <br>
      </li>
      <li>
        画像はここからダウンロードして下さい｡
        <br>
        <table>
          <tbody><tr>
            <td><a href="it05/yun_12716.jpg" download="yun_12716.jpg"> yun_12716.jpg
            <br>
            <img src="it05/yun_12716.jpg"></a></td>
            <td><a href="it05/nun_12716.jpg" download="nun_12716.jpg"> nun_12716.jpg
            <br>
            <img src="it05/nun_12716.jpg" s=""></a></td>
            <td><a href="it05/hun9f9_s.jpg" download="hun9f9_s.jpg"> hun9f9_s.jpg
            <br>
            <img src="it05/hun9f9_s.jpg"></a></td>
          </tr>
        </tbody></table>

        アイキャッチの画像を変更するには投稿から記事の編集を行います｡
        <br>
        <img src="it05/ctwg07.png" alt="Category Posts Widget">
        <br>

      </li>
      <li>
        メディアを追加してください｡
        <br>
        <img src="it05/ctwg08.png" alt="Category Posts Widget">
        <br>

      </li>
      <li>
        ダウンロードした画像をすべてアップし､アイキャッチを設定します｡
        <br>
        <img src="it05/ctwg09.png" alt="Category Posts Widget">
        <br>

      </li>
      <li>
        大体想像通りになりましたが､もう少しデザインの調整が必要です｡
        <br>
        <img src="it05/ctwg10.png" alt="Category Posts Widget">
        <br>

      </li>
      <li>
        スタイルを変更してこんな感じにしてみたいと思います｡
        <br>
        <img src="it05/ctwg11.png" alt="Category Posts Widget">
        <br>
      </li>
      <li>
        まずはアイコンから
        <br>外観→ テーマエディタ で「footer-insert.php」を開いてください。
        <br>
        <img src="it05/ctwg121.png" alt="Category Posts Widget">
        <br>ソースコードに以下を貼り付けます。
        <pre class="wordwrap">  <!-- ウィジェットタイトルにアイコンを表示 -->
&lt;script&gt;
   jQuery(function(){
    jQuery(".cat-post-item a.cat-post-title").prepend('&lt;i class="fa fa-thumbs-o-up"&gt;&lt;/i&gt;');
  });
&lt;/script&gt;

      </pre>
<br> ※コードはJavascriptです.jQueryというライブラリをもともとWordoressが読み込んでいるので,その書き方に従ったコードを書くと描画後に要素に対していろいろな作用を与える事ができます<br>
prependメソッドは指定した要素の前に()内の文字を挿入することができます
<p>      
<br>        <i class="after"> </i> 矢印アイコンが付きました｡
        <br>
        <img src="it05/ctwg12.png" alt="Category Posts Widget">

        <div class="topics-container  topics_width">
          <h2>TOPICS アイコンフォント「Font Awesome」</h2>
          <p>
            親テーマのSimplicityにはもともと<a href="https://fortawesome.github.io/Font-Awesome/icons/">「Font Awesome」</a>が読み込まれていて、呼び出すだけで簡単にアイコンが利用できるようになっています。<br>
            クラス"fa-thumbs-o-up"をタグにつけると該当するアイコンが描画されます。タグの種類は問いません、iでもpでも可能です。
          </p>
          <p>
           ここで 問題なのは、ウィジェットの見出しがwordpressから書きだされているので、タグを埋め込むにも書くところがないということです。<br>
            こんな場合はは少し小技が必要です。<br>
            貼り付けたコードのjquery(ジェイクエリー)とは、htmlが読み込まれた後にタグを付け足すことができるソース群です。
          </p>
          <p>
            functionでクラス要素(".cat-post-item a.post-title"があるタグ)を取得して、
            prependという命令で取得した要素のまえに&lt;i&gt;タグ一式を付け足すものです。
          </p>
          <p>jqueryはjavascriptで利用するライブラリ(部品)です。<br>
            javascriptはページに動的な変化を与えるもので、ほとんどのWEBページに使われています。<br>
            ここまで編集してきた、タグ(html)、スタイルシート(css)、とともにWEBサイトを構成している技術の一つです。
          </p>
        </div>

      </li>
      <li>
        背景色です  <br>
        外観→ テーマの編集 で スタイルシート (style.css)を開いてください。<br>このコードをコピペすると下の画像ような背景色になります。<br>
       <pre>
/* -posts-3かどうかは検証してみないとわからない*/
  #category-posts-3 .cat-post-item {
    margin: 0;
    padding: 0;
    background-color: #92A21E;
}     
      </pre><img src="it05/ctwg13.png" alt="Category Posts Widget">
      </li>

      <li>
        続いてフォント。そのコードも貼り付けてください。
        <pre>.cat-post-item a.cat-post-title{
    color: #FFF;
    text-decoration: none;
    font-size: 0.9em;
    font-weight: bold;
    margin: 3px 3px 0px;
    display: block;   <span>/*ブロック要素に変更*/</span>
    border: 1px dashed #B2BD87;
    padding-left: 7px; /<span>*左の内側余白*/</span>
}       
      </pre>        
      

        <div class="topics-container topics_width">
          <h2>TOPICS ブロック要素</h2>
          <p>
            文字を囲むタグは2つに大別されます。
            <br>
          <em> 段落</em>や<em>見出</em>しのように一行で扱われるものと、文字数だけのスパンしか持たない領域です。
           
          </p>
          <p>
            前者のほうを<em>ブロック要素</em>、後者は<em>インライン要素</em>といいます。
            <br>
            大きな違いは、囲むタグで自動的に改行されるかどうかですが、
            それ以前にタグ自体の文書構造としての意味と、スタイルを編集するうえで有効なものと無効なものがあるので、
            これらの違いを把握することはWEBページを作る上でとても重要な知識です。
          </p>
          <p>
            &lt;p&gt;タグはブロック要素なので改行されます。&lt;/p&gt;
          </p>
          <p>
            &lt;a&gt;タグはインライン要素なので&lt;/a&gt;で改行されません。
          </p>
          <p>
            インライン要素には囲んだ文字数分の領域しかないので、幅高さという概念がありません。   <br>
            なので、スタイルでwidthやheightは指定しても無効です。<br>
             display: blockは、aタグをブロック要素に変更し、幅、高さ、改行などの領域を与えるものです。 
          </p>
        </div>
        <p>
          pタグはブロック要素なので改行されます。
        </p>
        aタグは <a href="http://www.htmq.com/htmlkihon/005.shtml" target="blunk">インライン要素</a>なので改行されません。
        ちなみにaタグをインラインに戻すとこうなります。
        <br>
        <img src="it05/ctwg13.png" alt="インライン要素">
        <br>
        <em>デベロッパーツールではスタイルを無効にしたり付け足したり自在に試すことができます。<br>
          cssでレイアウトする上でこのツールを使いこなせるかどうかもとても重要です。</em>
      </li>
      <li>
        画像の下の緑の領域を無くしたい
        <br>
        <ol>
        	<li>色がついている li に対して 高さを指定する height: 130px  とか
        	  <img src="it05/ctwg131.png" alt="インライン要素">
          </li>
        </ol>
        

        
        <br>
        <img src="it05/ctwg14.png" alt="margin">
      </li>
      <li>
        小見出しの「カレーマニアがゆく」は不要なので消したいと思います。
        <br>
        <img src="it05/ctwg142.png" alt="margin">
   <br />      リストの囲みタグ、ulとolにも不要な余白が付いているので気になるなら消してみましょう
         
       
      </li>

    </ol>
    <p>   <a href="" onclick="scrollToTop(); return false">トップに戻る</a></p>

</section></div></div>