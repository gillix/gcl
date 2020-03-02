<?php
 namespace gcl\Commerce\Billing\Payment\I;

 use gcl\Commerce\Billing\Processing;
 use gcl\Commerce\I\Money;

 interface Method
 {
    public function type(): string ;
    public function providers(): iterable;
    /** autodetect best provider */
    public function provider(): Processing\I\Provider;
    public function currencies(): iterable;
    public function payment(Money $amount): Order;
 }