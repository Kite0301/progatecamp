<?php use_helper('Validation', 'Object', 'DateForm') ?>

<div class="top">
	<div class="top-background">
		<div class="top-title">
			<div class="title">Learn to <span class="theme-color">Code</span>, Learn to be <span class="theme-color">Creative</span></div>
			<div class="title-sub">− ９週間・５００時間 <!-- -</div>
			<div class="title-sub">−  -->倍速で成長するプログラミングキャンプ −</div>
		</div>
		<div class="top-main">
			<ul class="top-list">
				<li>プログラミング経験は不問</li>
				<li>２ヶ月でゼロからWEBサービスを立ち上げ、プログラミングを習得する</li>
				<!-- <li>事前課題・全体学習・個人課題・質問会を通した、もれのないカリキュラム</li> -->
			</ul>
			<div class="register-now">
				<div id="register-btn" class="register-btn">今すぐ申し込む</div>
			</div>
		</div>
	</div>
	<video autoplay loop src="/progate_camp/videos/camp.mp4"></video>
</div>

<div id="about" class="about">
	<div class="container">
		<h2 class="about-top">What is <span class="theme-color">P</span>rogate <span class="theme-color">C</span>amp</h2>
		<div class="about-bottom">
			<div class="about-text-wrapper">
				<div class="about-text">
					<p>Progate Campとは、プログラミングに興味のある方、エンジニアとしての就職・転職したい方のために用意されたプログラミング開発合宿です。</p>
					<p>プログラミング未経験の方でも、２ヶ月でゼロからサービス立ち上げまでを体験できるカリキュラムを用意しています。</p>
					<p>Progateのプロフェッショナル開発チームがメンターとしてサポートし、一日目からプログラミングにどっぷり触れていきます。</p>
				</div>
			</div>
			<div class="about-image-wrapper">
				<div class="about-image"><?php echo image_tag('about2.png') ?></div>
			</div>
		</div>
	</div>
</div>

<div id="feature" class="feature">
	<div class="container">
		<div class="feature-top"><span class="theme-color">特</span>徴</div>
		<div class="feature-bottom">
			<div class="feature-image-wrapper">
				<div class="feature-image"><?php echo image_tag('feature3.png') ?></div>
			</div>
			<div class="feature-text">
				<div class="feature-item">
					<div class="feature-item-title">☆オンラインとオフラインの組み合わせ☆</div>
					<div class="feature-item-text">Progateの強みはオンラインの学習プラットフォームを持つことです。ここで基礎を学び、合宿で実践スキルを学ぶことで、成長度合いは格段にあがります。</div>
				</div>
				<div class="feature-item">
					<div class="feature-item-title">☆９週間・５００時間の超集中型キャンプ☆</div>
					<div class="feature-item-text">毎日平均９時間コードを書くことで、超短期でのプログラミングの習得を目指します。</div>
				</div>
				<div class="feature-item">
					<div class="feature-item-title">☆自由に泊まれる宿泊施設☆</div>
					<div class="feature-item-text">合宿所で自由に泊まっていただき、極力長い時間を合宿所で過ごして開発に集中していただきます。</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="learn">
	<div class="container">
		<div class="learn-top"><span class="theme-color">学</span>習内容</div>
		<div class="learn-bottom">
			<div class="learn-row">
				<div class="learn-item">
					<div class="learn-item-inner">
						<div class="item-cover">
							<div class="item-cover-text">
								<p>ウェブページの見た目の骨組みを作るために使用される言語です。</p>
								<p>ページの各部分に、「見出し」「段落」「画像」などの意味を与えていきます。</p>
							</div>
						</div>
						<div class="item-top">HTML</div>
						<div class="item-bottom"><?php echo image_tag('html.png') ?></div>
					</div>
				</div>
				<div class="learn-item">
					<div class="learn-item-inner">
						<div class="item-cover">
							<div class="item-cover-text">
								<p>HTMLと組み合わせて使用され、それを装飾する言語です。</p>
								<p>文字の色、大きさ、背景の色や配置などを指定することができます。</p>
							</div>
						</div>
						<div class="item-top">CSS</div>
						<div class="item-bottom"><?php echo image_tag('css.png') ?></div>
					</div>
				</div>
				<div class="learn-item">
					<div class="learn-item-inner">
						<div class="item-cover">
							<div class="item-cover-text">
								<p>動的なページを作るのに用いられる言語です。</p>
								<p>Rubyではユーザーの送信した値によって表示するテキストを変えたり、データを保存できたりします。</p>
							</div>
						</div>
						<div class="item-top">Ruby</div>
						<div class="item-bottom"><?php echo image_tag('ruby.png') ?></div>
					</div>
				</div>
			</div>
			<div class="learn-row">
				<div class="learn-item">
					<div class="learn-item-inner">
						<div class="item-cover">
							<div class="item-cover-text">
								<p>Rubyのフレームワークです。</p>
								<p>Webアプリケーションを作る上で必須な機能がひとまとめにされています。</p>
							</div>
						</div>
						<div class="item-top">Ruby on Rails</div>
						<div class="item-bottom"><?php echo image_tag('rails.png') ?></div>
					</div>
				</div>
				<div class="learn-item">
					<div class="learn-item-inner">
						<div class="item-cover">
							<div class="item-cover-text">
								<p>jQueryはJavaScriptライブラリの1つです。</p>
								<p>ユーザーのクリックで表示されるリストやアニメーションなど、様々な動きを表現することができます。</p>
							</div>
						</div>
						<div class="item-top">jQuery</div>
						<div class="item-bottom"><?php echo image_tag('jquery.png') ?></div>
					</div>
				</div>
				<div class="learn-item">
					<div class="learn-item-inner">
						<div class="item-cover">
							<div class="item-cover-text">
								<p>Gitはバージョン管理に用いられるシステムです。</p>
								<p>多人数でコードを共有したり、過去のコードに戻ったりするために用いられます。</p>
							</div>
						</div>
						<div class="item-top">Git</div>
						<div class="item-bottom"><?php echo image_tag('github.png') ?></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="info">
	<div class="container">
		<div class="info-top"><span class="theme-color">第</span>１回キャンプ</div>
		<div class="info-bottom">
			<div class="info-main">
				<div class="info-main-title">11月・12月 田端</div>
				<div class="info-main-list">
					<div class="info-main-item">
						<div class="info-item-left"><span class="theme-color">定</span>員</div>
						<div class="info-item-right">16名</div>
					</div>
					<div class="info-main-item">
						<div class="info-item-left"><span class="theme-color">日</span>程</div>
						<div class="info-item-right">11月2日から12月31日<br></div>
					</div>
					<!-- <div class="info-main-item">
						<div class="info-item-left"><span class="theme-color">時</span>間</div>
						<div class="info-item-right">10:00~19:00</div>
					</div> -->
					<div class="info-main-item">
						<div class="info-item-left"><span class="theme-color">場</span>所</div>
						<div class="info-item-right">JR田端駅徒歩5分</div>
					</div>
					<!-- <div class="info-main-item">
						<div class="info-item-left"><span class="theme-color">参</span>加費</div>
						<div class="info-item-right">¥30,000(今回のみの特別金額です)</div>
					</div> -->
					<div class="info-main-item">
						<div class="info-item-left"><span class="theme-color">参</span>加条件</div>
						<div class="info-item-right">①パソコン持参<br>②所定の事前課題の完了</div>
					</div>
					<div class="info-main-item">
						<div class="info-item-left"><span class="theme-color">事</span>前課題</div>
						<div class="info-item-right">Progate (prog-8.com) のHTML, PHP, jQueryレッスン</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="schedule" class="schedule">
	<div class="schedule-top"><span class="theme-color">S</span>chedule</div>
	<div class="schedule-item">
		<div class="schedule-week">
			<div>事前課題</div>
		</div>
		<div class="schedule-item-text">
			<div class="schedule-title-wrapper"><div class="schedule-title"><span class="theme-color">P</span>rogateで予習しよう</div></div>
			<div class="schedule-text">
				<div class="schedule-link"><?php echo link_to('Progate', 'http://prog-8.com') ?></div>のHTML&CSS, PHP, jQueryレッスンを終わらせて、プログラミングの基礎を身につけましょう。<br>
				<div class="schedule-link"><?php echo link_to('ドットインストール', 'http://dotinstall.com/lessons/basic_ruby_v2') ?></div>のRuby入門を見て、Rubyの書き方を覚えましょう。
			</div>
		</div>
	</div>
	<div>掲示板をつくろう</div>
	<div class="schedule-item">
		<div class="schedule-week">
			<div>Week 1</div>
		</div>
		<div class="schedule-item-text">
			<div class="schedule-title-wrapper"><div class="schedule-title"><span class="theme-color">W</span>ebアプリ開発に触れてみよう</div></div>
			<div class="schedule-text">
				プログラミングの基本であるターミナルの操作に慣れましょう。<br>
				GitとGithubの使い方を覚えて、バージョン管理の方法を学びましょう。<br>
				Ruby on Railsに触れてみることで、Webアプリケーション開発の基礎を学びましょう。
			</div>
		</div>
	</div>
	<div class="schedule-item">
		<div class="schedule-week">
			<div>Week 2</div>
		</div>
		<div class="schedule-item-text">
			<div class="schedule-title-wrapper"><div class="schedule-title"><span class="theme-color">T</span>witterを作ろう</div></div>
			<div class="schedule-text">
				Ruby on Railsのチュートリアルを通じて、TwitterのようなWebアプリケーションを作っていきましょう。<br>
				作ったアプリケーションをサーバーにアップロードして公開する方法を学びましょう。<br>
				Web開発に使えるデザインツールに触れてみましょう。
			</div>
		</div>
	</div>
	<div class="schedule-item">
		<div class="schedule-week">
			<div>Week 3</div>
		</div>
		<div class="schedule-item-text">
			<div class="schedule-title-wrapper"><div class="schedule-title"><span class="theme-color">自</span>分のアプリケーションを作ろう</div></div>
			<div class="schedule-text">
				チュートリアルを完成させましょう。<br>
				自分のオリジナルのアプリケーションについてブレインストームをしましょう。<br>
				二人一組になって、オリジナルのアプリケーションの開発を始めましょう。
			</div>
		</div>
	</div>
	<div class="schedule-item">
		<div class="schedule-week">
			<div>Week 4</div>
		</div>
		<div class="schedule-item-text">
			<div class="schedule-title-wrapper"><div class="schedule-title"><span class="theme-color">基</span>本機能を作ろう</div></div>
			<div class="schedule-text">
				アプリケーションの基本となる機能のシステムを構築していきましょう。<br>
				データベースと自分のアプリケーションを接続しましょう。<br>
				Githubを用いた複数人でのバージョン管理に慣れましょう。
			</div>
		</div>
	</div>
	<div class="schedule-item">
		<div class="schedule-week">
			<div>Week 5</div>
		</div>
		<div class="schedule-item-text">
			<div class="schedule-title-wrapper"><div class="schedule-title"><span class="theme-color">見</span>た目を整えよう</div></div>
			<div class="schedule-text">
				基本機能ができたら、そこにデザインを加えて見栄えをよくしていきましょう。<br>
				簡単に使えるデザインツールを活用しましょう<br>
			</div>
		</div>
	</div>
	<div class="schedule-item">
		<div class="schedule-week">
			<div>Week 6 - 7</div>
		</div>
		<div class="schedule-item-text">
			<div class="schedule-title-wrapper"><div class="schedule-title"><span class="theme-color">機</span>能を拡張しよう</div></div>
			<div class="schedule-text">
				自分のアプリケーションにバグがある場合は、デバッグを行いましょう。<br>
				また、様々な機能を追加して改良していきましょう。<br>
			</div>
		</div>
	</div>
	<div class="schedule-item">
		<div class="schedule-week">
			<div>Week 8</div>
		</div>
		<div class="schedule-item-text">
			<div class="schedule-title-wrapper"><div class="schedule-title"><span class="theme-color">ユ</span>ーザーテストをしよう</div></div>
			<div class="schedule-text">
				お互いのアプリケーションに対してフィードバックをしましょう。<br>
				フィードバックをもとに、アプリケーションを改良していきましょう。
			</div>
		</div>
	</div>
	<div class="schedule-item">
		<div class="schedule-week">
			<div>Week 9</div>
		</div>
		<div class="schedule-item-text">
			<div class="schedule-title-wrapper"><div class="schedule-title"><span class="theme-color">D</span>emo Dayに備えよう</div></div>
			<div class="schedule-text">
				アプリケーションの最後の調整を行いましょう。<br>
				Demo Dayに向けて準備をしましょう<br>
				自分のアプリケーションを紹介しましょう。
			</div>
		</div>
	</div>
</div>

<div id="entry" class="entry">
	<?php echo form_tag('user/confirm') ?>
	<div class="entry-top"><span class="theme-color">第</span>一回キャンプ　<span class="theme-color">申</span>し込み</div>
	<div class="entry-bottom">

		<div class="entry-item">
			<div class="entry-title">氏名</div>
			<?php echo form_error('name') ?>
			<div class="entry-input form-group"><?php echo input_tag('name', '', array('placeholder' => '氏名', 'class' => 'form-control')) ?></div>
		</div>
		<div class="entry-item">
			<div class="entry-title">カナ</div>
			<?php echo form_error('kana') ?>
			<div class="entry-input form-group"><?php echo input_tag('kana','', array('placeholder' => 'カナ', 'class' => 'form-control'))?></div>
		</div>
		<div class="entry-item">
			<div class="entry-title">生年月日</div>
			<div class="entry-input form-group">
				<?php echo select_year_tag('year', '1980', array('year_start' => date('Y'), 'year_end' => '1910')) ?>年
				<?php echo select_month_tag('month', '1', array('use_month_numbers'=>true)) ?>月
				<?php echo select_day_tag('day', '1') ?>日
			</div>
		</div>
		<div class="entry-item">
			<div class="entry-title">性別</div>
			<?php echo form_error('gender') ?>
			<div class="entry-input form-group">
				<label class="radio-inline"><?php echo radiobutton_tag('gender', '男性') ?>男性</label>
				<label class="radio-inline"><?php echo radiobutton_tag('gender', '女性') ?>女性</label>
			</div>
		</div>
		<div class="entry-item">
			<div class="entry-title">email</div>
			<?php echo form_error('email') ?>
			<div class="entry-input form-group"><?php echo input_tag('email','', array('placeholder' => '連絡のとりやすいアドレスを入力してください。', 'class' => 'form-control'))?></div>
		</div>
		<div class="entry-item">
			<div class="entry-title">電話番号</div>
			<?php echo form_error('phone_number') ?>
			<div class="entry-input form-group"><?php echo input_tag('phone_number','', array('placeholder' => '連絡のとりやすい電話番号を入力してください。', 'class' => 'form-control'))?></div>
		</div>
		<div class="entry-item">
			<div class="entry-title">所属</div>
			<?php echo form_error('background') ?>
			<div class="entry-input form-group"><?php echo input_tag('background','', array('placeholder' => '職業、もしくは学校名等を入力してください。', 'class' => 'form-control'))?></div>
		</div>
		<div class="entry-item">
			<div class="entry-title">申し込み理由</div>
			<?php echo form_error('reason') ?>
			<div class="entry-input form-group-long"><?php echo textarea_tag('reason','', array('placeholder' => '（400字以内。申込者多数の場合、この内容を参考に致します）', 'class' => 'form-control'))?></div>
		</div>
		<div class="entry-item">
			<div class="entry-title">今後プログラミングをどう活かしていきたいと考えていますか？（任意）</div>
			<div class="entry-input form-group-long"><?php echo textarea_tag('prospect','', array('placeholder' => '（400字以内。スタッフとの相談会の際に参考にさせて頂きます。）', 'class' => 'form-control'))?></div>
		</div>
		<div class="entry-item">
			<div class="entry-title">参加条件</div>
			<div id="entry-checkbox" class="entry-input form-group">
				<label>
					<?php echo checkbox_tag('first', 1, false) ?>
					<div class="entry-checkbox">パソコンを持参します。</div>
				</label>
				<label>
					<?php echo checkbox_tag('second', 1, false) ?>
					<div class="entry-checkbox">事前に渡される課題をこなします。</div>
				</label>
				<label>
					<?php echo checkbox_tag('third', 1, false) ?>
					<div class="entry-checkbox">２ヶ月間の合宿にできるだけ参加します。</div>
				</label>
			</div>
		</div>
		<div class="entry-submit">
			<button id="submit" type="submit" class="register-btn">申し込む</button>
		</div>
	</div>
</div>

<script>

$(function() {
	$('.learn-item-inner').hover(
		function() {
			$(this).children('.item-cover').fadeIn();
		},
		function() {
			$(this).children('.item-cover').fadeOut();
		}
		);
	});

	$('#submit').click(function(event) {
		var $checkbox = $('#entry-checkbox').find('input[type="checkbox"]');

		for (var i = 0; i < 3; i++)
		{
			if (!$checkbox.eq(i).attr("checked"))
			{
				window.alert('すべての項目にチェックしていただけないと申し込みできません。');
				event.preventDefault();
				break;
			}
		}
	});

	$("#register-btn").click(function () {
		var p = $("#entry").offset().top;
		$('html,body').animate({ scrollTop: p }, '2000');
		return false;
	});

</script>