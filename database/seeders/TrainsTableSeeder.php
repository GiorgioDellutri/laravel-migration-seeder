<?php

namespace Database\Seeders;

use App\Models\Train;
//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {
            $new_train_object = new Train();
            $new_train_object->azienda = $faker->sentence(3, true);
            $new_train_object->stazione_di_partenza = $faker->sentence(5, true);
            $new_train_object->stazione_di_arrivo = $faker->sentence(4, true);
            $new_train_object->orario_di_partenza = $faker->dateTime();
            $new_train_object->orario_di_arrivo = $faker->dateTime();
            $new_train_object->codice_treno = $faker->ean8();
            $new_train_object->numero_di_carrozze = $faker->randomDigit();
            $new_train_object->in_orario = $faker->boolean();
            $new_train_object->cancellato = $faker->boolean();
            $new_train_object->save();
        }
    }
}
