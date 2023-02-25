<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email,$password;
    public function render()
    {
        return view('livewire.login');
    }
    private function resetInputFields(){
        $this->email = '';
        $this->password = '';
    }
    public function login(){
    $validatedDate = $this->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if(Auth::attempt(array('email' => $this->email, 'password' => $this->password))){
        $this->dispatchBrowserEvent(
            'alert',
            ['type' => 'success',  'message' => 'Your Login is Successful']
        );
        return redirect('/');
        $this->resetInputFields();
    }else{
        $this->dispatchBrowserEvent(
            'alert',
            ['type' => 'success',  'message' => 'Wrong email or password']
        );
    }
}
}
