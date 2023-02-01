<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConjuntoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("conjuntos")->insert([
            //baseball-marker.png
            ["nombre"=>"Fraternidad Artística y Cultural La Diablada","imagen"=>'diablada.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Fraternidad Morenada Central Oruro","imagen"=>'morenada.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Conjunto Folclórico Morenada Zona Norte","imagen"=>'morenada.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Morenada Central Oruro","imagen"=>'morenada.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Gran Tradicional Auténtica Diablada Oruro","imagen"=>'diablada.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Conjunto Tradicional Folclórico Diablada Oruro","imagen"=>'diablada.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Diablada Artística Urus","imagen"=>'diablada.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Diablada Ferroviaria","imagen"=>'diablada.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Conjunto Tradicional Tobas de la Zona Central","imagen"=>'tobas.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Conjunto Tradicional Llamerada Zona Norte","imagen"=>'llamerada.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Fraternidad Reyes Morenos COMIBOL","imagen"=>'morenada.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Conjunto Morenada Mejillones del litoral","imagen"=>'morenada.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Morenada Metalúrgica ENAF","imagen"=>'morenada.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Conjunto Universitario Suri UTO","imagen"=>'surisicuri.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Zampoñeros Kory Majthas","imagen"=>'pujllay.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Centro Tradicional Folclórico Cultural Negritos hijos del Pagador","imagen"=>'negritos.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Caporales Infantil del colegio Ignacio León","imagen"=>'caporales.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Fraternidad Caporales Centralistas","imagen"=>'caporales.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Zampoñeros orkapata Hijos del Pagador","imagen"=>'pujllay.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Fraternidad Incas Hijos del Sol","imagen"=>'incas.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Conjunto Khantus Sartañani","imagen"=>'pujllay.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Tarqueada Jatun Jallp'a","imagen"=>'llamerada.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Conjunto Artístico Tobas Uru Uru","imagen"=>'tobas.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Gran Conjunto Tradicional Tobas Zona Sud","imagen"=>'tobas.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Conjunto Folclórico y Cultural Phujllay de Oruro","imagen"=>'pujllay.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Conjunto Tinkus Huajchas Oruro","imagen"=>'tinkus.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Fraternidad Folclórica Cullaguada Oruro","imagen"=>'cullaguada.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Centro Cultural Rikjchary Llajta","imagen"=>'llamerada.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Conjunto Folclórico Incas","imagen"=>'incas.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Grupo de Danza Estilizada moderna Suri Sicuri","imagen"=>'surisicuri.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Conjunto Negritos Unidos de la Saya","imagen"=>'negritos.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Conjunto Folclórico Llamerada Socavón","imagen"=>'llamerada.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Conjunto Folclórico Ahuatiris","imagen"=>'pujllay.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Conjunto Cullaguada Terribles Quirquinchos","imagen"=>'cullaguada.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Conjunto Folclórico Antawara","imagen"=>'antawaras.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Conjunto Folclórico Sambos Caporales","imagen"=>'caporales.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Caporales Reyes de la Tuntuna ENAF","imagen"=>'caporales.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Conjunto Incas Collasuyo Hijos del Socavón","imagen"=>'incas.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Reyes morenos Ferrari Ghezzi","imagen"=>'morenada.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Fraternidad Folklórica y Cultural Caporales Universitarios de San Simón","imagen"=>'caporales.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Conjunto Autóctonos Wititis del Colca","imagen"=>'wititis.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Fraternidad Kallawayas Bolivia","imagen"=>'llamerada.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Conjunto Tinkus los Jairas de Oruro","imagen"=>'tinkus.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Conjunto Folclórico Tinkus los Tolkas","imagen"=>'tinkus.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Conjunto Folclórico Doctorcitos Hitos","imagen"=>'doctorcitos.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Conjunto Tinkus Huajchas","imagen"=>'tinkus.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Conjunto Potolos Chayanta Jhilancos","imagen"=>'negritos.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Fraternidad de Danza Estilizada Moderna Inti Llajta","imagen"=>'morenada.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Fraternidad Caporales CBN","imagen"=>'caporales.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Fraternidad Caporales Modernos San José","imagen"=>'caporales.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Diablada Artística Bolívar","imagen"=>'diablada.png',"lat"=>0,"lng"=>0],
            ["nombre"=>"Waca Tokoris Urus","imagen"=>'wacatoncoris.png',"lat"=>0,"lng"=>0],
        ]);
    }
}
