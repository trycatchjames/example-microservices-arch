<?php
declare(strict_types=1);

use App\Domain\Pet\PetRepository;
use App\Infrastructure\Persistence\Pet\DatabasePetRepository;
use DI\ContainerBuilder;

return function (ContainerBuilder $containerBuilder) {
    // Here we map our UserRepository interface to its in memory implementation
    $containerBuilder->addDefinitions([
        PetRepository::class => \DI\autowire(DatabasePetRepository::class),
    ]);
};
