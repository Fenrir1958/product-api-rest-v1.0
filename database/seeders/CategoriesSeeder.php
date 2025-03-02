<?php

namespace Database\Seeders;

use App\Models\Categorie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $categories = [
            ['name' => 'Accesorios', 'description' => 'Complementos de moda como bolsos, gafas, y joyería.'],
            ['name' => 'Alimentos', 'description' => 'Productos comestibles frescos y envasados.'],
            ['name' => 'Arte', 'description' => 'Pinturas, esculturas, y materiales para artistas.'],
            ['name' => 'Automotriz', 'description' => 'Repuestos, accesorios y herramientas para vehículos.'],
            ['name' => 'Bebés', 'description' => 'Productos para el cuidado y entretenimiento de bebés.'],
            ['name' => 'Belleza', 'description' => 'Cosméticos, productos para el cuidado de la piel y el cabello.'],
            ['name' => 'Bebidas', 'description' => 'Bebidas alcohólicas y no alcohólicas de diversas marcas.'],
            ['name' => 'Camping', 'description' => 'Equipos y accesorios para actividades al aire libre.'],
            ['name' => 'Caza', 'description' => 'Equipo y accesorios para la caza y el tiro deportivo.'],
            ['name' => 'Ciclismo', 'description' => 'Bicicletas, repuestos y accesorios para ciclistas.'],
            ['name' => 'Coleccionables', 'description' => 'Figuras, monedas, estampillas y otros artículos de colección.'],
            ['name' => 'Computación', 'description' => 'Laptops, hardware, periféricos y accesorios de PC.'],
            ['name' => 'Construcción', 'description' => 'Materiales y herramientas para construcción y remodelación.'],
            ['name' => 'Cómics', 'description' => 'Revistas y libros de historietas y mangas.'],
            ['name' => 'Deportes', 'description' => 'Equipamiento y ropa deportiva para diversas disciplinas.'],
            ['name' => 'Electrónica', 'description' => 'Dispositivos electrónicos como TVs, parlantes y más.'],
            ['name' => 'Eventos', 'description' => 'Decoraciones y servicios para fiestas y celebraciones.'],
            ['name' => 'Ferretería', 'description' => 'Herramientas y productos para reparaciones del hogar.'],
            ['name' => 'Fitness', 'description' => 'Equipos y accesorios para el entrenamiento físico.'],
            ['name' => 'Fotografía', 'description' => 'Cámaras, lentes y accesorios para fotógrafos.'],
            ['name' => 'Hogar', 'description' => 'Artículos para el hogar como muebles y decoración.'],
            ['name' => 'Iluminación', 'description' => 'Lámparas, bombillas y sistemas de iluminación.'],
            ['name' => 'Instrumentos musicales', 'description' => 'Guitarras, pianos, baterías y más.'],
            ['name' => 'Jardinería', 'description' => 'Herramientas y accesorios para el cuidado de plantas.'],
            ['name' => 'Joyería', 'description' => 'Anillos, collares y otros accesorios de lujo.'],
            ['name' => 'Juguetes', 'description' => 'Juguetes educativos, figuras de acción y más.'],
            ['name' => 'Lentes', 'description' => 'Gafas de sol, lentes de contacto y monturas ópticas.'],
            ['name' => 'Librería', 'description' => 'Libros, cuadernos y material de lectura.'],
            ['name' => 'Limpieza', 'description' => 'Productos para limpieza del hogar y la oficina.'],
            ['name' => 'Mascotas', 'description' => 'Alimentos y accesorios para mascotas.'],
            ['name' => 'Modelismo', 'description' => 'Maquetas, autos a escala y kits de construcción.'],
            ['name' => 'Motociclismo', 'description' => 'Accesorios y repuestos para motos.'],
            ['name' => 'Muebles', 'description' => 'Sillas, mesas, sofás y otros muebles para el hogar.'],
            ['name' => 'Música', 'description' => 'Vinilos, CDs y artículos musicales.'],
            ['name' => 'Natación', 'description' => 'Ropa y accesorios para nadadores.'],
            ['name' => 'Oficina', 'description' => 'Muebles y suministros de oficina.'],
            ['name' => 'Papelería', 'description' => 'Útiles escolares y artículos de oficina.'],
            ['name' => 'Películas', 'description' => 'DVDs, Blu-ray y mercancía cinematográfica.'],
            ['name' => 'Pesca', 'description' => 'Cañas, carretes y accesorios de pesca.'],
            ['name' => 'Repostería', 'description' => 'Utensilios e ingredientes para repostería.'],
            ['name' => 'Religión', 'description' => 'Artículos religiosos y espirituales.'],
            ['name' => 'Relojes', 'description' => 'Relojes de pulsera y pared de diversas marcas.'],
            ['name' => 'Ropa', 'description' => 'Vestimenta para todas las edades y estilos.'],
            ['name' => 'Salud', 'description' => 'Productos para el cuidado de la salud y bienestar.'],
            ['name' => 'Seguridad', 'description' => 'Cámaras, cerraduras y sistemas de seguridad.'],
            ['name' => 'Videojuegos', 'description' => 'Consolas, juegos y accesorios gamer.'],
            ['name' => 'Viajes', 'description' => 'Maletas, guías de viaje y accesorios.'],
            ['name' => 'Zapatos', 'description' => 'Calzado para todas las edades y estilos.'],
            ['name' => 'Cultura', 'description' => 'Productos relacionados con la historia y tradiciones culturales.']
        ];

        foreach ($categories as $category) {
            $category = Categorie::create($category);

            if (!$category) {
                Log::error('Error al crear la categoría: ' . $category->name);
            }
        }
    }
}
