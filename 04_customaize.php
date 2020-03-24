<?php include 'header.php'; ?>
<div class="box generalbox book_content"><h3>5 3-3.TOPページに「新着情報」が表示されるようにする</h3><div class="no-overflow"><section id="whats">

  <p>この機能も便利なプラグインがありますので､簡単に実装できます｡</p>
  <section class="kiji">
    <ol>
      <li>What's New Generator で検索して下さい｡<br>
        インストールし有効化します｡<br>
        <img src="jt04/whats01.png" alt="What's New Generator">
      </li>
      <li>What's Newには特定のカテゴリを登録しますので､予め新規でカテゴリを作ります｡
        <br>投稿→カテゴリ を開いて、<em>名前とスラッグ</em>を任意に設定します｡<br>
        「未分類」のカテゴリを「NEWS」に変更して適用してください｡<br>
        このカテゴリで、投稿記事をテキトーに数件作成してください。
       
        <img src="jt04/whats05.png" alt="カテゴリを適用"><br>
        <img src="jt04/whats05-1.png" alt="カテゴリを適用"><br>
        投稿記事を2つくらい追加しておきます｡<br>
        <img src="jt04/whats03.png" alt="A">
        画像もなにか入れておいてください。
      </li>
       <li>続いて 設定→ What's New設定 
       <br>
        <img src="jt04/whats02.png" alt="What's New設定">
         
      </li>
      <li>任意のタイトルと､さきほど新規作成したスラッグを入力｡<br>
       他にも赤線のところを設定してください｡<br>
        
        <img src="jt04/whats030.png" alt="ショートコード"><br>
        ショートコードがありますので､固定ページの編集でトップページのスライドショーの下に貼り付けてください｡<br>
        <img src="jt04/whats031.png" width="500" alt="固定ページの編集">
        <img src="jt04/whats032.png"  width="500" alt="固定ページの編集">
        <img src="jt04/whats033.png" width="500"  alt="固定ページの編集">
        
        <div class="topics-container">
          <h2>TOPICS スラッグとは</h2>
          <p>記事固有のIDを文字にしたもので、
            投稿記事以外にも固定ページ、カテゴリにも設定することが出来ます。<br>
            IDとしての役割以外にも、URLとして利用することも出来ます。
            詳しくは、「3-8-2.パーマリンクの変更で自然なURLに」   で行います。
          </p>
        </div>
      </li>
      <li>サイトを表示してみました｡<br>期待通りに表示はされましたが
        ､デザイン面で少々気になるところがあります｡<br>
        NEWSとMENU見出し文字がちぐはぐで統一感がありませんので､修正していきましょう｡
       <img src="jt04/whats04.png" alt="期待通りに表示">
        
      </li>
  
      <li> <h4 id="9">3-3-1.見出しデザインのスタイルをカスタマイズ   </h4>
        <p>今回のデザインはこのような配色で統一してみたいと思います｡ <br>
        <img src="mt01/midashi_h2.png" alt="デザイン統一"></p>
      </li>
      <li>まずはじめに､日付のフォントカラーとサイズです｡<br>
        <img src="jt04/whats06.png" alt="カラーとサイズ"><br>
        検証した結果、divタグの"whatsnew"クラスに書きだされていることがわかりました。<br>
        このスタイルを、外観→ テーマの編集 からスタイルシートの最後に貼り付けて、サイトを表示してください。<br>
        <br>
        
   <p>プラグインのスタイルに負けているので,色は変わりません <br />
     <img src="jt04/wordpress-homepage-691.png" alt="カラーとサイズ">
   </p>     <pre>
  #the-content div.whatsnew dt { 
    color: #9ba82b ;        
    font-size: .9em;
}
   </pre> セレクタの強度を強くします<br />
   <i class="after"> </i> 僅かな変化ですが、文字色が#9ba82b に変わって、サイズも少し小さくなりました。
      <br>  <img src="jt04/whats07.png" alt="">
        <p>見出しよりも左に出ているので､以下をフォントサイズ(font-size: .9em;)の下に追加します｡</p>
        <pre> margin-left: 1.3em;</pre>
      
       <p>上下のラインがいらないので非表示にします</p>
        <pre> 
          .whatsnew hr {     border-style: none;    }
        </pre>
        
        
        <div class="topics-container">
          <h2>TOPICS 単位と色</h2>
          <p>※色コード #320は #332200と同じ意味です。RGBがそれぞれ同じ値の場合は上記のように3桁で省略して書くことができます。<br>
        <br>また、数字の.9は0.9の意味で、単位の<em>「em」</em>は本来の大きさからの9割のサイズになるという、相対的な大きさを指示できる単位です。</p><p> margin-left: 1.3em は左の余白を指定します｡見出し文字よりもすこし左に寄せました｡
        </p>
          </div>
   </li>
      <li>  
       <div class="icon_html"> </div><div class="soshok">装飾 →</div>
      <div class="icon_css"> </div>         
      
        <div class="topics-container topics_width">
          <h2>TOPICS クラスとは</h2>
          <p>タグ内で、class= で書かれているのがクラスと呼ばれるものです。<br>タグの中では""ダブルクォートで囲みます。</p>
          <p>一方、スタイルシートにはドットを先頭につけてクラスであることを示します。<br>
            タグで書くのは<em>「HTML」</em>、スタイルを書くのは<em>「スタイルシート」</em>でこの両者は別物です。
          </p>
          <p>クラスはHTMLの特定のタグを装飾するためのものです。<br>
            つまり「ここをこういうデザインにしたい」という時にその場所(タグ)につけて、スタイルシートには色や幅を書くということです。
          </p>
        </div>
      

      
      <div class="topics-container topics_width">
        <h2>TOPICS クラスのネーミング</h2>
        <p>記号で使えるのは-と_のみですが、
      数字とアルファベットは何でも使えます。</p>
      <p>スペースで区切ると親タグを指定できます。<br>
        カンマで区切ると、共通のスタイルを指定できます。<br>
        タグとくっつけると特定タグだけに有効なクラスにすることができます。
      </p>
      <p>
       上記の div.wn-item .wn-date は divタグにだけ有効なクラスwn-item 
       を親に持つ(の中にある)wn-dateクラスというの意味です。<br>
       親タグを指定することで、適用させる強度(強制力)が強まります
      </p> 
      </div>
        
        
      </li>
      
      <li>緑色の破線で下線をつけます <br>
        <img src="jt04/whats08.png" alt="見出しのスタイル完成"><br>
         
        <i class="after"> </i> 見出しらしくなりました｡ <br>
        続いて下の MENUもデザインを統一します｡
      </li>
      
      <li>破線のボーダーとフォントサイズは共通なので､こうして下さい｡<br>
       太字の
     .article h2, だけを先ほどの要素の前に付け足し､カンマで区切ります｡
        <pre>  <em>.article h2,</em>div.whatsnew .wn-head .wn-title{
        border-bottom: #9a2 dashed 1px;
        font-size: 1.3em;
  }
            
        </pre>
        下線は付きました｡<br>
        <img src="jt04/whats09.png" alt="見出しのスタイル">
        <br>
      </li>
      
      <li>色と左のボーダーがいらないので消してみます｡<br>また､文字と下線が離れすぎ､インデントが深いので同時に直します
        <pre>    .article h2{
        color: #9a2;
        border-left: none; <span>/*左のボーダーがなし*/</span>
        margin: 22px 0 0;  <span>/*外余白指定 上22 左右0 下0*/</span>
        padding: 0;       <span>/*内余白指定 4方とも0*/</span>
    }
        </pre>
        メニューの見出しが真ん中なのは,TOPページの投稿から編集を開いて leftを適用してください <br />
         <i class="after"> </i> 見出しスタイルが統一しました｡(背景がグレーのままかもしれないので自力で) <br>
        <img src="jt04/whats10.png" alt="スタイルが統一"><br>
        
        
        <div class="topics-container">
          <h2>TOPICS 外の余白</h2>
          <p><em>margin</em>で指定します｡</p>
          <p>
           4方とも別々指定→  &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;   margin: 上 右 下 左 <br>
           上下別､左右が同じ指定→ &nbsp; margin: 上 左右 下  <br>
           上下とは左右は共通→  &nbsp;&nbsp;  margin: 上下 左右   <br>
           4方とも同じ指定→ &nbsp;&nbsp;&nbsp; &nbsp;   margin: 上下左右   <br>
        </p>
        スペースで区切って何個書くかによって､解釈が変わります｡
        
      </div>
          
     
     
     <div class="topics-container">
          <h2>TOPICS 内の余白</h2>
          <p><em>padding</em>で指定します｡</p>
          <p>
           4方とも別々指定→ &nbsp;&nbsp;&nbsp;   padding: 上 右 下 左 <br>
           margin と一緒です｡
        </p>

      <pre style="float:left;width:35%;">  margin: 0 1px 2px 3px ;
  padding: 4px 5px 6px 7px;
  border-bottom: 1px dashed;
      </pre>左記のように書いた例｡真ん中の領域に文字が入ります｡<br>
        <img src="jt04/whats11.png" alt="paddingとmargin" style="width:330px">
     </div>
      
             
      </li>
      <li>最後にリンク文字の色がサイトに合わないので直します｡
        <img src="jt04/whats033.png" width="500"  alt="固定ページの編集">
        <pre>         
div.whatsnew a:visited ,
 div.whatsnew a {  
        <span>  /*a:visitedにも共通のスタイル*/</span>
  color: #888855;
  text-decoration: none; <span>/*下線などがない*/</span>
  font-size: .9em;
}

div.whatsnew a:hover {
  color: #560;
  text-decoration: underline; <span>/*下線あり*/</span>
}
        </pre>
        
    <div class="topics-container">
          <h2>TOPICS リンクの擬似要素</h2>
          <p>
            リンクのタグはa ですが､シーンに応じてスタイルを書き分けられます｡<br>
            通常の状態→ マウスか乗った状態→ 一度訪れたあとの状態<br>
            a → a:hover → a:visited
          </p>
          
         <h2>要素間のカンマ区切り</h2> 
         <p>スペース区切りは親タグを意味しますが
           カンマ区切りは別々の要素に共通のスタイルを適用するときに使います｡</p>
           例えばh1とh2がともに緑なら<br>
           h1,h2{color:#0F0;} と書きます｡ カンマは助詞の〜"と"の役目です｡
    </div>
        
        <i class="after"> </i> リンクスタイルが統一しました｡ <br>
        <img src="jt04/whats12.png" alt="リンクスタイルが統一"><br>
                    
        
      </li>
    </ol>
  </section>
  <p>   <a href="" onclick="scrollToTop(); return false">トップに戻る</a></p>
</section></div></div>