<?php
// tests/Feature/CreateUserTest.php

namespace Tests\Feature;

use Tests\TestCase;
use App\Filament\Resources\UserResource;
use App\Filament\Resources\UserResource\Pages\CreateUser;

class CreateUserTest extends TestCase
{
    public function test_it_can_be_instantiated(): void
    {
        $createUser = new CreateUser();
        $this->assertInstanceOf(CreateUser::class, $createUser);
    }

    public function test_it_has_correct_resource(): void
    {
        $this->assertSame(UserResource::class, CreateUser::getResource());
    }
}
