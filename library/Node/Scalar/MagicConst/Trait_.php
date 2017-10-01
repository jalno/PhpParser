<?php

namespace packages\PhpParser\Node\Scalar\MagicConst;

use packages\PhpParser\Node\Scalar\MagicConst;

class Trait_ extends MagicConst
{
    public function getName() {
        return '__TRAIT__';
    }
}