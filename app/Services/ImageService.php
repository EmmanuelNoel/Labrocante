<?php

namespace App\Services;

use App\Traits\ImageUploadTrait;
use Illuminate\Support\Facades\File;

class ImageService
{
    use ImageUploadTrait;
    protected string $path  = 'app/public/images/';

    public function storeProductImages($images, $product)
    {
        foreach ($images as $image) {

            $path = $image->store('produits_medias', 'public');
            $name = $image->getClientOriginalName();
            $product->medias()->create([
                'path' => $path,
                'nom' => $name
            ]);

        }
    }

    public function storeUserImages($fileName, $image): string
    {
        return $this->uploadImage(
            $fileName,
            $image,
            'users',
            300,
            NULL
        );
    }

    public function unlinkImage($image, $folderName)
    {
        if (File::exists('storage/images/'. $folderName .'/' . $image)) {
            unlink('storage/images/'. $folderName .'/' . $image);
        }
    }
}
