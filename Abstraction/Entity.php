<?php
 namespace gcl\Abstraction;

 abstract class Entity extends Resource implements \glx\Common\I\Entity
 {
    protected $id;
    protected static string $type = 'ENTITY';
    
    public function __construct(string $id)
    {
      $this->id = $id;
    }
    
    public function id()
    {
      return $this->id;
    }

    public function sameAs($other): bool
    {
      return $other instanceof \glx\Common\I\Entity && $this->type() === $other->type() && (string)$this->id() === (string)$other->id();
    }
 }