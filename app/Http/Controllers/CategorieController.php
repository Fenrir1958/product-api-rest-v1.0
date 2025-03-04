<?php

namespace App\Http\Controllers;

use App\Http\Requests\Categorie\StoreCategorieRequest;
use App\Http\Requests\Categorie\UpdateCategorieRequest;
use App\Models\Categorie;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    //
    public function index(): JsonResponse
    {
        $categories = Categorie::with('products')->paginate(50);

        return $this->success('Categorias obtenidas con exito', ['categories' => $categories]);
    }

    public function store(StoreCategorieRequest $request): JsonResponse
    {
        $categorie = Categorie::create($request->all());

        if (!$categorie) {
            return $this->error('No se pudo crear la categoria', [], 500);
        }

        return $this->success('Categoria creada con exito', ['categorie' => $categorie]);
    }

    public function show(string $id): JsonResponse
    {
        if (!is_numeric($id)) {
            return $this->error('El id debe ser un número', [], 400);
        }

        $categorie = Categorie::with('products')->find($id);

        if (!$categorie) {
            return $this->error('Categoria no encontrada', [], 404);
        }

        return $this->success('Categoria obtenida con exito', ['categorie' => $categorie]);
    }

    public function update(UpdateCategorieRequest $request, string $id): JsonResponse
    {
        if (!is_numeric($id)) {
            return $this->error('El id debe ser un número', [], 400);
        }

        $categorie = Categorie::find($id);

        if (!$categorie) {
            return $this->error('Categoria no encontrada', [], 404);
        }

        $categorie->update($request->all());

        return $this->success('Categoria actualizada con exito', ['categorie' => $categorie]);
    }

    public function destroy(string $id): JsonResponse
    {
        if (!is_numeric($id)) {
            return $this->error('El id debe ser un número', [], 400);
        }

        $categorie = Categorie::find($id);

        if (!$categorie) {
            return $this->error('Categoria no encontrada', [], 404);
        }

        $categorie->delete();

        return $this->success('Categoria eliminada con exito');
    }
}
