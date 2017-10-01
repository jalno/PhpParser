<?php

namespace packages\PhpParser\Node\Stmt;

use packages\PhpParser\Node;

/** Nop/empty statement (;). */
class Nop extends Node\Stmt
{
    public function getSubNodeNames() {
        return array();
    }
}
