<?php include 'header.php'; ?>

<div class="box generalbox book_content" id="yui_3_17_2_1_1474893097400_222"><h3>8 3-6.facebookの カレー屋さんの情報をサイドバーに表示する（facebook page pluginの設置)</h3><div class="no-overflow" id="yui_3_17_2_1_1474893097400_221"><p id="yui_3_17_2_1_1474893097400_220"><br></p>
<section id="fcebook">

  <p> facebookのページ が一応あります、<br>

  <a href="https://www.facebook.com/%E3%83%9E%E3%83%B3%E3%82%B0%E3%83%AD%E3%83%BC%E3%83%96%E7%95%91%E3%81%AE%E3%81%A1%E3%81%84%E3%81%95%E3%81%AA%E3%82%AB%E3%83%AC%E3%83%BC%E5%B1%8B%E3%81%95%E3%82%93-126565234352010/?ref=page_internal">
  <img src="gt07/face_search00.png" alt="">
</a>
    <br><br><br>こんな感じにしてみます。</p>
  <img src="mt01/widget-left2.png" alt="カスタム ウィジェット facebook">
  <section class="kiji">
    <ol>
      <li>
        facebookページの表示には、FacebookのWEBサイトに有る「Page Plugin」で簡単に行うことができます。<br>
        まずは。リンクを開いてください。→ <em><a href="https://developers.facebook.com/docs/plugins/page-plugin" target="blank">Page Plugin</a></em>
      </li>
      <li>4箇所の入力BOXとチェックBOXで設定するだけです。
        <br><em>コードが反映しないときはログインしてから取得してください</em><br>
  <img src="mt01/widget-left20.png" alt="カスタム ウィジェット facebook">
        <div id="page-plugin"><ol>
          <li>入力BOXを変化させるとほぼリアルタイムでデモ画面が更新されます。</li>
          <li>facebookページのURL</li>
          <li>Tabsには初期値でtimelineが入ってますが、message と入れるとメッセージ送信フォームが、eventsにするとイベントの告知になります</li>
          <li>幅高さは最小値最大値が決められているので、その間で指定</li>
          <li>Use Small Header ヘッダーが縮小</li>
          <li>Hide Cover Photo ヘッダの背景画像をなくす</li>
          <li>Adapt to plugin container width 描画時の横幅を自動調整</li>
          <li>Show Friend's 知り合いの写真が出ます</li>
          <li>Get Code ボタンを押してソースコードをコピーしてください。</li>
          <li>下段の2の方です。</li>
        </ol>
        </div>
        <img src="gt07/face02.png" alt="page-plugin">
      </li>
      <li>「テキスト」とだけ書かれたウィジェットをサイドバーウィジェットにドロップしてください。<br>
        サイドバーは2番めがいいでしょう。<br>
        
      </li>
      <li>テキストBOXに貼り付け保存してください。<br>
        <img src="gt07/face03.png" alt="page-plugin">
        
      </li>
      <li>こんな感じになります
       <br>
        <img src="gt07/face05.png" alt="page-plugin">
        
      </li>
      <li>横位置がずれているのでスタイルを一つ追加してください。
        <pre>     /*Facebook*/
  .widget_text {
      margin-left: 16px;
  }
        </pre>
        <i class="after"> </i> 横位置が整いました<br>
        <img src="gt07/face06.png" alt="page-plugin">
  
      </li>
      
    <li>
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