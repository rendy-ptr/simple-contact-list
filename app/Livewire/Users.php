<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\On;

class Users extends Component
{
    public function handleEdit($userId)
    {
        $user = User::find($userId);

        if ($user) {
            $this->dispatch('editUser', user: $user);
        }
    }

    public function handleDelete($userId)
    {
        $user = User::find($userId);

        if ($user) {
            $user->delete();
            session()->flash('message', 'Pengguna berhasil dihapus.');
        } else {
            session()->flash('error', 'Pengguna tidak ditemukan.');
        }
    }

    #[On('userAdded')]
    #[On('userUpdated')]
    public function render()
    {
        return view('livewire.users', [
            'users' => User::all(),
            'title' => 'Daftar Pengguna',
        ]);
    }
}
