<?php
 namespace gcl\Commerce\Dealing\I;

 use glx\Common\I\Resource;

 interface Delivery extends Resource
 {
    public function send();
    public function status();
    public function event();
 }