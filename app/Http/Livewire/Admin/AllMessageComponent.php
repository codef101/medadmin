<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\mail_list;

class AllMessageComponent extends Component
{
    public function render()
    {
        // run query to fetch records from the database here 
        $mails_details = mail_list::paginate(15);
        return view('livewire.admin.all-message-component',['mails_details'=>$mails_details])->layout('layouts.base');
    }
}
