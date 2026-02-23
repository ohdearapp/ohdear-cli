<?php declare(strict_types = 1);

// osfsl-/Users/freek/dev/code/ohdear-cli/vendor/composer/../symfony/process/ExecutableFinder.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Symfony\Component\Process\ExecutableFinder
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-39df2a82aaef2c1bdc09370122f16dc9b32f234e29376cc27c18e553e4aba1e5-8.5.2-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Symfony\\Component\\Process\\ExecutableFinder',
        'filename' => '/Users/freek/dev/code/ohdear-cli/vendor/composer/../symfony/process/ExecutableFinder.php',
      ),
    ),
    'namespace' => 'Symfony\\Component\\Process',
    'name' => 'Symfony\\Component\\Process\\ExecutableFinder',
    'shortName' => 'ExecutableFinder',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Generic executable finder.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 20,
    'endLine' => 103,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
      'CMD_BUILTINS' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\Process\\ExecutableFinder',
        'implementingClassName' => 'Symfony\\Component\\Process\\ExecutableFinder',
        'name' => 'CMD_BUILTINS',
        'modifiers' => 4,
        'type' => NULL,
        'value' => 
        array (
          'code' => '[\'assoc\', \'break\', \'call\', \'cd\', \'chdir\', \'cls\', \'color\', \'copy\', \'date\', \'del\', \'dir\', \'echo\', \'endlocal\', \'erase\', \'exit\', \'for\', \'ftype\', \'goto\', \'help\', \'if\', \'label\', \'md\', \'mkdir\', \'mklink\', \'move\', \'path\', \'pause\', \'popd\', \'prompt\', \'pushd\', \'rd\', \'rem\', \'ren\', \'rename\', \'rmdir\', \'set\', \'setlocal\', \'shift\', \'start\', \'time\', \'title\', \'type\', \'ver\', \'vol\']',
          'attributes' => 
          array (
            'startLine' => 22,
            'endLine' => 28,
            'startTokenPos' => 25,
            'startFilePos' => 478,
            'endTokenPos' => 159,
            'endFilePos' => 887,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 22,
        'endLine' => 28,
        'startColumn' => 5,
        'endColumn' => 6,
      ),
    ),
    'immediateProperties' => 
    array (
      'suffixes' => 
      array (
        'declaringClassName' => 'Symfony\\Component\\Process\\ExecutableFinder',
        'implementingClassName' => 'Symfony\\Component\\Process\\ExecutableFinder',
        'name' => 'suffixes',
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
            'startLine' => 30,
            'endLine' => 30,
            'startTokenPos' => 170,
            'startFilePos' => 921,
            'endTokenPos' => 171,
            'endFilePos' => 922,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 30,
        'endLine' => 30,
        'startColumn' => 5,
        'endColumn' => 33,
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
      'setSuffixes' => 
      array (
        'name' => 'setSuffixes',
        'parameters' => 
        array (
          'suffixes' => 
          array (
            'name' => 'suffixes',
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
            'startLine' => 35,
            'endLine' => 35,
            'startColumn' => 33,
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
 * Replaces default suffixes of executable.
 */',
        'startLine' => 35,
        'endLine' => 38,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\ExecutableFinder',
        'implementingClassName' => 'Symfony\\Component\\Process\\ExecutableFinder',
        'currentClassName' => 'Symfony\\Component\\Process\\ExecutableFinder',
        'aliasName' => NULL,
      ),
      'addSuffix' => 
      array (
        'name' => 'addSuffix',
        'parameters' => 
        array (
          'suffix' => 
          array (
            'name' => 'suffix',
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
            'startLine' => 46,
            'endLine' => 46,
            'startColumn' => 31,
            'endColumn' => 44,
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
 * Adds new possible suffix to check for executable, including the dot (.).
 *
 *     $finder = new ExecutableFinder();
 *     $finder->addSuffix(\'.foo\');
 */',
        'startLine' => 46,
        'endLine' => 49,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\ExecutableFinder',
        'implementingClassName' => 'Symfony\\Component\\Process\\ExecutableFinder',
        'currentClassName' => 'Symfony\\Component\\Process\\ExecutableFinder',
        'aliasName' => NULL,
      ),
      'find' => 
      array (
        'name' => 'find',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
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
            'startLine' => 58,
            'endLine' => 58,
            'startColumn' => 26,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'default' => 
          array (
            'name' => 'default',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 58,
                'endLine' => 58,
                'startTokenPos' => 254,
                'startFilePos' => 1734,
                'endTokenPos' => 254,
                'endFilePos' => 1737,
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
            'startLine' => 58,
            'endLine' => 58,
            'startColumn' => 40,
            'endColumn' => 62,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'extraDirs' => 
          array (
            'name' => 'extraDirs',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 58,
                'endLine' => 58,
                'startTokenPos' => 263,
                'startFilePos' => 1759,
                'endTokenPos' => 264,
                'endFilePos' => 1760,
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
            'startLine' => 58,
            'endLine' => 58,
            'startColumn' => 65,
            'endColumn' => 85,
            'parameterIndex' => 2,
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
 * Finds an executable by name.
 *
 * @param string      $name      The executable name (without the extension)
 * @param string|null $default   The default to return if no executable is found
 * @param array       $extraDirs Additional dirs to check into
 */',
        'startLine' => 58,
        'endLine' => 102,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Component\\Process',
        'declaringClassName' => 'Symfony\\Component\\Process\\ExecutableFinder',
        'implementingClassName' => 'Symfony\\Component\\Process\\ExecutableFinder',
        'currentClassName' => 'Symfony\\Component\\Process\\ExecutableFinder',
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