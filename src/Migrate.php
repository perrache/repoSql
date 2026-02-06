<?php

namespace Perrache\Reposql;

class Migrate
{
    public function createFile(string $dir): bool
    {
        if (empty($dir)) return false;
        date_default_timezone_set('Europe/Warsaw');
        $handle = fopen($dir . '/' . 'Migrate' . date('YmdHis' . '.php'), 'w');
        if ($handle === false) return false;
        if (fwrite($handle, '<?php' . PHP_EOL) === false) return false;
        return fclose($handle);
    }
}
