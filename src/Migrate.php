<?php

namespace Perrache\Reposql;

class Migrate
{
    public function createFile(string $dir): bool
    {
        if (empty($dir)) return false;
        date_default_timezone_set('Europe/Warsaw');
        $handle = fopen($dir . '/' . 'Migrate' . date('YmdHis') . '.sql', 'w');
        if ($handle === false) return false;
        if (fwrite($handle, '# Edit your query, there may be several, each at the end \';\'' . PHP_EOL) === false) return false;
        return fclose($handle);
    }
}
