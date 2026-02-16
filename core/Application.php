<?php

namespace PHPFramework;

class Application
{
    protected string $uri;
    public Request $request;
    public static ?Application $app = null; // Добавлен тип ?Application и null по умолчанию

    public function __construct()
    {
        self::$app = $this;
        $this->uri = $_SERVER['QUERY_STRING'] ?? '';
        $this->request = new Request($this->uri);
    }
}