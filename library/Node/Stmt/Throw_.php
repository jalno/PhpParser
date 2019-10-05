<?php declare(strict_types=1);

namespace packages\PhpParser\Node\Stmt;

use packages\PhpParser\Node;

class Throw_ extends Node\Stmt
{
    /** @var Node\Expr Expression */
    public $expr;

    /**
     * Constructs a throw node.
     *
     * @param Node\Expr $expr       Expression
     * @param array     $attributes Additional attributes
     */
    public function __construct(Node\Expr $expr, array $attributes = []) {
        $this->attributes = $attributes;
        $this->expr = $expr;
    }

    public function getSubNodeNames() : array {
        return ['expr'];
    }
    
    public function getType() : string {
        return 'Stmt_Throw';
    }
}
