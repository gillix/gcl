<?php
 namespace gcl\Commerce\Billing\I;

 use glx\Common\I\Entity;
 use glx\Locale\I\DateTime;
 use gcl\Commerce;

 interface Transaction extends Entity
 {
    public function amount(): Commerce\I\Money;
    public function sender(): Entity;
    public function receiver(): Entity;
    public function related(): Entity;
    public function label(): string;
    public function time(): DateTime;
    public function info(): iterable;
    public function refundable(Commerce\I\Money $amount = NULL): self;
 }
 