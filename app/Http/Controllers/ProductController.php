<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        //
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
        //
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
    public function show(string $id)
    {
        //
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
    public function update(Request $request, string $id)
    {
        //
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
    public function destroy(string $id)
    {
        //
    }
}
