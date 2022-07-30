<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\user_detail;
class UserCreate extends Component
{   
    
    public string $email = '';
    public string $address = '';
    public string $name = '';
    public string $phone = '';
      
    protected $rules = [
        'name' => ['required', 'min:2'],
        'address' => ['required', 'min:2'],
        'email' => ['required', 'email'],
        'phone' => ['required', 'min:10'],
        
    ]; 

    public function render()
    {
        return view('livewire.user-create');
    }
    public function save()
    {
        $this->validate();
        $create = new user_detail ;
        

    }
}
