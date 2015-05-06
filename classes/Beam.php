<?php 	
	class Beam extends Service{
		public function getPlayer(){
			echo '<div class="video-wrapper">';
			echo '    <iframe src="https://beam.pro/embed/player/' . $this->_username . '" frameborder=0 seamless></iframe> ';
			echo '</div>';
		}
	}
?>