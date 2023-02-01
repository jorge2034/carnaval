<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RubroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("rubros")->insert([
            ["nombre"=>"Fotografias","descripcion"=>"Imagenes y galaeria","icono"=>"o_photo_camera","url"=>"/"],
            ["nombre"=>"Ruta","descripcion"=>"En tiempo real","icono"=>"o_map","url"=>"/ruta"],
            ["nombre"=>"Videos","descripcion"=>"Videos y historia","icono"=>"ondemand_video","url"=>"/video"],
            ["nombre"=>"Salud","descripcion"=>"Hospitales y centro de salud","icono"=>"o_medical_services","url"=>"/rubro/4"],
            ["nombre"=>"Policia","descripcion"=>"Retenes Policiales","icono"=>"o_local_police","url"=>"/rubro/5"],
            ["nombre"=>"Turismo","descripcion"=>"","icono"=>"o_travel_explore","url"=>"/rubro/6"],
            ["nombre"=>"Farmacia","descripcion"=>"Baños cerca a la ruta del carnaval","icono"=>"o_local_pharmacy","url"=>"/rubro/7"],
            ["nombre"=>"Baños","descripcion"=>"Baños cerca a la ruta del carnaval","icono"=>"o_wash","url"=>"/rubro/8"],
            ["nombre"=>"Cajeros de banco","descripcion"=>"Baños cerca a la ruta del carnaval","icono"=>"o_local_atm","url"=>"/rubro/9"],
            ["nombre"=>"Parqueo","descripcion"=>"Baños cerca a la ruta del carnaval","icono"=>"o_local_parking","url"=>"/rubro/10"],
            ["nombre"=>"Hoteles","descripcion"=>"Hoteles disponibles","icono"=>"o_hotel","url"=>"/rubro/11"],
            ["nombre"=>"Mercados","descripcion"=>"Compra en tiendas","icono"=>"o_storefront","url"=>"/rubro/12"],
            ["nombre"=>"Gastronomia","descripcion"=>"","icono"=>"o_restaurant","url"=>"/rubro/13"],            
            ["nombre"=>"RadioTaxi","descripcion"=>"","icono"=>"o_local_taxi","url"=>"/rubro/14"],

        ]);
    }
}
