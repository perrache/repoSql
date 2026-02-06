<?php

namespace Perrache\Reposql;

class Migrate
{
    public function createFile(string $dir)
    {
        date_default_timezone_set('Europe/Warsaw');
        return 'Migrate' . date('YmdHis');
    }
}
