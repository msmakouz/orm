<?php

declare(strict_types=1);

namespace Cycle\ORM\Tests\Functional\Driver\SQLite\Driver\Common\Relation\ManyToMany;

// phpcs:ignore
use Cycle\ORM\Tests\Functional\Driver\Common\Relation\ManyToMany\ManyToManyScopedTest as CommonTest;

/**
 * @group driver
 * @group driver-sqlite
 */
class ManyToManyScopedTest extends CommonTest
{
    public const DRIVER = 'sqlite';
}