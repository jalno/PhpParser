<?php declare(strict_types=1);

namespace packages\PhpParser\Node\Expr\BinaryOp;

use packages\PhpParser\Node\Expr\BinaryOp;

class SmallerOrEqual extends BinaryOp
{
    public function getOperatorSigil() : string {
        return '<=';
    }
    
    public function getType() : string {
        return 'Expr_BinaryOp_SmallerOrEqual';
    }
}
