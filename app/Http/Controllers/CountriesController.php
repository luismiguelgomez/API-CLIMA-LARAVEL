<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Countries;

class CountriesController extends Controller
{
    public function indexClima(){
        $paises = Countries::all();
        return view('clima', compact('paises'));
    }

    public function apiClima($cityId){
        $api_url = 'https://api.openweathermap.org/data/2.5/weather?id='.$cityId.'&appid=3171c7a26a006bcfd8374bd705af5627';
        $weather_data = json_decode( file_get_contents($api_url), true );
        $temperatura = $weather_data['main']['temp'];
        $pais = $weather_data['sys']['country'];
        $ciudad = $weather_data['name'];
        $coorOne = $weather_data['coord']['lon'];
        $coorTwo = $weather_data['coord']['lat'];
        //Todos los datos los tenemos en:
        //print_r($weather_data);
        return view('ciudadVista', compact('temperatura', 'pais', 'ciudad', 'coorOne', 'coorTwo'));
    }

    public function index()
    {
        $paises = Countries::all();
        return view('countries', compact('paises'));
    }
    
    public function crearPais(Request $request)
    {
        $crearPais = new Countries();
        $crearPais->id = $request->input('id');
        $crearPais->city = $request->input('city');
        $crearPais->country = $request->input('country');
        
        $crearPais->save();
        return redirect('/crearCiudad');
    }
}
