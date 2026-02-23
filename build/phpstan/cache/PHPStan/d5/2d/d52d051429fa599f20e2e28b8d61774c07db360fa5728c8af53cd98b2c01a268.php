<?php declare(strict_types = 1);

// osfsl-/Users/freek/dev/code/ohdear-cli/vendor/composer/../laravel-zero/foundation/src/Illuminate/Foundation/Console/VendorPublishCommand.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Foundation\Console\VendorPublishCommand
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-550d430afd26c7936c2885a26ee78cf925dbf312c2255ac5735e84f6a9ed211a-8.5.2-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
        'filename' => '/Users/freek/dev/code/ohdear-cli/vendor/composer/../laravel-zero/foundation/src/Illuminate/Foundation/Console/VendorPublishCommand.php',
      ),
    ),
    'namespace' => 'Illuminate\\Foundation\\Console',
    'name' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
    'shortName' => 'VendorPublishCommand',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
      0 => 
      array (
        'name' => 'Symfony\\Component\\Console\\Attribute\\AsCommand',
        'isRepeated' => false,
        'arguments' => 
        array (
          'name' => 
          array (
            'code' => '\'vendor:publish\'',
            'attributes' => 
            array (
              'startLine' => 21,
              'endLine' => 21,
              'startTokenPos' => 95,
              'startFilePos' => 659,
              'endTokenPos' => 95,
              'endFilePos' => 674,
            ),
          ),
        ),
      ),
    ),
    'startLine' => 21,
    'endLine' => 404,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Illuminate\\Console\\Command',
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'files' => 
      array (
        'declaringClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
        'implementingClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
        'name' => 'files',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The filesystem instance.
 *
 * @var \\Illuminate\\Filesystem\\Filesystem
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 29,
        'endLine' => 29,
        'startColumn' => 5,
        'endColumn' => 21,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'provider' => 
      array (
        'declaringClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
        'implementingClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
        'name' => 'provider',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'null',
          'attributes' => 
          array (
            'startLine' => 36,
            'endLine' => 36,
            'startTokenPos' => 124,
            'startFilePos' => 952,
            'endTokenPos' => 124,
            'endFilePos' => 955,
          ),
        ),
        'docComment' => '/**
 * The provider to publish.
 *
 * @var string|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 36,
        'endLine' => 36,
        'startColumn' => 5,
        'endColumn' => 31,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'tags' => 
      array (
        'declaringClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
        'implementingClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
        'name' => 'tags',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 43,
            'endLine' => 43,
            'startTokenPos' => 135,
            'startFilePos' => 1050,
            'endTokenPos' => 136,
            'endFilePos' => 1051,
          ),
        ),
        'docComment' => '/**
 * The tags to publish.
 *
 * @var array
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 43,
        'endLine' => 43,
        'startColumn' => 5,
        'endColumn' => 25,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'publishedAt' => 
      array (
        'declaringClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
        'implementingClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
        'name' => 'publishedAt',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The time the command started.
 *
 * @var \\Illuminate\\Support\\Carbon|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 50,
        'endLine' => 50,
        'startColumn' => 5,
        'endColumn' => 27,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'signature' => 
      array (
        'declaringClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
        'implementingClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
        'name' => 'signature',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'vendor:publish
                    {--existing : Publish and overwrite only the files that have already been published}
                    {--force : Overwrite any existing files}
                    {--all : Publish assets for all service providers without prompt}
                    {--provider= : The service provider that has assets you want to publish}
                    {--tag=* : One or many tags that have assets you want to publish}\'',
          'attributes' => 
          array (
            'startLine' => 57,
            'endLine' => 62,
            'startTokenPos' => 154,
            'startFilePos' => 1295,
            'endTokenPos' => 154,
            'endFilePos' => 1741,
          ),
        ),
        'docComment' => '/**
 * The console command signature.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 57,
        'endLine' => 62,
        'startColumn' => 5,
        'endColumn' => 87,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'description' => 
      array (
        'declaringClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
        'implementingClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
        'name' => 'description',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'Publish any publishable assets from vendor packages\'',
          'attributes' => 
          array (
            'startLine' => 69,
            'endLine' => 69,
            'startTokenPos' => 165,
            'startFilePos' => 1856,
            'endTokenPos' => 165,
            'endFilePos' => 1908,
          ),
        ),
        'docComment' => '/**
 * The console command description.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 69,
        'endLine' => 69,
        'startColumn' => 5,
        'endColumn' => 83,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'updateMigrationDates' => 
      array (
        'declaringClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
        'implementingClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
        'name' => 'updateMigrationDates',
        'modifiers' => 18,
        'type' => NULL,
        'default' => 
        array (
          'code' => 'true',
          'attributes' => 
          array (
            'startLine' => 76,
            'endLine' => 76,
            'startTokenPos' => 178,
            'startFilePos' => 2069,
            'endTokenPos' => 178,
            'endFilePos' => 2072,
          ),
        ),
        'docComment' => '/**
 * Indicates if migration dates should be updated while publishing.
 *
 * @var bool
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 76,
        'endLine' => 76,
        'startColumn' => 5,
        'endColumn' => 50,
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
          'files' => 
          array (
            'name' => 'files',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Filesystem\\Filesystem',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 83,
            'endLine' => 83,
            'startColumn' => 33,
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
 * Create a new command instance.
 *
 * @param  \\Illuminate\\Filesystem\\Filesystem  $files
 */',
        'startLine' => 83,
        'endLine' => 88,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Console',
        'declaringClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
        'implementingClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
        'currentClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
        'aliasName' => NULL,
      ),
      'handle' => 
      array (
        'name' => 'handle',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Execute the console command.
 *
 * @return void
 */',
        'startLine' => 95,
        'endLine' => 104,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Foundation\\Console',
        'declaringClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
        'implementingClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
        'currentClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
        'aliasName' => NULL,
      ),
      'determineWhatShouldBePublished' => 
      array (
        'name' => 'determineWhatShouldBePublished',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine the provider or tag(s) to publish.
 *
 * @return void
 */',
        'startLine' => 111,
        'endLine' => 124,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation\\Console',
        'declaringClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
        'implementingClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
        'currentClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
        'aliasName' => NULL,
      ),
      'promptForProviderOrTag' => 
      array (
        'name' => 'promptForProviderOrTag',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Prompt for which provider or tag to publish.
 *
 * @return void
 */',
        'startLine' => 131,
        'endLine' => 156,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation\\Console',
        'declaringClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
        'implementingClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
        'currentClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
        'aliasName' => NULL,
      ),
      'publishableChoices' => 
      array (
        'name' => 'publishableChoices',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * The choices available via the prompt.
 *
 * @return array
 */',
        'startLine' => 163,
        'endLine' => 170,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation\\Console',
        'declaringClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
        'implementingClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
        'currentClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
        'aliasName' => NULL,
      ),
      'parseChoice' => 
      array (
        'name' => 'parseChoice',
        'parameters' => 
        array (
          'choice' => 
          array (
            'name' => 'choice',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 178,
            'endLine' => 178,
            'startColumn' => 36,
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
 * Parse the answer that was given via the prompt.
 *
 * @param  string  $choice
 * @return void
 */',
        'startLine' => 178,
        'endLine' => 187,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation\\Console',
        'declaringClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
        'implementingClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
        'currentClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
        'aliasName' => NULL,
      ),
      'publishTag' => 
      array (
        'name' => 'publishTag',
        'parameters' => 
        array (
          'tag' => 
          array (
            'name' => 'tag',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 195,
            'endLine' => 195,
            'startColumn' => 35,
            'endColumn' => 38,
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
 * Publishes the assets for a tag.
 *
 * @param  string  $tag
 * @return mixed
 */',
        'startLine' => 195,
        'endLine' => 217,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation\\Console',
        'declaringClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
        'implementingClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
        'currentClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
        'aliasName' => NULL,
      ),
      'pathsToPublish' => 
      array (
        'name' => 'pathsToPublish',
        'parameters' => 
        array (
          'tag' => 
          array (
            'name' => 'tag',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 225,
            'endLine' => 225,
            'startColumn' => 39,
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
 * Get all of the paths to publish.
 *
 * @param  string  $tag
 * @return array
 */',
        'startLine' => 225,
        'endLine' => 230,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation\\Console',
        'declaringClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
        'implementingClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
        'currentClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
        'aliasName' => NULL,
      ),
      'publishItem' => 
      array (
        'name' => 'publishItem',
        'parameters' => 
        array (
          'from' => 
          array (
            'name' => 'from',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 239,
            'endLine' => 239,
            'startColumn' => 36,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'to' => 
          array (
            'name' => 'to',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 239,
            'endLine' => 239,
            'startColumn' => 43,
            'endColumn' => 45,
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
 * Publish the given item from and to the given location.
 *
 * @param  string  $from
 * @param  string  $to
 * @return void
 */',
        'startLine' => 239,
        'endLine' => 248,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation\\Console',
        'declaringClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
        'implementingClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
        'currentClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
        'aliasName' => NULL,
      ),
      'publishFile' => 
      array (
        'name' => 'publishFile',
        'parameters' => 
        array (
          'from' => 
          array (
            'name' => 'from',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 257,
            'endLine' => 257,
            'startColumn' => 36,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'to' => 
          array (
            'name' => 'to',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 257,
            'endLine' => 257,
            'startColumn' => 43,
            'endColumn' => 45,
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
 * Publish the file to the given path.
 *
 * @param  string  $from
 * @param  string  $to
 * @return void
 */',
        'startLine' => 257,
        'endLine' => 281,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation\\Console',
        'declaringClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
        'implementingClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
        'currentClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
        'aliasName' => NULL,
      ),
      'publishDirectory' => 
      array (
        'name' => 'publishDirectory',
        'parameters' => 
        array (
          'from' => 
          array (
            'name' => 'from',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 290,
            'endLine' => 290,
            'startColumn' => 41,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'to' => 
          array (
            'name' => 'to',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 290,
            'endLine' => 290,
            'startColumn' => 48,
            'endColumn' => 50,
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
 * Publish the directory to the given directory.
 *
 * @param  string  $from
 * @param  string  $to
 * @return void
 */',
        'startLine' => 290,
        'endLine' => 300,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation\\Console',
        'declaringClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
        'implementingClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
        'currentClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
        'aliasName' => NULL,
      ),
      'moveManagedFiles' => 
      array (
        'name' => 'moveManagedFiles',
        'parameters' => 
        array (
          'from' => 
          array (
            'name' => 'from',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 309,
            'endLine' => 309,
            'startColumn' => 41,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'manager' => 
          array (
            'name' => 'manager',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 309,
            'endLine' => 309,
            'startColumn' => 48,
            'endColumn' => 55,
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
 * Move all the files in the given MountManager.
 *
 * @param  string  $from
 * @param  \\League\\Flysystem\\MountManager  $manager
 * @return void
 */',
        'startLine' => 309,
        'endLine' => 326,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation\\Console',
        'declaringClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
        'implementingClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
        'currentClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
        'aliasName' => NULL,
      ),
      'createParentDirectory' => 
      array (
        'name' => 'createParentDirectory',
        'parameters' => 
        array (
          'directory' => 
          array (
            'name' => 'directory',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 334,
            'endLine' => 334,
            'startColumn' => 46,
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
 * Create the directory to house the published files if needed.
 *
 * @param  string  $directory
 * @return void
 */',
        'startLine' => 334,
        'endLine' => 339,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation\\Console',
        'declaringClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
        'implementingClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
        'currentClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
        'aliasName' => NULL,
      ),
      'ensureMigrationNameIsUpToDate' => 
      array (
        'name' => 'ensureMigrationNameIsUpToDate',
        'parameters' => 
        array (
          'from' => 
          array (
            'name' => 'from',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 348,
            'endLine' => 348,
            'startColumn' => 54,
            'endColumn' => 58,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'to' => 
          array (
            'name' => 'to',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 348,
            'endLine' => 348,
            'startColumn' => 61,
            'endColumn' => 63,
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
 * Ensure the given migration name is up-to-date.
 *
 * @param  string  $from
 * @param  string  $to
 * @return string
 */',
        'startLine' => 348,
        'endLine' => 371,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation\\Console',
        'declaringClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
        'implementingClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
        'currentClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
        'aliasName' => NULL,
      ),
      'status' => 
      array (
        'name' => 'status',
        'parameters' => 
        array (
          'from' => 
          array (
            'name' => 'from',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 381,
            'endLine' => 381,
            'startColumn' => 31,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'to' => 
          array (
            'name' => 'to',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 381,
            'endLine' => 381,
            'startColumn' => 38,
            'endColumn' => 40,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'type' => 
          array (
            'name' => 'type',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 381,
            'endLine' => 381,
            'startColumn' => 43,
            'endColumn' => 47,
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
 * Write a status message to the console.
 *
 * @param  string  $from
 * @param  string  $to
 * @param  string  $type
 * @return void
 */',
        'startLine' => 381,
        'endLine' => 393,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 2,
        'namespace' => 'Illuminate\\Foundation\\Console',
        'declaringClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
        'implementingClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
        'currentClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
        'aliasName' => NULL,
      ),
      'dontUpdateMigrationDates' => 
      array (
        'name' => 'dontUpdateMigrationDates',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Instruct the command to not update the dates on migrations when publishing.
 *
 * @return void
 */',
        'startLine' => 400,
        'endLine' => 403,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Foundation\\Console',
        'declaringClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
        'implementingClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
        'currentClassName' => 'Illuminate\\Foundation\\Console\\VendorPublishCommand',
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