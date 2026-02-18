<?php

    namespace PHPFramework;

    class Response
    {
        public function setResponceCode(int $code) : void
        {
            http_response_code($code);
        }

        // public function redirect()
        // {

        // }
    }
    