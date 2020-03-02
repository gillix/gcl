<?php
 namespace gcl\Commerce\Billing\Processing\I;

 use gcl\Commerce\Billing\Payment;
 use glx\Common\I\Entity;
 use glx\HTTP;

 interface Provider extends Entity
 {
    public function label(): string;
    public function method(): Payment\I\Method;
    public function title(): string;
    public function description(): string;
    public function gate(): HTTP\I\URI;
    public function currencies(): iterable;
 }
 