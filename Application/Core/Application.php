<?php 

require_once APPPATH.'Core/functions.php';
require_once APPPATH.'Core/Controller.php';
require_once APPPATH.'Database/database.php';

class Application 
{
    private $routes = [],
            $uri;


    public function __construct($uri)    
    {
        $this->uri = $uri;
    }


    function Index()
    {                
        /**
         * Az addRout függvény végzi a regisztrációt.
         * Ezen a ponton vesszük fel az egyes controllereket a kapott útvonalakhoz.
         */
        $this->addRoute('/?', 'HomeController');      
        $this->addRoute('/about/?', 'AboutController');              
        


        foreach($this->routes as $pattern => $controller)
        {        
            if(preg_match($pattern, $this->uri, $matches))
            {      
                require_once APPPATH.'Controllers/'.$controller.'.php';
             
                new $controller($matches);
                return true;                                                                  
            }
        }

        require_once APPPATH.'Controllers/NotFoundController.php';
        new NotFoundController();
    }



    /**
     * Az addRout függvény végzi a regisztrációt. A global kulcsszóval lehet elérni
     * külső változót függvényen belülről
     * 
     * @param string $pattern pattern of searched part of url
     * @param string $controller Name of conteroller
     * 
     * @return void
     */
    private function addRoute($pattern, $controller)
    {
        $this->routes['%^'.$pattern.'$%'] = $controller;
    }   
  

}