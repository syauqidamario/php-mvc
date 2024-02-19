<?php

namespace SyauqiDamarioDjohan\Learn\PHP\MVC\Middleware;

class AuthMiddleware implements Middleware
{
      function before(): void
      {
            if (!isset($_SESSION['auth'])) {
                  header('Location: /login');
                  exit();
            }
      }
}
