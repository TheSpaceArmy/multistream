<?php   
    class Ustream extends Service{
        public function getPlayer(){
            echo '<a class="embedly-card" data-card-chrome="0" href="http://www.ustream.tv/' . $this->_username . '">NASA Public</a>
                <script async src="//cdn.embedly.com/widgets/platform.js" charset="UTF-8"></script>';
        }
    }
?>