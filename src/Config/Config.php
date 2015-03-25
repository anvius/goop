<?php

    namespace Config;

    class Config
    {
        protected $config_file = '';
        protected $values = array();
        
        public function __construct($config_file='')
        {
            if($config_file != '') {
                $this->loadFile($config_file);
            }
            
            return $this;
        }
        
        public function loadFile($config_file)
        {
            if(file_exists($config_file)) {
                $this->values = parse_ini_file($config_file, TRUE);
            }
            return $this;
        }
        
        public function get($value) {
            return $this->$values[$value];
        }
    }