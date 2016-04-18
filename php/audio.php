		<?php
			$handle = fopen( $_FILES['file']['tmp_name'], 'r');
			$newfile = fopen('./../audio/users/user.mp3', 'w');

			while (! feof($handle)) {
				$text = fgets($handle);
				fwrite($newfile, $text);
			}
			fclose($handle);

			$val = '123';

			setcookie("isUserAudio", $_POST['delay'], time()+3600, '/');
			
			header("Location: http://localhost/public/video-player-with-captions/index.html");
			die();
 		  ?>


