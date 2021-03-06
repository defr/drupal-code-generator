<?php

namespace DrupalCodeGenerator\Tests\Generator\Drupal_8\Service;

use DrupalCodeGenerator\Tests\Generator\GeneratorBaseTest;

/**
 * Test for d8:service:custom command.
 */
class CustomTest extends GeneratorBaseTest {

  protected $class = 'Drupal_8\Service\Custom';

  protected $interaction = [
    'Module name [%default_name%]:' => 'Foo',
    'Module machine name [foo]:' => 'foo',
    'Service name [foo.example]:' => 'foo.example',
    'Class [Example]:' => 'Example',
    'Would you like to inject dependencies? [Yes]:' => 'Yes',
    '<1> Type the service name or use arrows up/down. Press enter to continue:' => 'entity_type.manager',
    '<2> Type the service name or use arrows up/down. Press enter to continue:' => 'cron',
    '<3> Type the service name or use arrows up/down. Press enter to continue:' => 'cache_tags.invalidator',
    '<4> Type the service name or use arrows up/down. Press enter to continue:' => "\n",
  ];

  protected $fixtures = [
    'foo.services.yml' => __DIR__ . '/_custom.services.yml',
    'src/Example.php' => __DIR__ . '/_custom.php',
  ];

}
