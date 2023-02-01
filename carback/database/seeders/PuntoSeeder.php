<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PuntoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("puntos")->insert([
            [
                "nombre"=>"Dispensario De Salud Juan Pablo II",
                "imagen"=>"marker-salud.png",
                "descripcion"=>"",
                "direccion"=>"Av. Barrientos y Plaza Pagador",
                "telefono"=>"252-41498",
                "lat"=>"-17.950756264824065",
                "lng"=>"-67.11102738242884",
                "rubro_id"=>"4",
            ],
            [
                "nombre"=>"Hospital Obrero",
                "imagen"=>"marker-salud.png",
                "descripcion"=>"",
                "direccion"=>"C. La Paz, Sargento flores y Lira ",
                "telefono"=>"252-40920",
                "lat"=>"-17.957157294255385",
                "lng"=>"-67.11257373607079",
                "rubro_id"=>"4",
            ],
            [
                "nombre"=>"URPE Urgencias Pediátricas",
                "imagen"=>"marker-salud.png",
                "descripcion"=>"",
                "direccion"=>"C. La Plata entre Ayacucho y Cochabamba",
                "telefono"=>"71842308",
                "lat"=>"-17.96695874257655",
                "lng"=>"-67.11328212105563",
                "rubro_id"=>"4",
            ],
            [
                "nombre"=>"Hospital General San Juan de Dios",
                "imagen"=>"marker-salud.png",
                "descripcion"=>"",
                "direccion"=>"C. San Felipe entre Potosí y 6 de octubre",
                "telefono"=>"75428566",
                "lat"=>"-17.96695874257655",
                "lng"=>"-67.11328212105563",
                "rubro_id"=>"4",
            ],
            [
                "nombre"=>"Clínica Virgen del Socavón",
                "imagen"=>"marker-salud.png",
                "descripcion"=>"",
                "direccion"=>"C. Potosí entre Bolívar y Sucre",
                "telefono"=>"252-83300",
                "lat"=>"-17.971291739192374",
                "lng"=>"-67.11206133210021",
                "rubro_id"=>"4",
            ],
            [
                "nombre"=>"Clínica URME",
                "imagen"=>"marker-salud.png",
                "descripcion"=>"",
                "direccion"=>"C. Cochabamba entre 6 de octubre y S. Galvarro",
                "telefono"=>"70424771",
                "lat"=>"-17.967048749800735",
                "lng"=>"-67.11182929439266",
                "rubro_id"=>"4",
            ],
            [
                "nombre"=>"Seguro Social Universitario",
                "imagen"=>"marker-salud.png",
                "descripcion"=>"",
                "direccion"=>"C. Murguía entre Pagador y Velasco G.",
                "telefono"=>"252-73991",
                "lat"=>"-17.972863109861663",
                "lng"=>"-67.11089190326442",
                "rubro_id"=>"4",
            ],
            [
                "nombre"=>"Clínica Cristo Rey",
                "imagen"=>"marker-salud.png",
                "descripcion"=>"",
                "direccion"=>"C. Velasco Galvarro esq Arce",
                "telefono"=>"252-75796",
                "lat"=>"-17.976396411321318",
                "lng"=>"-67.11107634559272",
                "rubro_id"=>"4",
            ],
            [
                "nombre"=>"Clinica San Agustin",
                "imagen"=>"marker-salud.png",
                "descripcion"=>"",
                "direccion"=>"C. Pisagua y San Felipe",
                "telefono"=>"252-89444",
                "lat"=>"-17.97730817186877",
                "lng"=>"-67.10190381860755",
                "rubro_id"=>"4",
            ],
            [
                "nombre"=>"Clinica Natividad",
                "imagen"=>"marker-salud.png",
                "descripcion"=>"",
                "direccion"=>"C. Bolivar entre Arica y Iquique",
                "telefono"=>"71189245",
                "lat"=>"-17.973624113427515",
                "lng"=>"-67.10188236096525",
                "rubro_id"=>"4",
            ],
            [
                "nombre"=>"Asistencia Pública",
                "imagen"=>"marker-salud.png",
                "descripcion"=>"",
                "direccion"=>"C. Whashington esq. Adolfo Mier",
                "telefono"=>"",
                "lat"=>"-17.968768294953563",
                "lng"=>"-67.11568102898104",
                "rubro_id"=>"4",
            ],
            [
                "nombre"=>"Comando Departamental de Policía Oruro",
                "imagen"=>"marker-police.png",
                "descripcion"=>"",
                "direccion"=>"C. Bolívar entre Presidente Montes y Whasington",
                "telefono"=>"252-51924",
                "lat"=>"-17.969547707153566",
                "lng"=>"-67.11581841982053",
                "rubro_id"=>"5",
            ],
            [
                "nombre"=>"Oficinas de Transito",
                "imagen"=>"marker-police.png",
                "descripcion"=>"",
                "direccion"=>"C. Velasco Galvarro y Adolfo Mier",
                "telefono"=>"252-254761",
                "lat"=>"-17.970677961571266",
                "lng"=>"-67.10949645317552",
                "rubro_id"=>"5",
            ],
            [
                "nombre"=>"Dirección Departamental de Bomberos de la Policía",
                "imagen"=>"marker-police.png",
                "descripcion"=>"",
                "direccion"=>"Av. Tacna entre C. Gregorio Reynolds y prolongación Campo Jordán",
                "telefono"=>"",
                "lat"=>"-17.95304902822611",
                "lng"=>"-67.10065004892564",
                "rubro_id"=>"5",
            ],
            [
                "nombre"=>"Radio Patrullas 110",
                "imagen"=>"marker-police.png",
                "descripcion"=>"",
                "direccion"=>"C. Bolívar y Quintana",
                "telefono"=>"252-50010 252-50110",
                "lat"=>"-17.974914748492903",
                "lng"=>"-67.09645542056013",
                "rubro_id"=>"5",
            ],
            [
                "nombre"=>"U.T.O.P.",
                "imagen"=>"marker-police.png",
                "descripcion"=>"",
                "direccion"=>"C. Washintong entre Bolívar y Adolfo Mier",
                "telefono"=>"52-52484",
                "lat"=>"-17.969310102279128",
                "lng"=>"-67.11585181491141",
                "rubro_id"=>"5",
            ],
            [
                "nombre"=>"F.E.L.C.V.",
                "imagen"=>"marker-police.png",
                "descripcion"=>"",
                "direccion"=>"Av. del Ejercito entre Tarapacá y Tejerina",
                "telefono"=>"800140348 62805818  252-84512  252-50899",
                "lat"=>"-17.96900507737983",
                "lng"=>"-67.10367707446358",
                "rubro_id"=>"5",
            ],
            [
                "nombre"=>"F.E.L.C.N.",
                "imagen"=>"marker-police.png",
                "descripcion"=>"",
                "direccion"=>"Urb. Bustillos, carretera Vinto Km 3 1/2",
                "telefono"=>"252-53893",
                "lat"=>"-17.973197055409738",
                "lng"=>"-67.06405266832861",
                "rubro_id"=>"5",
            ],
            [
                "nombre"=>"F.E.L.C.C.",
                "imagen"=>"marker-police.png",
                "descripcion"=>"",
                "direccion"=>"C. Bolívar entre Presidente Montes y Whasington",
                "telefono"=>"252-51921",
                "lat"=>"-17.969785619879232",
                "lng"=>"-67.1154273799862",
                "rubro_id"=>"5",
            ],
            //TURISMO
            [
                "nombre"=>"MONUMENTO DE LA VIRGEN DEL SOCAVON",
                "imagen"=>"marker1.png",
                "descripcion"=>"",
                "direccion"=>"VIRGEN",
                "telefono"=>"",
                "lat"=>"-17.974311732127454",
                "lng"=>"-67.12071297825244",
                "rubro_id"=>"6",
            ],
            [
                "nombre"=>"MONUMENTO DE LA VIRGEN DEL SOCAVON",
                "imagen"=>"marker1.png",
                "descripcion"=>"",
                "direccion"=>"VIRGEN",
                "telefono"=>"",
                "lat"=>"-17.974311732127454",
                "lng"=>"-67.12071297825244",
                "rubro_id"=>"6",
            ], 
            [
                "nombre"=>"EL CONDOR",
                "imagen"=>"marker1.png",
                "descripcion"=>"",
                "direccion"=>"EL CONDOR",
                "telefono"=>"",
                "lat"=>"-17.975300387051526",
                "lng"=>"-67.11886062388868",
                "rubro_id"=>"6",
            ], 
            [
                "nombre"=>"EL CONDOR",
                "imagen"=>"marker1.png",
                "descripcion"=>"",
                "direccion"=>"EL CONDOR",
                "telefono"=>"",
                "lat"=>"-17.975300387051526",
                "lng"=>"-67.11886062388868",
                "rubro_id"=>"6",
            ], 

            //farmacias
            [
                "nombre"=>"FARMACORP",
                "imagen"=>"marker1.png",
                "descripcion"=>"",
                "direccion"=>"C. Bolívar entre Presidente Montes y La Plata",
                "telefono"=>"252-51784",
                "lat"=>"-17.970091994770502",
                "lng"=>"-67.11489547830915",
                "rubro_id"=>"7",
            ],
            [
                "nombre"=>"FARMSAACORP",
                "imagen"=>"marker1.png",
                "descripcion"=>"",
                "direccion"=>"C. Bolívar entre Presidente Montes y La Plata",
                "telefono"=>"252-51784",
                "lat"=>"-17.970091994770502",
                "lng"=>"-67.11489547830915",
                "rubro_id"=>"7",
            ],
            [
                "nombre"=>"Farmacia Santa Marta",
                "imagen"=>"marker1.png",
                "descripcion"=>"",
                "direccion"=>"C. Bolívar entre La Plata y Soria Galvarro",
                "telefono"=>"25251784",
                "lat"=>"-17.970339400204356",
                "lng"=>"-67.11401227465744",
                "rubro_id"=>"7",
            ],
            //baños

            //atm

            //parqueos

            //hoteles

            //mercados

            //comidas

            //turismo

            //taxis

            //
        ]);
    }
}
