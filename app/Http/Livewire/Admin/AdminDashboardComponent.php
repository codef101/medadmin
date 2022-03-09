<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;

class AdminDashboardComponent extends Component
{
    public function render()
    {
        $users = User::all()->count();
        return view('livewire.admin.admin-dashboard-component',['users_count' => $users])->layout('layouts.base');
    }
}
