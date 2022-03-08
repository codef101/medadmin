<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use App\Models\ms_uses;

class AllUserComponent extends Component
{
    public function render()
    {
        // fectch all user from here
        $users=ms_uses::paginate(15);
        return view('livewire.admin.all-user-component',['users'=>$users])->layout('layouts.base');
    }
}
