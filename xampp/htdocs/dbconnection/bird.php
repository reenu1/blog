<?php

class bird{
public $canfly;
public $legCount;

public function _construct($canfly,$legCount){
    $this->canfly=$canfly;
    $this->legCount=$legCount;
}
public function canfly()
{
    return $this->canfly;
}
public function getlegCount()
{
    return $this->legCount;
}
}

?>