<?php

namespace App\Service;

use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\String\Slugger\SluggerInterface;

class ImageUploader 
{
    public $slugger;
    public function __construct(SluggerInterface $slugger)
    {
        $this->slugger = $slugger;
    }
    
    /**
     * Method to place picture uploader with a form in the file uploads
     * 
     * @param Form $form
     * @param string $filedName
     * @return string|null
     */
    public function upload(Form $form, string $filedName, $uploadFolder = null)
    {
        // if the variable $uploadFolder is not defined we use the environmental variable UPLOAD_FOLDER defined un the file .env
        if ($uploadFolder === null) {
            $uploadFolder = $_ENV['UPLOAD_FOLDER'];
        }

        /** @var UploadedFile $imageFile */
        // we recover the physical file
        $imageFile = $form->get($filedName)->getData();

        if ($imageFile) {
            $originalFileName = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFileName = $this->slugger->slug($originalFileName);

            $newFileName = $safeFileName . '-' .uniqid() . '.' . $imageFile->guessExtension();

            // moving the file to the tempory file (/tmp) to uploads file
            try {
                $imageFile->move($uploadFolder, $newFileName);
                // return the file name if it works
                return $newFileName;
            } catch (FileException $e) {
                // if not we can show an error
                // or send a mail to the admin
                // or show a error to the client
                dump($e);
            }
        }
        // no image to upload
        return null;
    }
}   