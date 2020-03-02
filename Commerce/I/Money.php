<?php
 namespace gcl\Commerce\I;

 use gcl\Abstraction;

 interface Money extends Abstraction\I\Measured
 {
    public function currency(): string;
 }