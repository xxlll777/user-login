<?php
$root_url = get_stylesheet_directory_uri() ;
$css_url = $root_url . "/css";
$img_url = $root_url . "/images";
$js_url  = $root_url . "/js";
?>

<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>Users</title>
	<link rel="stylesheet" href="<?php echo $css_url; ?>/style.css">
</head>
<body>

<form action="users.php" name="" method="post" enctype="application/x-www-form-urlencoded">
	<div class="registration">
		<div class="reg__ttl">
			ユーザー登録
		</div>
		<div class="reg__name">
			<p></p>
			<input type="text" name="name" placeholder="Name">
		</div>
		<div class="reg__email">
			<input type="text" name="email" placeholder="Email">
		</div>
		<div class="reg__pass">
			<input type="password" name="password" placeholder="Password">
		</div>
		<div class="reg__btn">
			<input type="submit" name="" value="登録">
		</div>

	</div>
</form>

</body>
</html>