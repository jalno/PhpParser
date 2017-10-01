<?php

namespace packages\PhpParser\Node\Scalar\MagicConst;

use packages\PhpParser\Node\Scalar\MagicConst;

class Class_ extends MagicConst
{
    public function getName() {
        return '__CLASS__';
    }
}