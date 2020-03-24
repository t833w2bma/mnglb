<?php include 'header.php'; ?>
<div class="box generalbox book_content"><h3>4 3-2.メインイメージをスライドショーにする</h3><div class="no-overflow"><section class="slide">

  <p>スライドショーの機能はWordpressにはありませんが､｢プラグイン｣が豊富に用意されており､インストールすることで機能を拡張することが可能です｡</p>
  <p>早速プラグインを探してインストールしてみましょう｡<br>
    いろいろありますが､無料で使えて､評価が高い｢Meta Slider｣を選ぶことにします｡ 
 </p>  
 
 <section class="kiji">
 <ol>
 <li>
   管理画面→ プラグイン→ 新規追加と進んで下さい｡<br>
 <img src="kt03/slide01.png" alt="プラグイン→ 新規追加">
 </li>
 <li>
   キーワードの検索BOXに<em>｢Meta Slider｣</em>と入れてEnterを押して下さい｡<br>
   左の青い方が評価と実績が高いことがわかります､｢今すぐインストール｣をクリックしてください｡
<br> <img src="kt03/slide02.png" alt="プラグイン Meta Slider">
 </li> 
 
 <li>しばらくすると､この画面になりますので｢プラグインを有効化｣をクリックしてください｡
   <br> <img src="kt03/slide03.png" alt="プラグイン有効化">
 </li>
 
   <li>有効化すると､管理画面にMetaSliderのメニューが現れますので､これをクリック｡
   <br> <img src="kt03/slide04.png" alt="プラグイン設定">
 </li>
 
 <li>スライドショーにする画像はこれらをダウンロード(保存)してください｡<br>
  <table>
    <tbody><tr>
      <td><a href="kt03/metaslider01.jpg" download="metaslider01.jpg"> metaslider01.jpg<br><img src="kt03/metaslider01s.jpg"></a></td>
      <td> <a href="kt03/metaslider05.png" download="metaslider05.png">metaslider05.png<br><img src="kt03/metaslider02s.jpg"></a></td>
    </tr>
    <tr>
      <td><a href="kt03/metaslider03.jpg" download="metaslider03.jpg">metaslider03.jpg<br><img src="kt03/metaslider03s.jpg"></a></td>
      <td><a href="kt03/metaslider04.jpg" download="metaslider04.jpg">metaslider04.jpg<br><img src="kt03/metaslider04s.jpg"></a></td>
    </tr>
  </tbody></table> 
   
   
 </li>
 
 <li>+ をクリックします<br>
   <img src="kt03/slide04.png" alt=""><br>
   スライドを追加ボタンを押して開始してください｡
 </li>
 <li>さきほどダウンロードした画像をアップロードして下さい<br>
   <img src="kt03/slide041.png" alt=""><br>
   画像を一つ選んで適当なキャプションを追加します
   <img src="kt03/slide042.png" alt=""><br>
   
   
   
   
   サイトのサイズに合わせて､幅を980､高さを310に指定します｡<br>
   次に最初に表示したい画像を選択して､下にあるボタン｢スライダーに追加｣をクリックします｡
   <img src="kt03/slider06.png" alt="">
 </li>
 
 <li>同様に､スライドを追加から次の画像を｢スライダーに追加｣していきます｡<br>
  画像の投稿時にキャプション(画像の下の方に入れる説明文)を入れるとここに表示されます｡
   <img src="kt03/slider07.png" alt="スライド キャプション">
 </li>
 <li>
   右上の｢保存｣ボタンを押して設定は終了です｡<br>
   ｢使い方｣のところにあるショートコードの中の文字列をコピーして下さい｡<br>(番号はその都度変わるようです)
   画面の説明文にある通り､固定ページにこのコードを貼り付けます｡ 
 </li>
 
 <li>固定ページ→ トップページ 下の編集 をクリックしてください｡<br>
   <img src="kt03/slider08.png" alt="固定ページ編集">
 </li>
 
 
 <li>編集モードを｢テキスト｣に変えて､さきほどコピーしたショートコードを貼り付けて下さい｡<br>
   また､前章の｢9．2．メインビジュアルを追加する｣ で追加した画像は削除して､更新ボタンを押して下さい｡<br>
   <img src="kt03/slider09.png" alt="ショートコード"> 
    <div class="topics-container">
      <h2>TOPICS ショートコードとは</h2>
      <p>プラグインなどが提供する機能を､投稿ページ内の記事内に埋め込んで実行するための呼び出し用コードです｡<br>
        実際にはプログラムの関数が割り当てられていて､決められた文字列を大カッコ[ ]で囲むことで呼び出せるようにしたものです｡<br><br>ショートコードとして記事に埋め込むことで､テーマの変更やアップデートがあっても埋め込んだ機能が消えることはありません｡<br>
        逆に言うと､ショートコードにしなければ､変更やアップデートで消えてしまうということです｡
      </p>
    </div>
 </li>
 <li> <i class="after"> </i>
   サイトの表示を確認します｡<br>
   <img src="kt03/slider10.png" alt="" /><br />
   この部分(固定の画像)はいらないので、削除しましょう
   
   <img src="kt03/slider11.png" alt="サイトの表示"><br>
   スライダーには980幅をしていしましたが､実際にはブラウザの幅に合わせて縮小されています｡<br>
   キャプチャ画像ではスライダーを囲っている親タグのmainが740ピクセルになっていますので､これに内側の余白が適用されて680ピクセルになっている状態です｡<br>この辺のデザインも､まだまだ修正の余地がありそうです｡
    <div class="topics-container">
      <h2>TOPICS 親タグとは</h2>
      <p>WEBページでは
        紙物の文書構造と同様に章→節→小節→段落という構造をもっており､ほとんどのタグが何らかのタグに囲まれる構造になっています｡
      <br>  例えば､段落のタグは&lt; p &gt;ですが､段落は一般に章という囲みの中に入ります｡<br>
      章に該当するタグがSimplicityでは&lt; div &gt;タグにarticleというクラスをつけた要素です｡<br><br>
      クラスについては後ほど説明いたします｡
      
      </p>
    </div>
 </li>
 
 <li>キャプションの背景色が真っ黒なので直したいと思います。<br>
   <img src="kt03/slide043.png" alt=""><br>
   以下のコードをスタイルシートに貼り付けてください。
   <pre>
  .metaslider .caption-wrap {
    /*キャプションの背景色を変更 プラグインのセレクタが強いのでimportantをつける*/
    background: rgba(155, 155, 155, 0.5) !important;
  }

   </pre>
   半透明になればOK
   <img src="kt03/slide044.png" alt=""><br>
 </li>
</ol>  
<p>   <a href="" onclick="scrollToTop(); return false">トップに戻る</a></p>
</section>
</section>
</div></div>