<?php

namespace Dell\Codephp\Commons;

use eftec\bladeone\BladeOne;

class Controller
{
    public function renderViewClient($view, $data = [])
    {
        $templadePath = __DIR__ . '/../Views/Client';
        $blade = new BladeOne($templadePath);
        echo $blade->run($view, $data);
    }
    public function renderViewAdmin($view, $data = [])
    {
        $templadePath = __DIR__ . '/../Views/Admin';
        $blade = new BladeOne($templadePath);
        echo $blade->run($view, $data);
    }
}
