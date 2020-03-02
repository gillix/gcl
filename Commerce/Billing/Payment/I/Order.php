<?php
 namespace gcl\Commerce\Billing\Payment\I;

 use gcl\Commerce\Billing\I\Transaction;
 use glx\Common\I\Entity;
 use gcl\Commerce\I\Money;
 use gcl\Commerce\Billing\Processing;
 use glx\Locale\I\DateTime;

 interface Order extends Entity
 {
    public function amount(): Money;
    public function method(): Method;
    public function provider(): Processing\I\Provider;
    public function status(): string;
    public function created(): DateTime;
    public function paid(Money $received): Transaction;
    public function cancel(): void;
    public function refund(): void;
    public function transaction(): Transaction;
 }
 
 