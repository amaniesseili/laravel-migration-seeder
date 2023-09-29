 <?php

    namespace Database\Seeders;

    use app\Models\Train;
    use Illuminate\Database\Console\Seeds\WithoutModelEvents;
    use Illuminate\Database\Seeder;
    use Faker\Generator as Faker;

    class TrainsTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         */
        public function run(Faker $faker): void
        {

            for ($i = 1; $i <= 20; $i++) {

                $Train = new Train();

                $Train->azienda = $faker->company;
                $Train->stazione_di_partenza = $faker->city;
                $Train->stazione_di_arrivo = $faker->city;
                $Train->orario_di_partenza = $faker->time('H:i');
                $Train->orario_di_arrivo = $faker->time('H:i'); // orario casuale formato(hh:mm)
                $Train->codice_treno = $faker->unique()->ean8;//codive treno univoco di 8 cifre
                $Train->numero_carrozze = $faker->numberBetween(1, 10);//numero casuale carrozze tra 1 e 10
                $Train->in_orario = $faker->boolean;
                $Train->cancellato = $faker->boolean;

                $Train->save();
            }
        }
    }
