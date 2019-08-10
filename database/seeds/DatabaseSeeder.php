<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Advert;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $racunari = factory(Category::class)->create(['name' => 'Racunari']);
        $automobili = factory(Category::class)->create(['name' => 'Automobili']);
        factory(Category::class)->create(['name' => 'Telefoni']);
        factory(Category::class)->create(['name' => 'Bicikli']);

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

        $john = factory(User::class)->create(['name' => 'John Doe', 'email' => 'john@example.com']);

        factory(Advert::class, 5)->create([
            'category_id' => $grafickeKartice->id,
            'user_id' => $john->id
        ]);

        factory(Advert::class, 10)->create([
            'category_id' => $automobili->id,
            'user_id' => $john->id
        ]);

        factory(Advert::class, 5)->create([
            'category_id' => $racunari->id,
            'user_id' => $john->id
        ]);
    }
}
