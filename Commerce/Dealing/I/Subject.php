<?php
 namespace gcl\Commerce\Dealing\I;

 interface Subject extends \gcl\Abstraction\Dealing\I\Subject
 {
    public function product();
    public function payment();
 }