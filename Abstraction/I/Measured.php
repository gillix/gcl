<?php
 namespace gcl\Abstraction\I;

 use glx\Common\I\Resource;

 interface Measured extends Resource
 {
    public function amount(): int;
    public function metric(): string;
 }