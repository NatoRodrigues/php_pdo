<?php

namespace app\classes;

class Routes{

    public static function load_routes($routes, $uri){
        if(!array_key_exists($uri, $routes)){    
            throw new \Exception("[ERRO] Rota {$uri} não existe.", 1);  
        }
        
        return"../app/{$routes[$uri]}";
    }
}