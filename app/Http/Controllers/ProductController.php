<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * @OA\Get(
     * path="/products",
     * summary="Mengambil daftar produk",
     * tags={"Products"},
     * @OA\Response(
     * response=200,
     * description="Daftar berhasil diambil",
     * @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/Product"))
     * )
     * )
     */
    
    public function index()
    {
        return response()->json(Product::all(), 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * @OA\Post(
     * path="/products",
     * summary="Membuat data produk baru",
     * tags={"Products"},
     * @OA\RequestBody(required=true, @OA\JsonContent(ref="#/components/schemas/Product")),
     * @OA\Response(response=201, description="Dibuat", @OA\JsonContent(ref="#/components/schemas/Product")),
     * @OA\Response(response=422, description="Validasi gagal")
     * )
     */
    public function store(Request $request)
   {
        $request->validate([
            'nama'   => 'required|string|max:255',
            'harga' => 'required|integer|min:0',
        ]);

        $product = Product::create([
            'nama'   => $request->nama,
            'harga' => $request->harga,
        ]);

        return response()->json($product, 201);

    }
    /** 
     * @OA\Get(
     * path="/products/{id}",
     * summary="Mengambil detail produk berdasarkan ID  ",
     * tags={"Products"},
     * @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
     * @OA\Response(
     * response=200,
     * description="Detail berhasil diambil",
     * @OA\JsonContent(ref="#/components/schemas/Product")
     * )
     * )
     */

     public function show($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }

        return response()->json($product, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
    * @OA\Put(
    * path="/products/{id}",
    * summary="Memperbarui data product",
    * tags={"Products"},
    * @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
    * @OA\RequestBody(required=true, @OA\JsonContent(ref="#/components/schemas/Product")),
    * @OA\Response(response=200, description="Diperbarui"),
    * @OA\Response(response=404, description="Tidak ditemukan")
    * )
    */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }

        $product->update($request->all());

        return response()->json($product, 200);
    }


    /**
     * @OA\Delete(
     * path="/products/{id}",
     * summary="Menghapus data product",
     * tags={"Products"},
     * @OA\Parameter(name="id", in="path", required=true, @OA\Schema(type="integer")),
     * @OA\Response(response=204, description="Dihapus (No Content)"),
     * @OA\Response(response=404, description="Tidak ditemukan")
     * )
     */
    public function destroy($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }

        $product->delete();

        return response()->json(['message' => 'Data berhasil dihapus'], 200);
    }
}
