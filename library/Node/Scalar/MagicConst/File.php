<?php

namespace packages\PhpParser\Node\Scalar\MagicConst;

use packages\PhpParser\Node\Scalar\MagicConst;

class File extends MagicConst
{
    public function getName() {
        return '__FILE__';
    }
}