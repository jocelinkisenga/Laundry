<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Customer as ModelCustomer;
use Livewire\WithFileUploads;
use App\Imports\ImportCustomer;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;

class Customer extends Component
{
    use WithFileUploads;
    public $file_name;
    public $path;
    public $destination = "uploads";
    public $clients;

    public function render()
    {
        $this->clients = ModelCustomer::latest()->get();
        return view('livewire.customer');
    }

    public function store() {

        $this->validate(
            [
                'file_name' => "required|mimes:xlsx,xls,csv,ods"
            ]
            );



        Excel::import(
            new ImportCustomer,
            $this->file_name
        );
    }
}
