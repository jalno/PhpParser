<?php

namespace packages\PhpParser\Node\Scalar\MagicConst;

use packages\PhpParser\Node\Scalar\MagicConst;

class Function_ extends MagicConst
{
    public function getName() {
        return '__FUNCTION__';
    }
}