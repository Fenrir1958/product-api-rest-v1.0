<?php

namespace App\Http\Controllers;

use App\Http\Requests\Products\StoreProductRequest;
use App\Http\Requests\Products\UpdateProductRequest;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(): JsonResponse
    {
        $products = Product::paginate(25);

        return $this->success('Productos obtenidos con exito', ['products' => $products]);
    }

    public function store(StoreProductRequest $request): JsonResponse
    {
        $product = Product::create($request->all());

        if (!$product) {
            return $this->error('No se pudo crear el producto', [], 500);
        }

        return $this->success('Producto creado con exito', ['product' => $product]);
    }

    public function show(string $id): JsonResponse
    {
        if (!is_numeric($id)) {
            return $this->error('El id debe ser un número', [], 400);
        }

        $product = Product::with('categorie')->find($id);

        if (!$product) {
            return $this->error('Producto no encontrado', [], 404);
        }

        return $this->success('Producto obtenido con exito', ['product' => $product]);
    }

    public function update(UpdateProductRequest $request, string $id): JsonResponse
    {
        if (!is_numeric($id)) {
            return $this->error('El id debe ser un número', [], 400);
        }

        $product = Product::find($id);

        if (!$product) {
            return $this->error('Producto no encontrado', [], 404);
        }

        $product->update($request->all());

        return $this->success('Producto actualizado con exito', ['product' => $product]);
    }

    public function destroy(string $id): JsonResponse
    {
        if (!is_numeric($id)) {
            return $this->error('El id debe ser un número', [], 400);
        }

        $product = Product::find($id);

        if (!$product) {
            return $this->error('Producto no encontrado', [], 404);
        }

        $product->delete();

        return $this->success('Producto eliminado con exito');
    }
}
