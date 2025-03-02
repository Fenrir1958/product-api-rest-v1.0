<?php

namespace Database\Seeders;

use App\Models\Categorie;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $products = [
            ['name' => 'Bolso de cuero', 'description' => 'Bolso elegante de cuero genuino.', 'category' => 'Accesorios'],
            ['name' => 'Collar de plata', 'description' => 'Collar de plata con incrustaciones de circonia.', 'category' => 'Accesorios'],
            ['name' => 'Galletas de avena', 'description' => 'Galletas horneadas con avena y miel.', 'category' => 'Alimentos'],
            ['name' => 'Lata de atún', 'description' => 'Atún en aceite vegetal de alta calidad.', 'category' => 'Alimentos'],
            ['name' => 'Pintura acrílica', 'description' => 'Set de pinturas acrílicas en colores primarios.', 'category' => 'Arte'],
            ['name' => 'Lienzo para pintura', 'description' => 'Lienzo blanco de algodón 40x50 cm.', 'category' => 'Arte'],
            ['name' => 'Batería para auto', 'description' => 'Batería de 12V para automóviles.', 'category' => 'Automotriz'],
            ['name' => 'Filtro de aceite', 'description' => 'Filtro de aceite para motores de gasolina.', 'category' => 'Automotriz'],
            ['name' => 'Pañales ecológicos', 'description' => 'Pañales biodegradables para bebés.', 'category' => 'Bebés'],
            ['name' => 'Cuna de madera', 'description' => 'Cuna de madera con barandas de seguridad.', 'category' => 'Bebés'],
            ['name' => 'Shampoo hidratante', 'description' => 'Shampoo con extracto de argán.', 'category' => 'Belleza'],
            ['name' => 'Base de maquillaje', 'description' => 'Base líquida de cobertura media.', 'category' => 'Belleza'],
            ['name' => 'Café en grano', 'description' => 'Café 100% arábica tostado y molido.', 'category' => 'Bebidas'],
            ['name' => 'Té verde orgánico', 'description' => 'Infusión natural con propiedades antioxidantes.', 'category' => 'Bebidas'],
            ['name' => 'Carpa para camping', 'description' => 'Carpa impermeable para 4 personas.', 'category' => 'Camping'],
            ['name' => 'Saco de dormir', 'description' => 'Saco de dormir térmico para clima frío.', 'category' => 'Camping'],
            ['name' => 'Visor nocturno', 'description' => 'Visor con tecnología de visión nocturna.', 'category' => 'Caza'],
            ['name' => 'Munición de aire comprimido', 'description' => 'Munición calibre .177 para rifles de aire.', 'category' => 'Caza'],
            ['name' => 'Bicicleta de montaña', 'description' => 'Bicicleta con suspensión delantera.', 'category' => 'Ciclismo'],
            ['name' => 'Casco para ciclistas', 'description' => 'Casco certificado para protección en ciclismo.', 'category' => 'Ciclismo'],
            ['name' => 'Figura de acción', 'description' => 'Figura coleccionable edición limitada.', 'category' => 'Coleccionables'],
            ['name' => 'Monedas antiguas', 'description' => 'Set de monedas de colección.', 'category' => 'Coleccionables'],
            ['name' => 'Laptop Core i7', 'description' => 'Laptop de alto rendimiento con SSD.', 'category' => 'Computación'],
            ['name' => 'Mouse inalámbrico', 'description' => 'Mouse ergonómico con sensor óptico.', 'category' => 'Computación'],
            ['name' => 'Martillo de carpintero', 'description' => 'Martillo de acero inoxidable.', 'category' => 'Construcción'],
            ['name' => 'Cemento Portland', 'description' => 'Bolsa de cemento de 50 kg.', 'category' => 'Construcción'],
            ['name' => 'Comic edición especial', 'description' => 'Comic exclusivo con portada alternativa.', 'category' => 'Cómics'],
            ['name' => 'Manga japonés', 'description' => 'Manga original en japonés.', 'category' => 'Cómics'],
            ['name' => 'Balón de fútbol', 'description' => 'Balón profesional con certificación FIFA.', 'category' => 'Deportes'],
            ['name' => 'Pesas ajustables', 'description' => 'Set de pesas con discos intercambiables.', 'category' => 'Deportes'],
            ['name' => 'Smart TV 50 pulgadas', 'description' => 'Televisor inteligente con resolución 4K.', 'category' => 'Electrónica'],
            ['name' => 'Auriculares Bluetooth', 'description' => 'Auriculares inalámbricos con cancelación de ruido.', 'category' => 'Electrónica'],
            ['name' => 'Decoración para bodas', 'description' => 'Set de decoración para ceremonias.', 'category' => 'Eventos'],
            ['name' => 'Globos de helio', 'description' => 'Paquete de globos de colores.', 'category' => 'Eventos'],
            ['name' => 'Taladro eléctrico', 'description' => 'Taladro de alto torque con batería recargable.', 'category' => 'Ferretería'],
            ['name' => 'Cinta métrica', 'description' => 'Cinta de medición de 5 metros.', 'category' => 'Ferretería'],
            ['name' => 'Mancuernas de 5kg', 'description' => 'Pesas para entrenamiento en casa.', 'category' => 'Fitness'],
            ['name' => 'Cuerda para saltar', 'description' => 'Cuerda de velocidad para ejercicios de cardio.', 'category' => 'Fitness'],
            ['name' => 'Cámara profesional', 'description' => 'Cámara DSLR con lente de 50mm.', 'category' => 'Fotografía'],
            ['name' => 'Trípode ajustable', 'description' => 'Trípode de aluminio con cabezal giratorio.', 'category' => 'Fotografía'],
            ['name' => 'Sofá de cuero', 'description' => 'Sofá de tres plazas con acabado de cuero.', 'category' => 'Hogar'],
            ['name' => 'Lámpara de techo', 'description' => 'Lámpara LED con diseño moderno.', 'category' => 'Iluminación'],
            ['name' => 'Guitarra eléctrica', 'description' => 'Guitarra con pastillas humbucker.', 'category' => 'Instrumentos musicales'],
            ['name' => 'Maceta decorativa', 'description' => 'Maceta de cerámica con diseño rústico.', 'category' => 'Jardinería'],
            ['name' => 'Collar para perros', 'description' => 'Collar ajustable con placa de identificación.', 'category' => 'Mascotas'],
            ['name' => 'Zapatillas deportivas', 'description' => 'Zapatillas con tecnología de amortiguación.', 'category' => 'Zapatos'],
        ];

        foreach ($products as $product) {
            $category = Categorie::where('name', $product['category'])->first();

            if (!$category) {
                Log::error("La Categoria no existe: " . $category->name);
                continue;
            }

            $newProduct = Product::create([
                'name' => $product['name'],
                'description' => $product['description'],
                'category_id' => $category->id,
            ]);

            if (!$newProduct) {
                Log::error('Error al crear el producto: ' . $newProduct->name);
            }
        }
    }
}
