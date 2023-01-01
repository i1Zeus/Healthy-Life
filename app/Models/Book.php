<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [ 'name' , 'description' ,'image_path'];
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

}
