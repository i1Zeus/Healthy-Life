<?php

namespace App\Http\Livewire;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class HealthForm extends Component
{   use LivewireAlert;
    public $hight , $weight , $age ,$gender  ,$activityLevel , $bmr;
    public function harrisbenedict() {
      if($this->weight >=10 && $this->hight >=10 && $this->age >=15){

        if ($this->gender == '1') 
            $this->bmr = 66 + (6.2 * $this->weight) + (12.7 * $this->hight) - (6.76 * $this->age);
        elseif($this->gender == '2')
            $this->bmr = 655 + (4.35 * $this->weight) + (4.7 * $this->hight) - (4.7 * $this->age);
        else
            $this->bmr ;

        if ($this->activityLevel == '1') {
            $this->bmr = $this->bmr * 1.2;
          } else if ($this->activityLevel == '2') {
            $this->bmr=$this->bmr * 1.375;
          } else if ($this->activityLevel == '3') {
            $this->bmr=$this->bmr * 1.55;
          } else if ($this->activityLevel == '4') {
            $this->bmr=$this->bmr * 1.725;
          }
          else {
            $this->bmr = $this->bmr;
          }
        }
        $this->bmr = intval($this->bmr);
        $this->hight = null;
        $this->weight = null;
        $this->age = null;
        $this->gender = null;
        $this->activityLevel = null;
        $this->alert('info', ' you ll need   ' .$this->bmr . '   calories druing your day to stay healthy!', [
          'position' => 'center',
          'timer' => '8000',
          'toast' => true,
          'timerProgressBar' => false,
          'showConfirmButton' => false,
          'onConfirmed' => '',
          'showDenyButton' => false,
          'onDenied' => '',
          'showCancelButton' => true,
          'onDismissed' => '',
          'cancelButtonText' => 'OK',
         ]);
    }

    
    public function render()
    {
      //get bmr  value
        // $bmr = value($this->harrisbenedict());
        //  dd($bmr);
        return view('livewire.health-form',['bmr'=>$this->bmr]);
    }
}
