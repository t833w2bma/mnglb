<?php include 'header.php'; ?>

<div class="box generalbox book_content" id="yui_3_17_2_1_1474893097400_222"><h3>8 3-6.プラグインでInstagramの投稿を表示する</h3><div class="no-overflow" id="yui_3_17_2_1_1474893097400_221"><p id="yui_3_17_2_1_1474893097400_220"><br></p>
<section id="fcebook">

  <p> Smash Balloon Social Photo Feed <br>

      
    <br><br><br>だいたいこんな感じにしてみます。<br>
    ※Instagramにログインする必要があります
    <a href="https://junpei-sugiyama.com/smash-balloon-instagram-feed/">ここからの抜粋</a>
  </p>
  <img src="mt01/smash-balloon-instagram-feed21-768x1111.jpg" alt="カスタム ウィジェット facebook">
  <section class="kiji">
    <ol>
        <li><img src="gt07/smash-balloon-instagram-feed02-1.jpg" alt="page-plugin">
        <li><img src="gt07/smash-balloon-instagram-feed03-1.jpg" alt="page-plugin">
        <li><img src="gt07/smash-balloon-instagram-feed04-1.jpg" alt="page-plugin">
        <li><img src="gt07/smash-balloon-instagram-feed05-1.jpg" alt="page-plugin">
        <li><img src="gt07/smash-balloon-instagram-feed07-1.jpg" alt="page-plugin">
        <li><img src="gt07/smash-balloon-instagram-feed09-1.jpg" alt="page-plugin">
        <li><img src="gt07/smash-balloon-instagram-feed08-1-768x1427.jpg" alt="page-plugin">
        <li><img src="gt07/smash-balloon-instagram-feed11-1.jpg" alt="page-plugin">
        <li><img src="gt07/smash-balloon-instagram-feed14-1.jpg" alt="page-plugin">
        <li><img src="gt07/smash-balloon-instagram-feed15-1.jpg" alt="page-plugin">
        <li><img src="gt07/smash-balloon-instagram-feed16-1.jpg" alt="page-plugin">
        <li><img src="gt07/smash-balloon-instagram-feed18-1.jpg" alt="page-plugin">
        <li><img src="gt07/smash-balloon-instagram-feed19-1-768x463.jpg" alt="page-plugin">
        <li><img src="gt07/smash-balloon-instagram-feed20.jpg" alt="page-plugin">
      






      <h3 id="13">3-6-1.フッターエリアの充実</h3>
      <p>現在ウィジェットでフッターエリア左に住所が入っています。<br>
        これに追加して真ん中に地図、右にメニューを登録したいと思います。<br>
       また背景色もメインコンテンツとの区別がほしいので変えてみます。
      </p>   
      <p>はじめに背景色ですが、テーマに機能があるのでそちらで変えてみましょう。<br>
        外観 → カスタマイズ → 色 → フッター色<br>
        <img src="gt07/footer01.png" alt="フッターエリア背景色"><br>
        保存して確認してください。
      </p> 
      
      <p>次に地図ですが、GoogleMapが簡単なのでそちらでやってみます。
        <br>適当な住所を用意してください。(公開していいものに限ります)<br>
        本サンプルではグーグル本社にしてみます</p>
       <ol>
         <li>google検索から住所を入力→地図検索してください<br>
           <img src="gt07/footer02.png" alt="地図検索">
         </li>
         <li>
           左上のハンバーガーメニュー → 地図を埋め込むをクリック<br>
           <img src="gt07/footer04.png" alt="ハンバーガーメニュー">
         </li>
         <li>地図を埋め込むをクリック<br>カスタムサイズに切り替えてサイズを変更→コードをコピーします。
           <img src="gt07/footer03.png" alt="地図を埋め込む">
         </li>
         <li>
           外観 → ウィジェット →[s]パソコン用テキストウィジェット を追加します。
<br><img src="gt07/footer05.png" alt="テキストウィジェット">
         </li>
       </ol>  
         
   </li><li>次にメニューも →[s]パソコン用テキストウィジェット に追加してください。<br>
   	
     タイトルは「MENU」と内容は、以下のコードをコピペしてください。
<br><img src="gt07/footer051.png" alt="テキストウィジェット">
           <pre>&lt;li class="fa fa-cutlery"&gt;車海老カレー&lt;/li&gt; &lt;/li&gt; &lt;br&gt;
&lt;li class="fa fa-cutlery"&gt;イベリコ豚カツカレー &lt;/li&gt; &lt;br&gt;
&lt;li class="fa fa-cutlery"&gt;奥州鳥のささみカツカレー&lt;/li&gt; &lt;br&gt;
&lt;li class="fa fa-cutlery"&gt;野菜たっぷりカレー&lt;/li&gt;
           </pre>
           ここまでの描画です。<br>
           ブラウザ幅1111px以上の場合<br>
           <img src="gt07/footer06.png" alt="ブレイクポイント"><br>
           ブラウザ幅1111px未満の場合<br>
           <img src="gt07/footer07.png" alt="モバイル幅"><br>
           [s]パソコン用テキストウィジェットはモバイルでは非表示になるツールです。
         </li>
         <li>
           デザイン的に気になる所を直していきます。<br>
           MENUのアイコンが文字とくっつきすぎ、色が白なので見えづらい。<br>
           また、。テーマの名前の上には破線をつけてみたいと思います。<br><br>
           外観 → テーマの編集 → スタイルシート を開いてください。<br>
           色と大きさをかえてみます。<br>
           保存したら描画を確認しましょう。
           
      <pre><span>/*Footer widget*/</span>
#footer-widget .fa-cutlery:before {
    color: #523300;
    margin-right: 6px;
}
#footer #footer-widget h4 {
    color: #523300;
}
#footer #footer-widget {
    color: #523300;
    font-size:14px;
}
#copyright {
    border-top: 1px dashed #AB9874;
}


      </pre>    <i class="after"> </i> 色と位置が整いました<br> 
    <img src="gt07/footer08.png" alt="完成形">       
         </li>
       </ol>
        
    <br>
    

    <li>
    <h3 id="14">3-6-2.サイトの簡単な説明（キャッチフレーズ)の復活</h3>
      topのロゴの隣あたりに営業時間を表示してみましょう。<br>
      <br>設定 → 一般 →キャッチフレーズ<br>この文字をコピペしてください。<br>
      営業時間 : 【Weekday】 11:00 ー 21:00 (FOOD / DRINK L.O 20:00 )<br>
      <img src="gt07/catche01.png" alt="キャッチフレーズ"><br>
      保存後は、表示位置の調整が必要なので スタイルシートに追加してください。
      <pre>        
<span>/*header*/</span>
#site-title { 
    margin-bottom: 5px;
    float: left; <span>/*サイトのタイトルを左回り込み*/</span>
 }   
 #header .alignleft, #header .alignright {
    margin-bottom: 0px; <span>/*下余白をなくす*/</span>
 }   
 #site-description { <span>/*キャッチフレーズを右に回り込み*/</span>
    position: absolute;
    bottom: -9px;
    right: 0;
 }     
 #header .alignleft {
    margin-left: 0px; <span>/*ヘッダの左余白をなくす*/</span>
 } 
  
      </pre>
      PCサイズ(1111px以上) <br>
   <img src="gt07/header01.png" alt="">   <br>
    モバイルサイズ <br>
   <img src="gt07/header02.png" alt="">   
      
    </li> 
    
  </section>
     <a href="" onclick="scrollToTop(); return false">トップに戻る</a>
</section></div></div>