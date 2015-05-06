<?php   
    class Service{
        
        protected $_username, $_service;

        public function __construct($data) {
           $this->_service = ucfirst($data[0]);
           $this->_username = $data[1];
        }

        public function getPlayer(){
            echo $this->_service . " Player for stream: " . $this->_username . " is currently unavailable.";
        }

    }
?>