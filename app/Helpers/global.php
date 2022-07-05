<?php

use Illuminate\Support\Str;

function str($content)
{
    return Str::of($content);
}

function uploadFile($file, $path)
{
    $fileName = '';

    if (!is_null($file)) {
        // Buat nama gambar
        $fileName = time() . '_' . str($file->getClientOriginalName())->lower();

        // Move gambar ke public
        $file->move($path, $fileName);
    }

    return $fileName;
}
