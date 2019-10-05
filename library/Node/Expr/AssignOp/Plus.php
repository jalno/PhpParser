<?php declare(strict_types=1);

namespace packages\PhpParser\Node\Expr\AssignOp;

use packages\PhpParser\Node\Expr\AssignOp;

class Plus extends AssignOp
{
    public function getType() : string {
        return 'Expr_AssignOp_Plus';
    }
}
