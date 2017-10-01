PHP Parser
==========

This is a PHP 5.2 to PHP 7.1 parser written in PHP. Its purpose is to simplify static code analysis and
manipulation.

[**Documentation**][doc] (stable; for running on PHP >= 5.5; for parsing PHP 5.2 to PHP 7.1).

In a Nutshell
-------------

The parser turns PHP source code into an abstract syntax tree. For example, if you pass the following code into the
parser:

```php
<?php
echo 'Hi', 'World';
hello\world('foo', 'bar' . 'baz');
```

You'll get a syntax tree looking roughly like this:

```php
array(
    0: Stmt_Echo(
        exprs: array(
            0: Scalar_String(
                value: Hi
            )
            1: Scalar_String(
                value: World
            )
        )
    )
    1: Expr_FuncCall(
        name: Name(
            parts: array(
                0: hello
                1: world
            )
        )
        args: array(
            0: Arg(
                value: Scalar_String(
                    value: foo
                )
                byRef: false
            )
            1: Arg(
                value: Expr_Concat(
                    left: Scalar_String(
                        value: bar
                    )
                    right: Scalar_String(
                        value: baz
                    )
                )
                byRef: false
            )
        )
    )
)
```

You can then work with this syntax tree, for example to statically analyze the code (e.g. to find
programming errors or security issues).

Additionally, you can convert a syntax tree back to PHP code. This allows you to do code preprocessing
(like automatedly porting code to older PHP versions).

Installation
------------

Just clone this repo in "packages" directory 

    cd /home/project/public_html/packages
    git clone https://git.jeyserver.com/yeganemehr/PhpParser.git

Documentation
-------------

 1. [Introduction](doc/0_Introduction.markdown)
 2. [Usage of basic components](doc/2_Usage_of_basic_components.markdown)
 3. [Other node tree representations](doc/3_Other_node_tree_representations.markdown)
 4. [Code generation](doc/4_Code_generation.markdown)

Component documentation:

 1. [Error handling](doc/component/Error_handling.markdown)
 2. [Lexer](doc/component/Lexer.markdown)

[doc]: https://github.com/nikic/PHP-Parser/tree/master/doc
