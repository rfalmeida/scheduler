<?php

namespace App\Domains\Doctor\Providers;

use App\Domains\Doctor\Migrations\CreateDoctorTable;
use App\Domains\Doctor\Migrations\DropUniqueConstraintFromDoctorsTable;
use Migrator\MigrationServiceProvider;
use Migrator\MigratorTrait;

class DoctorMigrationsServiceProvider extends MigrationServiceProvider
{
    use MigratorTrait;

    public function register()
    {
        $this->migrations([
            CreateDoctorTable::class,
            DropUniqueConstraintFromDoctorsTable::class,
        ]);
    }
}
