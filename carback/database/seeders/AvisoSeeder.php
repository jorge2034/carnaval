<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AvisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('avisos')->insert([
           [
                "fecha"=>"2022-02-11",
                "hora"=>"10:00",
                "estado"=>"ACTIVO",
                "titulo"=>"RUTA DEL CARNAVAL",
                "subtitulo"=>"RUTA DEL CARNAVAL",
                "descripcion"=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
                "imagen"=>"hotel.jpg",
                "url"=>"ruta",
           ]
        ]);
    }
}
