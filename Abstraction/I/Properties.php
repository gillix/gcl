<?php
 namespace gcl\Abstraction\I;

 interface Properties 
 {
    public function get(string $name);
    public function set(string $name, $value);
    public function save();
 }