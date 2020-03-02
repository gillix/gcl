<?php
 namespace gcl\Abstraction\Dealing\I;

 use glx\Common\I\Entity;

 interface Deal
 {
    public function offeror(): Entity;
    public function acceptor(): Entity;
    public function subject(): Subject;
 }