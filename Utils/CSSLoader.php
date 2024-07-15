<?php
namespace Utils;

class CSSLoader
{
    public static function loadCSS(string $currentPath, array $routes): ?string
    {
        foreach ($routes as $route => $cssFile) {
            // Reemplaza los parámetros con una expresión regular
            $routePattern = preg_replace('/:\w+/', '([^/]+)', $route);
            // Compara la ruta actual con el patrón
            if (preg_match('@^' . $routePattern . '$@', $currentPath, $matches)) {
                return $cssFile;
            }
        }
        return null;
    }

}