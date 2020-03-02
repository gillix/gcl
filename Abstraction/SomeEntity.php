<?php
 namespace gcl\Abstraction;

 class SomeEntity extends Entity
 {
    protected string $type;
  
    public function __construct(string $type, string $id)
    {
      $this->type = $type;
      parent::__construct($id);
    }
  
    public function type(): string
    {
      return $this->type;
    }

    public function is(string $type, bool $not = false): bool
    {
      return ($this->type === $type || parent::is($type)) && !$not;
    }
 }