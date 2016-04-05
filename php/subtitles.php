		<?php
			$handle = fopen( $_FILES['file']['tmp_name'], 'r');
			$newfile = fopen('./../subtitles/users/user.vtt', 'w');

			while (! feof($handle)) {
				$text = fgets($handle);
				fwrite($newfile, $text);
			}
			fclose($handle);

			$val = '123';

			setcookie("isUserSubtitles", true, time()+3600, '/');
			
			header("Location: http://localhost/public/video-player-with-captions/index.html");
			die();
 		  ?>


