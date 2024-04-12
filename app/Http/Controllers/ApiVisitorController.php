<?php

namespace App\Http\Controllers;

use App\Models\Geo;
use App\Models\Address;
use App\Models\Company;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class ApiVisitorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        return view('api.visitor');
    }


    public function sinc()
    {
        try {
            $response = Http::get('https://jsonplaceholder.typicode.com/users');
            $visitors = $response->json();
            
            DB::beginTransaction();
            
            foreach ($visitors as $visitor) {

                // Verificar si el usuario ya existe
                if(Visitor::where('email', $visitor['email'])->exists()) {
                    continue;
                }

                /*
                    Guardar la información relacionada, comenzando por la tabla que no tiene dependencias de otras
                    y terminando por la tabla principal.
                */
                $company = Company::create([
                    'name' => $visitor['company']['name'],
                    'catchPhrase' => $visitor['company']['catchPhrase'],
                    'bs' => $visitor['company']['bs'],
                ]);

                $geo = Geo::create([
                    'lat' => $visitor['address']['geo']['lat'],
                    'lng' => $visitor['address']['geo']['lng'],
                ]);

                $address = Address::create([
                    'street' => $visitor['address']['street'],
                    'suite' => $visitor['address']['suite'],
                    'city' => $visitor['address']['city'],
                    'zipcode' => $visitor['address']['zipcode'],
                    'geo_id' => $geo->id,
                ]);

                Visitor::create([
                    'id' => $visitor['id'],
                    'name' => $visitor['name'],
                    'username' => $visitor['username'],
                    'email' => $visitor['email'],
                    'address_id' => $address->id,
                    'phone' => $visitor['phone'],
                    'website' => $visitor['website'],
                    'company_id' => $company->id,
                ]);
            }

            // Confirmar la transacción si no hubo errores
            DB::commit();
            return redirect()->route('apivisitor')->with('success', 'Usuarios/Visitantes sincronizados (guardados) correctamente');

        }
        catch (\Exception $e) {

            // Deshacer la transacción si hubo errores y mostrar el mensaje de error
            DB::rollBack();
            return redirect()->route('apivisitor')->with('error', 'Error al sincronizar los usuarios/visitantes: ' . $e->getMessage());
        
        }
    }
}
