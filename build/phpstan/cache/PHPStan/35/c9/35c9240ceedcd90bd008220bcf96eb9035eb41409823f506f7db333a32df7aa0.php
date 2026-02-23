<?php declare(strict_types = 1);

// osfsl-/Users/freek/dev/code/ohdear-cli/vendor/composer/../laravel-zero/foundation/src/Illuminate/Foundation/Application.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Foundation\Application
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-4a3b1f3527af6c4c814d990a2143f69dddf0dbc55ea3a2b8899f40020b72dcf3-8.5.2-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Foundation\\Application',
        'filename' => '/Users/freek/dev/code/ohdear-cli/vendor/composer/../laravel-zero/foundation/src/Illuminate/Foundation/Application.php',
      ),
    ),
    'namespace' => 'Illuminate\\Foundation',
    'name' => 'Illuminate\\Foundation\\Application',
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
    'startLine' => 38,
    'endLine' => 1741,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Illuminate\\Container\\Container',
    'implementsClassNames' => 
    array (
      0 => 'Illuminate\\Contracts\\Foundation\\Application',
      1 => 'Illuminate\\Contracts\\Foundation\\CachesConfiguration',
      2 => 'Illuminate\\Contracts\\Foundation\\CachesRoutes',
    ),
    'traitClassNames' => 
    array (
      0 => 'Illuminate\\Support\\Traits\\Macroable',
    ),
    'immediateConstants' => 
    array (
      'VERSION' => 
      array (
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'name' => 'VERSION',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'12.48.1\'',
          'attributes' => 
          array (
            'startLine' => 47,
            'endLine' => 47,
            'startTokenPos' => 221,
            'startFilePos' => 1721,
            'endTokenPos' => 221,
            'endFilePos' => 1729,
          ),
        ),
        'docComment' => '/**
 * The Laravel framework version.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 47,
        'endLine' => 47,
        'startColumn' => 5,
        'endColumn' => 30,
      ),
      'MAIN_REQUEST' => 
      array (
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'name' => 'MAIN_REQUEST',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '1',
          'attributes' => 
          array (
            'startLine' => 54,
            'endLine' => 54,
            'startTokenPos' => 232,
            'startFilePos' => 1919,
            'endTokenPos' => 232,
            'endFilePos' => 1919,
          ),
        ),
        'docComment' => '/**
 * Copied from HttpKernelInterface, which this class no longer extends.
 *
 * @see \\Symfony\\Component\\HttpKernel\\HttpKernelInterface
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 54,
        'endLine' => 54,
        'startColumn' => 5,
        'endColumn' => 27,
      ),
    ),
    'immediateProperties' => 
    array (
      'basePath' => 
      array (
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'name' => 'basePath',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The base path for the Laravel installation.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 61,
        'endLine' => 61,
        'startColumn' => 5,
        'endColumn' => 24,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'registeredCallbacks' => 
      array (
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'name' => 'registeredCallbacks',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 68,
            'endLine' => 68,
            'startTokenPos' => 250,
            'startFilePos' => 2167,
            'endTokenPos' => 251,
            'endFilePos' => 2168,
          ),
        ),
        'docComment' => '/**
 * The array of registered callbacks.
 *
 * @var callable[]
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 68,
        'endLine' => 68,
        'startColumn' => 5,
        'endColumn' => 40,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'hasBeenBootstrapped' => 
      array (
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'name' => 'hasBeenBootstrapped',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 75,
            'endLine' => 75,
            'startTokenPos' => 262,
            'startFilePos' => 2315,
            'endTokenPos' => 262,
            'endFilePos' => 2319,
          ),
        ),
        'docComment' => '/**
 * Indicates if the application has been bootstrapped before.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 75,
        'endLine' => 75,
        'startColumn' => 5,
        'endColumn' => 43,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'booted' => 
      array (
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'name' => 'booted',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'false',
          'attributes' => 
          array (
            'startLine' => 82,
            'endLine' => 82,
            'startTokenPos' => 273,
            'startFilePos' => 2437,
            'endTokenPos' => 273,
            'endFilePos' => 2441,
          ),
        ),
        'docComment' => '/**
 * Indicates if the application has "booted".
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 82,
        'endLine' => 82,
        'startColumn' => 5,
        'endColumn' => 30,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'bootingCallbacks' => 
      array (
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'name' => 'bootingCallbacks',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 89,
            'endLine' => 89,
            'startTokenPos' => 284,
            'startFilePos' => 2564,
            'endTokenPos' => 285,
            'endFilePos' => 2565,
          ),
        ),
        'docComment' => '/**
 * The array of booting callbacks.
 *
 * @var callable[]
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 89,
        'endLine' => 89,
        'startColumn' => 5,
        'endColumn' => 37,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'bootedCallbacks' => 
      array (
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'name' => 'bootedCallbacks',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 96,
            'endLine' => 96,
            'startTokenPos' => 296,
            'startFilePos' => 2686,
            'endTokenPos' => 297,
            'endFilePos' => 2687,
          ),
        ),
        'docComment' => '/**
 * The array of booted callbacks.
 *
 * @var callable[]
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 96,
        'endLine' => 96,
        'startColumn' => 5,
        'endColumn' => 36,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'terminatingCallbacks' => 
      array (
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'name' => 'terminatingCallbacks',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 103,
            'endLine' => 103,
            'startTokenPos' => 308,
            'startFilePos' => 2818,
            'endTokenPos' => 309,
            'endFilePos' => 2819,
          ),
        ),
        'docComment' => '/**
 * The array of terminating callbacks.
 *
 * @var callable[]
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 103,
        'endLine' => 103,
        'startColumn' => 5,
        'endColumn' => 41,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'serviceProviders' => 
      array (
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'name' => 'serviceProviders',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 110,
            'endLine' => 110,
            'startTokenPos' => 320,
            'startFilePos' => 2991,
            'endTokenPos' => 321,
            'endFilePos' => 2992,
          ),
        ),
        'docComment' => '/**
 * All of the registered service providers.
 *
 * @var array<string, \\Illuminate\\Support\\ServiceProvider>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 110,
        'endLine' => 110,
        'startColumn' => 5,
        'endColumn' => 37,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'loadedProviders' => 
      array (
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'name' => 'loadedProviders',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 117,
            'endLine' => 117,
            'startTokenPos' => 332,
            'startFilePos' => 3120,
            'endTokenPos' => 333,
            'endFilePos' => 3121,
          ),
        ),
        'docComment' => '/**
 * The names of the loaded service providers.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 117,
        'endLine' => 117,
        'startColumn' => 5,
        'endColumn' => 36,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'deferredServices' => 
      array (
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'name' => 'deferredServices',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 124,
            'endLine' => 124,
            'startTokenPos' => 344,
            'startFilePos' => 3250,
            'endTokenPos' => 345,
            'endFilePos' => 3251,
          ),
        ),
        'docComment' => '/**
 * The deferred services and their providers.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 124,
        'endLine' => 124,
        'startColumn' => 5,
        'endColumn' => 37,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'bootstrapPath' => 
      array (
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'name' => 'bootstrapPath',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The custom bootstrap path defined by the developer.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 131,
        'endLine' => 131,
        'startColumn' => 5,
        'endColumn' => 29,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'appPath' => 
      array (
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'name' => 'appPath',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The custom application path defined by the developer.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 138,
        'endLine' => 138,
        'startColumn' => 5,
        'endColumn' => 23,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'configPath' => 
      array (
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'name' => 'configPath',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The custom configuration path defined by the developer.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 145,
        'endLine' => 145,
        'startColumn' => 5,
        'endColumn' => 26,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'databasePath' => 
      array (
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'name' => 'databasePath',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The custom database path defined by the developer.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 152,
        'endLine' => 152,
        'startColumn' => 5,
        'endColumn' => 28,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'langPath' => 
      array (
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'name' => 'langPath',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The custom language file path defined by the developer.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 159,
        'endLine' => 159,
        'startColumn' => 5,
        'endColumn' => 24,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'publicPath' => 
      array (
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'name' => 'publicPath',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The custom public / web path defined by the developer.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 166,
        'endLine' => 166,
        'startColumn' => 5,
        'endColumn' => 26,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'storagePath' => 
      array (
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'name' => 'storagePath',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The custom storage path defined by the developer.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 173,
        'endLine' => 173,
        'startColumn' => 5,
        'endColumn' => 27,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'environmentPath' => 
      array (
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'name' => 'environmentPath',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The custom environment path defined by the developer.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 180,
        'endLine' => 180,
        'startColumn' => 5,
        'endColumn' => 31,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'environmentFile' => 
      array (
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'name' => 'environmentFile',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'.env\'',
          'attributes' => 
          array (
            'startLine' => 187,
            'endLine' => 187,
            'startTokenPos' => 412,
            'startFilePos' => 4438,
            'endTokenPos' => 412,
            'endFilePos' => 4443,
          ),
        ),
        'docComment' => '/**
 * The environment file to load during bootstrapping.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 187,
        'endLine' => 187,
        'startColumn' => 5,
        'endColumn' => 40,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'isRunningInConsole' => 
      array (
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'name' => 'isRunningInConsole',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * Indicates if the application is running in the console.
 *
 * @var bool|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 194,
        'endLine' => 194,
        'startColumn' => 5,
        'endColumn' => 34,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'namespace' => 
      array (
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'name' => 'namespace',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The application namespace.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 201,
        'endLine' => 201,
        'startColumn' => 5,
        'endColumn' => 25,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'mergeFrameworkConfiguration' => 
      array (
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'name' => 'mergeFrameworkConfiguration',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'true',
          'attributes' => 
          array (
            'startLine' => 208,
            'endLine' => 208,
            'startTokenPos' => 437,
            'startFilePos' => 4852,
            'endTokenPos' => 437,
            'endFilePos' => 4855,
          ),
        ),
        'docComment' => '/**
 * Indicates if the framework\'s base configuration should be merged.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 208,
        'endLine' => 208,
        'startColumn' => 5,
        'endColumn' => 50,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'absoluteCachePathPrefixes' => 
      array (
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'name' => 'absoluteCachePathPrefixes',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'/\', \'\\\\\']',
          'attributes' => 
          array (
            'startLine' => 215,
            'endLine' => 215,
            'startTokenPos' => 448,
            'startFilePos' => 5020,
            'endTokenPos' => 453,
            'endFilePos' => 5030,
          ),
        ),
        'docComment' => '/**
 * The prefixes of absolute cache paths for use during normalization.
 *
 * @var string[]
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 215,
        'endLine' => 215,
        'startColumn' => 5,
        'endColumn' => 55,
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
          'basePath' => 
          array (
            'name' => 'basePath',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 222,
                'endLine' => 222,
                'startTokenPos' => 468,
                'startFilePos' => 5192,
                'endTokenPos' => 468,
                'endFilePos' => 5195,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 222,
            'endLine' => 222,
            'startColumn' => 33,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create a new Illuminate application instance.
 *
 * @param  string|null  $basePath
 */',
        'startLine' => 222,
        'endLine' => 232,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'configure' => 
      array (
        'name' => 'configure',
        'parameters' => 
        array (
          'basePath' => 
          array (
            'name' => 'basePath',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 240,
                'endLine' => 240,
                'startTokenPos' => 538,
                'startFilePos' => 5720,
                'endTokenPos' => 538,
                'endFilePos' => 5723,
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
            'startLine' => 240,
            'endLine' => 240,
            'startColumn' => 38,
            'endColumn' => 61,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Begin configuring a new Laravel application instance.
 *
 * @param  string|null  $basePath
 * @return \\Illuminate\\Foundation\\Configuration\\ApplicationBuilder
 */',
        'startLine' => 240,
        'endLine' => 252,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'inferBasePath' => 
      array (
        'name' => 'inferBasePath',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Infer the application\'s base directory from the environment.
 *
 * @return string
 */',
        'startLine' => 259,
        'endLine' => 269,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'version' => 
      array (
        'name' => 'version',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the version number of the application.
 *
 * @return string
 */',
        'startLine' => 276,
        'endLine' => 279,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'registerBaseBindings' => 
      array (
        'name' => 'registerBaseBindings',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Register the basic bindings into the container.
 *
 * @return void
 */',
        'startLine' => 286,
        'endLine' => 298,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'registerBaseServiceProviders' => 
      array (
        'name' => 'registerBaseServiceProviders',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Register all of the base service providers.
 *
 * @return void
 */',
        'startLine' => 305,
        'endLine' => 311,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'registerLaravelCloudServices' => 
      array (
        'name' => 'registerLaravelCloudServices',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Register any services needed for Laravel Cloud.
 *
 * @return void
 */',
        'startLine' => 318,
        'endLine' => 333,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'bootstrapWith' => 
      array (
        'name' => 'bootstrapWith',
        'parameters' => 
        array (
          'bootstrappers' => 
          array (
            'name' => 'bootstrappers',
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
            'startLine' => 341,
            'endLine' => 341,
            'startColumn' => 35,
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
 * Run the given array of bootstrap classes.
 *
 * @param  string[]  $bootstrappers
 * @return void
 */',
        'startLine' => 341,
        'endLine' => 352,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'afterLoadingEnvironment' => 
      array (
        'name' => 'afterLoadingEnvironment',
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
            'startLine' => 360,
            'endLine' => 360,
            'startColumn' => 45,
            'endColumn' => 61,
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
 * Register a callback to run after loading the environment.
 *
 * @param  \\Closure  $callback
 * @return void
 */',
        'startLine' => 360,
        'endLine' => 365,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'beforeBootstrapping' => 
      array (
        'name' => 'beforeBootstrapping',
        'parameters' => 
        array (
          'bootstrapper' => 
          array (
            'name' => 'bootstrapper',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 374,
            'endLine' => 374,
            'startColumn' => 41,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 374,
            'endLine' => 374,
            'startColumn' => 56,
            'endColumn' => 72,
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
 * Register a callback to run before a bootstrapper.
 *
 * @param  string  $bootstrapper
 * @param  \\Closure  $callback
 * @return void
 */',
        'startLine' => 374,
        'endLine' => 377,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'afterBootstrapping' => 
      array (
        'name' => 'afterBootstrapping',
        'parameters' => 
        array (
          'bootstrapper' => 
          array (
            'name' => 'bootstrapper',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 386,
            'endLine' => 386,
            'startColumn' => 40,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 386,
            'endLine' => 386,
            'startColumn' => 55,
            'endColumn' => 71,
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
 * Register a callback to run after a bootstrapper.
 *
 * @param  string  $bootstrapper
 * @param  \\Closure  $callback
 * @return void
 */',
        'startLine' => 386,
        'endLine' => 389,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'hasBeenBootstrapped' => 
      array (
        'name' => 'hasBeenBootstrapped',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if the application has been bootstrapped before.
 *
 * @return bool
 */',
        'startLine' => 396,
        'endLine' => 399,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'setBasePath' => 
      array (
        'name' => 'setBasePath',
        'parameters' => 
        array (
          'basePath' => 
          array (
            'name' => 'basePath',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 407,
            'endLine' => 407,
            'startColumn' => 33,
            'endColumn' => 41,
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
 * Set the base path for the application.
 *
 * @param  string  $basePath
 * @return $this
 */',
        'startLine' => 407,
        'endLine' => 414,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'bindPathsInContainer' => 
      array (
        'name' => 'bindPathsInContainer',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Bind all of the application paths in the container.
 *
 * @return void
 */',
        'startLine' => 421,
        'endLine' => 442,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'path' => 
      array (
        'name' => 'path',
        'parameters' => 
        array (
          'path' => 
          array (
            'name' => 'path',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 450,
                'endLine' => 450,
                'startTokenPos' => 1507,
                'startFilePos' => 11486,
                'endTokenPos' => 1507,
                'endFilePos' => 11487,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 450,
            'endLine' => 450,
            'startColumn' => 26,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the path to the application "app" directory.
 *
 * @param  string  $path
 * @return string
 */',
        'startLine' => 450,
        'endLine' => 453,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'useAppPath' => 
      array (
        'name' => 'useAppPath',
        'parameters' => 
        array (
          'path' => 
          array (
            'name' => 'path',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 461,
            'endLine' => 461,
            'startColumn' => 32,
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
 * Set the application directory.
 *
 * @param  string  $path
 * @return $this
 */',
        'startLine' => 461,
        'endLine' => 468,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'basePath' => 
      array (
        'name' => 'basePath',
        'parameters' => 
        array (
          'path' => 
          array (
            'name' => 'path',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 476,
                'endLine' => 476,
                'startTokenPos' => 1591,
                'startFilePos' => 12008,
                'endTokenPos' => 1591,
                'endFilePos' => 12009,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 476,
            'endLine' => 476,
            'startColumn' => 30,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the base path of the Laravel installation.
 *
 * @param  string  $path
 * @return string
 */',
        'startLine' => 476,
        'endLine' => 479,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'bootstrapPath' => 
      array (
        'name' => 'bootstrapPath',
        'parameters' => 
        array (
          'path' => 
          array (
            'name' => 'path',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 487,
                'endLine' => 487,
                'startTokenPos' => 1625,
                'startFilePos' => 12246,
                'endTokenPos' => 1625,
                'endFilePos' => 12247,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 487,
            'endLine' => 487,
            'startColumn' => 35,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the path to the bootstrap directory.
 *
 * @param  string  $path
 * @return string
 */',
        'startLine' => 487,
        'endLine' => 490,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'getBootstrapProvidersPath' => 
      array (
        'name' => 'getBootstrapProvidersPath',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the path to the service provider list in the bootstrap directory.
 *
 * @return string
 */',
        'startLine' => 497,
        'endLine' => 500,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'useBootstrapPath' => 
      array (
        'name' => 'useBootstrapPath',
        'parameters' => 
        array (
          'path' => 
          array (
            'name' => 'path',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 508,
            'endLine' => 508,
            'startColumn' => 38,
            'endColumn' => 42,
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
 * Set the bootstrap file directory.
 *
 * @param  string  $path
 * @return $this
 */',
        'startLine' => 508,
        'endLine' => 515,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'configPath' => 
      array (
        'name' => 'configPath',
        'parameters' => 
        array (
          'path' => 
          array (
            'name' => 'path',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 523,
                'endLine' => 523,
                'startTokenPos' => 1723,
                'startFilePos' => 13018,
                'endTokenPos' => 1723,
                'endFilePos' => 13019,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 523,
            'endLine' => 523,
            'startColumn' => 32,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the path to the application configuration files.
 *
 * @param  string  $path
 * @return string
 */',
        'startLine' => 523,
        'endLine' => 526,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'useConfigPath' => 
      array (
        'name' => 'useConfigPath',
        'parameters' => 
        array (
          'path' => 
          array (
            'name' => 'path',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 534,
            'endLine' => 534,
            'startColumn' => 35,
            'endColumn' => 39,
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
 * Set the configuration directory.
 *
 * @param  string  $path
 * @return $this
 */',
        'startLine' => 534,
        'endLine' => 541,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'databasePath' => 
      array (
        'name' => 'databasePath',
        'parameters' => 
        array (
          'path' => 
          array (
            'name' => 'path',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 549,
                'endLine' => 549,
                'startTokenPos' => 1807,
                'startFilePos' => 13558,
                'endTokenPos' => 1807,
                'endFilePos' => 13559,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 549,
            'endLine' => 549,
            'startColumn' => 34,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the path to the database directory.
 *
 * @param  string  $path
 * @return string
 */',
        'startLine' => 549,
        'endLine' => 552,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'useDatabasePath' => 
      array (
        'name' => 'useDatabasePath',
        'parameters' => 
        array (
          'path' => 
          array (
            'name' => 'path',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 560,
            'endLine' => 560,
            'startColumn' => 37,
            'endColumn' => 41,
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
 * Set the database directory.
 *
 * @param  string  $path
 * @return $this
 */',
        'startLine' => 560,
        'endLine' => 567,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'langPath' => 
      array (
        'name' => 'langPath',
        'parameters' => 
        array (
          'path' => 
          array (
            'name' => 'path',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 575,
                'endLine' => 575,
                'startTokenPos' => 1891,
                'startFilePos' => 14095,
                'endTokenPos' => 1891,
                'endFilePos' => 14096,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 575,
            'endLine' => 575,
            'startColumn' => 30,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the path to the language files.
 *
 * @param  string  $path
 * @return string
 */',
        'startLine' => 575,
        'endLine' => 578,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'useLangPath' => 
      array (
        'name' => 'useLangPath',
        'parameters' => 
        array (
          'path' => 
          array (
            'name' => 'path',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 586,
            'endLine' => 586,
            'startColumn' => 33,
            'endColumn' => 37,
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
 * Set the language file directory.
 *
 * @param  string  $path
 * @return $this
 */',
        'startLine' => 586,
        'endLine' => 593,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'publicPath' => 
      array (
        'name' => 'publicPath',
        'parameters' => 
        array (
          'path' => 
          array (
            'name' => 'path',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 601,
                'endLine' => 601,
                'startTokenPos' => 1965,
                'startFilePos' => 14600,
                'endTokenPos' => 1965,
                'endFilePos' => 14601,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 601,
            'endLine' => 601,
            'startColumn' => 32,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the path to the public / web directory.
 *
 * @param  string  $path
 * @return string
 */',
        'startLine' => 601,
        'endLine' => 604,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'usePublicPath' => 
      array (
        'name' => 'usePublicPath',
        'parameters' => 
        array (
          'path' => 
          array (
            'name' => 'path',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 612,
            'endLine' => 612,
            'startColumn' => 35,
            'endColumn' => 39,
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
 * Set the public / web directory.
 *
 * @param  string  $path
 * @return $this
 */',
        'startLine' => 612,
        'endLine' => 619,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'storagePath' => 
      array (
        'name' => 'storagePath',
        'parameters' => 
        array (
          'path' => 
          array (
            'name' => 'path',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 627,
                'endLine' => 627,
                'startTokenPos' => 2049,
                'startFilePos' => 15137,
                'endTokenPos' => 2049,
                'endFilePos' => 15138,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 627,
            'endLine' => 627,
            'startColumn' => 33,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the path to the storage directory.
 *
 * @param  string  $path
 * @return string
 */',
        'startLine' => 627,
        'endLine' => 638,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'useStoragePath' => 
      array (
        'name' => 'useStoragePath',
        'parameters' => 
        array (
          'path' => 
          array (
            'name' => 'path',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 646,
            'endLine' => 646,
            'startColumn' => 36,
            'endColumn' => 40,
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
 * Set the storage directory.
 *
 * @param  string  $path
 * @return $this
 */',
        'startLine' => 646,
        'endLine' => 653,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'resourcePath' => 
      array (
        'name' => 'resourcePath',
        'parameters' => 
        array (
          'path' => 
          array (
            'name' => 'path',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 661,
                'endLine' => 661,
                'startTokenPos' => 2211,
                'startFilePos' => 16003,
                'endTokenPos' => 2211,
                'endFilePos' => 16004,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 661,
            'endLine' => 661,
            'startColumn' => 34,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the path to the resources directory.
 *
 * @param  string  $path
 * @return string
 */',
        'startLine' => 661,
        'endLine' => 664,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'viewPath' => 
      array (
        'name' => 'viewPath',
        'parameters' => 
        array (
          'path' => 
          array (
            'name' => 'path',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 674,
                'endLine' => 674,
                'startTokenPos' => 2248,
                'startFilePos' => 16333,
                'endTokenPos' => 2248,
                'endFilePos' => 16334,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 674,
            'endLine' => 674,
            'startColumn' => 30,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the path to the views directory.
 *
 * This method returns the first configured path in the array of view paths.
 *
 * @param  string  $path
 * @return string
 */',
        'startLine' => 674,
        'endLine' => 679,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'joinPaths' => 
      array (
        'name' => 'joinPaths',
        'parameters' => 
        array (
          'basePath' => 
          array (
            'name' => 'basePath',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 688,
            'endLine' => 688,
            'startColumn' => 31,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'path' => 
          array (
            'name' => 'path',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 688,
                'endLine' => 688,
                'startTokenPos' => 2307,
                'startFilePos' => 16683,
                'endTokenPos' => 2307,
                'endFilePos' => 16684,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 688,
            'endLine' => 688,
            'startColumn' => 42,
            'endColumn' => 51,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Join the given paths together.
 *
 * @param  string  $basePath
 * @param  string  $path
 * @return string
 */',
        'startLine' => 688,
        'endLine' => 691,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'environmentPath' => 
      array (
        'name' => 'environmentPath',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the path to the environment file directory.
 *
 * @return string
 */',
        'startLine' => 698,
        'endLine' => 701,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'useEnvironmentPath' => 
      array (
        'name' => 'useEnvironmentPath',
        'parameters' => 
        array (
          'path' => 
          array (
            'name' => 'path',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 709,
            'endLine' => 709,
            'startColumn' => 40,
            'endColumn' => 44,
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
 * Set the directory for the environment file.
 *
 * @param  string  $path
 * @return $this
 */',
        'startLine' => 709,
        'endLine' => 714,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'loadEnvironmentFrom' => 
      array (
        'name' => 'loadEnvironmentFrom',
        'parameters' => 
        array (
          'file' => 
          array (
            'name' => 'file',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 722,
            'endLine' => 722,
            'startColumn' => 41,
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
 * Set the environment file to be loaded during bootstrapping.
 *
 * @param  string  $file
 * @return $this
 */',
        'startLine' => 722,
        'endLine' => 727,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'environmentFile' => 
      array (
        'name' => 'environmentFile',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the environment file the application is using.
 *
 * @return string
 */',
        'startLine' => 734,
        'endLine' => 737,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'environmentFilePath' => 
      array (
        'name' => 'environmentFilePath',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the fully qualified path to the environment file.
 *
 * @return string
 */',
        'startLine' => 744,
        'endLine' => 747,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'environment' => 
      array (
        'name' => 'environment',
        'parameters' => 
        array (
          'environments' => 
          array (
            'name' => 'environments',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => true,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 755,
            'endLine' => 755,
            'startColumn' => 33,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get or check the current application environment.
 *
 * @param  string|array  ...$environments
 * @return string|bool
 */',
        'startLine' => 755,
        'endLine' => 764,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'isLocal' => 
      array (
        'name' => 'isLocal',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if the application is in the local environment.
 *
 * @return bool
 */',
        'startLine' => 771,
        'endLine' => 774,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'isProduction' => 
      array (
        'name' => 'isProduction',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if the application is in the production environment.
 *
 * @return bool
 */',
        'startLine' => 781,
        'endLine' => 784,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'detectEnvironment' => 
      array (
        'name' => 'detectEnvironment',
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
            'startLine' => 792,
            'endLine' => 792,
            'startColumn' => 39,
            'endColumn' => 55,
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
 * Detect the application\'s current environment.
 *
 * @param  \\Closure  $callback
 * @return string
 */',
        'startLine' => 792,
        'endLine' => 799,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'runningInConsole' => 
      array (
        'name' => 'runningInConsole',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if the application is running in the console.
 *
 * @return bool
 */',
        'startLine' => 806,
        'endLine' => 813,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'runningConsoleCommand' => 
      array (
        'name' => 'runningConsoleCommand',
        'parameters' => 
        array (
          'commands' => 
          array (
            'name' => 'commands',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => true,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 821,
            'endLine' => 821,
            'startColumn' => 43,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if the application is running any of the given console commands.
 *
 * @param  string|array  ...$commands
 * @return bool
 */',
        'startLine' => 821,
        'endLine' => 831,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'runningUnitTests' => 
      array (
        'name' => 'runningUnitTests',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if the application is running unit tests.
 *
 * @return bool
 */',
        'startLine' => 838,
        'endLine' => 841,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'hasDebugModeEnabled' => 
      array (
        'name' => 'hasDebugModeEnabled',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if the application is running with debug mode enabled.
 *
 * @return bool
 */',
        'startLine' => 848,
        'endLine' => 851,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'registered' => 
      array (
        'name' => 'registered',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 859,
            'endLine' => 859,
            'startColumn' => 32,
            'endColumn' => 40,
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
 * Register a new registered listener.
 *
 * @param  callable  $callback
 * @return void
 */',
        'startLine' => 859,
        'endLine' => 862,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'registerConfiguredProviders' => 
      array (
        'name' => 'registerConfiguredProviders',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Register all of the configured providers.
 *
 * @return void
 */',
        'startLine' => 869,
        'endLine' => 880,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'register' => 
      array (
        'name' => 'register',
        'parameters' => 
        array (
          'provider' => 
          array (
            'name' => 'provider',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 889,
            'endLine' => 889,
            'startColumn' => 30,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'force' => 
          array (
            'name' => 'force',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 889,
                'endLine' => 889,
                'startTokenPos' => 3056,
                'startFilePos' => 21567,
                'endTokenPos' => 3056,
                'endFilePos' => 21571,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 889,
            'endLine' => 889,
            'startColumn' => 41,
            'endColumn' => 54,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Register a service provider with the application.
 *
 * @param  \\Illuminate\\Support\\ServiceProvider|string  $provider
 * @param  bool  $force
 * @return \\Illuminate\\Support\\ServiceProvider
 */',
        'startLine' => 889,
        'endLine' => 931,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'getProvider' => 
      array (
        'name' => 'getProvider',
        'parameters' => 
        array (
          'provider' => 
          array (
            'name' => 'provider',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 939,
            'endLine' => 939,
            'startColumn' => 33,
            'endColumn' => 41,
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
 * Get the registered service provider instance if it exists.
 *
 * @param  \\Illuminate\\Support\\ServiceProvider|string  $provider
 * @return \\Illuminate\\Support\\ServiceProvider|null
 */',
        'startLine' => 939,
        'endLine' => 944,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'getProviders' => 
      array (
        'name' => 'getProviders',
        'parameters' => 
        array (
          'provider' => 
          array (
            'name' => 'provider',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 952,
            'endLine' => 952,
            'startColumn' => 34,
            'endColumn' => 42,
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
 * Get the registered service provider instances if any exist.
 *
 * @param  \\Illuminate\\Support\\ServiceProvider|string  $provider
 * @return array
 */',
        'startLine' => 952,
        'endLine' => 957,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'resolveProvider' => 
      array (
        'name' => 'resolveProvider',
        'parameters' => 
        array (
          'provider' => 
          array (
            'name' => 'provider',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 965,
            'endLine' => 965,
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
 * Resolve a service provider instance from the class name.
 *
 * @param  string  $provider
 * @return \\Illuminate\\Support\\ServiceProvider
 */',
        'startLine' => 965,
        'endLine' => 968,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'markAsRegistered' => 
      array (
        'name' => 'markAsRegistered',
        'parameters' => 
        array (
          'provider' => 
          array (
            'name' => 'provider',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 976,
            'endLine' => 976,
            'startColumn' => 41,
            'endColumn' => 49,
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
 * Mark the given provider as registered.
 *
 * @param  \\Illuminate\\Support\\ServiceProvider  $provider
 * @return void
 */',
        'startLine' => 976,
        'endLine' => 983,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'loadDeferredProviders' => 
      array (
        'name' => 'loadDeferredProviders',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Load and boot all of the remaining deferred providers.
 *
 * @return void
 */',
        'startLine' => 990,
        'endLine' => 1000,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'loadDeferredProvider' => 
      array (
        'name' => 'loadDeferredProvider',
        'parameters' => 
        array (
          'service' => 
          array (
            'name' => 'service',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1008,
            'endLine' => 1008,
            'startColumn' => 42,
            'endColumn' => 49,
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
 * Load the provider for a deferred service.
 *
 * @param  string  $service
 * @return void
 */',
        'startLine' => 1008,
        'endLine' => 1022,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'registerDeferredProvider' => 
      array (
        'name' => 'registerDeferredProvider',
        'parameters' => 
        array (
          'provider' => 
          array (
            'name' => 'provider',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1031,
            'endLine' => 1031,
            'startColumn' => 46,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'service' => 
          array (
            'name' => 'service',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1031,
                'endLine' => 1031,
                'startTokenPos' => 3636,
                'startFilePos' => 26104,
                'endTokenPos' => 3636,
                'endFilePos' => 26107,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1031,
            'endLine' => 1031,
            'startColumn' => 57,
            'endColumn' => 71,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Register a deferred provider and service.
 *
 * @param  string  $provider
 * @param  string|null  $service
 * @return void
 */',
        'startLine' => 1031,
        'endLine' => 1047,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'make' => 
      array (
        'name' => 'make',
        'parameters' => 
        array (
          'abstract' => 
          array (
            'name' => 'abstract',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1060,
            'endLine' => 1060,
            'startColumn' => 26,
            'endColumn' => 34,
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
                'startLine' => 1060,
                'endLine' => 1060,
                'startTokenPos' => 3749,
                'startFilePos' => 27098,
                'endTokenPos' => 3750,
                'endFilePos' => 27099,
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
            'startLine' => 1060,
            'endLine' => 1060,
            'startColumn' => 37,
            'endColumn' => 58,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Resolve the given type from the container.
 *
 * @template TClass of object
 *
 * @param  string|class-string<TClass>  $abstract
 * @param  array  $parameters
 * @return ($abstract is class-string<TClass> ? TClass : mixed)
 *
 * @throws \\Illuminate\\Contracts\\Container\\BindingResolutionException
 */',
        'startLine' => 1060,
        'endLine' => 1065,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'resolve' => 
      array (
        'name' => 'resolve',
        'parameters' => 
        array (
          'abstract' => 
          array (
            'name' => 'abstract',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1080,
            'endLine' => 1080,
            'startColumn' => 32,
            'endColumn' => 40,
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
                'startLine' => 1080,
                'endLine' => 1080,
                'startTokenPos' => 3802,
                'startFilePos' => 27779,
                'endTokenPos' => 3803,
                'endFilePos' => 27780,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1080,
            'endLine' => 1080,
            'startColumn' => 43,
            'endColumn' => 58,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'raiseEvents' => 
          array (
            'name' => 'raiseEvents',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 1080,
                'endLine' => 1080,
                'startTokenPos' => 3810,
                'startFilePos' => 27798,
                'endTokenPos' => 3810,
                'endFilePos' => 27801,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1080,
            'endLine' => 1080,
            'startColumn' => 61,
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
 * Resolve the given type from the container.
 *
 * @template TClass of object
 *
 * @param  string|class-string<TClass>|callable  $abstract
 * @param  array  $parameters
 * @param  bool  $raiseEvents
 * @return ($abstract is class-string<TClass> ? TClass : mixed)
 *
 * @throws \\Illuminate\\Contracts\\Container\\BindingResolutionException
 * @throws \\Illuminate\\Contracts\\Container\\CircularDependencyException
 */',
        'startLine' => 1080,
        'endLine' => 1085,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'loadDeferredProviderIfNeeded' => 
      array (
        'name' => 'loadDeferredProviderIfNeeded',
        'parameters' => 
        array (
          'abstract' => 
          array (
            'name' => 'abstract',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1093,
            'endLine' => 1093,
            'startColumn' => 53,
            'endColumn' => 61,
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
 * Load the deferred provider if the given type is a deferred service and the instance has not been loaded.
 *
 * @param  string  $abstract
 * @return void
 */',
        'startLine' => 1093,
        'endLine' => 1098,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'bound' => 
      array (
        'name' => 'bound',
        'parameters' => 
        array (
          'abstract' => 
          array (
            'name' => 'abstract',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1106,
            'endLine' => 1106,
            'startColumn' => 27,
            'endColumn' => 35,
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
 * Determine if the given abstract type has been bound.
 *
 * @param  string  $abstract
 * @return bool
 */',
        'startLine' => 1106,
        'endLine' => 1109,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'isBooted' => 
      array (
        'name' => 'isBooted',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if the application has booted.
 *
 * @return bool
 */',
        'startLine' => 1116,
        'endLine' => 1119,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'boot' => 
      array (
        'name' => 'boot',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Boot the application\'s service providers.
 *
 * @return void
 */',
        'startLine' => 1126,
        'endLine' => 1144,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'bootProvider' => 
      array (
        'name' => 'bootProvider',
        'parameters' => 
        array (
          'provider' => 
          array (
            'name' => 'provider',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Support\\ServiceProvider',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1152,
            'endLine' => 1152,
            'startColumn' => 37,
            'endColumn' => 61,
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
 * Boot the given service provider.
 *
 * @param  \\Illuminate\\Support\\ServiceProvider  $provider
 * @return void
 */',
        'startLine' => 1152,
        'endLine' => 1161,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'booting' => 
      array (
        'name' => 'booting',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1169,
            'endLine' => 1169,
            'startColumn' => 29,
            'endColumn' => 37,
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
 * Register a new boot listener.
 *
 * @param  callable  $callback
 * @return void
 */',
        'startLine' => 1169,
        'endLine' => 1172,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'booted' => 
      array (
        'name' => 'booted',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1180,
            'endLine' => 1180,
            'startColumn' => 28,
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
 * Register a new "booted" listener.
 *
 * @param  callable  $callback
 * @return void
 */',
        'startLine' => 1180,
        'endLine' => 1187,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'fireAppCallbacks' => 
      array (
        'name' => 'fireAppCallbacks',
        'parameters' => 
        array (
          'callbacks' => 
          array (
            'name' => 'callbacks',
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
            'startLine' => 1195,
            'endLine' => 1195,
            'startColumn' => 41,
            'endColumn' => 57,
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
 * Call the booting callbacks for the application.
 *
 * @param  callable[]  $callbacks
 * @return void
 */',
        'startLine' => 1195,
        'endLine' => 1204,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'handle' => 
      array (
        'name' => 'handle',
        'parameters' => 
        array (
          'request' => 
          array (
            'name' => 'request',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Symfony\\Component\\HttpFoundation\\Request',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1211,
            'endLine' => 1211,
            'startColumn' => 28,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'type' => 
          array (
            'name' => 'type',
            'default' => 
            array (
              'code' => 'self::MAIN_REQUEST',
              'attributes' => 
              array (
                'startLine' => 1211,
                'endLine' => 1211,
                'startTokenPos' => 4256,
                'startFilePos' => 30949,
                'endTokenPos' => 4258,
                'endFilePos' => 30966,
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
            'startLine' => 1211,
            'endLine' => 1211,
            'startColumn' => 53,
            'endColumn' => 82,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'catch' => 
          array (
            'name' => 'catch',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 1211,
                'endLine' => 1211,
                'startTokenPos' => 4267,
                'startFilePos' => 30983,
                'endTokenPos' => 4267,
                'endFilePos' => 30986,
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
            'startLine' => 1211,
            'endLine' => 1211,
            'startColumn' => 85,
            'endColumn' => 102,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Symfony\\Component\\HttpFoundation\\Response',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * {@inheritdoc}
 *
 * @return \\Symfony\\Component\\HttpFoundation\\Response
 */',
        'startLine' => 1211,
        'endLine' => 1214,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'handleRequest' => 
      array (
        'name' => 'handleRequest',
        'parameters' => 
        array (
          'request' => 
          array (
            'name' => 'request',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Http\\Request',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1222,
            'endLine' => 1222,
            'startColumn' => 35,
            'endColumn' => 50,
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
 * Handle the incoming HTTP request and send the response to the browser.
 *
 * @param  \\Illuminate\\Http\\Request  $request
 * @return void
 */',
        'startLine' => 1222,
        'endLine' => 1229,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'handleCommand' => 
      array (
        'name' => 'handleCommand',
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
            'startLine' => 1237,
            'endLine' => 1237,
            'startColumn' => 35,
            'endColumn' => 55,
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
 * Handle the incoming Artisan command.
 *
 * @param  \\Symfony\\Component\\Console\\Input\\InputInterface  $input
 * @return int
 */',
        'startLine' => 1237,
        'endLine' => 1249,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'shouldMergeFrameworkConfiguration' => 
      array (
        'name' => 'shouldMergeFrameworkConfiguration',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if the framework\'s base configuration should be merged.
 *
 * @return bool
 */',
        'startLine' => 1256,
        'endLine' => 1259,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'dontMergeFrameworkConfiguration' => 
      array (
        'name' => 'dontMergeFrameworkConfiguration',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Indicate that the framework\'s base configuration should not be merged.
 *
 * @return $this
 */',
        'startLine' => 1266,
        'endLine' => 1271,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'shouldSkipMiddleware' => 
      array (
        'name' => 'shouldSkipMiddleware',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if middleware has been disabled for the application.
 *
 * @return bool
 */',
        'startLine' => 1278,
        'endLine' => 1282,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'getCachedServicesPath' => 
      array (
        'name' => 'getCachedServicesPath',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the path to the cached services.php file.
 *
 * @return string
 */',
        'startLine' => 1289,
        'endLine' => 1292,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'getCachedPackagesPath' => 
      array (
        'name' => 'getCachedPackagesPath',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the path to the cached packages.php file.
 *
 * @return string
 */',
        'startLine' => 1299,
        'endLine' => 1302,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'configurationIsCached' => 
      array (
        'name' => 'configurationIsCached',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if the application configuration is cached.
 *
 * @return bool
 */',
        'startLine' => 1309,
        'endLine' => 1316,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'getCachedConfigPath' => 
      array (
        'name' => 'getCachedConfigPath',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the path to the configuration cache file.
 *
 * @return string
 */',
        'startLine' => 1323,
        'endLine' => 1326,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'routesAreCached' => 
      array (
        'name' => 'routesAreCached',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if the application routes are cached.
 *
 * @return bool
 */',
        'startLine' => 1333,
        'endLine' => 1340,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'getCachedRoutesPath' => 
      array (
        'name' => 'getCachedRoutesPath',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the path to the routes cache file.
 *
 * @return string
 */',
        'startLine' => 1347,
        'endLine' => 1350,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'eventsAreCached' => 
      array (
        'name' => 'eventsAreCached',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if the application events are cached.
 *
 * @return bool
 */',
        'startLine' => 1357,
        'endLine' => 1366,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'getCachedEventsPath' => 
      array (
        'name' => 'getCachedEventsPath',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the path to the events cache file.
 *
 * @return string
 */',
        'startLine' => 1373,
        'endLine' => 1376,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'normalizeCachePath' => 
      array (
        'name' => 'normalizeCachePath',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1385,
            'endLine' => 1385,
            'startColumn' => 43,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'default' => 
          array (
            'name' => 'default',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1385,
            'endLine' => 1385,
            'startColumn' => 49,
            'endColumn' => 56,
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
 * Normalize a relative or absolute path to a cache file.
 *
 * @param  string  $key
 * @param  string  $default
 * @return string
 */',
        'startLine' => 1385,
        'endLine' => 1394,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'addAbsoluteCachePathPrefix' => 
      array (
        'name' => 'addAbsoluteCachePathPrefix',
        'parameters' => 
        array (
          'prefix' => 
          array (
            'name' => 'prefix',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1402,
            'endLine' => 1402,
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
 * Add new prefix to list of absolute path prefixes.
 *
 * @param  string  $prefix
 * @return $this
 */',
        'startLine' => 1402,
        'endLine' => 1407,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'maintenanceMode' => 
      array (
        'name' => 'maintenanceMode',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get an instance of the maintenance mode manager implementation.
 *
 * @return \\Illuminate\\Contracts\\Foundation\\MaintenanceMode
 */',
        'startLine' => 1414,
        'endLine' => 1417,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'isDownForMaintenance' => 
      array (
        'name' => 'isDownForMaintenance',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if the application is currently down for maintenance.
 *
 * @return bool
 */',
        'startLine' => 1424,
        'endLine' => 1427,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'abort' => 
      array (
        'name' => 'abort',
        'parameters' => 
        array (
          'code' => 
          array (
            'name' => 'code',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1440,
            'endLine' => 1440,
            'startColumn' => 27,
            'endColumn' => 31,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'message' => 
          array (
            'name' => 'message',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 1440,
                'endLine' => 1440,
                'startTokenPos' => 5014,
                'startFilePos' => 36690,
                'endTokenPos' => 5014,
                'endFilePos' => 36691,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1440,
            'endLine' => 1440,
            'startColumn' => 34,
            'endColumn' => 46,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'headers' => 
          array (
            'name' => 'headers',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 1440,
                'endLine' => 1440,
                'startTokenPos' => 5023,
                'startFilePos' => 36711,
                'endTokenPos' => 5024,
                'endFilePos' => 36712,
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
            'startLine' => 1440,
            'endLine' => 1440,
            'startColumn' => 49,
            'endColumn' => 67,
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
 * Throw an HttpException with the given data.
 *
 * @param  int  $code
 * @param  string  $message
 * @param  array  $headers
 * @return never
 *
 * @throws \\Symfony\\Component\\HttpKernel\\Exception\\HttpException
 * @throws \\Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException
 */',
        'startLine' => 1440,
        'endLine' => 1447,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'terminating' => 
      array (
        'name' => 'terminating',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1455,
            'endLine' => 1455,
            'startColumn' => 33,
            'endColumn' => 41,
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
 * Register a terminating callback with the application.
 *
 * @param  callable|string  $callback
 * @return $this
 */',
        'startLine' => 1455,
        'endLine' => 1460,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'terminate' => 
      array (
        'name' => 'terminate',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Terminate the application.
 *
 * @return void
 */',
        'startLine' => 1467,
        'endLine' => 1476,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'getLoadedProviders' => 
      array (
        'name' => 'getLoadedProviders',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the service providers that have been loaded.
 *
 * @return array<string, bool>
 */',
        'startLine' => 1483,
        'endLine' => 1486,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'providerIsLoaded' => 
      array (
        'name' => 'providerIsLoaded',
        'parameters' => 
        array (
          'provider' => 
          array (
            'name' => 'provider',
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
            'startLine' => 1494,
            'endLine' => 1494,
            'startColumn' => 38,
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
 * Determine if the given service provider is loaded.
 *
 * @param  string  $provider
 * @return bool
 */',
        'startLine' => 1494,
        'endLine' => 1497,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'getDeferredServices' => 
      array (
        'name' => 'getDeferredServices',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the application\'s deferred services.
 *
 * @return array
 */',
        'startLine' => 1504,
        'endLine' => 1507,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'setDeferredServices' => 
      array (
        'name' => 'setDeferredServices',
        'parameters' => 
        array (
          'services' => 
          array (
            'name' => 'services',
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
            'startLine' => 1515,
            'endLine' => 1515,
            'startColumn' => 41,
            'endColumn' => 55,
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
 * Set the application\'s deferred services.
 *
 * @param  array  $services
 * @return void
 */',
        'startLine' => 1515,
        'endLine' => 1518,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'isDeferredService' => 
      array (
        'name' => 'isDeferredService',
        'parameters' => 
        array (
          'service' => 
          array (
            'name' => 'service',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1526,
            'endLine' => 1526,
            'startColumn' => 39,
            'endColumn' => 46,
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
 * Determine if the given service is a deferred service.
 *
 * @param  string  $service
 * @return bool
 */',
        'startLine' => 1526,
        'endLine' => 1529,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'addDeferredServices' => 
      array (
        'name' => 'addDeferredServices',
        'parameters' => 
        array (
          'services' => 
          array (
            'name' => 'services',
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
            'startLine' => 1537,
            'endLine' => 1537,
            'startColumn' => 41,
            'endColumn' => 55,
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
 * Add an array of services to the application\'s deferred services.
 *
 * @param  array  $services
 * @return void
 */',
        'startLine' => 1537,
        'endLine' => 1540,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'removeDeferredServices' => 
      array (
        'name' => 'removeDeferredServices',
        'parameters' => 
        array (
          'services' => 
          array (
            'name' => 'services',
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
            'startLine' => 1548,
            'endLine' => 1548,
            'startColumn' => 44,
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
 * Remove an array of services from the application\'s deferred services.
 *
 * @param  array  $services
 * @return void
 */',
        'startLine' => 1548,
        'endLine' => 1553,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'provideFacades' => 
      array (
        'name' => 'provideFacades',
        'parameters' => 
        array (
          'namespace' => 
          array (
            'name' => 'namespace',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1561,
            'endLine' => 1561,
            'startColumn' => 36,
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
 * Configure the real-time facade namespace.
 *
 * @param  string  $namespace
 * @return void
 */',
        'startLine' => 1561,
        'endLine' => 1564,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'getLocale' => 
      array (
        'name' => 'getLocale',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the current application locale.
 *
 * @return string
 */',
        'startLine' => 1571,
        'endLine' => 1574,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'currentLocale' => 
      array (
        'name' => 'currentLocale',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the current application locale.
 *
 * @return string
 */',
        'startLine' => 1581,
        'endLine' => 1584,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'getFallbackLocale' => 
      array (
        'name' => 'getFallbackLocale',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the current application fallback locale.
 *
 * @return string
 */',
        'startLine' => 1591,
        'endLine' => 1594,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'setLocale' => 
      array (
        'name' => 'setLocale',
        'parameters' => 
        array (
          'locale' => 
          array (
            'name' => 'locale',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1602,
            'endLine' => 1602,
            'startColumn' => 31,
            'endColumn' => 37,
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
 * Set the current application locale.
 *
 * @param  string  $locale
 * @return void
 */',
        'startLine' => 1602,
        'endLine' => 1611,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'setFallbackLocale' => 
      array (
        'name' => 'setFallbackLocale',
        'parameters' => 
        array (
          'fallbackLocale' => 
          array (
            'name' => 'fallbackLocale',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1619,
            'endLine' => 1619,
            'startColumn' => 39,
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
 * Set the current application fallback locale.
 *
 * @param  string  $fallbackLocale
 * @return void
 */',
        'startLine' => 1619,
        'endLine' => 1624,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'isLocale' => 
      array (
        'name' => 'isLocale',
        'parameters' => 
        array (
          'locale' => 
          array (
            'name' => 'locale',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1632,
            'endLine' => 1632,
            'startColumn' => 30,
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
 * Determine if the application locale is the given locale.
 *
 * @param  string  $locale
 * @return bool
 */',
        'startLine' => 1632,
        'endLine' => 1635,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'registerCoreContainerAliases' => 
      array (
        'name' => 'registerCoreContainerAliases',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Register the core class aliases in the container.
 *
 * @return void
 */',
        'startLine' => 1642,
        'endLine' => 1689,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'flush' => 
      array (
        'name' => 'flush',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Flush the container of all bindings and resolved instances.
 *
 * @return void
 */',
        'startLine' => 1696,
        'endLine' => 1714,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
        'aliasName' => NULL,
      ),
      'getNamespace' => 
      array (
        'name' => 'getNamespace',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the application namespace.
 *
 * @return string
 *
 * @throws \\RuntimeException
 */',
        'startLine' => 1723,
        'endLine' => 1740,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation',
        'declaringClassName' => 'Illuminate\\Foundation\\Application',
        'implementingClassName' => 'Illuminate\\Foundation\\Application',
        'currentClassName' => 'Illuminate\\Foundation\\Application',
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