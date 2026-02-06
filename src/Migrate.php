<?php

namespace Perrache\Reposql;

class Migrate
{
    public function createFile(string $dir)
    {
        return 'Migrate' . date('YmdHis');
    }
}
