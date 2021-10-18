<?php

declare(strict_types=1);

namespace Cycle\ORM\Tests\Functional\Driver\Postgres\Driver\Common\Relation;

// phpcs:ignore
use Cycle\ORM\Tests\Functional\Driver\Common\Relation\Eager2Test as CommonTest;

/**
 * @group driver
 * @group driver-postgres
 */
class Eager2Test extends CommonTest
{
    public const DRIVER = 'postgres';
}