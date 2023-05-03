<?php
    class Datarepo{
        public $username;
        public function set($username)
    {
        $this->username = $username;
    }
    public function get(): string
    {
        return $this->username;
    }
    }
?>