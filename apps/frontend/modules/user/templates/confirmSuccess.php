<div class="confirm">
	<div class="container">
		<div class="confirm-top"><span class="theme-color">申</span>し込みいただきありがとうございます</div>
		<div class="confirm-bottom">
			<h3 class="confirm-information">申し込み内容</h3>
			<div class="confirm-item">
				<div class="confirm-item-title">氏名</div>
				<div class="confirm-item-body"><?php echo $user->getName() ?></div>
			</div>
			<div class="confirm-item">
				<div class="confirm-item-title">カナ</div>
				<div class="confirm-item-body"><?php echo $user->getKana() ?></div>	
			</div>
			<div class="confirm-item">
				<div class="confirm-item-title">生年月日</div>
				<div class="confirm-item-body"><?php echo $user->getBirthday() ?></div>
			</div>
			<div class="confirm-item">
				<div class="confirm-item-title">性別</div>
				<div class="confirm-item-body"><?php echo $user->getGender() ?></div>
			</div>
			<div class="confirm-item">
				<div class="confirm-item-title">email</div>
				<div class="confirm-item-body"><?php echo $user->getEmail() ?></div>
			</div>
			<div class="confirm-item">
				<div class="confirm-item-title">電話番号</div>
				<div class="confirm-item-body"><?php echo $user->getPhoneNumber() ?></div>
			</div>
			<div class="confirm-item">
				<div class="confirm-item-title">所属</div>
				<div class="confirm-item-body"><?php echo $user->getBackground() ?></div>
			</div>
			<div class="confirm-item">
				<div class="confirm-item-title">申し込み理由</div>
				<div class="confirm-item-body"><?php echo $user->getReason() ?></div>
			</div>
			<div class="confirm-item">
				<div class="confirm-item-title">今後プログラミングをどう活かしていきたいと考えていますか？（任意）</div>
				<div class="confirm-item-body"><?php echo $user->getProspect() ?></div>
			</div>

			<div class="entry-submit">
				<div class="register-btn"><?php echo link_to('トップに戻る', 'top') ?></div>
			</div>
		</div>
	</div>
</div>