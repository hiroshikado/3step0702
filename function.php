<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8" >
	<title>様々な関数を使ってみよう</title>
	<link rel="stylesheet" href="/php/css/skyblue.css">
</head>
<body>
	<div class="bg-success padding-y-20">
		<div class="container text-center">
			<h1>様々な関数を使ってみよう</h1>
		</div>
	</div>
	<div class="container padding-y-20">
		<h2>ファイルを読み込む関数</h2>
		<!-- ここから -->
		<?php require_once("target.html"); ?>
		<!-- ここまで -->

		<h2>タグを表示しよう</h2>
		<!-- ここから -->
		<?php echo htmlspecialchars( "<h3>タグを表示！</h3>", ENT_QUOTES ); ?>
		<!-- ここまで -->

		<h2>文字列を操作しよう</h2>
		<h3>文字列の長さは?</h3>
		<!-- ここから -->
		「あいうえお」は<?php echo mb_strlen( "あいうえお" ); ?>文字です。
		<!-- ここまで -->
		<h3>文字列を抜き出そう!</h3>
		<!-- ここから -->
		<?php 
		$str = "あいうえお";
		?>
		<?php echo $str; ?>の1文字目から３文字分を抜き出すと、「<?php echo mb_substr( $str, 0, 3 ); ?>」です。
		<!-- ここまで -->
	</div>
</body>
</html>
