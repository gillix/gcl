<?php
 namespace gcl\Commerce\Dealing\I;

 use gcl\Abstraction;
 
 interface Deal extends Abstraction\I\Deal
 {
    public function seller(): Entity;
    public function buyer(): Entity;
 }