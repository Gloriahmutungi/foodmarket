<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;


class Registration extends Component
{
    public $firstname,$lastname,$email,$phonenumber,$password,$address,$gender;

    public function render()
    {
        return view('livewire.registration');
    }
    private function resetInputFields(){
        $this->firstname = '';
        $this->lastname = '';
        $this->email = '';
        $this->phonenumber = '';
        $this->password = '';
        $this->address = '';
        $this->gender = '';
    }
    public function adduser()
    {
        $this->validate([
            'firstname' => 'required|string|min:3|max:50',
            'lastname' => 'required|string|min:3|max:50',
            'email' => 'required|email|unique:users',
            'phonenumber' => 'required|unique:users',
            'password'=>'required|min:6',
            'address'=>'required',
            'gender'=>'required'
        ]);
        $new = new User;
        $new->firstname = $this->firstname;
        $new->lastname = $this->lastname;
        $new->email = $this->email;
        $new->phonenumber = $this->phonenumber;
        $new->password = bcrypt($this->password);
        $new->address = $this->address;
        $new->gender = $this->gender;
        $new->save();
        $this->dispatchBrowserEvent(
            'alert',
            ['type' => 'success',  'message' => 'User account Created successfully']
        );
        return redirect('/login');
        $this->resetInputFields();
    }
}
