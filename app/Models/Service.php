<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Service extends Model
{
    public function up()
{
    Schema::create('services', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->text('description');
        $table->decimal('price', 8, 2); // Prix avec 8 chiffres au total et 2 décimales
        $table->string('crypto_address');
        $table->timestamps();
    });
}
}
