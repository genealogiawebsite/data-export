<?php

namespace LaravelEnso\DataExport;

use LaravelEnso\DataExport\Models\DataExport;
use LaravelEnso\Files\FileServiceProvider as ServiceProvider;

class FileServiceProvider extends ServiceProvider
{
    public function folders(): array
    {
        return ['exports' => [
            'model' => DataExport::morphMapKey(),
            'order' => 40,
        ]];
    }
}
