<div class="confirm-title">申し込み内容確認</div>
<div class="confirm-main">
	<div class="confirm-item">
		<div class="item-title">氏名</div>
		<div><?php echo $user->getName() ?></div>
	</div>
	<div class="confirm-item">
		<div class="item-title">カナ</div>
		<div><?php echo $user->getKana() ?></div>	
	</div>
	<div class="confirm-item">
		<div class="item-title">生年月日</div>
		<div><?php echo $user->getBirthday() ?></div>
	</div>
	<div class="confirm-item">
		<div class="item-title">性別</div>
		<div><?php echo $user->getGender() ?></div>
	</div>
	<div class="confirm-item">
		<div class="item-title">email</div>
		<div><?php echo $user->getEmail() ?></div>
	</div>
	<div class="confirm-item">
		<div class="item-title">電話番号</div>
		<div><?php echo $user->getPhoneNumber() ?></div>
	</div>
	<div class="confirm-item">
		<div class="item-title">所属</div>
		<div><?php echo $user->getGroup() ?></div>
	</div>
	<div class="confirm-item">
		<div class="item-title">申し込み理由</div>
		<div><?php echo $user->getReason() ?></div>
	</div>
	<div class="confirm-item">
		<div class="item-title">今後プログラミングをどう活かしていきたいと考えていますか？（任意）</div>
		<div><?php echo $user->getUsage() ?></div>
	</div>
	<div class="confirm-item">
		<div class="item-title">参加条件</div>
	</div>

	
	<div class="confirm-submit">登録する</div>
</div>
