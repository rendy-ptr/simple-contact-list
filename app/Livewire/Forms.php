<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\On;
use Illuminate\Validation\ValidationException;

class Forms extends Component
{
    public $name = '';
    public $email = '';
    public $phone = '';
    public $userId = null;

    #[On('editUser')]
    public function fillFormEditUser($user)
    {
        $this->userId = $user['id'];
        $this->name = $user['name'];
        $this->email = $user['email'];
        $this->phone = $user['phone'];
    }

    public function handleReset()
    {
        $this->reset(['name', 'email', 'phone']);
        $this->resetValidation();
        $this->userId = null;
    }

    public function handleSubmit()
    {
        $this->phone = preg_replace('/\D/', '', $this->phone);

        $validatedData = $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|regex:/^[0-9]+$/|max:20',
        ]);


        try {
            if ($this->userId) {
                $user = User::find($this->userId);
                $user->update($validatedData);
                session()->flash('message', 'Pengguna berhasil diperbarui.');
                $this->dispatch('userUpdated');
            } else {
                User::create($validatedData);
                session()->flash('message', 'Pengguna berhasil ditambahkan.');
                $this->dispatch('userAdded');
            }
            $this->reset();
            $this->resetValidation();
        } catch (\Throwable $exception) {
            session()->flash('error', 'Terjadi kesalahan saat menambahkan pengguna.');
        }
    }


    public function render()
    {
        return view('livewire.forms');
    }
}
