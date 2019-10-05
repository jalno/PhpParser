<?php declare(strict_types=1);

namespace packages\PhpParser\Node\Expr\Cast;

use packages\PhpParser\Node\Expr\Cast;

class Int_ extends Cast
{
    public function getType() : string {
        return 'Expr_Cast_Int';
    }
}
