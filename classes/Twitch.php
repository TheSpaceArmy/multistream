<?php   
    class Twitch extends Service{
        public function getPlayer(){
            echo '<div class="video-wrapper">';
            echo '    <object type="application/x-shockwave-flash" data="//www-cdn.jtvnw.net/swflibs/TwitchPlayer.swf" bgcolor="#000000">';
            echo '         <param name="allowFullScreen" value="true" />';
            echo '         <param name="allowScriptAccess" value="always" />';
            echo '         <param name="allowNetworking" value="all" />';
            echo '         <param name="movie" value="//www-cdn.jtvnw.net/swflibs/TwitchPlayer.swf" />';
            echo '         <param name="flashvars" value="channel=' . $this->_username . '&auto_play=true&start_volume=0" />';
            echo '     </object>';
            echo '</div>';
        }
    }
?>
