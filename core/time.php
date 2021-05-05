<?php

    class time {

        public $day;
        public $mouth;
        public $year;
        public $hour;
        public $minutes;
        public $seconds;

        public function __construct() {

            $this->day = date('d');
            $this->mouth = date('m');
            $this->year = date('y');

            $this->hours = date('h');
            $this->minutes = date('i');
            $this->seconds = date('s'); 

        }

        public function today($separator) {

            return $this->day.$separator.$this->mouth.$separator.$this->year;
        }

        public function currentTime($separator) {

            return $this->hours.$separator.$this->minutes.$separator.$this->seconds;
        }

        public function now() {

            return $this->today('/').' '.$this->currentTime(':');
        }

        public function fileTime() {

            return $this->today('_').'_'.$this->currentTime('-');
        }
    }