<?php
 namespace gcl\Commerce\Dealing;

 use gcl\Abstraction\Resource;

 class Measured extends Resource implements I\Measured
 {
    protected int $amount;
    protected string $metric;
  
    public function __construct(int $amount = 1, string $metric = 'unit')
    {
      $this->amount = $amount;
      $this->metric = $metric;
    }
 
    public function amount(): int
    {
      return $this->amount;
    }
   
    public function metric(): string
    {
      return $this->metric;
    }
 }