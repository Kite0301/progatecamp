<?php use_helper('Validation', 'Object', 'DateForm') ?>

<div class="header">
	<div class="container">
		<div class="header-logo theme-color">
			<h2>PROGATE CAMP</h2>
		</div>
		<div class="header-navi">
			<ul class="navi-item">
				<li><?php echo link_to('About', '#about') ?></li>
				<li><?php echo link_to('特徴', '#about') ?></li>
				<li><?php echo link_to('Schedule', '#schedule') ?></li>
				<li><?php echo link_to('申し込み', '#entry') ?></li>
		</div>
	</div>
</div>

<div class="top">
	<div class="top-background">
		<div class="top-title">
			<div class="title">Learn to <span class="theme-color">Code</span>, Learn to be <span class="theme-color">Creative</span></div>
			<div class="title-sub">−学歴・年齢不問。志あるものが集い、倍速で成長する−</div>
		</div>
		<div class="top-main">
			<ul class="top-list">
				<li>・プログラミング経験は不問</li>
				<li>・１ヶ月でゼロからwebサービスを立ち上げ、リリースまでを体験する</li>
				<li>・事前課題・全体学習・個人課題・質問会を通した、もれのないカリキュラム</li>
			</ul>
		</div>
	</div>
	<video autoplay loop src="/progatecamp/videos/camp.mp4"></video>
</div>

<div id="about" class="about">
	<div class="container">
		<h2 class="about-top">What is <span class="theme-color">P</span>rogate <span class="theme-color">C</span>amp</h2>
		<div class="about-bottom">
			<div class="about-text-wrapper">
				<div class="about-text">
					<p>Progate Campとは、オンラインのプログラミング学習サービスProgateの開発チームが、リアルで行うプログラミング学習講座です。</p>
					<p>プログラミング未経験でも、１ヶ月でゼロからサービス立ち上げまでを体験できるカリキュラムを用意しています。</p>
					<p>プログラミングに興味がある方、エンジニアとしての就職・転職を考える方、自分でサービスを立ち上げたい方、エンジニアの仕事を理解したい方、ぜひ参加してみませんか。</p>
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
					<div class="feature-item-text">Progateの強みはオンラインの学習プラットフォームを持つことです。ここで基礎を学び、リアルで実践スキルを学ぶ。こうすることで、1ヶ月の成長度合いは格段にあがります。</div>
				</div>
				<div class="feature-item">
					<div class="feature-item-title">☆日曜日の個別サポート☆</div>
					<div class="feature-item-text">日曜日は希望者向けに質問会を設けております。土曜日の講義で理解不足のところ、課題のわからないところを質問できます。</div>
				</div>
				<div class="feature-item">
					<div class="feature-item-title">☆プログラミングの活用方法の相談（希望者）☆</div>
					<div class="feature-item-text">プログラミングを学んで、今後それをどう活用していくかProgateのメンバーが相談にのります。</div>
				</div>
				<div class="feature-item">
					<div class="feature-item-title">☆キャンプ後の２ヶ月はスカイプなどで、参加者をバックアップ（選考あり）☆</div>
					<div class="feature-item-text">サービス開発や明確なスキルアップ目的のある方に限って、2ヶ月無料でオンラインオフライン問わず、支援致します。</div>
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
								<p>HTMLと違い、PHPではユーザーの送信した値によって表示するテキストを変えたり、データを保存できたりします。</p>
							</div>
						</div>
						<div class="item-top">PHP</div>
						<div class="item-bottom"><?php echo image_tag('php.png') ?></div>
					</div>
				</div>
			</div>
			<div class="learn-row">
				<div class="learn-item">
					<div class="learn-item-inner">
						<div class="item-cover">
							<div class="item-cover-text">
								<p>jQueryはJavaScriptライブラリの1つです。</p>
								<p>ユーザーのクリックに反応して表示されるリストや、アニメーションなど、様々な動きを表現することができます。</p>
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
				<div class="learn-item">
					<div class="learn-item-inner">
						<div class="item-cover">
							<div class="item-cover-text">
								<p>MySQLはデータベースを管理するシステムです。</p>
								<p>自分のプログラムをMySQLと連携させることで、膨大なデータを扱うことが可能になります。</p>
							</div>
						</div>
						<div class="item-top">MySQL</div>
						<div class="item-bottom"><?php echo image_tag('mysql.png') ?></div>
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
				<div class="info-main-title">11/8~29 東京</div>
				<div class="info-main-list">
					<div class="info-main-item">
						<div class="info-item-left"><span class="theme-color">定</span>員</div>
						<div class="info-item-right">15名</div>
					</div>
					<div class="info-main-item">
						<div class="info-item-left"><span class="theme-color">日</span>程</div>
						<div class="info-item-right">・毎週土曜日（11/8, 11/15, 11/22, 11/29）全４回<br>  
	・日曜日は質問会（自由学習日）</div>
					</div>
					<div class="info-main-item">
						<div class="info-item-left"><span class="theme-color">時</span>間</div>
						<div class="info-item-right">10:00~19:00</div>
					</div>
					<div class="info-main-item">
						<div class="info-item-left"><span class="theme-color">場</span>所</div>
						<div class="info-item-right">株式会社Bitcellar本社オフィス<br>(麻布十番駅徒歩5分)</div>
					</div>
					<div class="info-main-item">
						<div class="info-item-left"><span class="theme-color">参</span>加費</div>
						<div class="info-item-right">¥20,000</div></div>
					<div class="info-main-item">
						<div class="info-item-left"><span class="theme-color">参</span>加条件</div>
						<div class="info-item-right">①パソコン持参<br>②所定の事前課題の完了<br>③全４回の講義に出席</div>
					</div>
					<div class="info-main-item">
						<div class="info-item-left"><span class="theme-color">事</span>前課題</div>
						<div class="info-item-right">Progate (prog-8.com) のHTML, PHPレッスン</div></div>
				</div>
			</div>
			<div class="info-company">
				<div class="info-main-title">Bitcellar 協賛</div>
				<div class="info-main-list">
					<div class="info-company-item">
						<div class="info-company-text">「Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id. Sed rhoncus, tortor sed eleifend tristique, tortor mauris molestie elit, et lacinia ipsum quam nec dui. 」</div>
						<div class="info-company-name">秋山 博紀 / UI・UX engineer</div>
						<div class="info-company-image"></div>
					</div>
					<div class="info-company-item">
						<div class="info-company-text">「Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id. Sed rhoncus, tortor sed eleifend tristique, tortor mauris molestie elit, et lacinia ipsum quam nec dui. 」</div>
						<div class="info-company-name">川村　亮介 / 代表取締役社長</div>
						<div class="info-company-image"></div>
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
			<div>０週目</div>
		</div>
		<div class="schedule-item-text">
			<div class="schedule-title">ProgateでHTMLとPHPを覚えよう！</div>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit </p>
			<span></span>
		</div>
	</div>
	<div class="schedule-item">
		<div class="schedule-week">
			<div>１週目</div>
		</div>
		<div class="schedule-item-text">
			<div class="schedule-title">Gitでバージョン管理をしよう！</div>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit </p>
			<span></span>
		</div>
	</div>
	<div class="schedule-item">
		<div class="schedule-week">
			<div>２週目</div>
		</div>
		<div class="schedule-item-text">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit </p>
			<span></span>
		</div>
	</div>
	<div class="schedule-item">
		<div class="schedule-week">
			<div>３週目</div>
		</div>
		<div class="schedule-item-text">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit </p>
			<span></span>
		</div>
	</div>
	<div class="schedule-item">
		<div class="schedule-week">
			<div>４週目</div>
		</div>
		<div class="schedule-item-text">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit </p>
			<span></span>
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
			<?php echo form_error('group') ?>
			<div class="entry-input form-group"><?php echo input_tag('group','', array('placeholder' => '職業、もしくは学校名等を入力してください。', 'class' => 'form-control'))?></div>
		</div>
		<div class="entry-item">
			<div class="entry-title">申し込み理由</div>
			<?php echo form_error('reason') ?>
			<div class="entry-input form-group-long"><?php echo textarea_tag('reason','', array('placeholder' => '（400字以内。申込者多数の場合、この内容を参考に致します）', 'class' => 'form-control'))?></div>
		</div>
		<div class="entry-item">
			<div class="entry-title">今後プログラミングをどう活かしていきたいと考えていますか？（任意）</div>
			<div class="entry-input form-group-long"><?php echo textarea_tag('usage','', array('placeholder' => '（400字以内。スタッフとの相談会の際に参考にさせて頂きます。）', 'class' => 'form-control'))?></div>
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
					<div class="entry-checkbox">毎週土曜日の講義に出席できます。</div>
				</label>
			</div>
		</div>
		<div class="entry-submit">
			<button id="submit" type="submit" class="register-btn">申し込む</button>
		</div>
	</div>
</div>

<footer id="top-footer">
	<div class="row">
		<div class="top-footer-title">Progate Camp</div>
		<div class="top-like-box">
			<iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FProgate%2F742679992421539&amp;width=380&amp;layout=standard&amp;action=like&amp;show_faces=true&amp;share=false&amp;height=80&amp;appId=296639803850370" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:380px; height:80px;" allowTransparency="true"></iframe>
		</div>
		<nav class="top-footer-menu">
			<div class="footer-menu-item">© 2014 Progate</div>
		</nav>
	</div>
</footer>

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

</script>