<?php

declare(strict_types=1);

namespace Cycle\ORM\Tests\Functional\Driver\MySQL\Driver\Common\Mapper\ClasslessMapper;

// phpcs:ignore
use Cycle\ORM\Tests\Functional\Driver\Common\Mapper\ClasslessMapper\ClasslessMapperTest as CommonTest;

/**
 * @group driver
 * @group driver-mysql
 */
class ClasslessMapperTest extends CommonTest
{
    public const DRIVER = 'mysql';
}