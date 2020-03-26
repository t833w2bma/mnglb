<?php include 'header.php'; ?>
<!-- test for pull request  -->

<div class="box generalbox book_content"><h3>10 3-8.全幅スライドショウーとモバイル時の非表示</h3><div class="no-overflow"><p><br></p>
<section id="matome">

  <p>こんな感じにしてみます。<br> 
    <img src="et09/slide01.png" alt="全幅">
  </p>
 
  <section class="kiji">
    <ol>
      <li>はじめに全幅に対応させるため、サイズを大きくします。<br>
    管理画面→Meta Slider から 幅→2680 、高さ→910<br>
    <img src="et09/slide02.png" alt="">
    </li>
      <li>
        つぎは固定ページの編集です  <br>
        スライダーのショートコードをタグで囲ってください。<br>
        <pre>        &lt;div id="parentslider"&gt;[metaslider id=91]&lt;/div&gt;
        </pre>
        固定位置の枠を作ってその中に画像を配置することでブラウザサイズの変化に対応させます。<br>
           <img src="et09/slide03.png" alt=""><br>「更新」ボタンをおしてください。
    
      </li>
      <li>
        次にスタイルです<br>
        外観 →テーマの編集 → スタイルシート
    <pre><span>/*スライダーを固定位置*/</span>
  div#parentslider{
      position: absolute; <span>/*位置を絶対位置指定*/</span>
      z-index: 0;  <span>/*背面に来るように最小値指定*/</span>
      overflow: hidden; <span>/*ボックスからはみ出した部分を表示しない*/</span>
      height: 310px;
      width:100%; 
      top: 213px;  <span>/*座標指定*/</span>
      left:0;
  }

#main{ <span>/*NEWSが下に潜り込まないように追加*/</span>
  margin-top: 325px;
  }
  
.widget {
    position: relative; <span>/*ウィジェットが下に潜り込まないように*/</span>
    z-index: 2;   <span>/*relativeで固定位置指定、z-indexは数字が大きいほど前面*/</span>
}
       </pre>
       <i class="after"> </i><em>pc幅は完成</em><br>
       <img src="et09/slide01.png" alt="pc幅" title="pc幅"><br>
       
 もしこんな感じに映っていたら、adminbarを非表示にしてください。<br>
adminbarは管理者がダッシュボードにログインしていると表示されます、一般閲覧者には表示されません。<br>
管理画面→ ユーザー →編集→ □サイトを見るときに・・・のチェックをOFFに。<br>
 <img src="et09/slide041.png" alt="adminbarを非表示に2">
 
 
 
       
       <div class="topics-container topics_width">
        <h2>TOPICS 位置を指定するpositionプロパティ</h2>
        <p>
          positionプロパティを使うと表示位置を自在に指定することができます。<br>
          指定方法は3タイプ。
            </p>
        <p>位置の指定は主に top: ,left:で指定。,right: ,bottom:もあります。
       </p>
           <p>指定した位置に要素があった場合には重なってしまいます。<br>
             その場合は、z-indexで順番を決めることができます。
           </p>  

          <ol>
            <li>absolute = ブラウザの左上からの位置指定。親タグにpositionが指定されていればその左上が起点</li>
            <li>relative = 本来の位置から相対指定。<br>
              top:0px ; left:0px だと元々の位置。<br>
              top:10px ; left:20px だと下に10、左に20ずれる。マイナスも使えます。
            </li>
            <li>fixed = 固定</li>
          </ol>
  
       </div>
      
      
      </li>
      <li>
        <h4>次はモバイル幅でスライダーを消します。</h4><br>
       <img src="et09/slide05.png" alt="モバイル幅" title="モバイル幅"><br>
      </li>
      <li>
        <h4>simplicity_child 子テーマのレスポンシブデザイン</h4>
        simplicityは基本的には<em>レスポンシブデザイン</em>ですが、
        独自に追加した部分は自分で調整しなければなりません

      
      </li>
      <li>外観 → テーマの編集 → <em>style.css</em> を選択(子テーマの方)   
       <br>下のコードをファイルの最終行に貼り付けて描画を確認しましょう。
       <pre><span>/*画面サイズが1110px以下の場合のスタイル*/</span>
 @media screen and (max-width: 1110px){ 
    div#parentslider{
      display: none;  <span>/*表示しない*/</span>
    }
    #the-content div.whatsnew{
      margin-top: 10px; <span>/*NEWSの位置を上げる*/</span>
    }
 
 }
  
       </pre>
      </li>
    </ol>
  </section>  
    
    

    <br>
    
 <section class="kiji">
  <h3 id="17"><br>3-8-1.レスポンシブデザインにおけるモバイル表示の調整</h3> 
  <p>ブラウザの画面サイズを1110以下にしてください。<br>
    メインコンテンツの下にウィジェットが下がっていますが、サイズを直す必要がありそうです。<br>
  </p>
  <ol>
    <li>再び <em>style.css</em> を開いてください。   
      さっきの1110pxの{&nbsp; }内に追加してください。
      <pre>  #navi ul &gt; li { <span>/*ulの子要素のみに適用、子孫要素には影響しない*/</span>
     width: 100%; 
 }

   #navi ul li a b { <span>/*メニュー内での改行をさせない*/</span>
     display: inline; 
 }
 
   #sidebar .widget { <span>/*幅を与えて左回り込みさせる*/</span>
    width: 300px;
    float: left;
  }         
      </pre>
      <p>これらが適切にレイアウトされました。</p>
     完成形<br>
     <span class="relative" style="top:27px;left:70px">タブレット表示</span>
     <span class="relative" style="top:1px;left:470px">スマホ表示</span>
     <img src="et09/mobile05.png" alt="幅を与えて左回り込みさせる">  <br>
     </li>

  </ol>
  
  <h3 id="18">3-8-2.パーマリンクの変更で自然なURLに</h3>
   <ol>
    <li>投稿記事をどれか表示してみてください。<br>
      <img src="et09/parma01.png" alt="デフォルトのURL"><br>
     読みにくいのは人間も機械もおなじですので自然なURLに直したいと思います。
    </li>
    <li> 設定 → パーマリンク を開いてください。<br>
      カスタム構造を選んで、このように書き換えます。 <br>
      <pre>/%category%/%postname%.html</pre>
      
    </li>
    <li>更新が終わったら、<em>TOPページに戻ってリロード後に</em>同じページを開いてください。<br>
      post-85の意味がわかりません<br>
      <img src="et09/parma02.png" alt="">
      
    </li>
    <li>投稿の編集から記事にスラッグを設定してください。<br>
      <img src="et09/parma03.png" alt="">
      
    </li>
    <li><i class="after"> </i>わかりやすいURLになりました <br>
      <img src="et09/parma04.png" alt="">
      
    </li>
   </ol>
 </section>
  <h2 id="19"><br>4.まとめ</h2>
  <p> 既存のテーマをカスタマイズして思うことは、「ほんの少しだけここをこう変えたい」と試みただけで予想以上の知識と時間を必要とすることです。</p>
  <p>wordpressでサイトを構築する際に最も重要な知識は、<em>「ここをこうしたい」</em>時に<em>「どこをどうすれば良いか」</em>が把握できることだと思います。<br>
    
   方法は幾つもありますが、最小限の労力と効率を重要視する心がけが大切です。<br>
   例えばデザインならスタイルシートですが、書き換える前にまずは管理画面に有る機能でできるかどうかを考えてみます。<br>
    できなければスタイルシートを書き換えますが、どの要素を書き換えるかは闇雲に探すのではなく、予めブラウザのデベロッパーツールで調べる必要があります。<br>
   <br>
さらにスタイルシートはテーマフォルダ以外にも、親フォルダのスタイル、
プラグインにあるスタイルを読み込んでいますので最終的にどのファイルのどの行が適用されているかを調べるのに
「デベロッパーツール」は最適です、書き換えて試してみるくらい使いこなせるととても作業がしやすくなります。
</p> <p>
  また、記事は投稿から作りますが、自動的に書きだされているh1の大見出しや、
  サイドバーへのタグ挿入や削除は不可能なことではなく、<em>javascript</em>を使うとなんでも可能です。<br>    
  </p>
  <p>
 それ以前にですが、<em>wordpressの大部分を構築するphp</em>という言語でのカスタマイズは万能です。<br>
phpはプログラミングの言語ですがとても書きやすく、習得が最も簡単な言語だと思います。<br><br>
 
 今回は一切触れていませんが、実は投稿記事は<em>データベース</em>という表のような構造の入れ物にすべて蓄積されています。<br>
 wordpressのデータベースには<em>MySQL</em>が採用されていて、
 phpからの問い合わせで要求された記事などを取り出して、ブラウザに送っている重要な役割を担当しています。
 </p> 
 
 <p>そして、データベースもプログラムも全てはwebサーバー上で動作しており、自在なURLを表現できる<em>パーマリンク</em>もwebサーバーの提供する機能に依存しています。<br>
   それぞれの全体的なイメージはこうです</p>
  
  <table>
    <tbody><tr><td style="border-right: solid 1px">ブラウザ ←html ←css ←javascript  &nbsp; </td><td>&nbsp;&nbsp;←php ←MySQL</td></tr>
    <tr><td style="border-right: solid 1px;text-align: right">パソコン側←&nbsp;フロントエンド&nbsp; </td> <td>  &nbsp;バックエンド→サーバー側</td></tr>
  </tbody></table>
  
  <p>全体的な構造把握と知識習得に有効なのは、自分でオリジナルなテーマを作ってみるのが一番です。<br>
    それに、環境をサーバーではなく、サーバー環境を自分のPCに作ると効率が数倍にあがりますのでオススメです。
  </p>
   <p>公用サイトを作るとしたら少なくともフロントエンドの知識が必要かと思われます。</p>
     <a href="" onclick="scrollToTop(); return false">トップに戻る</a>
</section></div></div>