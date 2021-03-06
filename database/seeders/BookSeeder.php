<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::truncate();

        Book::create([
            'title'         => "Gato Tiene Sueño",
            'author'        => "Satoshi Kitamura",
            'category_id'   => 1,
            'editorial'     => "Fondo de Cultura Economica",
            'price'         => 54.10,
            'lenguage'      => "Español",
            'description'   => "Esta es una simpática y familiar historia donde el protagonista, un gato, lo único que quiere hacer es dormir. Recorre toda la casa, hasta que al final encuentra el lugar ideal..., y por fin, se echa a dormir",
            'picture'       => "picture-books/gato-tiene-sueno.jpg",
            'sold'          => 12,
        ]);

        Book::create([
            'title'         => "Perro Tiene Sed",
            'author'        => "Satoshi Kitamura",
            'category_id'   => 1,
            'editorial'     => "Fondo de Cultura Economica",
            'price'         => 44.50,
            'lenguage'      => "Español",
            'description'   => "Un perro que tenía sed, y cada vez tenía más, empezó a ver con verdadero pesimismo el poder tomar un poco de agua. Pero como suele suceder cuando uno se siente perdido, el agua cayó del cielo.",
            'picture'       => "picture-books/perro-tiene-sed.jpg",
            'sold'          => 25,
        ]);

        Book::create([
            'title'         => "El niño que tocó las estrellas",
            'author'        => "J. Hernández",
            'category_id'   => 1,
            'editorial'     => "Grupo Editorial Patria",
            'price'         => 80.40,
            'lenguage'      => "Español",
            'description'   => "",
            'picture'       => "picture-books/nino-que-toco-las-estrellas.jpg",
            'sold'          => 76,
        ]);

        Book::create([
            'title'         => "The Gruffalo's Wean",
            'author'        => "Julia Donaldson",
            'category_id'   => 1,
            'editorial'     => "Itchy Coo",
            'price'         => 140.10,
            'lenguage'      => "Ingles",
            'description'   => "",
            'picture'       => "picture-books/gruffalo-wean.jpg",
            'sold'          => 54,
        ]);

        Book::create([
            'title'         => "El Cerdito De Navidad",
            'author'        => "J.K. Rowling",
            'category_id'   => 1,
            'editorial'     => "‎Penguin Random House Grupo Editorial",
            'price'         => 98.99,
            'lenguage'      => "Español",
            'description'   => "Un niño y su juguete están a punto de cambiarlo todo.Jack tiene un juguete preferido, Dito, que siempre ha estado a su lado, en las buenas y las malas. Hasta que una Nochebuena sucede algo terrible",
            'picture'       => "picture-books/cerdito-navidad.jpg",
            'sold'          => 5,
        ]);

        Book::create([
            'title'         => "Harry Potter y El Cáliz de Fuego",
            'author'        => "J.K. Rowling",
            'category_id'   => 2,
            'editorial'     => "‎Penguin Random House Grupo Editorial",
            'price'         => 250.50,
            'lenguage'      => "Español",
            'description'   => "Harry Potter y el cáliz de fuego es la cuarta entrega de la serie fantástica de la autora británica J.K. Rowling.",
            'picture'       => "picture-books/harry-potter-caliz.jpg",
            'sold'          =>  250,
        ]);

        Book::create([
            'title'         => "Jurassic Park: A Novel",
            'author'        => "Michael Crichton",
            'category_id'   => 2,
            'editorial'     => "‎Ballantine Books",
            'price'         => 150.00,
            'lenguage'      => "Ingles",
            'description'   => "",
            'picture'       => "picture-books/jurassic-park-novel-1.jpg",
            'sold'          => 134,
        ]);

        Book::create([
            'title'         => "El mundo de hielo y fuego: La historia no contada de Poniente y el Juego de Tronos",
            'author'        => "George R. R. Martin",
            'category_id'   => 2,
            'editorial'     => "Penguin Random House Grupo Editorial",
            'price'         => 109.60,
            'lenguage'      => "Español",
            'description'   => "Una enciclopedia bellamente ilustrada que cautivará a los fans de la saga Canción de hielo y fuego. Un libro complementario al vasto universo creado por Martin, enriquecido con árboles genealógicos, mapas y una recopilación de datos y acontecimientos detallados en torno a la trama abordada en su trabajo más ambicioso.",
            'picture'       => "picture-books/mundo-hielo-fuego.jpg",
            'sold'          => 98,
        ]);

        Book::create([
            'title'         => "Los Cuentos de Willy",
            'author'        => "Anthony Browne",
            'category_id'   => 2,
            'editorial'     => "‎Fondo de Cultura Económica",
            'price'         => 75.10,
            'lenguage'      => "Español",
            'description'   => "Todos los días Willy atraviesa una misteriosa puerta que lo lleva a vivir las aventuras más increíbles: un día aparece dentro de un barril de manzanas escuchando la conversación de unos temibles piratas; otro, lucha frente a frente con el capitán Garfio",
            'picture'       => "picture-books/cuentos-willy.jpg",
            'sold'          => 102,
        ]);

        Book::create([
            'title'         => "La Maleta de Fortu: Cuentos, metáforas y juegos ¡para no olvidar cómo ser felices!",
            'author'        => "Alegria Fernández",
            'category_id'   => 2,
            'editorial'     => "‎Independently Published",
            'price'         => 154.90,
            'lenguage'      => "Español",
            'description'   => "",
            'picture'       => "picture-books/maleta-de-fortu.jpg",
            'sold'          => 48,
        ]);

        Book::create([
            'title'         => "Álgebra (4a Edición)",
            'author'        => "Aurelio Baldor",
            'category_id'   => 3,
            'editorial'     => "‎‎Patria",
            'price'         => 404.20,
            'lenguage'      => "Español",
            'description'   => "",
            'picture'       => "picture-books/algebra-baldor.jpg",
            'sold'          => 73,
        ]);

        Book::create([
            'title'         => "MATEMÁTICAS SIMPLIFICADAS",
            'author'        => "CONAMAT",
            'category_id'   => 3,
            'editorial'     => "‎‎PEARSON",
            'price'         => 376.70,
            'lenguage'      => "Español",
            'description'   => "",
            'picture'       => "picture-books/matematicas-simplificadas.jpg",
            'sold'          => 34,
        ]);

        Book::create([
            'title'         => "Fisica Conceptos y Aplicaciones",
            'author'        => "Tippens Paul ",
            'category_id'   => 3,
            'editorial'     => "‎‎McGraw-Hill",
            'price'         => 630.20,
            'lenguage'      => "Español",
            'description'   => "Todo un clásico en la enseñanza de la física en el bachillerato y ahora, por primera vez, impreso en todo color, en su octavaedición este libro presenta dos cambios sustanciales: por un lado, se reorganizó el contenido para adecuarse a planes de estudio actuales del bachillerato general en América Latina",
            'picture'       => "picture-books/fisica-conceptos-aplicaciones.jpg",
            'sold'          => 187,
        ]);

        Book::create([
            'title'         => "Química",
            'author'        => "Raymond Chang",
            'category_id'   => 3,
            'editorial'     => "‎‎Editorial McGraw-Hill",
            'price'         => 489.99,
            'lenguage'      => "Español",
            'description'   => "Texto para uno o dos semestres de Química general en varias licenciaturas: ingeniería química, ciencias químicas, ingeniería industrial, ingeniería eléctrica, ingeniería ambiental, entre otras.",
            'picture'       => "picture-books/quimica.jpg",
            'sold'          => 35,
        ]);

        Book::create([
            'title'         => "Métodos numéricos para ingenieros",
            'author'        => "Steven Chapra",
            'category_id'   => 3,
            'editorial'     => "‎‎Editorial McGraw-Hill",
            'price'         => 423.50,
            'lenguage'      => "Español",
            'description'   => "La séptima edición de Métodos numéricos para ingenieros continúa ofreciendo una presentación innovadora y accesible sobre una amplia gama de métodos numéricos. Dado que regularmente se emplea software para el análisis numérico, esta revisión mantiene un fuerte enfoque en el uso apropiado de las herramientas de cómputo, así como de las discusiones de los fundamentos matemáticos subyacentes.",
            'picture'       => "picture-books/metodos-numericos.jpg",
            'sold'          => 116,
        ]);
    }
}
