<?php

use App\Role;
use App\User;
use App\Advert;
use App\Category;
use App\Permission;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $john = $this->createUsersWithRolesAndPermissions();

        $racunari = factory(Category::class)->create(['name' => 'Racunari']);
        $automobili = factory(Category::class)->create(['name' => 'Automobili']);
        $telefoni = factory(Category::class)->create(['name' => 'Telefoni']);
        factory(Category::class)->create(['name' => 'Bicikli']);
        factory(Category::class)->create(['name' => 'Trotineti']);
        factory(Category::class)->create(['name' => 'Poljoprivreda']);
        factory(Category::class)->create(['name' => 'Muzika']);
        factory(Category::class)->create(['name' => 'Knjige']);
        factory(Category::class)->create(['name' => 'Lov i Ribolov']);

        $komponente = factory(Category::class)->create([
            'name' => 'Racunarske komponente',
            'parent_id' => $racunari->id
        ]);

        factory(Category::class)->create([
            'name' => 'Desktop racunari',
            'parent_id' => $racunari->id
        ]);

        factory(Category::class)->create([
            'name' => 'Laptop racunari',
            'parent_id' => $racunari->id
        ]);

        $grafickeKartice = factory(Category::class)->create([
            'name' => 'Graficke kartice',
            'parent_id' => $komponente->id
        ]);

        factory(Category::class)->create([
            'name' => 'Auto delovi',
            'parent_id' => $automobili->id
        ]);

        factory(Category::class)->create([
            'name' => 'Auto oprema',
            'parent_id' => $automobili->id
        ]);

        $jane = factory(User::class)->create(['name' => 'Jane Doe', 'email' => 'jane@example.com']);

        factory(Advert::class, 5)->create([
            'category_id' => $grafickeKartice->id,
            'user_id' => $jane->id
        ]);

        factory(Advert::class, 10)->create([
            'category_id' => $automobili->id,
            'user_id' => $jane->id
        ]);

        factory(Advert::class, 5)->create([
            'category_id' => $racunari->id,
            'user_id' => $john->id
        ]);

        factory(Advert::class, 5)->create([
            'category_id' => $telefoni->id,
            'user_id' => $john->id
        ]);
    }

    public function createUsersWithRolesAndPermissions()
    {
        $admin = new Role();
        $admin->name = 'admin';
        $admin->label = 'Administator of site';
        $admin->save();

        $administratePermison =  new Permission();
        $administratePermison->name = 'administrate-site';
        $administratePermison->label = 'Permission to administrate site';
        $administratePermison->save();

        $admin->givePermissionTo($administratePermison);

        $john = factory(User::class)->create(['name' => 'John Doe', 'email' => 'john@example.com']);

        $john->assignRole('admin');

        return $john;
    }
}
