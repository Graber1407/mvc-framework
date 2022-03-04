<?php
namespace app\core;

class Application
{
    public Router $router;

    public function __construct($ROOT_DIR)
    {
        $this->router = new Router();
    }

    public function run()
    {
        echo $this->router->resolve();
    }
}