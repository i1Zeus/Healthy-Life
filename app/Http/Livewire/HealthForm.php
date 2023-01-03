<?php

namespace App\Http\Livewire;
use Livewire\Component;
class HealthForm extends Component
{
    public $hight , $weight , $age ,$gender  ,$activityLevel , $bmr;
    public function harrisbenedict() {
        if ($this->gender == '1') 
            $this->bmr = 66 + (6.2 * $this->weight) + (12.7 * $this->hight) - (6.76 * $this->age);
        else 
            $this->bmr = 655 + (4.35 * $this->weight) + (4.7 * $this->weight) - (4.7 * $this->weight);
        $this->hight = '';
        $this->weight = '';
        $this->age = '';
        $this->gender = '';
        if ($this->activityLevel === 'sedentary') {
            return $this->bmr * 1.2;
          } else if ($this->activityLevel === 'lightly active') {
            return $this->bmr * 1.375;
          } else if ($this->activityLevel === 'moderately active') {
            return $this->bmr * 1.55;
          } else if ($this->activityLevel === 'very active') {
            return $this->bmr * 1.725;
          } else {
            // throw an error or return a default value
          }

        //   if($this->bmr === 
    }

    public function render()
    {
        return view('livewire.health-form',[
            'bmr' => $this->bmr ]);
    }
}
