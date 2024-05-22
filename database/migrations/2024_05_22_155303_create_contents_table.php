<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB; 

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();
            $table->text('body')->nullable();
            $table->timestamps();
        });

        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();
            $table->text('body')->nullable();
            $table->timestamps();
        });


        Schema::create('packages', function (Blueprint $table) { // Cambiado a "packages" en lugar de "package"
            $table->id();
            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();
            $table->text('body')->nullable();
            $table->timestamps();
        });


        Schema::create('about', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();
            $table->text('body')->nullable();
            $table->integer('miembro')->nullable(); // Campo numérico para 'miembro'
            $table->timestamps();
        });

        Schema::create('memberships', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('body')->nullable();
            $table->string('subtitle')->nullable();
            $table->text('sub_body')->nullable(); // Cambiado a "text" para permitir contenido más largo
            $table->string('price_title')->nullable(); // Título del precio
            $table->decimal('price', 10, 5)->nullable(); // Precio
            $table->text('offer')->nullable(); // Lo que se ofrece
            $table->timestamps();
        });

        // Insertar datos predeterminados en la tabla 'contents'
        DB::table('contents')->insert([
            'title' => 'BIENVENIDOS A TERRA BANK UNIVERSAL',
            'subtitle' => 'Primer fondo de alta rentabilidad.',
            'body' => 'Nuestro territorio es este Planeta Tierra en su conjunto, y todos los habitantes serán beneficiados de gran manera.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Datos de los servicios
        $servicesData = [
            [
                
                'title' => 'Servicio 1',
                'subtitle' => 'Subtítulo del servicio 1',
                'body' => 'Este es el cuerpo del servicio 1.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Servicio 2',
                'subtitle' => 'Subtítulo del servicio 2',
                'body' => 'Este es el cuerpo del servicio 2.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Servicio 3',
                'subtitle' => 'Subtítulo del servicio 3',
                'body' => 'Este es el cuerpo del servicio 3.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Servicio 4',
                'subtitle' => 'Subtítulo del servicio 4',
                'body' => 'Este es el cuerpo del servicio 4.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // Insertar los datos en la tabla 'services'
        DB::table('services')->insert($servicesData);

        // Insertar datos predeterminados en la tabla 'packages'
        DB::table('packages')->insert([
            'title' => 'Paquete de ejemplo',
            'subtitle' => 'Subtítulo del paquete de ejemplo',
            'body' => 'Este es el cuerpo del paquete de ejemplo.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

                // Insertar datos predeterminados en la tabla 'about'
                DB::table('about')->insert([
                    'title' => 'About Us',
                    'subtitle' => 'Our Story',
                    'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis lorem ut libero malesuada feugiat.',
                    'miembro' => 100000,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

        // Insertar datos predeterminados en la tabla 'memberships'
        DB::table('memberships')->insert([
            'title' => 'Membresía básica',
            'body' => 'Esta es la membresía básica.',
            'subtitle' => 'Subtítulo de la membresía básica',
            'sub_body' => 'Este es el cuerpo del subtítulo de la membresía básica.',
            'price_title' => 'Precio mensual', // Agregado el título del precio
            'price' => 29.99, // Agregado el precio
            'offer' => 'Oferta especial para nuevos miembros', // Agregada la oferta
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contents');
        Schema::dropIfExists('services');
        Schema::dropIfExists('packages');
        Schema::dropIfExists('about');
        Schema::dropIfExists('memberships');
    }
};
