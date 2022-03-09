<?php

namespace App\Http\Livewire\Admin;

use App\Models\ms_uses;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class AllUserComponent extends Component
{
    public function render()
    {
        // fectch all user from here
        $ms_u = ms_uses::all();
        foreach ($ms_u as $m ) {
            $tokens = DB::table('ms_ref')->where('m_ref_uid','=',$m->ms_id)->count();
            $m->tokens = $tokens * 10;
        }
        return view('livewire.admin.all-user-component',['users'=> $ms_u])->layout('layouts.base');
    }
}
