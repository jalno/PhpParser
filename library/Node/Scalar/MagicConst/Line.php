<?php

namespace packages\PhpParser\Node\Scalar\MagicConst;

use packages\PhpParser\Node\Scalar\MagicConst;

class Line extends MagicConst
{
    public function getName() {
        return '__LINE__';
    }
}