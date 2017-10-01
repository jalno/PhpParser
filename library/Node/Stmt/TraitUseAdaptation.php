<?php

namespace packages\PhpParser\Node\Stmt;

use packages\PhpParser\Node;

abstract class TraitUseAdaptation extends Node\Stmt
{
    /** @var Node\Name Trait name */
    public $trait;
    /** @var string Method name */
    public $method;
}
