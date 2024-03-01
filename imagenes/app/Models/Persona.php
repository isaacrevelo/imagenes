<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Persona extends Model
{
    protected $fillable = ['name', 'last_name', 'imagen', 'hoja_vida'];

    public function storeImage($image)
    {
        $imageName = time() . '_' . $image->getClientOriginalName();
        $image->storeAs('public/imagenes', $imageName);
        $this->imagen = $imageName;
    }

    public function storeHojaVida($hojaVida)
    {
        $hojaVidaName = time() . '_' . $hojaVida->getClientOriginalName();
        $hojaVida->storeAs('public/hojas_vida', $hojaVidaName);
        $this->hoja_vida = $hojaVidaName;
    }

    public function save(array $options = [])
    {
        if ($this->imagen instanceof \Illuminate\Http\UploadedFile) {
            $this->storeImage($this->imagen);
        }

        if ($this->hoja_vida instanceof \Illuminate\Http\UploadedFile) {
            $this->storeHojaVida($this->hoja_vida);
        }

        parent::save($options);
    }
}
