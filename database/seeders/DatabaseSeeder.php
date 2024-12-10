<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;
use App\Models\State;
use App\Models\Size;
use App\Models\Color;
use App\Models\Category;
use App\Models\Product;
use App\Models\Address;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        foreach (dbStates() as $state) {
            State::create(['name' => $state]);
        }

        foreach (dbRoles() as $role) {
            Role::create(['name' => $role]);
        }

        User::factory()->create([
            'email' => 'admin@example.com',
            'role_id' => 1,
        ]);

        if(env('DEZTYLE_ALLOW_FAKE_DATA', false)) {
            foreach (dbSizes() as $size) {
                Size::create($size);
            }

            foreach (dbColors() as $color) {
                Color::create($color);
            }

            foreach (dbCategories() as $category) {
                Category::create($category);
            }

            Product::factory(300)->create();

            User::factory(50)->create([
                'role_id' => 2,
            ]);

            Address::factory(500)->create();
        }
    }
}
