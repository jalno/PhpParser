<?php

namespace packages\PhpParser\Node\Scalar\MagicConst;

use packages\PhpParser\Node\Scalar\MagicConst;

class Dir extends MagicConst
{
    public function getName() {
        return '__DIR__';
    }
}