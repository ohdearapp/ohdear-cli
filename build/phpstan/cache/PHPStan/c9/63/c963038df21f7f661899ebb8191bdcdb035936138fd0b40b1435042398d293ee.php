<?php declare(strict_types = 1);

// osfsl-/Users/freek/dev/code/ohdear-cli/vendor/composer/../illuminate/console/Application.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Console\Application
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-791d4b07c08b50c0a01298554ddcc3b07b7596744faa290c42b1251d1f49f49f-8.5.2-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Console\\Application',
        'filename' => '/Users/freek/dev/code/ohdear-cli/vendor/composer/../illuminate/console/Application.php',
      ),
    ),
    'namespace' => 'Illuminate\\Console',
    'name' => 'Illuminate\\Console\\Application',
    'shortName' => 'Application',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 25,
    'endLine' => 362,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Symfony\\Component\\Console\\Application',
    'implementsClassNames' => 
    array (
      0 => 'Illuminate\\Contracts\\Console\\Application',
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'laravel' => 
      array (
        'declaringClassName' => 'Illuminate\\Console\\Application',
        'implementingClassName' => 'Illuminate\\Console\\Application',
        'name' => 'laravel',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The Laravel application instance.
 *
 * @var \\Illuminate\\Contracts\\Container\\Container
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 32,
        'endLine' => 32,
        'startColumn' => 5,
        'endColumn' => 23,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'events' => 
      array (
        'declaringClassName' => 'Illuminate\\Console\\Application',
        'implementingClassName' => 'Illuminate\\Console\\Application',
        'name' => 'events',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The event dispatcher instance.
 *
 * @var \\Illuminate\\Contracts\\Events\\Dispatcher
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 39,
        'endLine' => 39,
        'startColumn' => 5,
        'endColumn' => 22,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'lastOutput' => 
      array (
        'declaringClassName' => 'Illuminate\\Console\\Application',
        'implementingClassName' => 'Illuminate\\Console\\Application',
        'name' => 'lastOutput',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The output from the previous command.
 *
 * @var \\Symfony\\Component\\Console\\Output\\BufferedOutput
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 46,
        'endLine' => 46,
        'startColumn' => 5,
        'endColumn' => 26,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'bootstrappers' => 
      array (
        'declaringClassName' => 'Illuminate\\Console\\Application',
        'implementingClassName' => 'Illuminate\\Console\\Application',
        'name' => 'bootstrappers',
        'modifiers' => 18,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 53,
            'endLine' => 53,
            'startTokenPos' => 158,
            'startFilePos' => 1582,
            'endTokenPos' => 159,
            'endFilePos' => 1583,
          ),
        ),
        'docComment' => '/**
 * The console application bootstrappers.
 *
 * @var array<array-key, \\Closure($this): void>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 53,
        'endLine' => 53,
        'startColumn' => 5,
        'endColumn' => 41,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'commandMap' => 
      array (
        'declaringClassName' => 'Illuminate\\Console\\Application',
        'implementingClassName' => 'Illuminate\\Console\\Application',
        'name' => 'commandMap',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 60,
            'endLine' => 60,
            'startTokenPos' => 170,
            'startFilePos' => 1742,
            'endTokenPos' => 171,
            'endFilePos' => 1743,
          ),
        ),
        'docComment' => '/**
 * A map of command names to classes.
 *
 * @var array<string, \\Illuminate\\Console\\Command|string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 60,
        'endLine' => 60,
        'startColumn' => 5,
        'endColumn' => 31,
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
          'laravel' => 
          array (
            'name' => 'laravel',
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
            'startLine' => 69,
            'endLine' => 69,
            'startColumn' => 33,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'events' => 
          array (
            'name' => 'events',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Contracts\\Events\\Dispatcher',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 69,
            'endLine' => 69,
            'startColumn' => 53,
            'endColumn' => 70,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'version' => 
          array (
            'name' => 'version',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 69,
            'endLine' => 69,
            'startColumn' => 73,
            'endColumn' => 80,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create a new Artisan console application.
 *
 * @param  \\Illuminate\\Contracts\\Container\\Container  $laravel
 * @param  \\Illuminate\\Contracts\\Events\\Dispatcher  $events
 * @param  string  $version
 */',
        'startLine' => 69,
        'endLine' => 81,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console',
        'declaringClassName' => 'Illuminate\\Console\\Application',
        'implementingClassName' => 'Illuminate\\Console\\Application',
        'currentClassName' => 'Illuminate\\Console\\Application',
        'aliasName' => NULL,
      ),
      'phpBinary' => 
      array (
        'name' => 'phpBinary',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine the proper PHP executable.
 *
 * @return string
 */',
        'startLine' => 88,
        'endLine' => 91,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Console',
        'declaringClassName' => 'Illuminate\\Console\\Application',
        'implementingClassName' => 'Illuminate\\Console\\Application',
        'currentClassName' => 'Illuminate\\Console\\Application',
        'aliasName' => NULL,
      ),
      'artisanBinary' => 
      array (
        'name' => 'artisanBinary',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine the proper Artisan executable.
 *
 * @return string
 */',
        'startLine' => 98,
        'endLine' => 101,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Console',
        'declaringClassName' => 'Illuminate\\Console\\Application',
        'implementingClassName' => 'Illuminate\\Console\\Application',
        'currentClassName' => 'Illuminate\\Console\\Application',
        'aliasName' => NULL,
      ),
      'formatCommandString' => 
      array (
        'name' => 'formatCommandString',
        'parameters' => 
        array (
          'string' => 
          array (
            'name' => 'string',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 109,
            'endLine' => 109,
            'startColumn' => 48,
            'endColumn' => 54,
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
 * Format the given command as a fully-qualified executable command.
 *
 * @param  string  $string
 * @return string
 */',
        'startLine' => 109,
        'endLine' => 112,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Console',
        'declaringClassName' => 'Illuminate\\Console\\Application',
        'implementingClassName' => 'Illuminate\\Console\\Application',
        'currentClassName' => 'Illuminate\\Console\\Application',
        'aliasName' => NULL,
      ),
      'starting' => 
      array (
        'name' => 'starting',
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
                'name' => 'Closure',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 120,
            'endLine' => 120,
            'startColumn' => 37,
            'endColumn' => 53,
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
 * Register a console "starting" bootstrapper.
 *
 * @param  \\Closure($this): void  $callback
 * @return void
 */',
        'startLine' => 120,
        'endLine' => 123,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Console',
        'declaringClassName' => 'Illuminate\\Console\\Application',
        'implementingClassName' => 'Illuminate\\Console\\Application',
        'currentClassName' => 'Illuminate\\Console\\Application',
        'aliasName' => NULL,
      ),
      'bootstrap' => 
      array (
        'name' => 'bootstrap',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Bootstrap the console application.
 *
 * @return void
 */',
        'startLine' => 130,
        'endLine' => 135,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Console',
        'declaringClassName' => 'Illuminate\\Console\\Application',
        'implementingClassName' => 'Illuminate\\Console\\Application',
        'currentClassName' => 'Illuminate\\Console\\Application',
        'aliasName' => NULL,
      ),
      'forgetBootstrappers' => 
      array (
        'name' => 'forgetBootstrappers',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Clear the console application bootstrappers.
 *
 * @return void
 */',
        'startLine' => 142,
        'endLine' => 145,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Console',
        'declaringClassName' => 'Illuminate\\Console\\Application',
        'implementingClassName' => 'Illuminate\\Console\\Application',
        'currentClassName' => 'Illuminate\\Console\\Application',
        'aliasName' => NULL,
      ),
      'call' => 
      array (
        'name' => 'call',
        'parameters' => 
        array (
          'command' => 
          array (
            'name' => 'command',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 157,
            'endLine' => 157,
            'startColumn' => 26,
            'endColumn' => 33,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'parameters' => 
          array (
            'name' => 'parameters',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 157,
                'endLine' => 157,
                'startTokenPos' => 473,
                'startFilePos' => 4204,
                'endTokenPos' => 474,
                'endFilePos' => 4205,
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
            'startLine' => 157,
            'endLine' => 157,
            'startColumn' => 36,
            'endColumn' => 57,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'outputBuffer' => 
          array (
            'name' => 'outputBuffer',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 157,
                'endLine' => 157,
                'startTokenPos' => 481,
                'startFilePos' => 4224,
                'endTokenPos' => 481,
                'endFilePos' => 4227,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 157,
            'endLine' => 157,
            'startColumn' => 60,
            'endColumn' => 79,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Run an Artisan console command by name.
 *
 * @param  \\Symfony\\Component\\Console\\Command\\Command|string  $command
 * @param  array  $parameters
 * @param  \\Symfony\\Component\\Console\\Output\\OutputInterface|null  $outputBuffer
 * @return int
 *
 * @throws \\Symfony\\Component\\Console\\Exception\\CommandNotFoundException
 */',
        'startLine' => 157,
        'endLine' => 168,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console',
        'declaringClassName' => 'Illuminate\\Console\\Application',
        'implementingClassName' => 'Illuminate\\Console\\Application',
        'currentClassName' => 'Illuminate\\Console\\Application',
        'aliasName' => NULL,
      ),
      'parseCommand' => 
      array (
        'name' => 'parseCommand',
        'parameters' => 
        array (
          'command' => 
          array (
            'name' => 'command',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 177,
            'endLine' => 177,
            'startColumn' => 37,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'parameters' => 
          array (
            'name' => 'parameters',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 177,
            'endLine' => 177,
            'startColumn' => 47,
            'endColumn' => 57,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Parse the incoming Artisan command and its input.
 *
 * @param  \\Symfony\\Component\\Console\\Command\\Command|string  $command
 * @param  array  $parameters
 * @return array<string, \\Symfony\\Component\\Console\\Input\\ArrayInput>
 */',
        'startLine' => 177,
        'endLine' => 198,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Console',
        'declaringClassName' => 'Illuminate\\Console\\Application',
        'implementingClassName' => 'Illuminate\\Console\\Application',
        'currentClassName' => 'Illuminate\\Console\\Application',
        'aliasName' => NULL,
      ),
      'output' => 
      array (
        'name' => 'output',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the output for the last run command.
 *
 * @return string
 */',
        'startLine' => 205,
        'endLine' => 210,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console',
        'declaringClassName' => 'Illuminate\\Console\\Application',
        'implementingClassName' => 'Illuminate\\Console\\Application',
        'currentClassName' => 'Illuminate\\Console\\Application',
        'aliasName' => NULL,
      ),
      'addCommands' => 
      array (
        'name' => 'addCommands',
        'parameters' => 
        array (
          'commands' => 
          array (
            'name' => 'commands',
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
            'startLine' => 219,
            'endLine' => 219,
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
          0 => 
          array (
            'name' => 'Override',
            'isRepeated' => false,
            'arguments' => 
            array (
            ),
          ),
        ),
        'docComment' => '/**
 * Add an array of commands to the console.
 *
 * @param  array<int, \\Symfony\\Component\\Console\\Command\\Command>  $commands
 * @return void
 */',
        'startLine' => 218,
        'endLine' => 224,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console',
        'declaringClassName' => 'Illuminate\\Console\\Application',
        'implementingClassName' => 'Illuminate\\Console\\Application',
        'currentClassName' => 'Illuminate\\Console\\Application',
        'aliasName' => NULL,
      ),
      'add' => 
      array (
        'name' => 'add',
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
                'name' => 'Symfony\\Component\\Console\\Command\\Command',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 233,
            'endLine' => 233,
            'startColumn' => 25,
            'endColumn' => 47,
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
                  'name' => 'Symfony\\Component\\Console\\Command\\Command',
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
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'Override',
            'isRepeated' => false,
            'arguments' => 
            array (
            ),
          ),
        ),
        'docComment' => '/**
 * Add a command to the console.
 *
 * @param  \\Symfony\\Component\\Console\\Command\\Command  $command
 * @return \\Symfony\\Component\\Console\\Command\\Command|null
 */',
        'startLine' => 232,
        'endLine' => 236,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console',
        'declaringClassName' => 'Illuminate\\Console\\Application',
        'implementingClassName' => 'Illuminate\\Console\\Application',
        'currentClassName' => 'Illuminate\\Console\\Application',
        'aliasName' => NULL,
      ),
      'addCommand' => 
      array (
        'name' => 'addCommand',
        'parameters' => 
        array (
          'command' => 
          array (
            'name' => 'command',
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
                      'name' => 'Symfony\\Component\\Console\\Command\\Command',
                      'isIdentifier' => false,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'callable',
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
            'startLine' => 244,
            'endLine' => 244,
            'startColumn' => 32,
            'endColumn' => 63,
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
                  'name' => 'Symfony\\Component\\Console\\Command\\Command',
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
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Add a command to the console.
 *
 * @param  \\Symfony\\Component\\Console\\Command\\Command|callable  $command
 * @return \\Symfony\\Component\\Console\\Command\\Command|null
 */',
        'startLine' => 244,
        'endLine' => 251,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console',
        'declaringClassName' => 'Illuminate\\Console\\Application',
        'implementingClassName' => 'Illuminate\\Console\\Application',
        'currentClassName' => 'Illuminate\\Console\\Application',
        'aliasName' => NULL,
      ),
      'addToParent' => 
      array (
        'name' => 'addToParent',
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
                'name' => 'Symfony\\Component\\Console\\Command\\Command',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 259,
            'endLine' => 259,
            'startColumn' => 36,
            'endColumn' => 58,
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
 * Add the command to the parent instance.
 *
 * @param  \\Symfony\\Component\\Console\\Command\\Command  $command
 * @return \\Symfony\\Component\\Console\\Command\\Command
 */',
        'startLine' => 259,
        'endLine' => 266,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Console',
        'declaringClassName' => 'Illuminate\\Console\\Application',
        'implementingClassName' => 'Illuminate\\Console\\Application',
        'currentClassName' => 'Illuminate\\Console\\Application',
        'aliasName' => NULL,
      ),
      'resolve' => 
      array (
        'name' => 'resolve',
        'parameters' => 
        array (
          'command' => 
          array (
            'name' => 'command',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 274,
            'endLine' => 274,
            'startColumn' => 29,
            'endColumn' => 36,
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
 * Add a command, resolving through the application.
 *
 * @param  \\Illuminate\\Console\\Command|string  $command
 * @return \\Symfony\\Component\\Console\\Command\\Command|null
 */',
        'startLine' => 274,
        'endLine' => 295,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console',
        'declaringClassName' => 'Illuminate\\Console\\Application',
        'implementingClassName' => 'Illuminate\\Console\\Application',
        'currentClassName' => 'Illuminate\\Console\\Application',
        'aliasName' => NULL,
      ),
      'resolveCommands' => 
      array (
        'name' => 'resolveCommands',
        'parameters' => 
        array (
          'commands' => 
          array (
            'name' => 'commands',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 303,
            'endLine' => 303,
            'startColumn' => 37,
            'endColumn' => 45,
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
 * Resolve an array of commands through the application.
 *
 * @param  mixed  $commands
 * @return $this
 */',
        'startLine' => 303,
        'endLine' => 312,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console',
        'declaringClassName' => 'Illuminate\\Console\\Application',
        'implementingClassName' => 'Illuminate\\Console\\Application',
        'currentClassName' => 'Illuminate\\Console\\Application',
        'aliasName' => NULL,
      ),
      'setContainerCommandLoader' => 
      array (
        'name' => 'setContainerCommandLoader',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Set the container command loader for lazy resolution.
 *
 * @return $this
 */',
        'startLine' => 319,
        'endLine' => 324,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console',
        'declaringClassName' => 'Illuminate\\Console\\Application',
        'implementingClassName' => 'Illuminate\\Console\\Application',
        'currentClassName' => 'Illuminate\\Console\\Application',
        'aliasName' => NULL,
      ),
      'getDefaultInputDefinition' => 
      array (
        'name' => 'getDefaultInputDefinition',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Symfony\\Component\\Console\\Input\\InputDefinition',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
          0 => 
          array (
            'name' => 'Override',
            'isRepeated' => false,
            'arguments' => 
            array (
            ),
          ),
        ),
        'docComment' => '/**
 * Get the default input definition for the application.
 *
 * This is used to add the --env option to every available command.
 *
 * @return \\Symfony\\Component\\Console\\Input\\InputDefinition
 */',
        'startLine' => 333,
        'endLine' => 339,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Console',
        'declaringClassName' => 'Illuminate\\Console\\Application',
        'implementingClassName' => 'Illuminate\\Console\\Application',
        'currentClassName' => 'Illuminate\\Console\\Application',
        'aliasName' => NULL,
      ),
      'getEnvironmentOption' => 
      array (
        'name' => 'getEnvironmentOption',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the global environment option for the definition.
 *
 * @return \\Symfony\\Component\\Console\\Input\\InputOption
 */',
        'startLine' => 346,
        'endLine' => 351,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Console',
        'declaringClassName' => 'Illuminate\\Console\\Application',
        'implementingClassName' => 'Illuminate\\Console\\Application',
        'currentClassName' => 'Illuminate\\Console\\Application',
        'aliasName' => NULL,
      ),
      'getLaravel' => 
      array (
        'name' => 'getLaravel',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the Laravel application instance.
 *
 * @return \\Illuminate\\Contracts\\Foundation\\Application
 */',
        'startLine' => 358,
        'endLine' => 361,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Console',
        'declaringClassName' => 'Illuminate\\Console\\Application',
        'implementingClassName' => 'Illuminate\\Console\\Application',
        'currentClassName' => 'Illuminate\\Console\\Application',
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