<?php

namespace packages\PhpParser\Node\Scalar\MagicConst;

use packages\PhpParser\Node\Scalar\MagicConst;

class Namespace_ extends MagicConst
{
    public function getName() {
        return '__NAMESPACE__';
    }
}