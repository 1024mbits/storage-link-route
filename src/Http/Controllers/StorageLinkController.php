<?php

namespace Dev1024\StorageLinkRoute\Http\Controllers;

use Illuminate\Filesystem\Filesystem;

class StorageLinkController {

    public function __invoke(Filesystem $filesystem)
    {
        if ($filesystem->exists(public_path('storage'))) {
            return view('storage-link::storage', [
                'storage_link' => 'The public/storage directory already exists.'
            ]);
        }

        $filesystem->link(
            storage_path('app/public'), public_path('storage')
        );

        return view('storage-link::storage', [
            'storage_link' => 'The [public/storage] directory has been linked.'
        ]);
    }
}