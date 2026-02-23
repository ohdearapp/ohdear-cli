<?php declare(strict_types = 1);

// osfsl-/Users/freek/dev/code/ohdear-cli/vendor/composer/../symfony/process/Process.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Symfony\Component\Process\Process
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-bc06ac9c96603abaef0baf08238429bd4ee73716058ca804c2c26f55538a60e9-8.5.2-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Symfony\\Component\\Process\\Process',
        'filename' => '/Users/freek/dev/code/ohdear-cli/vendor/composer/../symfony/process/Process.php',
      ),
    ),
    'namespace' => 'Symfony\\Component\\Process',
    'name' => 'Symfony\\Component\\Process\\Process',
    'shortName' => 'Process',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Process is a thin wrapper around proc_* functions to easily
 * start independent PHP processes.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Romain Neutron <imprec@gmail.com>
 *
 * @implements \\IteratorAggregate<string, string>
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 33,
    'endLine' => 1676,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'IteratorAggregate',
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
      'ERR' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'name' => 'ERR',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'err\'',
          'attributes' => 
          array (
            'startLine' => 35,
            'endLine' => 35,
            'startTokenPos' => 74,
            'startFilePos' => 1145,
            'endTokenPos' => 74,
            'endFilePos' => 1149,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 35,
        'endLine' => 35,
        'startColumn' => 5,
        'endColumn' => 29,
      ),
      'OUT' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'name' => 'OUT',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'out\'',
          'attributes' => 
          array (
            'startLine' => 36,
            'endLine' => 36,
            'startTokenPos' => 85,
            'startFilePos' => 1175,
            'endTokenPos' => 85,
            'endFilePos' => 1179,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 36,
        'endLine' => 36,
        'startColumn' => 5,
        'endColumn' => 29,
      ),
      'STATUS_READY' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'name' => 'STATUS_READY',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'ready\'',
          'attributes' => 
          array (
            'startLine' => 38,
            'endLine' => 38,
            'startTokenPos' => 96,
            'startFilePos' => 1215,
            'endTokenPos' => 96,
            'endFilePos' => 1221,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 38,
        'endLine' => 38,
        'startColumn' => 5,
        'endColumn' => 40,
      ),
      'STATUS_STARTED' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'name' => 'STATUS_STARTED',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'started\'',
          'attributes' => 
          array (
            'startLine' => 39,
            'endLine' => 39,
            'startTokenPos' => 107,
            'startFilePos' => 1258,
            'endTokenPos' => 107,
            'endFilePos' => 1266,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 39,
        'endLine' => 39,
        'startColumn' => 5,
        'endColumn' => 44,
      ),
      'STATUS_TERMINATED' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'name' => 'STATUS_TERMINATED',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'terminated\'',
          'attributes' => 
          array (
            'startLine' => 40,
            'endLine' => 40,
            'startTokenPos' => 118,
            'startFilePos' => 1306,
            'endTokenPos' => 118,
            'endFilePos' => 1317,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 40,
        'endLine' => 40,
        'startColumn' => 5,
        'endColumn' => 50,
      ),
      'STDIN' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'name' => 'STDIN',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '0',
          'attributes' => 
          array (
            'startLine' => 42,
            'endLine' => 42,
            'startTokenPos' => 129,
            'startFilePos' => 1346,
            'endTokenPos' => 129,
            'endFilePos' => 1346,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 42,
        'endLine' => 42,
        'startColumn' => 5,
        'endColumn' => 27,
      ),
      'STDOUT' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'name' => 'STDOUT',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '1',
          'attributes' => 
          array (
            'startLine' => 43,
            'endLine' => 43,
            'startTokenPos' => 140,
            'startFilePos' => 1375,
            'endTokenPos' => 140,
            'endFilePos' => 1375,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 43,
        'endLine' => 43,
        'startColumn' => 5,
        'endColumn' => 28,
      ),
      'STDERR' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'name' => 'STDERR',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '2',
          'attributes' => 
          array (
            'startLine' => 44,
            'endLine' => 44,
            'startTokenPos' => 151,
            'startFilePos' => 1404,
            'endTokenPos' => 151,
            'endFilePos' => 1404,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 44,
        'endLine' => 44,
        'startColumn' => 5,
        'endColumn' => 28,
      ),
      'TIMEOUT_PRECISION' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'name' => 'TIMEOUT_PRECISION',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '0.2',
          'attributes' => 
          array (
            'startLine' => 47,
            'endLine' => 47,
            'startTokenPos' => 164,
            'startFilePos' => 1482,
            'endTokenPos' => 164,
            'endFilePos' => 1484,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 47,
        'endLine' => 47,
        'startColumn' => 5,
        'endColumn' => 41,
      ),
      'ITER_NON_BLOCKING' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'name' => 'ITER_NON_BLOCKING',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '1',
          'attributes' => 
          array (
            'startLine' => 49,
            'endLine' => 49,
            'startTokenPos' => 175,
            'startFilePos' => 1525,
            'endTokenPos' => 175,
            'endFilePos' => 1525,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 49,
        'endLine' => 49,
        'startColumn' => 5,
        'endColumn' => 39,
      ),
      'ITER_KEEP_OUTPUT' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'name' => 'ITER_KEEP_OUTPUT',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '2',
          'attributes' => 
          array (
            'startLine' => 50,
            'endLine' => 50,
            'startTokenPos' => 188,
            'startFilePos' => 1660,
            'endTokenPos' => 188,
            'endFilePos' => 1660,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 50,
        'endLine' => 50,
        'startColumn' => 5,
        'endColumn' => 38,
      ),
      'ITER_SKIP_OUT' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'name' => 'ITER_SKIP_OUT',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '4',
          'attributes' => 
          array (
            'startLine' => 51,
            'endLine' => 51,
            'startTokenPos' => 201,
            'startFilePos' => 1786,
            'endTokenPos' => 201,
            'endFilePos' => 1786,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 51,
        'endLine' => 51,
        'startColumn' => 5,
        'endColumn' => 35,
      ),
      'ITER_SKIP_ERR' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'name' => 'ITER_SKIP_ERR',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '8',
          'attributes' => 
          array (
            'startLine' => 52,
            'endLine' => 52,
            'startTokenPos' => 214,
            'startFilePos' => 1874,
            'endTokenPos' => 214,
            'endFilePos' => 1874,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 52,
        'endLine' => 52,
        'startColumn' => 5,
        'endColumn' => 35,
      ),
    ),
    'immediateProperties' => 
    array (
      'callback' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'name' => 'callback',
        'modifiers' => 4,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
          'data' => 
          array (
            'types' => 
            array (
              0 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'Closure',
                  'isIdentifier' => false,
                ),
              ),
              1 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'null',
                  'isIdentifier' => true,
                ),
              ),
            ),
          ),
        ),
        'default' => 
        array (
          'code' => 'null',
          'attributes' => 
          array (
            'startLine' => 57,
            'endLine' => 57,
            'startTokenPos' => 230,
            'startFilePos' => 2032,
            'endTokenPos' => 230,
            'endFilePos' => 2035,
          ),
        ),
        'docComment' => '/**
 * @var \\Closure(\'out\'|\'err\', string):bool|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 57,
        'endLine' => 57,
        'startColumn' => 5,
        'endColumn' => 39,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'commandline' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'name' => 'commandline',
        'modifiers' => 4,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
          'data' => 
          array (
            'types' => 
            array (
              0 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'array',
                  'isIdentifier' => true,
                ),
              ),
              1 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'string',
                  'isIdentifier' => true,
                ),
              ),
            ),
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 58,
        'endLine' => 58,
        'startColumn' => 5,
        'endColumn' => 38,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'cwd' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'name' => 'cwd',
        'modifiers' => 4,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
          'data' => 
          array (
            'types' => 
            array (
              0 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'string',
                  'isIdentifier' => true,
                ),
              ),
              1 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'null',
                  'isIdentifier' => true,
                ),
              ),
            ),
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 59,
        'endLine' => 59,
        'startColumn' => 5,
        'endColumn' => 25,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'env' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'name' => 'env',
        'modifiers' => 4,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 60,
            'endLine' => 60,
            'startTokenPos' => 258,
            'startFilePos' => 2128,
            'endTokenPos' => 259,
            'endFilePos' => 2129,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 60,
        'endLine' => 60,
        'startColumn' => 5,
        'endColumn' => 28,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'input' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'name' => 'input',
        'modifiers' => 4,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/** @var resource|string|\\Iterator|null */',
        'attributes' => 
        array (
        ),
        'startLine' => 62,
        'endLine' => 62,
        'startColumn' => 5,
        'endColumn' => 19,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'starttime' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'name' => 'starttime',
        'modifiers' => 4,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
          'data' => 
          array (
            'types' => 
            array (
              0 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'float',
                  'isIdentifier' => true,
                ),
              ),
              1 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'null',
                  'isIdentifier' => true,
                ),
              ),
            ),
          ),
        ),
        'default' => 
        array (
          'code' => 'null',
          'attributes' => 
          array (
            'startLine' => 63,
            'endLine' => 63,
            'startTokenPos' => 278,
            'startFilePos' => 2231,
            'endTokenPos' => 278,
            'endFilePos' => 2234,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 63,
        'endLine' => 63,
        'startColumn' => 5,
        'endColumn' => 37,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'lastOutputTime' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'name' => 'lastOutputTime',
        'modifiers' => 4,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
          'data' => 
          array (
            'types' => 
            array (
              0 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'float',
                  'isIdentifier' => true,
                ),
              ),
              1 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'null',
                  'isIdentifier' => true,
                ),
              ),
            ),
          ),
        ),
        'default' => 
        array (
          'code' => 'null',
          'attributes' => 
          array (
            'startLine' => 64,
            'endLine' => 64,
            'startTokenPos' => 290,
            'startFilePos' => 2274,
            'endTokenPos' => 290,
            'endFilePos' => 2277,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 64,
        'endLine' => 64,
        'startColumn' => 5,
        'endColumn' => 42,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'timeout' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'name' => 'timeout',
        'modifiers' => 4,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
          'data' => 
          array (
            'types' => 
            array (
              0 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'float',
                  'isIdentifier' => true,
                ),
              ),
              1 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'null',
                  'isIdentifier' => true,
                ),
              ),
            ),
          ),
        ),
        'default' => 
        array (
          'code' => 'null',
          'attributes' => 
          array (
            'startLine' => 65,
            'endLine' => 65,
            'startTokenPos' => 302,
            'startFilePos' => 2310,
            'endTokenPos' => 302,
            'endFilePos' => 2313,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 65,
        'endLine' => 65,
        'startColumn' => 5,
        'endColumn' => 35,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'idleTimeout' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'name' => 'idleTimeout',
        'modifiers' => 4,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
          'data' => 
          array (
            'types' => 
            array (
              0 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'float',
                  'isIdentifier' => true,
                ),
              ),
              1 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'null',
                  'isIdentifier' => true,
                ),
              ),
            ),
          ),
        ),
        'default' => 
        array (
          'code' => 'null',
          'attributes' => 
          array (
            'startLine' => 66,
            'endLine' => 66,
            'startTokenPos' => 314,
            'startFilePos' => 2350,
            'endTokenPos' => 314,
            'endFilePos' => 2353,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 66,
        'endLine' => 66,
        'startColumn' => 5,
        'endColumn' => 39,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'exitcode' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'name' => 'exitcode',
        'modifiers' => 4,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
          'data' => 
          array (
            'types' => 
            array (
              0 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'int',
                  'isIdentifier' => true,
                ),
              ),
              1 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'null',
                  'isIdentifier' => true,
                ),
              ),
            ),
          ),
        ),
        'default' => 
        array (
          'code' => 'null',
          'attributes' => 
          array (
            'startLine' => 67,
            'endLine' => 67,
            'startTokenPos' => 326,
            'startFilePos' => 2385,
            'endTokenPos' => 326,
            'endFilePos' => 2388,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 67,
        'endLine' => 67,
        'startColumn' => 5,
        'endColumn' => 34,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'fallbackStatus' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'name' => 'fallbackStatus',
        'modifiers' => 4,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 68,
            'endLine' => 68,
            'startTokenPos' => 337,
            'startFilePos' => 2427,
            'endTokenPos' => 338,
            'endFilePos' => 2428,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 68,
        'endLine' => 68,
        'startColumn' => 5,
        'endColumn' => 39,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'processInformation' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'name' => 'processInformation',
        'modifiers' => 4,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 69,
        'endLine' => 69,
        'startColumn' => 5,
        'endColumn' => 38,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'outputDisabled' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'name' => 'outputDisabled',
        'modifiers' => 4,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 70,
            'endLine' => 70,
            'startTokenPos' => 356,
            'startFilePos' => 2505,
            'endTokenPos' => 356,
            'endFilePos' => 2509,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 70,
        'endLine' => 70,
        'startColumn' => 5,
        'endColumn' => 41,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'stdout' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'name' => 'stdout',
        'modifiers' => 4,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/** @var resource */',
        'attributes' => 
        array (
        ),
        'startLine' => 72,
        'endLine' => 72,
        'startColumn' => 5,
        'endColumn' => 20,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'stderr' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'name' => 'stderr',
        'modifiers' => 4,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/** @var resource */',
        'attributes' => 
        array (
        ),
        'startLine' => 74,
        'endLine' => 74,
        'startColumn' => 5,
        'endColumn' => 20,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'process' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'name' => 'process',
        'modifiers' => 4,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/** @var resource|null */',
        'attributes' => 
        array (
        ),
        'startLine' => 76,
        'endLine' => 76,
        'startColumn' => 5,
        'endColumn' => 21,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'status' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'name' => 'status',
        'modifiers' => 4,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => 'self::STATUS_READY',
          'attributes' => 
          array (
            'startLine' => 77,
            'endLine' => 77,
            'startTokenPos' => 388,
            'startFilePos' => 2685,
            'endTokenPos' => 390,
            'endFilePos' => 2702,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 77,
        'endLine' => 77,
        'startColumn' => 5,
        'endColumn' => 48,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'incrementalOutputOffset' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'name' => 'incrementalOutputOffset',
        'modifiers' => 4,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => '0',
          'attributes' => 
          array (
            'startLine' => 78,
            'endLine' => 78,
            'startTokenPos' => 401,
            'startFilePos' => 2748,
            'endTokenPos' => 401,
            'endFilePos' => 2748,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 78,
        'endLine' => 78,
        'startColumn' => 5,
        'endColumn' => 45,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'incrementalErrorOutputOffset' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'name' => 'incrementalErrorOutputOffset',
        'modifiers' => 4,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => '0',
          'attributes' => 
          array (
            'startLine' => 79,
            'endLine' => 79,
            'startTokenPos' => 412,
            'startFilePos' => 2799,
            'endTokenPos' => 412,
            'endFilePos' => 2799,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 79,
        'endLine' => 79,
        'startColumn' => 5,
        'endColumn' => 50,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'tty' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'name' => 'tty',
        'modifiers' => 4,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 80,
            'endLine' => 80,
            'startTokenPos' => 423,
            'startFilePos' => 2826,
            'endTokenPos' => 423,
            'endFilePos' => 2830,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 80,
        'endLine' => 80,
        'startColumn' => 5,
        'endColumn' => 30,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'pty' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'name' => 'pty',
        'modifiers' => 4,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 81,
        'endLine' => 81,
        'startColumn' => 5,
        'endColumn' => 22,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'options' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'name' => 'options',
        'modifiers' => 4,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => '[\'suppress_errors\' => true, \'bypass_shell\' => true]',
          'attributes' => 
          array (
            'startLine' => 82,
            'endLine' => 82,
            'startTokenPos' => 441,
            'startFilePos' => 2885,
            'endTokenPos' => 454,
            'endFilePos' => 2935,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 82,
        'endLine' => 82,
        'startColumn' => 5,
        'endColumn' => 81,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'ignoredSignals' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'name' => 'ignoredSignals',
        'modifiers' => 4,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 83,
            'endLine' => 83,
            'startTokenPos' => 465,
            'startFilePos' => 2974,
            'endTokenPos' => 466,
            'endFilePos' => 2975,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 83,
        'endLine' => 83,
        'startColumn' => 5,
        'endColumn' => 39,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'processPipes' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'name' => 'processPipes',
        'modifiers' => 4,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
          'data' => 
          array (
            'types' => 
            array (
              0 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'Symfony\\Component\\Process\\Pipes\\WindowsPipes',
                  'isIdentifier' => false,
                ),
              ),
              1 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'Symfony\\Component\\Process\\Pipes\\UnixPipes',
                  'isIdentifier' => false,
                ),
              ),
            ),
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 85,
        'endLine' => 85,
        'startColumn' => 5,
        'endColumn' => 49,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'latestSignal' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'name' => 'latestSignal',
        'modifiers' => 4,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
          'data' => 
          array (
            'types' => 
            array (
              0 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'int',
                  'isIdentifier' => true,
                ),
              ),
              1 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'null',
                  'isIdentifier' => true,
                ),
              ),
            ),
          ),
        ),
        'default' => 
        array (
          'code' => 'null',
          'attributes' => 
          array (
            'startLine' => 87,
            'endLine' => 87,
            'startTokenPos' => 487,
            'startFilePos' => 3063,
            'endTokenPos' => 487,
            'endFilePos' => 3066,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 87,
        'endLine' => 87,
        'startColumn' => 5,
        'endColumn' => 38,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'sigchild' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'name' => 'sigchild',
        'modifiers' => 20,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
          'data' => 
          array (
            'types' => 
            array (
              0 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'bool',
                  'isIdentifier' => true,
                ),
              ),
              1 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'null',
                  'isIdentifier' => true,
                ),
              ),
            ),
          ),
        ),
        'default' => 
        array (
          'code' => 'null',
          'attributes' => 
          array (
            'startLine' => 89,
            'endLine' => 89,
            'startTokenPos' => 501,
            'startFilePos' => 3107,
            'endTokenPos' => 501,
            'endFilePos' => 3110,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 89,
        'endLine' => 89,
        'startColumn' => 5,
        'endColumn' => 42,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'executables' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'name' => 'executables',
        'modifiers' => 20,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 90,
            'endLine' => 90,
            'startTokenPos' => 514,
            'startFilePos' => 3153,
            'endTokenPos' => 515,
            'endFilePos' => 3154,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 90,
        'endLine' => 90,
        'startColumn' => 5,
        'endColumn' => 43,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'exitCodes' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'name' => 'exitCodes',
        'modifiers' => 17,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'default' => 
        array (
          'code' => '[
    0 => \'OK\',
    1 => \'General error\',
    2 => \'Misuse of shell builtins\',
    126 => \'Invoked command cannot execute\',
    127 => \'Command not found\',
    128 => \'Invalid exit argument\',
    // signals
    129 => \'Hangup\',
    130 => \'Interrupt\',
    131 => \'Quit and dump core\',
    132 => \'Illegal instruction\',
    133 => \'Trace/breakpoint trap\',
    134 => \'Process aborted\',
    135 => \'Bus error: "access to undefined portion of memory object"\',
    136 => \'Floating point exception: "erroneous arithmetic operation"\',
    137 => \'Kill (terminate immediately)\',
    138 => \'User-defined 1\',
    139 => \'Segmentation violation\',
    140 => \'User-defined 2\',
    141 => \'Write to pipe with no one reading\',
    142 => \'Signal raised by alarm\',
    143 => \'Termination (request to terminate)\',
    // 144 - not defined
    145 => \'Child process terminated, stopped (or continued*)\',
    146 => \'Continue if stopped\',
    147 => \'Stop executing temporarily\',
    148 => \'Terminal stop signal\',
    149 => \'Background process attempting to read from tty ("in")\',
    150 => \'Background process attempting to write to tty ("out")\',
    151 => \'Urgent data available on socket\',
    152 => \'CPU time limit exceeded\',
    153 => \'File size limit exceeded\',
    154 => \'Signal raised by timer counting virtual time: "virtual timer expired"\',
    155 => \'Profiling timer expired\',
    // 156 - not defined
    157 => \'Pollable event\',
    // 158 - not defined
    159 => \'Bad syscall\',
]',
          'attributes' => 
          array (
            'startLine' => 97,
            'endLine' => 138,
            'startTokenPos' => 530,
            'startFilePos' => 3323,
            'endTokenPos' => 778,
            'endFilePos' => 4969,
          ),
        ),
        'docComment' => '/**
 * Exit codes translation table.
 *
 * User-defined errors must use exit codes in the 64-113 range.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 97,
        'endLine' => 138,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
    ),
    'immediateMethods' => 
    array (
      '__construct' => 
      array (
        'name' => '__construct',
        'parameters' => 
        array (
          'command' => 
          array (
            'name' => 'command',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 149,
            'endLine' => 149,
            'startColumn' => 33,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'cwd' => 
          array (
            'name' => 'cwd',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 149,
                'endLine' => 149,
                'startTokenPos' => 801,
                'startFilePos' => 5661,
                'endTokenPos' => 801,
                'endFilePos' => 5664,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
              'data' => 
              array (
                'types' => 
                array (
                  0 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'string',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'null',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 149,
            'endLine' => 149,
            'startColumn' => 49,
            'endColumn' => 67,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'env' => 
          array (
            'name' => 'env',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 149,
                'endLine' => 149,
                'startTokenPos' => 811,
                'startFilePos' => 5681,
                'endTokenPos' => 811,
                'endFilePos' => 5684,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
              'data' => 
              array (
                'types' => 
                array (
                  0 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'array',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'null',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 149,
            'endLine' => 149,
            'startColumn' => 70,
            'endColumn' => 87,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'input' => 
          array (
            'name' => 'input',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 149,
                'endLine' => 149,
                'startTokenPos' => 820,
                'startFilePos' => 5702,
                'endTokenPos' => 820,
                'endFilePos' => 5705,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'mixed',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 149,
            'endLine' => 149,
            'startColumn' => 90,
            'endColumn' => 108,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
          'timeout' => 
          array (
            'name' => 'timeout',
            'default' => 
            array (
              'code' => '60',
              'attributes' => 
              array (
                'startLine' => 149,
                'endLine' => 149,
                'startTokenPos' => 830,
                'startFilePos' => 5726,
                'endTokenPos' => 830,
                'endFilePos' => 5727,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
              'data' => 
              array (
                'types' => 
                array (
                  0 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'float',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'null',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 149,
            'endLine' => 149,
            'startColumn' => 111,
            'endColumn' => 130,
            'parameterIndex' => 4,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @param array          $command The command to run and its arguments listed as separate entries
 * @param string|null    $cwd     The working directory or null to use the working dir of the current PHP process
 * @param array|null     $env     The environment variables or null to use the same environment as the current PHP process
 * @param mixed          $input   The input as stream resource, scalar or \\Traversable, or null for no input
 * @param int|float|null $timeout The timeout in seconds or null to disable
 *
 * @throws LogicException When proc_open is not installed
 */',
        'startLine' => 149,
        'endLine' => 172,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'fromShellCommandline' => 
      array (
        'name' => 'fromShellCommandline',
        'parameters' => 
        array (
          'command' => 
          array (
            'name' => 'command',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 195,
            'endLine' => 195,
            'startColumn' => 49,
            'endColumn' => 63,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'cwd' => 
          array (
            'name' => 'cwd',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 195,
                'endLine' => 195,
                'startTokenPos' => 1000,
                'startFilePos' => 7956,
                'endTokenPos' => 1000,
                'endFilePos' => 7959,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
              'data' => 
              array (
                'types' => 
                array (
                  0 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'string',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'null',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 195,
            'endLine' => 195,
            'startColumn' => 66,
            'endColumn' => 84,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'env' => 
          array (
            'name' => 'env',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 195,
                'endLine' => 195,
                'startTokenPos' => 1010,
                'startFilePos' => 7976,
                'endTokenPos' => 1010,
                'endFilePos' => 7979,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
              'data' => 
              array (
                'types' => 
                array (
                  0 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'array',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'null',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 195,
            'endLine' => 195,
            'startColumn' => 87,
            'endColumn' => 104,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'input' => 
          array (
            'name' => 'input',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 195,
                'endLine' => 195,
                'startTokenPos' => 1019,
                'startFilePos' => 7997,
                'endTokenPos' => 1019,
                'endFilePos' => 8000,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'mixed',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 195,
            'endLine' => 195,
            'startColumn' => 107,
            'endColumn' => 125,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
          'timeout' => 
          array (
            'name' => 'timeout',
            'default' => 
            array (
              'code' => '60',
              'attributes' => 
              array (
                'startLine' => 195,
                'endLine' => 195,
                'startTokenPos' => 1029,
                'startFilePos' => 8021,
                'endTokenPos' => 1029,
                'endFilePos' => 8022,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
              'data' => 
              array (
                'types' => 
                array (
                  0 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'float',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'null',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 195,
            'endLine' => 195,
            'startColumn' => 128,
            'endColumn' => 147,
            'parameterIndex' => 4,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Creates a Process instance as a command-line to be run in a shell wrapper.
 *
 * Command-lines are parsed by the shell of your OS (/bin/sh on Unix-like, cmd.exe on Windows.)
 * This allows using e.g. pipes or conditional execution. In this mode, signals are sent to the
 * shell wrapper and not to your commands.
 *
 * In order to inject dynamic values into command-lines, we strongly recommend using placeholders.
 * This will save escaping values, which is not portable nor secure anyway:
 *
 *   $process = Process::fromShellCommandline(\'my_command "${:MY_VAR}"\');
 *   $process->run(null, [\'MY_VAR\' => $theValue]);
 *
 * @param string         $command The command line to pass to the shell of the OS
 * @param string|null    $cwd     The working directory or null to use the working dir of the current PHP process
 * @param array|null     $env     The environment variables or null to use the same environment as the current PHP process
 * @param mixed          $input   The input as stream resource, scalar or \\Traversable, or null for no input
 * @param int|float|null $timeout The timeout in seconds or null to disable
 *
 * @throws LogicException When proc_open is not installed
 */',
        'startLine' => 195,
        'endLine' => 201,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      '__serialize' => 
      array (
        'name' => '__serialize',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 203,
        'endLine' => 206,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      '__unserialize' => 
      array (
        'name' => '__unserialize',
        'parameters' => 
        array (
          'data' => 
          array (
            'name' => 'data',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 208,
            'endLine' => 208,
            'startColumn' => 35,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 208,
        'endLine' => 211,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      '__destruct' => 
      array (
        'name' => '__destruct',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 213,
        'endLine' => 220,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      '__clone' => 
      array (
        'name' => '__clone',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 222,
        'endLine' => 225,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'run' => 
      array (
        'name' => 'run',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 250,
                'endLine' => 250,
                'startTokenPos' => 1223,
                'startFilePos' => 9862,
                'endTokenPos' => 1223,
                'endFilePos' => 9865,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
              'data' => 
              array (
                'types' => 
                array (
                  0 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'callable',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'null',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 250,
            'endLine' => 250,
            'startColumn' => 25,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'env' => 
          array (
            'name' => 'env',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 250,
                'endLine' => 250,
                'startTokenPos' => 1232,
                'startFilePos' => 9881,
                'endTokenPos' => 1233,
                'endFilePos' => 9882,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 250,
            'endLine' => 250,
            'startColumn' => 53,
            'endColumn' => 67,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Runs the process.
 *
 * The callback receives the type of output (out or err) and
 * some bytes from the output in real-time. It allows to have feedback
 * from the independent process during execution.
 *
 * The STDOUT and STDERR are also available after the process is finished
 * via the getOutput() and getErrorOutput() methods.
 *
 * @param (callable(\'out\'|\'err\', string):void)|null $callback A PHP callback to run whenever there is some
 *                                                            output available on STDOUT or STDERR
 *
 * @return int The exit status code
 *
 * @throws ProcessStartFailedException When process can\'t be launched
 * @throws RuntimeException            When process is already running
 * @throws ProcessTimedOutException    When process timed out
 * @throws ProcessSignaledException    When process stopped after receiving signal
 * @throws LogicException              In case a callback is provided and output has been disabled
 *
 * @final
 */',
        'startLine' => 250,
        'endLine' => 255,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'mustRun' => 
      array (
        'name' => 'mustRun',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 277,
                'endLine' => 277,
                'startTokenPos' => 1278,
                'startFilePos' => 10945,
                'endTokenPos' => 1278,
                'endFilePos' => 10948,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
              'data' => 
              array (
                'types' => 
                array (
                  0 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'callable',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'null',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 277,
            'endLine' => 277,
            'startColumn' => 29,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'env' => 
          array (
            'name' => 'env',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 277,
                'endLine' => 277,
                'startTokenPos' => 1287,
                'startFilePos' => 10964,
                'endTokenPos' => 1288,
                'endFilePos' => 10965,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 277,
            'endLine' => 277,
            'startColumn' => 57,
            'endColumn' => 71,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Runs the process.
 *
 * This is identical to run() except that an exception is thrown if the process
 * exits with a non-zero exit code.
 *
 * @param (callable(\'out\'|\'err\', string):void)|null $callback A PHP callback to run whenever there is some
 *                                                            output available on STDOUT or STDERR
 *
 * @return $this
 *
 * @throws ProcessFailedException   When process didn\'t terminate successfully
 * @throws RuntimeException         When process can\'t be launched
 * @throws RuntimeException         When process is already running
 * @throws ProcessTimedOutException When process timed out
 * @throws ProcessSignaledException When process stopped after receiving signal
 * @throws LogicException           In case a callback is provided and output has been disabled
 *
 * @final
 */',
        'startLine' => 277,
        'endLine' => 284,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'start' => 
      array (
        'name' => 'start',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 305,
                'endLine' => 305,
                'startTokenPos' => 1350,
                'startFilePos' => 12204,
                'endTokenPos' => 1350,
                'endFilePos' => 12207,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
              'data' => 
              array (
                'types' => 
                array (
                  0 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'callable',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'null',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 305,
            'endLine' => 305,
            'startColumn' => 27,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'env' => 
          array (
            'name' => 'env',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 305,
                'endLine' => 305,
                'startTokenPos' => 1359,
                'startFilePos' => 12223,
                'endTokenPos' => 1360,
                'endFilePos' => 12224,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 305,
            'endLine' => 305,
            'startColumn' => 55,
            'endColumn' => 69,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Starts the process and returns after writing the input to STDIN.
 *
 * This method blocks until all STDIN data is sent to the process then it
 * returns while the process runs in the background.
 *
 * The termination of the process can be awaited with wait().
 *
 * The callback receives the type of output (out or err) and some bytes from
 * the output in real-time while writing the standard input to the process.
 * It allows to have feedback from the independent process during execution.
 *
 * @param (callable(\'out\'|\'err\', string):void)|null $callback A PHP callback to run whenever there is some
 *                                                            output available on STDOUT or STDERR
 *
 * @throws ProcessStartFailedException When process can\'t be launched
 * @throws RuntimeException            When process is already running
 * @throws LogicException              In case a callback is provided and output has been disabled
 */',
        'startLine' => 305,
        'endLine' => 402,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'restart' => 
      array (
        'name' => 'restart',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 419,
                'endLine' => 419,
                'startTokenPos' => 2199,
                'startFilePos' => 16738,
                'endTokenPos' => 2199,
                'endFilePos' => 16741,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
              'data' => 
              array (
                'types' => 
                array (
                  0 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'callable',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'null',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 419,
            'endLine' => 419,
            'startColumn' => 29,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'env' => 
          array (
            'name' => 'env',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 419,
                'endLine' => 419,
                'startTokenPos' => 2208,
                'startFilePos' => 16757,
                'endTokenPos' => 2209,
                'endFilePos' => 16758,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 419,
            'endLine' => 419,
            'startColumn' => 57,
            'endColumn' => 71,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Restarts the process.
 *
 * Be warned that the process is cloned before being started.
 *
 * @param (callable(\'out\'|\'err\', string):void)|null $callback A PHP callback to run whenever there is some
 *                                                            output available on STDOUT or STDERR
 *
 * @throws ProcessStartFailedException When process can\'t be launched
 * @throws RuntimeException            When process is already running
 *
 * @see start()
 *
 * @final
 */',
        'startLine' => 419,
        'endLine' => 429,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'wait' => 
      array (
        'name' => 'wait',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 447,
                'endLine' => 447,
                'startTokenPos' => 2283,
                'startFilePos' => 17854,
                'endTokenPos' => 2283,
                'endFilePos' => 17857,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
              'data' => 
              array (
                'types' => 
                array (
                  0 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'callable',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'null',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 447,
            'endLine' => 447,
            'startColumn' => 26,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Waits for the process to terminate.
 *
 * The callback receives the type of output (out or err) and some bytes
 * from the output in real-time while writing the standard input to the process.
 * It allows to have feedback from the independent process during execution.
 *
 * @param (callable(\'out\'|\'err\', string):void)|null $callback A PHP callback to run whenever there is some
 *                                                            output available on STDOUT or STDERR
 *
 * @return int The exitcode of the process
 *
 * @throws ProcessTimedOutException When process timed out
 * @throws ProcessSignaledException When process stopped after receiving signal
 * @throws LogicException           When process is not yet started
 */',
        'startLine' => 447,
        'endLine' => 477,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'waitUntil' => 
      array (
        'name' => 'waitUntil',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'callable',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 493,
            'endLine' => 493,
            'startColumn' => 31,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Waits until the callback returns true.
 *
 * The callback receives the type of output (out or err) and some bytes
 * from the output in real-time while writing the standard input to the process.
 * It allows to have feedback from the independent process during execution.
 *
 * @param (callable(\'out\'|\'err\', string):bool)|null $callback A PHP callback to run whenever there is some
 *                                                            output available on STDOUT or STDERR
 *
 * @throws RuntimeException         When process timed out
 * @throws LogicException           When process is not yet started
 * @throws ProcessTimedOutException In case the timeout was reached
 */',
        'startLine' => 493,
        'endLine' => 526,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'getPid' => 
      array (
        'name' => 'getPid',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
          'data' => 
          array (
            'types' => 
            array (
              0 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'int',
                  'isIdentifier' => true,
                ),
              ),
              1 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'null',
                  'isIdentifier' => true,
                ),
              ),
            ),
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the Pid (process identifier), if applicable.
 *
 * @return int|null The process id if running, null otherwise
 */',
        'startLine' => 533,
        'endLine' => 536,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'signal' => 
      array (
        'name' => 'signal',
        'parameters' => 
        array (
          'signal' => 
          array (
            'name' => 'signal',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'int',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 549,
            'endLine' => 549,
            'startColumn' => 28,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Sends a POSIX signal to the process.
 *
 * @param int $signal A valid POSIX signal (see https://php.net/pcntl.constants)
 *
 * @return $this
 *
 * @throws LogicException   In case the process is not running
 * @throws RuntimeException In case --enable-sigchild is activated and the process can\'t be killed
 * @throws RuntimeException In case of failure
 */',
        'startLine' => 549,
        'endLine' => 554,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'disableOutput' => 
      array (
        'name' => 'disableOutput',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Disables fetching output and error output from the underlying process.
 *
 * @return $this
 *
 * @throws RuntimeException In case the process is already running
 * @throws LogicException   if an idle timeout is set
 */',
        'startLine' => 564,
        'endLine' => 576,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'enableOutput' => 
      array (
        'name' => 'enableOutput',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Enables fetching output and error output from the underlying process.
 *
 * @return $this
 *
 * @throws RuntimeException In case the process is already running
 */',
        'startLine' => 585,
        'endLine' => 594,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'isOutputDisabled' => 
      array (
        'name' => 'isOutputDisabled',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns true in case the output is disabled, false otherwise.
 */',
        'startLine' => 599,
        'endLine' => 602,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'getOutput' => 
      array (
        'name' => 'getOutput',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the current output of the process (STDOUT).
 *
 * @throws LogicException in case the output has been disabled
 * @throws LogicException In case the process is not started
 */',
        'startLine' => 610,
        'endLine' => 619,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'getIncrementalOutput' => 
      array (
        'name' => 'getIncrementalOutput',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the output incrementally.
 *
 * In comparison with the getOutput method which always return the whole
 * output, this one returns the new output since the last call.
 *
 * @throws LogicException in case the output has been disabled
 * @throws LogicException In case the process is not started
 */',
        'startLine' => 630,
        'endLine' => 642,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'getIterator' => 
      array (
        'name' => 'getIterator',
        'parameters' => 
        array (
          'flags' => 
          array (
            'name' => 'flags',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 654,
                'endLine' => 654,
                'startTokenPos' => 3215,
                'startFilePos' => 24695,
                'endTokenPos' => 3215,
                'endFilePos' => 24695,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'int',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 654,
            'endLine' => 654,
            'startColumn' => 33,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Generator',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns an iterator to the output of the process, with the output type as keys (Process::OUT/ERR).
 *
 * @param int $flags A bit field of Process::ITER_* flags
 *
 * @return \\Generator<string, string>
 *
 * @throws LogicException in case the output has been disabled
 * @throws LogicException In case the process is not started
 */',
        'startLine' => 654,
        'endLine' => 699,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => true,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'clearOutput' => 
      array (
        'name' => 'clearOutput',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Clears the process output.
 *
 * @return $this
 */',
        'startLine' => 706,
        'endLine' => 713,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'getErrorOutput' => 
      array (
        'name' => 'getErrorOutput',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the current error output of the process (STDERR).
 *
 * @throws LogicException in case the output has been disabled
 * @throws LogicException In case the process is not started
 */',
        'startLine' => 721,
        'endLine' => 730,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'getIncrementalErrorOutput' => 
      array (
        'name' => 'getIncrementalErrorOutput',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the errorOutput incrementally.
 *
 * In comparison with the getErrorOutput method which always return the
 * whole error output, this one returns the new error output since the last
 * call.
 *
 * @throws LogicException in case the output has been disabled
 * @throws LogicException In case the process is not started
 */',
        'startLine' => 742,
        'endLine' => 754,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'clearErrorOutput' => 
      array (
        'name' => 'clearErrorOutput',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Clears the process output.
 *
 * @return $this
 */',
        'startLine' => 761,
        'endLine' => 768,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'getExitCode' => 
      array (
        'name' => 'getExitCode',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
          'data' => 
          array (
            'types' => 
            array (
              0 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'int',
                  'isIdentifier' => true,
                ),
              ),
              1 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'null',
                  'isIdentifier' => true,
                ),
              ),
            ),
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the exit code returned by the process.
 *
 * @return int|null The exit status code, null if the Process is not terminated
 */',
        'startLine' => 775,
        'endLine' => 780,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'getExitCodeText' => 
      array (
        'name' => 'getExitCodeText',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
          'data' => 
          array (
            'types' => 
            array (
              0 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'string',
                  'isIdentifier' => true,
                ),
              ),
              1 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'null',
                  'isIdentifier' => true,
                ),
              ),
            ),
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns a string representation for the exit code returned by the process.
 *
 * This method relies on the Unix exit code status standardization
 * and might not be relevant for other operating systems.
 *
 * @return string|null A string representation for the exit status code, null if the Process is not terminated
 *
 * @see http://tldp.org/LDP/abs/html/exitcodes.html
 * @see http://en.wikipedia.org/wiki/Unix_signal
 */',
        'startLine' => 793,
        'endLine' => 800,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'isSuccessful' => 
      array (
        'name' => 'isSuccessful',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Checks if the process ended successfully.
 */',
        'startLine' => 805,
        'endLine' => 808,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'hasBeenSignaled' => 
      array (
        'name' => 'hasBeenSignaled',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns true if the child process has been terminated by an uncaught signal.
 *
 * It always returns false on Windows.
 *
 * @throws LogicException In case the process is not terminated
 */',
        'startLine' => 817,
        'endLine' => 822,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'getTermSignal' => 
      array (
        'name' => 'getTermSignal',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the number of the signal that caused the child process to terminate its execution.
 *
 * It is only meaningful if hasBeenSignaled() returns true.
 *
 * @throws RuntimeException In case --enable-sigchild is activated
 * @throws LogicException   In case the process is not terminated
 */',
        'startLine' => 832,
        'endLine' => 841,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'hasBeenStopped' => 
      array (
        'name' => 'hasBeenStopped',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns true if the child process has been stopped by a signal.
 *
 * It always returns false on Windows.
 *
 * @throws LogicException In case the process is not terminated
 */',
        'startLine' => 850,
        'endLine' => 855,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'getStopSignal' => 
      array (
        'name' => 'getStopSignal',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns the number of the signal that caused the child process to stop its execution.
 *
 * It is only meaningful if hasBeenStopped() returns true.
 *
 * @throws LogicException In case the process is not terminated
 */',
        'startLine' => 864,
        'endLine' => 869,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'isRunning' => 
      array (
        'name' => 'isRunning',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Checks if the process is currently running.
 */',
        'startLine' => 874,
        'endLine' => 883,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'isStarted' => 
      array (
        'name' => 'isStarted',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Checks if the process has been started with no regard to the current state.
 */',
        'startLine' => 888,
        'endLine' => 891,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'isTerminated' => 
      array (
        'name' => 'isTerminated',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Checks if the process is terminated.
 */',
        'startLine' => 896,
        'endLine' => 901,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'getStatus' => 
      array (
        'name' => 'getStatus',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the process status.
 *
 * The status is one of: ready, started, terminated.
 */',
        'startLine' => 908,
        'endLine' => 913,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'stop' => 
      array (
        'name' => 'stop',
        'parameters' => 
        array (
          'timeout' => 
          array (
            'name' => 'timeout',
            'default' => 
            array (
              'code' => '10',
              'attributes' => 
              array (
                'startLine' => 923,
                'endLine' => 923,
                'startTokenPos' => 4327,
                'startFilePos' => 32398,
                'endTokenPos' => 4327,
                'endFilePos' => 32399,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'float',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 923,
            'endLine' => 923,
            'startColumn' => 26,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'signal' => 
          array (
            'name' => 'signal',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 923,
                'endLine' => 923,
                'startTokenPos' => 4337,
                'startFilePos' => 32417,
                'endTokenPos' => 4337,
                'endFilePos' => 32420,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
              'data' => 
              array (
                'types' => 
                array (
                  0 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'int',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'null',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 923,
            'endLine' => 923,
            'startColumn' => 47,
            'endColumn' => 65,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
          'data' => 
          array (
            'types' => 
            array (
              0 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'int',
                  'isIdentifier' => true,
                ),
              ),
              1 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'null',
                  'isIdentifier' => true,
                ),
              ),
            ),
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Stops the process.
 *
 * @param int|float $timeout The timeout in seconds
 * @param int|null  $signal  A POSIX signal to send in case the process has not stop at timeout, default is SIGKILL (9)
 *
 * @return int|null The exit-code of the process or null if it\'s not running
 */',
        'startLine' => 923,
        'endLine' => 950,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'addOutput' => 
      array (
        'name' => 'addOutput',
        'parameters' => 
        array (
          'line' => 
          array (
            'name' => 'line',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 957,
            'endLine' => 957,
            'startColumn' => 31,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Adds a line to the STDOUT stream.
 *
 * @internal
 */',
        'startLine' => 957,
        'endLine' => 964,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'addErrorOutput' => 
      array (
        'name' => 'addErrorOutput',
        'parameters' => 
        array (
          'line' => 
          array (
            'name' => 'line',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 971,
            'endLine' => 971,
            'startColumn' => 36,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Adds a line to the STDERR stream.
 *
 * @internal
 */',
        'startLine' => 971,
        'endLine' => 978,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'getLastOutputTime' => 
      array (
        'name' => 'getLastOutputTime',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
          'data' => 
          array (
            'types' => 
            array (
              0 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'float',
                  'isIdentifier' => true,
                ),
              ),
              1 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'null',
                  'isIdentifier' => true,
                ),
              ),
            ),
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the last output time in seconds.
 */',
        'startLine' => 983,
        'endLine' => 986,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'getCommandLine' => 
      array (
        'name' => 'getCommandLine',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the command line to be executed.
 */',
        'startLine' => 991,
        'endLine' => 994,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'getTimeout' => 
      array (
        'name' => 'getTimeout',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
          'data' => 
          array (
            'types' => 
            array (
              0 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'float',
                  'isIdentifier' => true,
                ),
              ),
              1 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'null',
                  'isIdentifier' => true,
                ),
              ),
            ),
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the process timeout in seconds (max. runtime).
 */',
        'startLine' => 999,
        'endLine' => 1002,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'getIdleTimeout' => 
      array (
        'name' => 'getIdleTimeout',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
          'data' => 
          array (
            'types' => 
            array (
              0 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'float',
                  'isIdentifier' => true,
                ),
              ),
              1 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'null',
                  'isIdentifier' => true,
                ),
              ),
            ),
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the process idle timeout in seconds (max. time since last output).
 */',
        'startLine' => 1007,
        'endLine' => 1010,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'setTimeout' => 
      array (
        'name' => 'setTimeout',
        'parameters' => 
        array (
          'timeout' => 
          array (
            'name' => 'timeout',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
              'data' => 
              array (
                'types' => 
                array (
                  0 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'float',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'null',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1021,
            'endLine' => 1021,
            'startColumn' => 32,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Sets the process timeout (max. runtime) in seconds.
 *
 * To disable the timeout, set this value to null.
 *
 * @return $this
 *
 * @throws InvalidArgumentException if the timeout is negative
 */',
        'startLine' => 1021,
        'endLine' => 1026,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'setIdleTimeout' => 
      array (
        'name' => 'setIdleTimeout',
        'parameters' => 
        array (
          'timeout' => 
          array (
            'name' => 'timeout',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
              'data' => 
              array (
                'types' => 
                array (
                  0 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'float',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'null',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1038,
            'endLine' => 1038,
            'startColumn' => 36,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Sets the process idle timeout (max. time since last output) in seconds.
 *
 * To disable the timeout, set this value to null.
 *
 * @return $this
 *
 * @throws LogicException           if the output is disabled
 * @throws InvalidArgumentException if the timeout is negative
 */',
        'startLine' => 1038,
        'endLine' => 1047,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'setTty' => 
      array (
        'name' => 'setTty',
        'parameters' => 
        array (
          'tty' => 
          array (
            'name' => 'tty',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'bool',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1056,
            'endLine' => 1056,
            'startColumn' => 28,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Enables or disables the TTY mode.
 *
 * @return $this
 *
 * @throws RuntimeException In case the TTY mode is not supported
 */',
        'startLine' => 1056,
        'endLine' => 1069,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'isTty' => 
      array (
        'name' => 'isTty',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Checks if the TTY mode is enabled.
 */',
        'startLine' => 1074,
        'endLine' => 1077,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'setPty' => 
      array (
        'name' => 'setPty',
        'parameters' => 
        array (
          'bool' => 
          array (
            'name' => 'bool',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'bool',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1084,
            'endLine' => 1084,
            'startColumn' => 28,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Sets PTY mode.
 *
 * @return $this
 */',
        'startLine' => 1084,
        'endLine' => 1089,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'isPty' => 
      array (
        'name' => 'isPty',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns PTY state.
 */',
        'startLine' => 1094,
        'endLine' => 1097,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'getWorkingDirectory' => 
      array (
        'name' => 'getWorkingDirectory',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
          'data' => 
          array (
            'types' => 
            array (
              0 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'string',
                  'isIdentifier' => true,
                ),
              ),
              1 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'null',
                  'isIdentifier' => true,
                ),
              ),
            ),
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the working directory.
 */',
        'startLine' => 1102,
        'endLine' => 1111,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'setWorkingDirectory' => 
      array (
        'name' => 'setWorkingDirectory',
        'parameters' => 
        array (
          'cwd' => 
          array (
            'name' => 'cwd',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1118,
            'endLine' => 1118,
            'startColumn' => 41,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Sets the current working directory.
 *
 * @return $this
 */',
        'startLine' => 1118,
        'endLine' => 1123,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'getEnv' => 
      array (
        'name' => 'getEnv',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the environment variables.
 */',
        'startLine' => 1128,
        'endLine' => 1131,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'setEnv' => 
      array (
        'name' => 'setEnv',
        'parameters' => 
        array (
          'env' => 
          array (
            'name' => 'env',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1140,
            'endLine' => 1140,
            'startColumn' => 28,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Sets the environment variables.
 *
 * @param array<string|\\Stringable> $env The new environment variables
 *
 * @return $this
 */',
        'startLine' => 1140,
        'endLine' => 1145,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'getInput' => 
      array (
        'name' => 'getInput',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Gets the Process input.
 *
 * @return resource|string|\\Iterator|null
 */',
        'startLine' => 1152,
        'endLine' => 1155,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'setInput' => 
      array (
        'name' => 'setInput',
        'parameters' => 
        array (
          'input' => 
          array (
            'name' => 'input',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'mixed',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1168,
            'endLine' => 1168,
            'startColumn' => 30,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'static',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Sets the input.
 *
 * This content will be passed to the underlying process standard input.
 *
 * @param string|resource|\\Traversable|self|null $input The content
 *
 * @return $this
 *
 * @throws LogicException In case the process is running
 */',
        'startLine' => 1168,
        'endLine' => 1177,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'checkTimeout' => 
      array (
        'name' => 'checkTimeout',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Performs a check between the timeout definition and the time the process started.
 *
 * In case you run a background process (with the start method), you should
 * trigger this method regularly to ensure the process timeout
 *
 * @throws ProcessTimedOutException In case the timeout was reached
 */',
        'startLine' => 1187,
        'endLine' => 1204,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'getStartTime' => 
      array (
        'name' => 'getStartTime',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'float',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @throws LogicException in case process is not started
 */',
        'startLine' => 1209,
        'endLine' => 1216,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'setOptions' => 
      array (
        'name' => 'setOptions',
        'parameters' => 
        array (
          'options' => 
          array (
            'name' => 'options',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1226,
            'endLine' => 1226,
            'startColumn' => 32,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Defines options to pass to the underlying proc_open().
 *
 * @see https://php.net/proc_open for the options supported by PHP.
 *
 * Enabling the "create_new_console" option allows a subprocess to continue
 * to run after the main process exited, on both Windows and *nix
 */',
        'startLine' => 1226,
        'endLine' => 1242,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'setIgnoredSignals' => 
      array (
        'name' => 'setIgnoredSignals',
        'parameters' => 
        array (
          'signals' => 
          array (
            'name' => 'signals',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1249,
            'endLine' => 1249,
            'startColumn' => 39,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Defines a list of posix signals that will not be propagated to the process.
 *
 * @param list<\\SIG*> $signals
 */',
        'startLine' => 1249,
        'endLine' => 1256,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'isTtySupported' => 
      array (
        'name' => 'isTtySupported',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns whether TTY is supported on the current operating system.
 */',
        'startLine' => 1261,
        'endLine' => 1266,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'isPtySupported' => 
      array (
        'name' => 'isPtySupported',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns whether PTY is supported on the current operating system.
 */',
        'startLine' => 1271,
        'endLine' => 1284,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'getDescriptors' => 
      array (
        'name' => 'getDescriptors',
        'parameters' => 
        array (
          'hasCallback' => 
          array (
            'name' => 'hasCallback',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'bool',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1289,
            'endLine' => 1289,
            'startColumn' => 37,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Creates the descriptors needed by the proc_open.
 */',
        'startLine' => 1289,
        'endLine' => 1301,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'buildCallback' => 
      array (
        'name' => 'buildCallback',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1313,
                'endLine' => 1313,
                'startTokenPos' => 6010,
                'startFilePos' => 43119,
                'endTokenPos' => 6010,
                'endFilePos' => 43122,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
              'data' => 
              array (
                'types' => 
                array (
                  0 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'callable',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'null',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1313,
            'endLine' => 1313,
            'startColumn' => 38,
            'endColumn' => 63,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Closure',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Builds up the callback used by wait().
 *
 * The callbacks adds all occurred output to the specific buffer and calls
 * the user callback (if present) with the received output.
 *
 * @param callable(\'out\'|\'err\', string)|null $callback
 *
 * @return \\Closure(\'out\'|\'err\', string):bool
 */',
        'startLine' => 1313,
        'endLine' => 1327,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'updateStatus' => 
      array (
        'name' => 'updateStatus',
        'parameters' => 
        array (
          'blocking' => 
          array (
            'name' => 'blocking',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'bool',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1334,
            'endLine' => 1334,
            'startColumn' => 37,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Updates the status of the process, reads pipes.
 *
 * @param bool $blocking Whether to use a blocking read call
 */',
        'startLine' => 1334,
        'endLine' => 1354,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'isSigchildEnabled' => 
      array (
        'name' => 'isSigchildEnabled',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Returns whether PHP has been compiled with the \'--enable-sigchild\' option or not.
 */',
        'startLine' => 1359,
        'endLine' => 1373,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'readPipesForOutput' => 
      array (
        'name' => 'readPipesForOutput',
        'parameters' => 
        array (
          'caller' => 
          array (
            'name' => 'caller',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1383,
            'endLine' => 1383,
            'startColumn' => 41,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'blocking' => 
          array (
            'name' => 'blocking',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 1383,
                'endLine' => 1383,
                'startTokenPos' => 6427,
                'startFilePos' => 45285,
                'endTokenPos' => 6427,
                'endFilePos' => 45289,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'bool',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1383,
            'endLine' => 1383,
            'startColumn' => 57,
            'endColumn' => 78,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Reads pipes for the freshest output.
 *
 * @param string $caller   The name of the method that needs fresh outputs
 * @param bool   $blocking Whether to use blocking calls or not
 *
 * @throws LogicException in case output has been disabled or process is not started
 */',
        'startLine' => 1383,
        'endLine' => 1392,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'validateTimeout' => 
      array (
        'name' => 'validateTimeout',
        'parameters' => 
        array (
          'timeout' => 
          array (
            'name' => 'timeout',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
              'data' => 
              array (
                'types' => 
                array (
                  0 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'float',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'null',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1399,
            'endLine' => 1399,
            'startColumn' => 38,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
          'data' => 
          array (
            'types' => 
            array (
              0 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'float',
                  'isIdentifier' => true,
                ),
              ),
              1 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'null',
                  'isIdentifier' => true,
                ),
              ),
            ),
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Validates and returns the filtered timeout.
 *
 * @throws InvalidArgumentException if the given timeout is a negative number
 */',
        'startLine' => 1399,
        'endLine' => 1410,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'readPipes' => 
      array (
        'name' => 'readPipes',
        'parameters' => 
        array (
          'blocking' => 
          array (
            'name' => 'blocking',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'bool',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1418,
            'endLine' => 1418,
            'startColumn' => 32,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'close' => 
          array (
            'name' => 'close',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'bool',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1418,
            'endLine' => 1418,
            'startColumn' => 48,
            'endColumn' => 58,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Reads pipes, executes callback.
 *
 * @param bool $blocking Whether to use blocking calls or not
 * @param bool $close    Whether to close file handles or not
 */',
        'startLine' => 1418,
        'endLine' => 1430,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'close' => 
      array (
        'name' => 'close',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Closes process resource, closes file handles, sets the exitcode.
 *
 * @return int The exitcode
 */',
        'startLine' => 1437,
        'endLine' => 1463,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'resetProcessData' => 
      array (
        'name' => 'resetProcessData',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Resets data related to the latest run of the process.
 */',
        'startLine' => 1468,
        'endLine' => 1482,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'doSignal' => 
      array (
        'name' => 'doSignal',
        'parameters' => 
        array (
          'signal' => 
          array (
            'name' => 'signal',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'int',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1494,
            'endLine' => 1494,
            'startColumn' => 31,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'throwException' => 
          array (
            'name' => 'throwException',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'bool',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1494,
            'endLine' => 1494,
            'startColumn' => 44,
            'endColumn' => 63,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Sends a POSIX signal to the process.
 *
 * @param int  $signal         A valid POSIX signal (see https://php.net/pcntl.constants)
 * @param bool $throwException Whether to throw exception in case signal failed
 *
 * @throws LogicException   In case the process is not running
 * @throws RuntimeException In case --enable-sigchild is activated and the process can\'t be killed
 * @throws RuntimeException In case of failure
 */',
        'startLine' => 1494,
        'endLine' => 1541,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'buildShellCommandline' => 
      array (
        'name' => 'buildShellCommandline',
        'parameters' => 
        array (
          'commandline' => 
          array (
            'name' => 'commandline',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
              'data' => 
              array (
                'types' => 
                array (
                  0 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'string',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'array',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1543,
            'endLine' => 1543,
            'startColumn' => 44,
            'endColumn' => 68,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 1543,
        'endLine' => 1556,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'prepareWindowsCommandLine' => 
      array (
        'name' => 'prepareWindowsCommandLine',
        'parameters' => 
        array (
          'cmd' => 
          array (
            'name' => 'cmd',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
              'data' => 
              array (
                'types' => 
                array (
                  0 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'string',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'array',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1558,
            'endLine' => 1558,
            'startColumn' => 48,
            'endColumn' => 64,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'env' => 
          array (
            'name' => 'env',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => true,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1558,
            'endLine' => 1558,
            'startColumn' => 67,
            'endColumn' => 77,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 1558,
        'endLine' => 1610,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'requireProcessIsStarted' => 
      array (
        'name' => 'requireProcessIsStarted',
        'parameters' => 
        array (
          'functionName' => 
          array (
            'name' => 'functionName',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1617,
            'endLine' => 1617,
            'startColumn' => 46,
            'endColumn' => 65,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Ensures the process is running or terminated, throws a LogicException if the process has a not started.
 *
 * @throws LogicException if the process has not run
 */',
        'startLine' => 1617,
        'endLine' => 1622,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'requireProcessIsTerminated' => 
      array (
        'name' => 'requireProcessIsTerminated',
        'parameters' => 
        array (
          'functionName' => 
          array (
            'name' => 'functionName',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1629,
            'endLine' => 1629,
            'startColumn' => 49,
            'endColumn' => 68,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Ensures the process is terminated, throws a LogicException if the process has a status different than "terminated".
 *
 * @throws LogicException if the process is not yet terminated
 */',
        'startLine' => 1629,
        'endLine' => 1634,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'escapeArgument' => 
      array (
        'name' => 'escapeArgument',
        'parameters' => 
        array (
          'argument' => 
          array (
            'name' => 'argument',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
              'data' => 
              array (
                'types' => 
                array (
                  0 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'string',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'null',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1639,
            'endLine' => 1639,
            'startColumn' => 37,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Escapes a string to be used as a shell argument.
 */',
        'startLine' => 1639,
        'endLine' => 1656,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'replacePlaceholders' => 
      array (
        'name' => 'replacePlaceholders',
        'parameters' => 
        array (
          'commandline' => 
          array (
            'name' => 'commandline',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1658,
            'endLine' => 1658,
            'startColumn' => 42,
            'endColumn' => 60,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'env' => 
          array (
            'name' => 'env',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1658,
            'endLine' => 1658,
            'startColumn' => 63,
            'endColumn' => 72,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 1658,
        'endLine' => 1667,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
      'getDefaultEnv' => 
      array (
        'name' => 'getDefaultEnv',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 1669,
        'endLine' => 1675,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\Process',
        'implementingClassName' => 'Symfony\\Component\\Process\\Process',
        'currentClassName' => 'Symfony\\Component\\Process\\Process',
        'aliasName' => NULL,
      ),
    ),
    'traitsData' => 
    array (
      'aliases' => 
      array (
      ),
      'modifiers' => 
      array (
      ),
      'precedences' => 
      array (
      ),
      'hashes' => 
      array (
      ),
    ),
  ),
));