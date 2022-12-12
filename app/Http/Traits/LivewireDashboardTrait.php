<?php

namespace App\Http\Traits;

trait LivewireDashboardTrait
{
    //function for create spcific data in the dashboard using livewire
    public function livewire_create($valdiateRequest, $modelname, $fields, $message, $emit)
    {
        $this->validate($valdiateRequest);
        foreach ($fields as $key => $value) {
            $createFields[$value] = $this->$value;
        }
        $modelname::Create($createFields);
        $this->clear();
        session()->flash('message', $message);
        $this->emit($emit);
    }

    //function for delete spcific data in the dashboard using livewire
    public function livewire_delete($modelname, $id_name, $id_value, $message, $emit)
    {
        $modelname::where($id_name, $id_value)->delete();
        session()->flash('message', $message);
        $this->emit($emit);
    }

    //function for edit spcific data in the dashboard using livewire
    public function livewire_edit($variableName, $modelname, $id_name, $id_value, $fields, $messageTitle, $messageContent)
    {
        $variableName = $modelname::where($id_name, $id_value)->first();
        if ($variableName) {
            foreach ($fields as $key => $value) {
                $this->$value = $variableName->$value;
            }
        } else {
            return session()->flash($messageTitle, $messageContent);
        }
    }

    //function for update spcific data in the dashboard using livewire
    public function livewire_update($valdiateRequest, $variableName, $modelname, $id_value, $fields, $SuccessMessage, $FailMessage, $emit)
    {
        $this->validate($valdiateRequest);
        $variableName = $modelname::find($id_value);
        if ($variableName) {
            foreach ($fields as $key => $value) {
                $updateFields[$value] = $this->$value;
            }
            $variableName->update($updateFields);
            session()->flash('message', $SuccessMessage);
        } else {
            session()->flash('message', $FailMessage);
        }
        $this->clear();
        $this->emit($emit);
    }

    //function for clear all fields in livewire component
    public function livewire_clear($fields)
    {
        foreach ($fields as $key => $value) {
            $this->$value = null;
        }
    }
}
