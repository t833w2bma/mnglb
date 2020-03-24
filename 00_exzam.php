<?php include 'header.php'; ?>
		<div id="contents">

			<div id="article">

				<div class="title clearfix">
					<h1>初心者でも簡単に作れるWordPressのホームページ作成方法</h1>
				</div>
 
				<div class="text">
					<p>
						<strong>WordPress</strong>を使えば、ホームページを作ったことがない人でも簡単にブログ機能のあるホームページを作ることができます。
					</p>
					<p>
						WordPressは、「集客できるホームページ」作成に適したソフトウェアです。
						<br>
						また、無料で使用できるので、サーバーやドメインさえ取得すれば誰でもすぐに使用開始できる点も魅力的です。
					</p>
					<p>
						この記事では実際にサンプルページを作りながら、キャプチャ付きでWordPressでのホームページ作成方法を解説していきます。
						<br>
						最後まで読めば、「HTML」や「CSS」などの専門的な知識がない方でもホームページを作ることが可能です。
					</p>
					<p>
						今回は例として、レストランカフェ（カレー屋さん）のホームページを作っていきます。手順どおりに進めれば、<a href="img00/mangrob-1.jpg" target="_blank">サンプルサイト</a>のようなホームページを誰でもカンタンに作成できます。。
						<br>
						サンプルサイトには、WordPressで企業サイトを作るためのヒントがたくさん盛り込まれています。まずは手順どおりに作ってみて、勉強しながら徐々にカスタマイズしていってくださいね。
					</p>
					
					<p>
						<strong>目次</strong>
					</p>
					<p>
						<span class="mokuji"><strong>①準備</strong></span>
						<br>
						<a href="#1"><strong>１．WordPressでホームページを作る前に</strong></a>
						<br>
						<a href="#2"><strong>2．ホームページの構成を考える</strong></a>
						<br>
						<a href="#4"><strong>3．企業のホームページに適したテーマを選ぶ</strong></a>
						<br>
						<a href="#5"><strong>4．WordPressの初期構成</strong></a>
						<br>
						<a href="#6"><strong>5．制作中のホームページが検索結果に表示されないようにする</strong></a>
						<br>
						<a href="#7"><strong>6．いらない機能を削除する</strong></a>
						<br>
						<a href="#8"><strong>6-1．必要のないサイドバーウィジェットを削除する</strong></a>
						<br>
						<a href="#9"><strong>6-2．必要のないコメント欄を非表示にする</strong></a>
						<br>
						<a href="#10"><strong>6-3．固定ページ「サンプルページ」を削除する</strong></a>
						<br>
						<a href="#11"><strong>6-4．投稿記事「Hello world!」を削除する</strong></a>
					</p>
					<p>
						<span class="mokuji"><strong>②骨格をつくる</strong></span>
						<br>
						<a href="#12"><strong>7．ホームページの骨格を作る</strong></a>
						<br>
						<a href="#13"><strong>7-1．各ページを固定ページで追加する</strong></a>
						<br>
						<a href="#14"><strong>7-2．投稿記事を作る</strong></a>
						<br>
						<a href="#15"><strong>7-2-1．カテゴリーを追加する</strong></a>
						<br>
						<a href="#16"><strong>7-2-2．記事を投稿してみる</strong></a>
						<br>
						<a href="#17"><strong>8．ナビゲーションメニューとトップページを設定する</strong></a>
						<br>
						<a href="#18"><strong>8-1．ナビゲーションメニューを編集する</strong></a>
						<br>
						<a href="#182"><strong>8-2.最初のページを設定する</strong></a>
					</p>
					<p>
						<span class="mokuji"><strong>③印象を決める</strong></span>
						<br>
						<a href="#19"><strong>9．ホームページのイメージを決める</strong></a>
						<br>
						<a href="#20"><strong>9-1．ロゴ画像をタイトルにする</strong></a>
						<br>
						<a href="#21"><strong>9-2．メインビジュアルを追加する</strong></a>
						<br>
						<a href="#22"><strong>9-3．スキンを変更する</strong></a>
						<br>
						<a href="#23"><strong>9-4．必要のない表示を調整する</strong></a>
						<br>
						<a href="#24"><strong>9-4-1．トップページのタイトルを非表示にする</strong></a>
						<br>
						<a href="#25"><strong>9-4-2．タイトルとメニューの表示を変える</strong></a>
						<br>
						<a href="#26"><strong>9-4-3．投稿日の表示を非表示にする</strong></a>
						<br>
						<a href="#27"><strong>9-4-4．キャッチフレーズを非表示にする</strong></a>
					</p>
					<p>
						<span class="mokuji"><strong>④コンテンツを作り込む</strong></span>
						<br>
						<a href="#28"><strong>10．サイドバーに最新記事を表示する</strong></a>
						<br>
						<a href="#29"><strong>10-1最新記事一覧を表示する</strong></a>
						<br>
						<a href="#30"><strong>10-2．アイキャッチ画像の設定方法</strong></a>
						<br>
						<a href="#31"><strong>11．TOPページを作りこむ</strong></a>

						<br>
						<a href="#32"><strong>11-1．お店の紹介文を載せる</strong></a>
						<br>
						<a href="#33"><strong>11-2．おすすめのメニュー一覧を表示する</strong></a>
						<br>
						<a href="#34"><strong>12．フッターを作る</strong></a>
						<br>
						<a href="#35"><strong>13．まとめ</strong></a>
					</p>
					<h2 id="1">１．WordPressでホームページを作るための手順</h2>
					<p>
						WordPressをインストールしただけでは単なるブログと変わりません。WordPressでホームページを作るためには特有の手順があるので知っておきましょう。
					</p>
					<p>
						今回はテーマインストール後のホームページ作成を中心に解説していきます。WordPressのインストールと初期設定方法については、別の記事を参照してください。
					</p>
					<h2 id="2">2．ホームページの構成を考える</h2>
					<p>
						まず、WordPressでの作業に入る前にホームページの構成を考える必要があります。今回は飲食店のホームページを作ろうと考えているので、以下のような構成にしました。
					</p>
					<p><img class="aligncenter wp-image-1165 size-full" style="max-width: 582px; width: 100%; height: auto;" src="img00/wordpress-homepage-210.png" alt="今回作成する飲食店（カレーショップ）のサイトマップ構成">
					</p>
					<p>
						このような、ページとページの関連を図示した表をサイトマップと呼びます。
						<br>
						サイトマップはホームページ制作における戦略上の軸になるため、ユーザーの動きなどを考えながらじっくり考えて作りましょう。
					</p>
					<p>
						WordPressには、「固定ページ」という基本的に追加や更新を行わないページ（青枠で囲われたページ）と、新規のページの追加を前提とした「投稿ページ」（赤色で囲われたページ）という2種類のページがあります。WordPressでホームページを作るときは、この2種類のページを使ってサイトマップの構成を形にしていきます。
					</p>
					<h2 id="4">3．企業のホームページに適したテーマを選ぶ</h2>
					<p>
						WordPressをインストールした直後のホームページは、以下のように表示されます。
					</p>
					<p><img class="wakusen alignnone wp-image-1226 size-full" src="img00/wordpress-homepage-38.png" alt="">
					</p>
					<p>
						しかしこの見た目だと味気ないですし、ホームページというよりブログのようにしか見えませんね。
						<br>
						作りたいホームページに適したレイアウト・デザインにするために「テーマ」を変更しましょう。
					</p>
					<p>
						テーマとは、レイアウトやデザインを変更するためのテンプレートのことです。
						<br>
						任意のテーマを設定することによって、サイトデザインを好きな形へと変更できます。
					</p>
					<p>
						WordPressのテーマはたくさんあるので、初めのうちはどのテーマを選んだらいいかよくわからないかもしれません。
						<br>
						まずは<a href="http://wp-theme.myafi.net/" target="_blank">テーマを集めたサイト</a>などでいろんなテーマを閲覧して、自分のイメージに合うものを探してみるといいでしょう。
					</p>
					<p>
						今回は、のちのちカスタマイズをして拡張することを前提に「Simplicity」というテーマに変更します。
					</p>
					<p><img class="wakusen alignnone wp-image-932 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/themes71.png" alt="WordPressテーマ「Simplicity」の公式ページ">
					</p>
					<p>
						「Simplicity」はインストールのためにテーマファイルをダウンロードする必要があるため、次のページからZipファイルを自分のパソコンにダウンロードしておきましょう。
					</p>
					<p style="font-size:2em">
						<a href="http://wp-simplicity.com/downloads2/" target="_blank">http://wp-simplicity.com/downloads2/</a>
					</p>
					<p><img class="wakusen alignnone wp-image-878 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/themes8.png" alt="WordPressテーマ「Simplicity」のダウンロードページ">
					  <br />
<p><b>親テーマ</b>と<b>子テーマ</b>をダウンロードしてそれぞれzipのまま管理画面からアップロード
<br> 
					  <img src="img00/dwnbtn.png" alt="simpl" /> 
					</p>
					<p>
						Zipファイルがダウンロードできたら、WordPressのダッシュボード「外観」から「新しいテーマを追加」をクリックします。
						<br>
						<img class="wakusen alignnone wp-image-873 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/themes2.png" alt="WordPressのダッシュボードから新しいテーマを追加する">
					</p>
					<p>
						「テーマのアップロード」をクリックします。
						<br>
						<img class="wakusen alignnone wp-image-884 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/themes10.png" alt="WordPressダッシュボード　テーマを追加画面からテーマをアップロード">
					</p>
					<p>
						「ファイルを選択」をクリックして、先ほどダウンロードした「simplicity」のZipファイルを選択します。選択できたら「いますぐインストール」をクリックします。※Zipファイルを解凍するとエラーになるので<strong>解凍せずにアップロード</strong>しましょう。
						<br>
						<img class="wakusen alignnone wp-image-885 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/themes11.png" alt="アップロードしたいWordPressのテーマファイルを選択し、インストールする">
					</p>
					<p>
						インストールが実行されたら<br>
						続いて子テーマも 同じようにアップし「有効化」をクリックしましょう。
						<br>
						<a href="img00/themes12.png" class="fancybox image"><img class="wakusen alignnone wp-image-886 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/themes12.png" alt="インストールしたWordPressテーマを有効化"></a>
					</p>
					<p>
						これでテーマ「Simplicity」のインストールが完了しました。「サイトを表示する」をクリックして確認してみましょう。
						<br>
						<img class="wakusen alignnone wp-image-1032 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/wordpress-homepage-4.png" alt="WordPressテーマ「Simplicity」の初期画面">
						<br>
						ホームページの見た目が変化しました。
					</p>
					<p>
						WordPressのテーマは、見た目だけではなく機能にも様々な違いがあります。テーマを選ぶ時は一度インストールして機能まで確かめた上で選ぶとよいでしょう。
						<br>
						機能の豊富なテーマや企業のホームページに合ったテーマを選べば、完成までの手間を大きく省くことができます。
					</p>
					<p>
						また、簡単な編集で高品質なホームページを作ることができるテーマの販売サイトもあります。有料といっても手頃な価格が多いので、もし気に入った有料テーマがあれば購入を検討してもいいでしょう。<br /><br />
					</p>

					<h2 id="5">4．WordPressの初期構成</h2>
					<p>
						テーマのインストールができたら、それぞれのページ表示を確認してみましょう。
					
					</p>
					<p>
						<strong>トップページ「投稿一覧ページ」</strong>
						<br>
						<img class="wakusen alignnone wp-image-1032 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/wordpress-homepage-4.png" alt="WordPressテーマ「Simplicity」投稿一覧ページ">
					</p>
					<p>
						<strong>投稿ページ「Hello world!」</strong>
						<br>
						<img class="wakusen alignnone wp-image-1034 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/wordpress-homepage-6.png" alt="WordPressテーマ「Simplicity」でのサンプル投稿記事「Hello World!」">
					</p>
					<p>
						<strong>固定ページ「サンプルページ」</strong>
						<br>
						<img class="wakusen alignnone wp-image-1033 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/wordpress-homepage-5.png" alt="WordPressテーマ「Simplicity」でのサンプル固定ページ「サンプルページ」">
					</p>
					<p>
						これがWordPressインストール後の初期構成です。この構成をサイトマップにすると以下のようになります。青色が固定ページ、赤色が投稿ページです。
						<br>
					
					</p>
					<p>
						今回の作業では、この状態からWordPressの機能を使って以下のようなカレー屋さんのサイトマップ構成を作成します。
					</p>
					<p><img class="wakusen aligncenter wp-image-1165 size-full" style="max-width: 582px; width: 100%; height: auto;" src="img00/wordpress-homepage-210.png" alt="今回作成する飲食店（カレーショップ）のサイトマップ構成">
					</p>
					<h2 id="6">5．作業を始める前の準備</h2>
					<p>
						WordPressのインストールが済んだら、まずはじめにWordPressでの作業準備を行いましょう。
					</p>
					<p>
						実は、インストールした時点で誰でもホームページを見ることが可能な状態になっています。つまり未完成でも人に見られてしまうのです。
						<br>
						さらに、Googleなどの検索エンジンは新しく作られたホームページの中をたどってページを記憶し、たとえ未完成だとしても検索結果に表示します。
					</p>
					<p>
						このため、ホームページが未完成のうちは、検索結果に表示させないようにしましょう。
					</p>
					<p>
						検索エンジンからのインデックスの許可・不許可は、
						<br>
						<strong>ダッシュボード＞設定＞表示設定</strong>
						<br>
						を選択します。
						<br>
						<a href="img00/wordpress-homepage-8.png" class="fancybox image"><img class="wakusen alignnone wp-image-1036 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/wordpress-homepage-8.png" alt="WordPressでダッシュボードから表示設定を選択する"></a>
					</p>
					<p>
						赤枠で囲まれた「検索エンジンがサイトをインデックスしないようにする」をチェックしましょう。これで編集中のホームページが検索結果に表示されなくなり、アドレスを知らない人間以外はホームページにアクセスできなくなります。
					</p>
					<p>
						※ホームページが完成したら必ずこのチェックを外して検索結果に表示させるようにしましょう。
						<br>
						<img class="wakusen alignnone wp-image-1037 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/wordpress-homepage-9.png" alt="WordPressで検索エンジンがサイトをインデックスしないようにする方法" srcset="img00/wordpress-homepage-9.png 758w, img00/wordpress-homepage-9-185x105.png 185w" sizes="(max-width: 758px) 100vw, 758px">
					</p>
					<h2 id="7">6．いらない機能を削除する</h2>
					<p>
						次にデフォルトで表示される必要のない項目を削除しましょう。削除する項目は以下の4つです。
					</p>
					<ul>
						<li>
							必要のないサイドバーウィジェット
						</li>
						<li>
							必要のないコメント欄
						</li>
						<li>
							デフォルト固定ページ「サンプルページ」
						</li>
						<li>
							デフォルト投稿記事「Hello world!」
						</li>
					</ul>
					<h3 id="8">6-1．必要のないサイドバーウィジェットを削除する</h3>
					<p>
						下の赤枠のサイドバーには、企業のホームページに必要のない項目が含まれているのでこちらを削除します。
					</p>
					<p>
						サイドバーの項目を編集するためには「ウィジェット機能」を使います。
						<br>
						<img class="wakusen alignnone wp-image-1038 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/wordpress-homepage-10.png" alt="必要のないサイドバーウィジェットを削除する">
					</p>
					<p>
						<strong>ダッシュボード＞外観＞ウィジェット</strong>
						<br>
						を選択します。
						<br>
						<img class="wakusen alignnone wp-image-1039 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/wordpress-homepage-11.png" alt="WordPressでダッシュボードからウィジェットを選択する">
					</p>
					<p>
						画面が切り替わったら「サイドバーウィジェット」の項目を全て削除しましょう。削除したいウィジェットをクリックすれば、以下のように編集画面が開きます。
						<br>
						<img class="wakusen alignnone wp-image-1040 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/wordpress-homepage-12.png" alt="初期状態で設置されているサイドバーウィジェットの削除方法">
					</p>
					<p>
						削除が完了するとこのような状態になります。
					</p>
					<p><img class="wakusen alignnone wp-image-1129 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/wordpress-homepage-12-2.png" alt="初期状態で設置されていたサイドバーウィジェットを削除済みのホームページ表示">
					</p>
					<p>
						<span class="kakoi1"><strong>【ウィジェットとは？】
							<br>
							</strong>ウィジェットとは、「小さな部品」という意味です。
							<br>
							WordPressではサイドバーやフッターにウィジェットを組み込むことによって、コードを書くことなく「最新記事の一覧」や「検索フォーム」といった機能を設置することが可能になります。
							<br>
							今回使用するテーマ「Simplicity」では、このウィジェット機能がとても豊富で、部品を組み立てるようにホームページを作成することができます。</span>
					</p>
					<h3 id="9">6-2．コメント欄を非表示にする</h3>
					<p>
						次に投稿ページのコメント欄も企業のホームページには必要ないので削除しておきましょう。
						<br>
						<img class="wakusen alignnone wp-image-1041 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/wordpress-homepage-13.png" alt="必要のないコメント欄の削除">
					</p>
					<p>
						コメント欄の非表示は
						<br>
						<strong>表示設定＞ディスカッション</strong>
						<br>
						で行うことができます。
						<br>
						<img class="wakusen alignnone wp-image-1042 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/wordpress-homepage-14.png" alt="WordPressでダッシュボードからディスカッションを選択する">
					</p>
					<p>
						ディスカッション設定の画面に切り替わったら「投稿のデフォルト設定」の「新しい投稿へのコメントを許可する」のチェックを外しましょう。これで閲覧者から見た投稿ページのコメント欄を非表示にすることができます。
						<br>
						<img class="wakusen wp-image-1043 size-full aligncenter" style="max-width: 758px; width: 100%; height: auto;" src="img00/wordpress-homepage-15.png" alt="コメント欄を削除するために、ディスカッション設定のチェックを外す">
					</p>
					<h3 id="10">6-3．固定ページ「サンプルページ」を削除する</h3>
					<p>
						次に最初から存在しているサンプル固定ページ「サンプルページ」を削除しましょう。
					</p>
					<p>
						<strong>ダッシュボード＞固定ページ＞固定ページ一覧</strong>
						<br>
						を選択し、サンプルページにマウスカーソルを合わせ「ゴミ箱」をクリックすれば削除できます。
						<br>
						<img class="wakusen alignnone wp-image-1044 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/wordpress-homepage-16.png" alt="固定ページ「サンプルページ」を削除する">
					</p>
					<h3 id="11">6-4．投稿記事「Hello world!」を削除する</h3>
					<p>
						同じように最初から存在しているサンプル投稿記事「Hello world!」を削除しましょう。
					</p>
					<p>
						<strong>ダッシュボード＞投稿＞投稿一覧</strong>
						<br>
						を選択し、固定ページの場合と同様の方法で削除しましょう。
						<br>
						<img class="wakusen alignnone wp-image-1045 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/wordpress-homepage-17.png" alt="投稿記事「Hello world!」を削除する">
					</p>
					<p>
						これでホームページが、とてもシンプルな状態になりました。
						<br>
						<img class="wakusen alignnone wp-image-1130 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/wordpress-homepage-182.png" alt="必要のない項目を削除した状態のWordPressホームページ">
					</p>
					<h2 id="12">7．ホームページの骨格を作る</h2>
					<p>
						不必要な項目を削除できたら、ホームページに必要な骨格を作りましょう。サイトマップを確認してどんなページが必要なのか把握しておきます。
						<br>
						<img class="wakusen aligncenter wp-image-1165 size-full" style="max-width: 582px; width: 100%; height: auto;" src="img00/wordpress-homepage-210.png" alt="今回作成する飲食店（カレーショップ）のサイトマップ構成">
					</p>
					<p>
						固定ページで作成（青色）
					</p>
					<ul>
						<li>
							トップページ
						</li>
						<li>
							メニュー
						</li>
						<li>
							アクセス
						</li>
						<li>
							お問い合わせ
						</li>
					</ul>
					<p>
						投稿ページで作成（赤色）
					</p>
					<ul>
						<li>
							投稿一覧ページ
						</li>
						<li>
							投稿記事
						</li>
						<li>
							投稿記事
						</li>
					</ul>
					<h3 id="13">7-1．各ページを固定ページで追加する</h3>
					<p>
						WordPressでホームページを作る場合は各ページの枠を固定ページで用意しておく必要があります。
					</p>
					<p>
						固定ページを追加するには、
						<br>
						<strong>ダッシュボード＞固定ページ＞新規追加</strong>
						<br>
						をクリックしましょう。
						<br>
						<img class="wakusen alignnone wp-image-1047 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/wordpress-homepage-19.png" alt="各ページを固定ページで追加する">
					</p>
					<p>
						まずは各ページのタイトルと、ひとまず仮の本文を入れておきましょう。入力が終わったら「公開」をクリックします。
						<br>
						<img class="wakusen alignnone wp-image-1048 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/wordpress-homepage-20.png" alt="WordPress固定ページ編集画面からの投稿方法">
					</p>
					<p>
						他のページも同じように追加していきます。すべてのページが作成できたら「固定ページ一覧」で確認してみましょう。
						<br>
						<img class="wakusen alignnone wp-image-1049 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/wordpress-homepage-21.png" alt="WordPressの固定ページ一覧で追加した固定ページを確認する">
					</p>
					<p>
						表示を確認してみましょう。
						<img class="wakusen alignnone wp-image-1050 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/wordpress-homepage-22.png" alt="WordPressで追加した固定ページがナビゲーションメニューに表示されていることを確認する">
						<br>							変わらないときはキャッシュをクリアしてみてください<img src="img00/img_catsh.png" alt="" /><br />

					</p>
					<p>
						作成した固定ページがナビゲーションメニューに表示されました。ただ表示の順番がおかしいので、こちらは後ほど編集します。
					</p>
					<h2 id="14">7-2．投稿記事を作る</h2>
					<p>
						次に投稿記事を作りましょう。
					</p>
					<p>
						投稿記事を作成する流れは次のようになります。
						<br>
						<strong>カテゴリーを作る＞カテゴリーを指定して記事を投稿</strong>
					</p>
					<p>
						※カテゴリーとは投稿記事をグループ化するための機能です。
					</p>
					<h3 id="15">7-2-1．カテゴリーを追加する</h3>
					<p>
						カテゴリーを追加するには、
						<br>
						<strong>ダッシュボード＞投稿＞カテゴリー</strong>
						<br>
						を選択します。
						<br>
						<img class="wakusen alignnone wp-image-1055 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/wordpress-homepage-27.png" alt="WordPressのダッシュボードからメニュー編集画面を開く">
					</p>
					<p>
						カテゴリーの名前を決めたら、スラッグも指定しておきましょう。このスラッグに入力した文字はURLの最後の部分（パーマリンク）として今回のホームページでは使用されます。アルファベットか数字でかつ半角にしておくのが無難です。カテゴリーの入力が完了したら「新規カテゴリーを追加」をクリックします。
						<br>
						<img class="wakusen alignnone wp-image-1051 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/wordpress-homepage-23.png" alt="WordPressダッシュボードで新規カテゴリーを追加する">
					</p>
					<p>
						更新されると以下のように新しいカテゴリーが追加されます。
						<br>
						<img class="wakusen alignnone wp-image-1052 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/wordpress-homepage-24.png" alt="WordPressのカテゴリー編集画面で追加されたカテゴリーを確認する">
					</p>
					<h4 id="16">7-2-2．記事を投稿してみる</h4>
					<p>
						カテゴリーの作成ができたら記事を投稿してみましょう。記事の投稿は「投稿」から「新規追加」を選択します。
					</p>
					<p>
						記事が書けたら先ほど追加したカテゴリー「カレーマニアがゆく」にチェックを入れ「公開」をクリックします。
						<br>
						<img class="wakusen alignnone wp-image-1131 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/wordpress-homepage-251.png" alt="WordPressで投稿記事を編集し、カテゴリーを指定して記事を公開する">
					</p>
					<p>
						投稿記事の表示を確認してみましょう。
						<br>
						<img class="wakusen alignnone wp-image-1054 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/wordpress-homepage-26.png" alt="WordPressで投稿した記事の表示を確認する">
					</p>
					<p>
						これで投稿記事が作成できました。
					</p>
					<h2 id="17">8．ナビゲーションメニューとトップページを設定する</h2>
					<p>
						次に、ナビゲーションメニューとトップページを設定してユーザーが利用しやすい形に整えます。
					</p>
					<h3 id="18">8-1．ナビゲーションメニューを編集する</h3>
					<p>
						ナビゲーションメニューとは、ホームページ共通の案内メニューのことです。
					</p>
					<p>
						ナビゲーションメニューの編集は、
						<br>
						<strong>ダッシュボード＞外観＞メニュー</strong>
						<br>
						から行います。
						<br>
					</p>
					<p><br>
						以下の画面でナビゲーションメニューを編集できます。
					</p>
					<p>
						メニュー名に メニュー1  といれてメニューを保存してください 
						
						<br>
						<img class="wakusen alignnone wp-image-1056 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/wordpress-homepage-28.png" alt="WordPressテーマ「Simplicity」で初期状態で存在するメニューを削除する" srcset="img00/wordpress-homepage-28.png 758w, img00/wordpress-homepage-28-185x105.png 185w" sizes="(max-width: 758px) 100vw, 758px">
					</p>
					<p>
						<img class="wakusen alignnone wp-image-1058 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/wordpress-homepage-30.png" alt="WordPressのメニュー編集画面でナビゲーションメニューの並びを替える" srcset="img00/wordpress-homepage-30.png 758w, img00/wordpress-homepage-30-185x105.png 185w" sizes="(max-width: 758px) 100vw, 758px">
					</p>
					<p>
						次に投稿一覧ページをナビゲーションメニューに追加するために、赤枠の「カテゴリー」タブから「すべて表示」を選択しましょう。すると先ほど追加したカテゴリーである「カレーマニアがゆく」がチェックできるので、こちらにチェックを入れ「メニューに追加」をクリックします。
						<br>
						<img class="wakusen alignnone wp-image-1059 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/wordpress-homepage-31.png" alt="WordPressメニューの編集画面でナビゲーションメニューに投稿記事のカテゴリーを追加する">
					</p>
					<p>
						メニューに「カレーマニアがゆく」が追加されました。メニューの編集が終了したら「メニューを作成」をクリックしましょう。
						<br>
						<img class="wakusen alignnone wp-image-1060 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/wordpress-homepage-32.png" alt="WordPressメニューの編集画面で追加された投稿記事のカテゴリーメニュー">
					</p>
					<p>
						これでメニューが完成したと言いたいところですが、メニューの作成にはあと一つ作業が必要です。
					</p>
					<p>
						メニュー画面の「位置の管理」タブを選択し、「ヘッダーのナビゲーション」を先ほど作成したメニューに変更しましょう。完了したら「変更を保存」をクリックします。
						<br>
						<img class="wakusen alignnone wp-image-1132 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/wordpress-homepage-331.png" alt="WordPressのメニュー編集で作成したメニューをホームページに表示させる">
					</p>
					<p>
						表示を確認してみましょう。ナビゲーションメニューに固定ページと投稿一覧ページを並べることができています。
						<br>
						<img class="wakusen alignnone wp-image-1062 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/wordpress-homepage-34.png" alt="WordPressで固定ページと投稿一覧ページが並べて表示されたナビゲーションメニュー">
					</p>
					<h3 id="182">8-2．最初のページを設定する</h3>
					<p>
						次に、ホームページを訪れた最初のページが任意のページになるように設定しましょう。
					</p>
					<p>
						最初の状態では初めのページが投稿一覧ページになっていますが、今回は先ほど追加した固定ページである「トップページ」を最初のページに設定します。
					</p>
					<p>
						<strong>ダッシュボード＞表示設定</strong>
						<br>
						を選択しましょう。
						<br>
						<img class="wakusen alignnone wp-image-1063 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/wordpress-homepage-35.png" alt="WordPressダッシュボードから表示設定への遷移方法">
					</p>
					<p>
						表示設定の画面に切り替わったら「フロントページの表示」を「固定ページ」に変更し、下の項目で先程作成した「トップページ」を選びましょう。変更が完了したら「変更を保存」をクリックします。
						<br>
						<img class="wakusen alignnone wp-image-1064 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/wordpress-homepage-36.png" alt="WordPressの表示設定でフロントページを固定ページに変更する">
					</p>
					<p>
						※固定ページが一つも存在しない場合この設定はできません。必ず固定ページを追加してから設定しましょう。
					</p>
					<p>
						サイトを表示して確認してみましょう。
						<br>
						<img class="wakusen alignnone wp-image-1065 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/wordpress-homepage-37.png" alt="WordPressでフロントページが固定ページに変更された状態の表示">
						<br>
						初めのページが「トップページ」になったことが確認できたと思います。
					</p>
					<h2 id="19">9．ホームページのイメージを決める</h2>
					<p>
						ホームページの骨格が完成したら、ホームページの印象を決めるタイトルロゴやメインイメージを追加していきましょう。
					</p>
					<p>
						ホームページに訪れるユーザーがそのページを読むかどうか判断する基準の一つが「写真やデザインに惹かれるかどうか」です。
					</p>
					<p>
						その中でも、タイトルロゴやメインイメージの写真はホームページを開いた瞬間に見られます。載っている写真の質が低かったり、全く関係のないものが映っていたりすれば、それだけでユーザーがホームページを去る原因になります。
					</p>
					<p>
						そのためタイトルロゴやメインイメージに使用する画像は、店や会社の第一印象を決めると考えて厳選して選びましょう。このイメージがホームページ全体の共通イメージになり、コンテンツを追加する時などのデザインを考える上でも重要になります。
					</p>
					<h3 id="20">9-1．ロゴ画像をタイトルにする</h3>
					<p>
						まずタイトルをテキストからロゴ画像に変更しましょう。
						<a href="img00/logo.png" download>
						<img src="img00/logo.png"  style="width:100px" > ダウンロードする</a>
 					</p>
					<p>
						WordPressにはタイトルをテキストではなくロゴ画像に差し替える方法が用意されています。
					</p>
					<p>
						タイトルをロゴ画像に差し替えるには、ログイン状態でホームページ上部のバーから「カスタマイズ」を選択するか、ダッシュボードの
						<br>
						外観＞カスタマイズを選択しましょう。ブラウザ画面の左側にカスタマイズメニューが表示されます。
						<br>
						<img class="wakusen alignnone wp-image-1067 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/wordpress-homepage-39.png" alt="WordPressテーマ「Simplicity」でのカスタマイズメニューの表示">
					</p>
					<p>
						カスタマイズメニューから、「ヘッダー画像」を開き、「ロゴを画像にする」にチェックを入れ「画像を選択」でロゴ画像のファイルを選択します。
						<br>
						<img class="wakusen alignnone wp-image-1068 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/wordpress-homepage-40.png" alt="WordPressテーマ「Simplicity」のカスタマイズメニューでタイトルをロゴ画像に変更する方法">
					</p>
					<p>
						画像ファイルをアップロードする画面に切り替わるので、パソコンにあるロゴ画像を選択してアップロードしましょう。
					</p>
					<p><img class="wakusen alignnone wp-image-1069 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/wordpress-homepage-41.png" alt="WordPressでロゴの画像ファイルをアップロードする">
					</p>
					<p>
						タイトルがロゴ画像に変わりました。変更が確認できたら必ず「保存して公開」をクリックしましょう。編集後にこのボタンを押さないと編集内容が保存されません。
						<br>
						<img class="wakusen alignnone wp-image-1070 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/wordpress-homepage-42.png" alt="WordPressのカスタマイズメニューでロゴ画像に変更されたタイトルを確認し、変更を保存する" srcset="img00/wordpress-homepage-42.png 758w, img00/wordpress-homepage-42-185x105.png 185w" sizes="(max-width: 758px) 100vw, 758px">
					</p>
					<p>
						カスマイズメニューで外観を編集する時は保存忘れに気をつけましょう。
					</p>
					<p>
						<span class="kakoi1"><strong>【カスタマイズメニューについて】
							<br>
							</strong>カスタマイズメニューはテーマ毎に特色があり、「Simplicity」ではこのカスタマイズメニューからの編集だけでさまざまなホームページを作ることが可能です。
							<br>
							よりオリジナリティの高いホームページを作りたければ、カスタマイズメニューで色々試してみるのも良いでしょう。
							<br>
							カスタマイズの自由度はテーマを選ぶ際の一つの基準になるので、テーマ選択時に確認しましょう。</span>
					</p>
					<h3 id="21">9-2．メインビジュアルを追加する</h3>
					<p>
						次にメインビジュアルを追加するために、「固定ページ一覧」から「トップページ」を開きましょう。
						<br>
						<h5>
							投稿画面のUIをチュートリアルと同じにするプラグイン
		クラシック エディターをインストールしましょう
						</h5>
	<img src="img00/clasic.png"  style="width:200px" >
					<p><br>		メインビジュアルとはホームページを最初に開いた時に上部に表示される、ホームページの顔となる大きなイメージ画像のことです。編集画面に移ったら「メディアを追加」をクリックします。</p>
		<a href="img00/gaikan.jpg" download>
            <img src="img00/gaikan.jpg"  style="width:100px" >ダウンロードする</a>
					</p>
					<p><img class="wakusen alignnone wp-image-1071 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/wordpress-homepage-43.png" alt="WordPress固定ページ編集画面でメディアを追加する">
					</p>
					<p>
						任意の写真画像をアップロードします。デフォルトでは固定ページに挿入される画像が縮小されてしまうので、以下の赤枠項目から適切なサイズを選択しましょう。ここでは「大サイズ」を選択します。
					</p>
					<p><img class="wakusen alignnone wp-image-1072 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/wordpress-homepage-44.png" alt="WordPressのメディア挿入画面で適切な画像サイズを指定する" srcset="img00/wordpress-homepage-44.png 758w, img00/wordpress-homepage-44-185x105.png 185w" sizes="(max-width: 758px) 100vw, 758px">
					</p>
					<p>
						写真が追加されました。編集できたら「更新」をクリックしましょう。
					</p>
					<p><img class="wakusen alignnone wp-image-1073 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/wordpress-homepage-45.png" alt="WordPress固定ページ編集画面で挿入されたメインヴィジュアルを確認してページを公開する">
					</p>
					<p>
						表示を確認してみましょう。
					</p>
					<p><img class="wakusen alignnone wp-image-1074 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/wordpress-homepage-46.png" alt="メインヴィジュアルが挿入された状態のWordPressのホームページ">
					</p>
					<p>
						ロゴとメインイメージがあることでだいぶホームページらしくなってきました。
					</p>
					<h3 id="22">9-3．スキンを変更する</h3>
					<p>
						現在の状態ではメニューやコンテンツの周囲に枠が付いており、ホームページというよりは一般的なブログであるかのような印象を与えます。
						<br>
						そこで、見え方を変えてみましょう。「Simplicity」ではカスタマイズメニューから「スキン」を変更することによって、ナビゲーションメニューなどの見た目を変更することが可能です。
					</p>
					<p>
						いろいろなスキンを試してみて、今回は以下のように「ホワイティ」を選択しました。
					</p>
					<p><img class="wakusen alignnone wp-image-1075 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/wordpress-homepage-47.png" alt="ブログではないホームページの印象に近付けるために、WordPressテーマ「Simplicity」のカスタマイズメニューでスキンを変更する">
					</p>
					<p>
						表示を確認すると、ナビゲーションメニューやメインコンテンツの枠が非表示になり、スッキリしました。
						<br>
						こちらのほうが、ホームページとしてのイメージが良いので、こちらに決定します。
					</p>
					<p><img class="wakusen alignnone wp-image-1076 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/wordpress-homepage-48.png" alt="「Simplicity」のカスタマイズメニューから、スキンが変更された状態のホームページ">
					</p>
					<h3 id="23">9-4．必要のない表示を調整する</h3>
					<p>
						だいぶホームページらしくなってきましたが、まだ余分な表示が残っているので以下の項目を修正していきましょう。
					</p>
					<ul>
						<li>
							トップページのタイトルを非表示にする
						</li>
						<li>
							固定ページの投稿日を非表示にする
						</li>
						<li>
							<span style="line-height: 1.5;">タイトルとメニューの表示を変える</span>
						</li>
						<li>
							<span style="line-height: 1.5;">投稿日や投稿者の表示を非表示にする</span>
						</li>
						<li>
							キャッチフレーズを非表示にする
						</li>
					</ul>
					<h4 id="24">9-4-1．トップページのタイトルを非表示にする</h4>
					<p>
						今の状態だと、コンテンツ上部に「トップページ」というタイトルが表示されてしまっています。
						<br>
						ブログの記事の一つ、という印象になってしまうので、このタイトルは非表示にしましょう。「トップページ」の編集画面でタイトル部分の「トップページ」の文字を下のように記述すれば非表示にすることが可能です。※記号は必ず半角で入力しましょう。全角で入力すると表示されてしまいます。
					</p>
					<p style="text-align: center;">
						<span class="kakoi1"><strong>&lt;!––トップページ––&gt;</strong></span>
					</p>
					<p><img class="wakusen alignnone wp-image-1077 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/wordpress-homepage-49.png" alt="WordPressで固定ページのタイトルをコメントアウトする">
					</p>
					<p>
						<strong>&lt;!––トップページ––&gt;</strong>はHTMLでコメントアウト（指定した部分の文字などを無効化すること）を意味します。この記号で囲むことでタイトル文字が表示されなくなります。
					</p>
					<p>
						確認してみましょう。コンテンツのタイトル部分が非表示になりました。
					</p>
					<p><img class="wakusen alignnone wp-image-1078 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/wordpress-homepage-50.png" alt="固定ページのタイトルがコメントアウトされた状態のホームページ">
					</p>
					<p>
						しかしタイトルを非表示にしたことによってメニューからも「トップページ」の表示が消えてしまったので、メニューの表示のみ復活させましょう。
						<br>
						※この「トップページ」という表示部分は検索順位に若干影響があるので、本来は上位に表示させたいキーワードを入れておくべき部分です。しかしその影響は軽微なものなので無視してもほぼ差し支えありません。今回は作りやすさを優先しているためあえて外しています。
					</p>
					<h4 id="25">9-4-2．タイトルとメニューの表示を変える</h4>
					<p>
						メニューの編集ではページタイトルとメニュー表示を別のものにすることができます。
					</p>
					<p>
						ナビゲーションメニューの編集画面から、「&lt;!––トップページ––&gt;」のタブを開き、「ナビゲーションラベル」のテキストを変更してみましょう。
					</p>
					<p><img class="wakusen alignnone wp-image-1079 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/wordpress-homepage-51.png" alt="WordPressのナビゲーションメニューを固定ページのタイトルと別の表示にする" srcset="img00/wordpress-homepage-51.png 758w, img00/wordpress-homepage-51-185x105.png 185w" sizes="(max-width: 758px) 100vw, 758px">
					</p>
					<p>
						するとトップページタイトルは非表示のまま、メニューに「トップページ」と表示させることができました。
					</p>
					<p><img class="wakusen alignnone wp-image-1080 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/wordpress-homepage-52.png" alt="コメントアウトによって非表示になったナビゲーションメニューが復活した状態">
					</p>
					<h4 id="26">9-4-3．投稿日の表示を非表示にする</h4>
					<p>
						「Simplicity」では固定ページに投稿日や投稿者の表示が出てしまうため、カスタマイズメニューからこちらを非表示にしておきます。
					</p>
					<p>
						以下の赤枠で囲まれている部分のチェックを外しましょう。
					</p>
					<p>
					  <img class="wakusen wp-image-1081 size-full aligncenter" style="max-width: 275px; width: 100%; height: auto;" src="img00/wordpress-homepage-153.png" alt="WordPressテーマ「Simplicity」で投稿日と更新日を非表示にする">
					  <img class="wakusen wp-image-1081 size-full aligncenter" style="max-width: 275px; width: 100%; height: auto;" src="img00/wordpress-homepage-53.png" alt="WordPressテーマ「Simplicity」で投稿日と更新日を非表示にする">
					</p>
					<p>
						これでホームページに不必要な表示を非表示に変えることができます。
					</p>
					<p>
						※この指定によって投稿ページについても投稿日が表示されなくなってしまいますが、投稿ページにだけ更新日を表示させる方法については別の記事で詳しく解説します。
					</p>
					<h4 id="27">9-4-4．キャッチフレーズを非表示にする</h4>
					<p>
						最後に、タイトル下の「Just another WordPress site」というテキストを非表示にしましょう。
						<br>
						このテキストはキャッチフレーズと呼ばれており、通常はホームページを端的に表す言葉が使われます
						<br>
						キャッチフレーズは初期状態で「Just another WordPress site」と表示されますが、これではホームページの説明になっていないので、変更もしくは非表示にしておきましょう。
						<br>
						今回の場合、キャッチフレーズの表示は邪魔に感じられるため、非表示にします。
						<br>
						<img class="wakusen alignnone wp-image-1159 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/wordpress-homepage-77.png" alt="WordPressでキャッチフレーズを非表示にする">
						<br>
						キャッチフレーズの変更には
						<br>
						<strong>ダッシュボード＞一般</strong>
						<br>
						を選択しましょう。
						<br>
						<img class="wakusen alignnone wp-image-1153 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/wordpress-homepage-74.png" alt="WordPressダッシュボードからの一般設定への遷移方法">
					</p>
					<p>
						設定画面に切り替わるので、赤枠部分を空欄にして、完了したら保存しておきましょう。
						<br>
						<img class="wakusen aligncenter wp-image-1157 size-full" style="max-width: 611px; width: 100%; height: auto;" src="img00/wordpress-homepage-751.png" alt="WordPressの一般設定でキャッチフレーズを空欄にする">
					</p>
					<p>
						表示を見てみると、キャッチフレーズが非表示になったことが確認できます。
						<br>
						<img class="wakusen alignnone wp-image-1158 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/wordpress-homepage-761.png" alt="キャッチフレーズが非表示になった状態のWordPressのホームページ">
					</p>
					<h2 id="28">10．サイドバーに最新記事を表示する</h2>
					<p>
						ホームページのイメージが決まったら、より機能を拡張してみましょう。ここでは以下のようにサイドバーに新着記事を表示してみましょう。
						<a href="img00/curry1.jpg" download>ダウンロードする
            <img src="img00/curry1.jpg"  style="width:100px" > </a>
            <a href="img00/curry2.jpg" download>
            <img src="img00/curry2.jpg"  style="width:100px" > </a>
            <a href="img00/curry3.png" download>
            <img src="img00/curry3.png"  style="width:100px" > </a>
            <a href="img00/curry4.png" download>
            <img src="img00/curry4.png"  style="width:100px" > </a>
					</p>
					<p><img class="wakusen alignnone wp-image-1082 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/wordpress-homepage-54.png" alt="WordPressで作るホームページで、サイドバーに最新記事を表示する">
					</p>
					<h3 id="29">10-1最新記事一覧を表示する</h3>
					<p>
						サイドバーの表示管理はウィジェットで行います。
					</p>
					<p>
						<strong>ダッシュボード＞ウィジェット</strong>
						<br>
						編集画面で以下のように「[S]新着記事」を「サイドバーウィジェット」にドラッグ＆ドロップで追加します。
					</p>
					<p><img class="wakusen alignnone wp-image-1083 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/wordpress-homepage-55.png" alt="WordPressのウィジェット編集画面で、サイドバーウィジェットに「[S]新着記事」ウィジェットを追加する">
					</p>
					<p>
						新着記事の編集画面が表示されるので、好みによって変更しましょう。
					</p>
					<p>
						変更できたら保存をクリックして表示を確認してみましょう。
					</p>
					<p><img class="wakusen alignnone wp-image-1085 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/wordpress-homepage-57.png" alt="サイドバーに最新記事が表示されたWordPressのホームページ">
					</p>
					<p>
						一記事のみの表示では寂しいので、投稿記事はどんどん追加していきましょう。
					</p>
					<p><img class="wakusen alignnone wp-image-1082 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/wordpress-homepage-54.png" alt="サイドバーに最新記事が表示されたWordPressのホームページ">
					</p>
					<p>
						※投稿記事一覧に表示されるアイキャッチは、記事編集画面で以下の赤枠で囲まれた場所から設定することが可能です。
					</p>
					<p><img class="wakusen alignnone wp-image-1087 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/wordpress-homepage-59.png" alt="WordPressの投稿記事にアイキャッチ画像を設定する方法">
					</p>
					<h2 id="31">11．TOPページを作りこむ</h2>
					<p>
						これまでの作業でずいぶんホームページの完成形が見えてきました。あともう一息でホームページを完成させることができるので、がんばってみましょう。
					</p>
					<p>
						ここではトップページのコンテンツ内容を作り込んでいきましょう。
					</p>
					<p>
						今回のトップページのコンテンツとしては、店舗の紹介文やおすすめのメニューを載せます。トップページはホームページの顔になるので、ご自分のコンテンツを作る際はよりこだわってみてください。
					</p>
					<h3 id="32">11-1．お店の紹介文を載せる</h3>
					<p>
						以下のようにお店を紹介する文章を載せてみましょう。
					</p>
					<p><img class="wakusen alignnone wp-image-1088 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/wordpress-homepage-60.png" alt="トップページにお店の紹介文を表示させる">
					</p>
					<p>
						固定ページ一覧からトップページの編集画面を開いたら画像の下に文章を入力し、文章を中央寄せにして雰囲気を出してみましょう。
					</p>
					<p><img class="wakusen alignnone wp-image-1089 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/wordpress-homepage-61.png" alt="WordPressの固定ページ編集画面で、選択したテキストを中央に表示させる">
					</p>
					<h3 id="33">11-2．おすすめのメニュー一覧を表示する</h3>
					<p>
						次にギャラリー機能を使って以下のようなおすすめメニュー一覧を表示しましょう。
					</p>
					<p><img class="wakusen alignnone wp-image-1090 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/wordpress-homepage-62.png" alt="トップページのコンテンツとして、おすすめ一覧メニューのギャラリーを表示させる">
					</p>
					<p>
						ギャラリー機能を使うには、<b>固定ページ → 固定ページ一覧 → トップページ → 編集 →  
						メディアを追加→ 「ギャラリーを作成」 </b>をクリックします。
					</p>
					<p><img class="wakusen alignnone wp-image-1091 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/wordpress-homepage-63.png" alt="WordPressでの画像ギャラリー作成方法">
					</p>
					<p>
						ギャラリーに入れる画像を選択したら、キャプションにメニュー名を記入してみましょう。また、全体の幅をそろえるためにカラムは「4」に設定します。設定できたら「ギャラリーを挿入」をクリックしましょう。
					</p>
					<p><img class="wakusen alignnone wp-image-1092 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/wordpress-homepage-64.png" alt="WordPressのギャラリー編集画面で画像のキャプションを付け、表示カラムを設定する">
					</p>
					<p>
						画像がギャラリーとして表示されているのが確認できると思います。
					</p>
					<p><img class="wakusen alignnone wp-image-1093 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/wordpress-homepage-65.png" alt="おすすめメニュー一覧として画像ギャラリーが挿入された状態の固定ページ編集画面">
					</p>
					<h3 id="33">11-2-1．おすすめのメニュー一覧（見出し）を表示する</h3>
					<p>
						次に追加したギャラリーの上に、メニュー一覧を表す見出しを付けてみましょう。
					</p>
					<p>
						見出しは入力したテキストを選択して以下のタブから選択可能です。<br />ツールバーの切り替え(赤枠ボタン)をクリック→ 
						今回は「見出し2」を使いましょう。見出しを変更すると、テキストのサイズが変化することが確認できると思います。
					</p>
					<p><img class="wakusen alignnone wp-image-1152 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/wordpress-homepage-66.png" alt="おすすめメニュー一覧に見出しを付ける">
					</p>
					<p>
						ギャラリー一覧の上部に「メニュー」という見出しを表示させることができました。
					</p>
					<p><img class="wakusen alignnone wp-image-1090 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/wordpress-homepage-62.png" alt="トップページにおすすめメニュー一覧が表示された状態">
					</p>
					<p>
						&nbsp;
					</p>
					<p>
						見出しは一見どれでも使って良いように思えますが、実は使うための決まりがあります。見出しは目次の項目に相当するもので、目次と同じようにルールを無視してはいけません。
					</p>
					<p>
						WordPressにおける見出しの使い方は以下のように覚えておけば良いでしょう。
					</p>
					<p>
						<strong>WordPressにおける見出しの基本的な使い方</strong>
						<br>
						見出し１は最も大きいメインの表題、原則的には自動的につけられるので使わないようにします。
						<br>
						見出し２以下だけを使うと覚えておきましょう。
					</p>
					<p>
						見出しはページ内の目次として親子構造を示すために使うので、図示すれば以下のようになります。
					</p>
<pre>
 見出し1：お店の名前
	見出し２：会社概要
		見出し３：所在地
		  本文
		見出し３：電話番号
		見出し３：会社地図
		
	見出し２：会社沿革
		本文
	
	見出し２：代表者挨拶
		本文
</pre>
					<p>
						見出しを付ける時は、このように必ず文章の親子構造にしたがうようにしましょう。
						<br>
						なお、この「見出し」とはhnタグのことです。hnタグについて詳しく知りたい人は、こちらの記事をどうぞ：「<a href="https://nandemo-nobiru.com/1816/" target="_blank">hnタグ（h1～h6）の正しい考え方と使用法</a>」
					</p>
					<h2 id="34">12．フッターを作る</h2>
					<p>
						最後に、フッターに店舗情報を表示してみましょう。
					</p>
					<p><img class="wakusen alignnone wp-image-1095 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/wordpress-homepage-67.png" alt="ウィジェットを使ってフッターに店舗情報を表示させる">
					</p>
					<p>
						フッターにテキストを表示するにはフッターウィジェットを使用します。
					</p>
					<p>
						ウィジェットの編集画面から「フッター左」のタブを開いて、「テキスト」をドラッグ＆ドロップしましょう。
					</p>
					<p><img class="wakusen alignnone wp-image-1096 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/wordpress-homepage-68.png" alt="ウィジェット編集画面で、ウィジェットにテキストウィジェットを追加する">
					</p>
					<p>
						次に「テキスト」ウィジェットの編集画面を開いて以下のように店舗情報を入力していきます。 	</p>
					<p><img class="wakusen alignnone wp-image-1097 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/wordpress-homepage-69.png" alt="テキストウィジェットの内容編集画面で、店舗情報を入力する">
					</p>
					<p>
						入力したら「保存」をクリックしましょう。
					</p>
					<p>
						これでフッターに店舗情報を表示することができます。
					</p>
					<p><img class="wakusen alignnone wp-image-1098 size-full" style="max-width: 758px; width: 100%; height: auto;" src="img00/wordpress-homepage-70.png" alt="店舗情報が表示された状態のフッター">
					</p>
					<h2 id="35">13．まとめ</h2>
					<p>
						今回はWordPressでカレー屋さんのホームページを作る手順を解説してきました。
					</p>
					<p>
						WordPressでホームページを作ろうとした時、WordPressの仕組みがわからず進められないと感じられていたかもしれません。
						<br>
						ですが実際にやってみれば、とても簡単なことがわかったのではないでしょうか。
						<br>
						他にも、プラグインとよばれる機能拡張プログラムを導入することで、簡単に問い合わせフォームを設置したり、人気の記事をピックアップして表示したりできるようにもなります。
					</p>
					<p>
						WordPressでホームページを作れば、きめ細かい情報発信によって集客できる仕組みを整えることができます。さらに変更したい箇所やカスタマイズも自由に行えるので、実情に則した機動的なホームページの運営が可能になります。
						<br>
						Webでの集客を考えている人は、この記事を足がかりに、まずはWordPressでホームページを作ってみてはいかがでしょうか。
					</p>

				</div>

			</div>

		</div>



	</body>
</html>