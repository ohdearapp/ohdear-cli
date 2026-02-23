<?php declare(strict_types = 1);

// osfsl-/Users/freek/dev/code/ohdear-cli/vendor/composer/../symfony/service-contracts/ResetInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Symfony\Contracts\Service\ResetInterface
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-b30147365ddd947981ebe55fa112433e02a53eef25c5f7f9ee4c74f53e29fdfc-8.5.2-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Symfony\\Contracts\\Service\\ResetInterface',
        'filename' => '/Users/freek/dev/code/ohdear-cli/vendor/composer/../symfony/service-contracts/ResetInterface.php',
      ),
    ),
    'namespace' => 'Symfony\\Contracts\\Service',
    'name' => 'Symfony\\Contracts\\Service\\ResetInterface',
    'shortName' => 'ResetInterface',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Provides a way to reset an object to its initial state.
 *
 * When calling the "reset()" method on an object, it should be put back to its
 * initial state. This usually means clearing any internal buffers and forwarding
 * the call to internal dependencies. All properties of the object should be put
 * back to the same state it had when it was first ready to use.
 *
 * This method could be called, for example, to recycle objects that are used as
 * services, so that they can be used to handle several requests in the same
 * process loop (note that we advise making your services stateless instead of
 * implementing this interface when possible.)
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 27,
    'endLine' => 33,
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
    ),
    'immediateProperties' => 
    array (
    ),
    'immediateMethods' => 
    array (
      'reset' => 
      array (
        'name' => 'reset',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * @return void
 */',
        'startLine' => 32,
        'endLine' => 32,
        'startColumn' => 5,
        'endColumn' => 28,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Symfony\\Contracts\\Service',
        'declaringClassName' => 'Symfony\\Contracts\\Service\\ResetInterface',
        'implementingClassName' => 'Symfony\\Contracts\\Service\\ResetInterface',
        'currentClassName' => 'Symfony\\Contracts\\Service\\ResetInterface',
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