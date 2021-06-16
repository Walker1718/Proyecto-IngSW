<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\clausula;

class Consultas extends Component
{
    public $datos = [];
    public $Ordendedatos = [];
    // public $otrovalor = [];

    public function mount(){
        $this -> datos = clausula::all();
        $this -> Ordendedatos = [
             ['id_clausula' => '','Contenido' => '']
         ];
    }

    //  public function updatedOrdendedatos($id_clausula)
    //  {
    //      $this->otrovalor[] = clausula::where('id_clausula', $id_clausula)->get();
    //  }

    public function addProduct()
    {
        $this->Ordendedatos[] = ['id_clausula' => '','Contenido' => ''];
    }

    public function removeProduct($index)
    {
        unset($this->Ordendedatos[$index]);
        $this->Ordendedatos = array_values($this->Ordendedatos);
    }


    public function render()
    {
        //info($this->Ordendedatos);
        return view('livewire.consultas', ['clausula' => clausula::all(),]);
    }
}
