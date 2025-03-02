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
            ['name' => 'Bolso de cuero', 'description' => 'Bolso elegante de cuero genuino.', 'category' => 'Accesorios', 'stock' => 25],
            ['name' => 'Collar de plata', 'description' => 'Collar de plata con incrustaciones de circonia.', 'category' => 'Accesorios', 'stock' => 40],
            ['name' => 'Reloj de acero inoxidable', 'description' => 'Reloj resistente al agua con correa ajustable.', 'category' => 'Accesorios', 'stock' => 18],
            ['name' => 'Lentes de sol polarizados', 'description' => 'Gafas de sol con protección UV.', 'category' => 'Accesorios', 'stock' => 30],

            ['name' => 'Galletas de avena', 'description' => 'Galletas horneadas con avena y miel.', 'category' => 'Alimentos', 'stock' => 50],
            ['name' => 'Lata de atún', 'description' => 'Atún en aceite vegetal de alta calidad.', 'category' => 'Alimentos', 'stock' => 75],
            ['name' => 'Miel orgánica', 'description' => 'Miel 100% natural sin conservantes.', 'category' => 'Alimentos', 'stock' => 60],
            ['name' => 'Pasta integral', 'description' => 'Pasta elaborada con trigo integral.', 'category' => 'Alimentos', 'stock' => 80],

            ['name' => 'Pintura acrílica', 'description' => 'Set de pinturas acrílicas en colores primarios.', 'category' => 'Arte', 'stock' => 35],
            ['name' => 'Lienzo para pintura', 'description' => 'Lienzo blanco de algodón 40x50 cm.', 'category' => 'Arte', 'stock' => 20],
            ['name' => 'Pinceles profesionales', 'description' => 'Set de pinceles de diferentes grosores.', 'category' => 'Arte', 'stock' => 45],
            ['name' => 'Caballete de madera', 'description' => 'Caballete ajustable para lienzos.', 'category' => 'Arte', 'stock' => 15],

            ['name' => 'Batería para auto', 'description' => 'Batería de 12V para automóviles.', 'category' => 'Automotriz', 'stock' => 10],
            ['name' => 'Filtro de aceite', 'description' => 'Filtro de aceite para motores de gasolina.', 'category' => 'Automotriz', 'stock' => 30],
            ['name' => 'Juego de bujías', 'description' => 'Bujías de alto rendimiento para motor.', 'category' => 'Automotriz', 'stock' => 40],
            ['name' => 'Líquido de frenos', 'description' => 'Líquido de frenos DOT-4.', 'category' => 'Automotriz', 'stock' => 25],

            ['name' => 'Cuna de madera', 'description' => 'Cuna de madera con barandas de seguridad.', 'category' => 'Bebés', 'stock' => 12],
            ['name' => 'Silla para auto', 'description' => 'Silla de seguridad para bebés.', 'category' => 'Bebés', 'stock' => 18],
            ['name' => 'Biberón anticólicos', 'description' => 'Biberón de silicona sin BPA.', 'category' => 'Bebés', 'stock' => 50],
            ['name' => 'Manta para bebé', 'description' => 'Manta de algodón ultrasuave.', 'category' => 'Bebés', 'stock' => 30],

            ['name' => 'Shampoo hidratante', 'description' => 'Shampoo con extracto de argán.', 'category' => 'Belleza', 'stock' => 40],
            ['name' => 'Base de maquillaje', 'description' => 'Base líquida de cobertura media.', 'category' => 'Belleza', 'stock' => 35],
            ['name' => 'Serum facial', 'description' => 'Serum con vitamina C y ácido hialurónico.', 'category' => 'Belleza', 'stock' => 20],
            ['name' => 'Labial mate', 'description' => 'Labial de larga duración en tonos nude.', 'category' => 'Belleza', 'stock' => 45],

            ['name' => 'Carpa para camping', 'description' => 'Carpa impermeable para 4 personas.', 'category' => 'Camping', 'stock' => 15],
            ['name' => 'Saco de dormir', 'description' => 'Saco de dormir térmico para clima frío.', 'category' => 'Camping', 'stock' => 20],
            ['name' => 'Mochila de senderismo', 'description' => 'Mochila ergonómica con capacidad de 40L.', 'category' => 'Camping', 'stock' => 30],
            ['name' => 'Kit de supervivencia', 'description' => 'Set con brújula, navaja y linterna.', 'category' => 'Camping', 'stock' => 25],

            ['name' => 'Bicicleta de montaña', 'description' => 'Bicicleta con suspensión delantera.', 'category' => 'Ciclismo', 'stock' => 10],
            ['name' => 'Casco para ciclistas', 'description' => 'Casco certificado para protección en ciclismo.', 'category' => 'Ciclismo', 'stock' => 35],
            ['name' => 'Rodillera de protección', 'description' => 'Rodillera reforzada para ciclismo extremo.', 'category' => 'Ciclismo', 'stock' => 40],
            ['name' => 'Guantes de ciclismo', 'description' => 'Guantes con protección antideslizante.', 'category' => 'Ciclismo', 'stock' => 30],

            ['name' => 'Laptop Core i7', 'description' => 'Laptop de alto rendimiento con SSD.', 'category' => 'Computación', 'stock' => 12],
            ['name' => 'Mouse inalámbrico', 'description' => 'Mouse ergonómico con sensor óptico.', 'category' => 'Computación', 'stock' => 50],
            ['name' => 'Teclado mecánico', 'description' => 'Teclado con interruptores Cherry MX.', 'category' => 'Computación', 'stock' => 40],
            ['name' => 'Monitor LED 24 pulgadas', 'description' => 'Pantalla Full HD con alta tasa de refresco.', 'category' => 'Computación', 'stock' => 25],

            ['name' => 'Cámara profesional', 'description' => 'Cámara DSLR con lente de 50mm.', 'category' => 'Fotografía', 'stock' => 10],
            ['name' => 'Trípode ajustable', 'description' => 'Trípode de aluminio con cabezal giratorio.', 'category' => 'Fotografía', 'stock' => 30],
            ['name' => 'Luz LED para fotografía', 'description' => 'Luz blanca regulable para estudio.', 'category' => 'Fotografía', 'stock' => 20],
            ['name' => 'Filtro de lente UV', 'description' => 'Filtro protector para lentes de cámara.', 'category' => 'Fotografía', 'stock' => 40],

            ['name' => 'Zapatillas deportivas', 'description' => 'Zapatillas con tecnología de amortiguación.', 'category' => 'Zapatos', 'stock' => 50],
            ['name' => 'Botines de cuero', 'description' => 'Botines resistentes con suela de goma.', 'category' => 'Zapatos', 'stock' => 25],
            ['name' => 'Sandalias de playa', 'description' => 'Sandalias cómodas con correa ajustable.', 'category' => 'Zapatos', 'stock' => 40],
            ['name' => 'Zapatos formales', 'description' => 'Zapatos de vestir de piel negra.', 'category' => 'Zapatos', 'stock' => 30],
        ];

        foreach ($products as $product) {
            $category = Categorie::where('name', $product['category'])->first();

            if (!$category) {
                Log::error("La Categoria no existe");
                continue;
            }

            $newProduct = Product::create([
                'name' => $product['name'],
                'description' => $product['description'],
                'quantity' => $product['stock'],
                'categorie_id' => $category->id,
            ]);

            if (!$newProduct) {
                Log::error('Error al crear el producto');
            }
        }
    }
}
