<?php declare(strict_types = 1);

// osfsl-/Users/freek/dev/code/ohdear-cli/vendor/composer/../nunomaduro/laravel-console-summary/src/SummaryCommand.php-PHPStan\BetterReflection\Reflection\ReflectionClass-NunoMaduro\LaravelConsoleSummary\SummaryCommand
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-247400188a889a05a087b78bf9f39f1bcbbe8621f0cac9e187e7a4ecf60ca7a9-8.5.2-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'NunoMaduro\\LaravelConsoleSummary\\SummaryCommand',
        'filename' => '/Users/freek/dev/code/ohdear-cli/vendor/composer/../nunomaduro/laravel-console-summary/src/SummaryCommand.php',
      ),
    ),
    'namespace' => 'NunoMaduro\\LaravelConsoleSummary',
    'name' => 'NunoMaduro\\LaravelConsoleSummary\\SummaryCommand',
    'shortName' => 'SummaryCommand',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 22,
    'endLine' => 57,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Symfony\\Component\\Console\\Command\\ListCommand',
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
      'FORMAT' => 
      array (
        'declaringClassName' => 'NunoMaduro\\LaravelConsoleSummary\\SummaryCommand',
        'implementingClassName' => 'NunoMaduro\\LaravelConsoleSummary\\SummaryCommand',
        'name' => 'FORMAT',
        'modifiers' => 4,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'txt\'',
          'attributes' => 
          array (
            'startLine' => 27,
            'endLine' => 27,
            'startTokenPos' => 62,
            'startFilePos' => 699,
            'endTokenPos' => 62,
            'endFilePos' => 703,
          ),
        ),
        'docComment' => '/**
 * The supported format.
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 27,
        'endLine' => 27,
        'startColumn' => 5,
        'endColumn' => 33,
      ),
    ),
    'immediateProperties' => 
    array (
      'container' => 
      array (
        'declaringClassName' => 'NunoMaduro\\LaravelConsoleSummary\\SummaryCommand',
        'implementingClassName' => 'NunoMaduro\\LaravelConsoleSummary\\SummaryCommand',
        'name' => 'container',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * @var \\Illuminate\\Contracts\\Container\\Container
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 32,
        'endLine' => 32,
        'startColumn' => 5,
        'endColumn' => 25,
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
          'container' => 
          array (
            'name' => 'container',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Contracts\\Container\\Container',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 37,
            'endLine' => 37,
            'startColumn' => 33,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * SummaryCommand constructor.
 */',
        'startLine' => 37,
        'endLine' => 42,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'NunoMaduro\\LaravelConsoleSummary',
        'declaringClassName' => 'NunoMaduro\\LaravelConsoleSummary\\SummaryCommand',
        'implementingClassName' => 'NunoMaduro\\LaravelConsoleSummary\\SummaryCommand',
        'currentClassName' => 'NunoMaduro\\LaravelConsoleSummary\\SummaryCommand',
        'aliasName' => NULL,
      ),
      'execute' => 
      array (
        'name' => 'execute',
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
                'name' => 'Symfony\\Component\\Console\\Input\\InputInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 47,
            'endLine' => 47,
            'startColumn' => 32,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'output' => 
          array (
            'name' => 'output',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 47,
            'endLine' => 47,
            'startColumn' => 55,
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
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * {@inheritdoc}
 */',
        'startLine' => 47,
        'endLine' => 56,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'NunoMaduro\\LaravelConsoleSummary',
        'declaringClassName' => 'NunoMaduro\\LaravelConsoleSummary\\SummaryCommand',
        'implementingClassName' => 'NunoMaduro\\LaravelConsoleSummary\\SummaryCommand',
        'currentClassName' => 'NunoMaduro\\LaravelConsoleSummary\\SummaryCommand',
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