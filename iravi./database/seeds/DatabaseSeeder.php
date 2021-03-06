<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
		$this-> call (proveedores::class);
        $this-> call (estatus::class);
        $this-> call (genero::class);
        $this-> call (roles::class);
        $this-> call (tipodireccion::class);
        $this-> call (Categorias::class);
         $this-> call (persona::class);
         $this-> call (direccion::class);
        $this-> call (usuario::class);
        $this-> call (detallepersonadireccion::class);
        $this-> call (paqueteria::class);
		$this-> call (estadopedido::class);

    }
}
