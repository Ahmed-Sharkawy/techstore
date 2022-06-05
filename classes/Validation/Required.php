<?php

class Required implements ValidationRule
{
  public function check($name, $value)
  {
    if (empty($value)) {
      return "$name ia required";
    }
    return false;
  }
}