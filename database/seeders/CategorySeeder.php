<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::truncate();

        Category::create([
            'name' => 'Infantil y Juvenil',
            'description' => 'Literatura dirigida a los lectores no adultos, desde los prelectores a los lectores adolescentes.',
        ]);

        Category::create([
            'name' => 'Literatura y Ficcion',
            'description' => 'Literatura donde se enfatiza los hechos y los personajes en los cuales se basa la obra son inventados, producto de la imaginación',
        ]);

        Category::create([
            'name' => 'De texto',
            'description' => 'Literatura estándar perteneciente a cualquier rama de estudio y corresponde a un recurso didáctico que sirve como material de apoyo a las estrategias metodológicas del docente y enriquece el proceso de enseñanza-aprendizaje',
        ]);

        Category::create([
            'name' => 'Negocios e Inversiones',
            'description' => 'Literatura donde se enfoca en saber invertir o llevar adelante empresas pertenecientes a actividades económicas complejas que merecen investigación y estudio antes de lanzarse.',
        ]);

        Category::create([
            'name' => 'Comics',
            'description' => 'Pensado principalmente para adolescentes y niños, cuya atención es mucho más fluctuante y necesitan historias cortas que puedan hilvanarse a través de varios episodios, como en una serie de televisión.',
        ]);
    }
}
