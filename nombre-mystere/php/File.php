<?php

    class File {

        private $filename;

        public function __construct($filename)
        {

            $this->filename = $filename;
        }

        function getFile() {

            if (file_exists($this->filename)) {
                return file_get_contents($this->filename);
            }
        }
    
        function setFile ($number) {

            if (file_exists($this->filename)) {
                return file_put_contents($this->filename, $number);
            }
        }
    }