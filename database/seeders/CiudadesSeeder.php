<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Countries;

class CiudadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Crea 5 paises cada uno con 5 ciudades
     * @return void
     */
    public function run()
    {
        /**PAIS ESPAÑA*/
        $pais = "España";
        
        /**Ciudad Alicante */
        $crearPais = new Countries();
        $crearPais->id = 6355390;
        $crearPais->city = 'Alicante';
        $crearPais->country = $pais;
        $crearPais->save();

        /**Ciudad Villavaliente */
        $crearPais = new Countries();
        $crearPais->id = 6355373;
        $crearPais->city = 'Villavaliente';
        $crearPais->country = $pais;
        $crearPais->save();

        /**Ciudad Leganés */
        $crearPais = new Countries();
        $crearPais->id = 6359300;
        $crearPais->city = 'Leganés';
        $crearPais->country = $pais;
        $crearPais->save();

        /**Ciudad Getafe */
        $crearPais = new Countries();
        $crearPais->id = 6359291;
        $crearPais->city = 'Getafe';
        $crearPais->country = $pais;
        $crearPais->save();

        /**Ciudad Madrid */
        $crearPais = new Countries();
        $crearPais->id = 6359304;
        $crearPais->city = 'Madrid';
        $crearPais->country = $pais;
        $crearPais->save();

        /**PAIS Francia*/
        $pais = "Francia";
        /**Ciudad Paris */
        $crearPais = new Countries();
        $crearPais->id = 6942553;
        $crearPais->city = 'Paris';
        $crearPais->country = $pais;
        $crearPais->save();

        /**Ciudad Haliburton */
        $crearPais = new Countries();
        $crearPais->id = 6942554;
        $crearPais->city = 'Haliburton';
        $crearPais->country = $pais;
        $crearPais->save();
        
        /**Ciudad Buckingham */
        $crearPais = new Countries();
        $crearPais->id = 6942645;
        $crearPais->city = 'Buckingham';
        $crearPais->country = $pais;
        $crearPais->save();

        /**Ciudad Chicoutimi */
        $crearPais = new Countries();
        $crearPais->id = 6942688;
        $crearPais->city = 'Chicoutimi';
        $crearPais->country = $pais;
        $crearPais->save();

        /**Ciudad Grand-Sault */
        $crearPais = new Countries();
        $crearPais->id = 6942801;
        $crearPais->city = 'Grand-Sault';
        $crearPais->country = $pais;
        $crearPais->save();

        /**PAIS 3 Brasil*/
        $pais = "Brasil";
        /**Ciudad Paula Candido */
        $crearPais = new Countries();
        $crearPais->id = 3454703;
        $crearPais->city = 'Paula Candido';
        $crearPais->country = $pais;
        $crearPais->save();
        /**Ciudad Paula Freitas */
        $crearPais = new Countries();
        $crearPais->id = 3454701;
        $crearPais->city = 'Paula Freitas';
        $crearPais->country = $pais;
        $crearPais->save();
        /**Ciudad Paulo Lopes */
        $crearPais = new Countries();
        $crearPais->id = 3454669;
        $crearPais->city = 'Paulo Lopes';
        $crearPais->country = $pais;
        $crearPais->save();
        /**Ciudad Pederneiras */
        $crearPais = new Countries();
        $crearPais->id = 3454620;
        $crearPais->city = 'Pederneiras';
        $crearPais->country = $pais;
        $crearPais->save();
        /**Ciudad Pedra Bela */
        $crearPais = new Countries();
        $crearPais->id = 3454575;
        $crearPais->city = 'Pedra Bela';
        $crearPais->country = $pais;
        $crearPais->save();

        /**PAIS 4 Estados unidos*/
        $pais = "Estados unidos";
        /**Ciudad Orland Hills */
        $crearPais = new Countries();
        $crearPais->id = 4904934;
        $crearPais->city = 'Orland Hills';
        $crearPais->country = $pais;
        $crearPais->save();

        /**Ciudad Oregon */
        $crearPais = new Countries();
        $crearPais->id = 4904898;
        $crearPais->city = 'Oregon';
        $crearPais->country = $pais;
        $crearPais->save();

        /**Ciudad Orland Park */
        $crearPais = new Countries();
        $crearPais->id = 4904937;
        $crearPais->city = 'Orland Park';
        $crearPais->country = $pais;
        $crearPais->save();

        /**Ciudad Norridge */
        $crearPais = new Countries();
        $crearPais->id = 4903803;
        $crearPais->city = 'Norridge';
        $crearPais->country = $pais;
        $crearPais->save();

        /**Ciudad Norridge */
        $crearPais = new Countries();
        $crearPais->id = 4903565;
        $crearPais->city = 'New Michigan';
        $crearPais->country = $pais;
        $crearPais->save();

        /**PAIS 5 Ecuador*/
        $pais = "Ecuador";
        /**Ciudad Quito */
        $crearPais = new Countries();
        $crearPais->id = 3652462;
        $crearPais->city = 'Quito';
        $crearPais->country = $pais;
        $crearPais->save();
        /**Ciudad Riobamba */
        $crearPais = new Countries();
        $crearPais->id = 3652350;
        $crearPais->city = 'Riobamba';
        $crearPais->country = $pais;
        $crearPais->save();
        /**Ciudad Riobamba */
        $crearPais = new Countries();
        $crearPais->id = 3652315;
        $crearPais->city = 'Rocafuerte';
        $crearPais->country = $pais;
        $crearPais->save();
        /**Ciudad Sade */
        $crearPais = new Countries();
        $crearPais->id = 3652168;
        $crearPais->city = 'Sade';
        $crearPais->country = $pais;
        $crearPais->save();
        /**Ciudad Sade */
        $crearPais = new Countries();
        $crearPais->id = 3652100;
        $crearPais->city = 'Salinas';
        $crearPais->country = $pais;
        $crearPais->save();
    }
}
