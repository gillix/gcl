<?php
 namespace gcl\Abstraction;

 abstract class Resource implements \glx\Common\I\Resource
 {
    protected static string $type = 'RESOURCE';
  
    public function type(): string { return static::$type; }
 
    public function is(string $type, bool $not = false): bool
    {
      $current = get_class($this);
      $classes = class_parents($current);
      $classes[] = $current;

      foreach($classes as $class)
        if(isset($class::$type) && strtoupper($type) === strtoupper($class::$type))
          return !$not;
      return $not;
    }

    public function not(string $type): bool
    {
      return $this->is($type, true);
    }
 }
 