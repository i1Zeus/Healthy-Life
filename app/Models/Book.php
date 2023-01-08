<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'image_path', 'file_path'];
    ### add ###
    public function add($data)
    {
        $this->fill($data);
        $this->save();
    }
    ### End add ###
    ### edit ###
    public function edit($data)
    {
        $this->update($data);
    }
    ### End edit ###

    //add_image
    public function add_image($image)
    {
        $ext = $image->extension();
        $name =  \Str::random(10) . '.' . $ext;
        $image = $image->storeAs('public/books/' . $this->id . '/images/', $name);
        $this->image_path = 'storage/books/' . $this->id . '/images/' . $name;
        $this->save();
    }

    //update_image
    public function update_image($image)
    {
        $ext = $image->extension();
        $name =  \Str::random(10) . '.' . $ext;
        $image = $image->storeAs('public/books/' . $this->id . '/images/', $name);
        $this->image_path = 'storage/books/' . $this->id . '/images/' . $name;
        $this->save();
    }
    ### file ###

    //add_file
    public function add_file($file)
    {
        $ext = $file->extension();
        $name =  \Str::random(10) . '.' . $ext;
        $file = $file->storeAs('public/pdf/' . $this->id . '/files/', $name);
        $this->file_path = 'storage/pdf/' . $this->id . '/files/' . $name;
        $this->save();
    }

    //update_file
    public function update_file($file)
    {
        $ext = $file->extension();
        $name =  \Str::random(10) . '.' . $ext;
        $file = $file->storeAs('public/pdf/' . $this->id . '/files/', $name);
        $this->file_path = 'storage/pdf/' . $this->id . '/files/' . $name;
        $this->save();
    }

    ### End file ###

}
