<?php

namespace Spatie\LaravelData\Tests\Fakes\Casts;

use Spatie\LaravelData\Casts\Cast;
use Spatie\LaravelData\Support\Creation\CreationContext;
use Spatie\LaravelData\Support\DataProperty;

class MeaningOfLifeCast implements Cast
{
    public function cast(DataProperty $property, mixed $value, array $properties, CreationContext $context): int
    {
        return 42;
    }
}
