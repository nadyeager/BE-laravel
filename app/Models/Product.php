<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *   schema="Product",
 *   title="Product Data",
 *   @OA\Property(property="id", type="integer", example=1),
 *   @OA\Property(property="nama", type="string", example="Nama Produk"),
 *   @OA\Property(property="harga", type="number", format="float", example=15000),
 *   @OA\Property(property="created_at", type="string", format="date-time", example="2023-01-01T00:00:00.000000Z"),
 *   @OA\Property(property="updated_at", type="string", format="date-time", example="2023-01-01T00:00:00.000000Z")
 * )
 */
class Product extends Model
{
    protected $table = 'product';

    protected $fillable = [
        'nama',
        'harga',
    ];
}
