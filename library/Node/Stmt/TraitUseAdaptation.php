<?php declare(strict_types=1);

namespace packages\PhpParser\Node\Stmt;

use packages\PhpParser\Node;

abstract class TraitUseAdaptation extends Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
