<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class ApiPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {
        return view('api.post');
    }


    public function sinc()
    {
        $visitor = Visitor::count();
        
        if($visitor == 0) {
            return redirect()->route('apipost')->with('error', 'No hay visitantes registrados a los que asociar los posts');
        }
        
        try {
            $response = Http::get('https://jsonplaceholder.typicode.com/posts');
            $posts = $response->json();
            
            DB::beginTransaction();
            
            foreach ($posts as $post) {

                // Verificar si el post ya existe, tomando como referencia el título (único)
                if(Post::where('title', $post['title'])->exists()) {
                    continue;
                }

                // Verificar si el visitante asociado al post ya existe
                if(!Visitor::where('id', $post['userId'])->exists()) {
                    continue;
                }

                /*
                    Guardar la información una vez que se haya verificado que no existen registros duplicados,
                    o que los registros relacionados (visitante) existen.
                */
                Post::create([
                    'id' => $post['id'],
                    'visitor_id' => $post['userId'],
                    'title' => $post['title'],
                    'body' => $post['body'],
                ]);
            }

            // Confirmar la transacción si no hubo errores
            DB::commit();
            return redirect()->route('apipost')->with('success', 'Posts sincronizados (guardados) correctamente');
            
        }
        catch (\Exception $e) {

            // Deshacer la transacción si hubo errores y mostrar el mensaje de error
            DB::rollBack();
            return redirect()->route('apipost')->with('error', 'Error al sincronizar los posts: ' . $e->getMessage());
        
        }
        
    }
}
