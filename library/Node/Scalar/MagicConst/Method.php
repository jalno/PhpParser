<?php

namespace packages\PhpParser\Node\Scalar\MagicConst;

use packages\PhpParser\Node\Scalar\MagicConst;

class Method extends MagicConst
{
    public function getName() {
        return '__METHOD__';
    }
}