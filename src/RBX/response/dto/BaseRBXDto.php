<?php

namespace RBX\response\dto;

abstract class BaseRBXDto
{
    /**
     * @param array $attributes
     * @return void
     */
    public function setAttributes(array $attributes)
    {
        foreach ($attributes as $property => $value) {
            if (property_exists($this, $property)) {
                if (is_object($this->$property)) {
                    if ($this->$property instanceof BaseRBXDto) {
                        $this->$property->setAttributes($value);
                    }
                } else {
                    $this->$property = $value;
                }
            }
        }
    }
}
