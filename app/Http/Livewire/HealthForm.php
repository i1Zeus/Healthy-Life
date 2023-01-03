<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HealthForm extends Component
{
    public $hight , $weight , $age , $gender  , $result;
    public function harrisbenedict()
        {
            if($this->gender == 1) //for man 
                $this->result = 66 + (6.2 * $this->weight) + (12.7 * $this->hight) - (6.76 * $this->age);
            else //for woman
                $this->result =655 + (4.35* $this->weight) + (4.7 * $this->hight) - (4.7 * $this->age);
        }

    public function render()
    {
        return view('livewire.health-form' , ['result' => $this->result]);
    }
}
