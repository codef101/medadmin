<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\mesg_tb;

class AllContactComponent extends Component
{
    public function render()
    {
        // run query to fetch records from the database here 
        $contact_details = mesg_tb::paginate(15);
        return view('livewire.admin.all-contact-component',['contact_details'=>$contact_details])->layout('layouts.base');
    }
}
