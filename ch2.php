<?php
	require_once ('templates/header.php');


echo '<html>
	<head><title>Chat Login</title></head>
		<body>
			<form action="" method="post">
				Username: <input type="text" name="username">
				<input id="submit-my-ass" type="submit" value="Login">
			</form>
			<div id="loading">
				LOADING...
			</div>
			<div id="box">
				<table>
					<thead>
					</thead>
					<tbody>
					</tbody>
				</table>
			</div>


		</body>
	</html>';