<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class Profile extends Component
{
    use WithFileUploads;

    public User $user;
    public $showSavedAlert = false;
    public $showDemoNotification = false;
    public $upload;

    protected function rules()
    {

        return [
            'user.first_name' => 'max:15',
            'user.last_name' => 'max:20',
            'user.birthday' => 'date_format:Y-m-d',
            'user.email' => '',
            'user.phone' => 'numeric',
            'user.gender' => ['required', Rule::in(['Male', 'Female', 'Other'])],
            'user.address' => 'max:20',
            'user.number' => '',
            'user.city' => 'max:20',
            'user.country' => '',
            'upload' => 'nullable|image|max:2000'
        ];
    }

    public function updated()
    {
        $this->showSavedAlert = false;
        if(auth()->user()->id !== 1 && auth()->user()->id !== 2 && auth()->user()->id !== 3) {
            $this->validate([
                'user.first_name' => 'max:15',
                'user.last_name' => 'max:20',
                'user.birthday' => 'date_format:Y-m-d',
                'user.email' => ['email', 'required', Rule::unique('users', 'email')->ignore(auth()->user())],
                'user.phone' => '',
                'user.address' => 'max:20',
                'user.city' => 'max:20',
                'user.country' => '',
                'upload' => 'nullable|image|max:2000'
            ]);
        } else {
            $this->validate([
                'user.first_name' => 'max:15',
                'user.last_name' => 'max:20',
                'user.birthday' => 'date_format:Y-m-d',
                'user.email' => '',
                'user.phone' => '',
                'user.address' => 'max:20',
                'user.city' => 'max:20',
                'user.country' => '',
                'upload' => 'nullable|image|max:2000'
            ]);
        }
    }

    public function mount()
    {
        $this->user = auth()->user();
    }

    public function save()
    {
        if(auth()->user()->id !== 1 && auth()->user()->id !== 2 && auth()->user()->id !== 3) {
            $this->validate([
                'user.email' => ['email', 'required', Rule::unique('users', 'email')->ignore(auth()->user())],
            ]);
        }
        $this->validate();

        $this->user->save();

        $this->showSavedAlert = true;

        $this->upload && $this->user->update([
            'avatar' => $this->upload->store('/', 'avatars'),
        ]);
    }

    public function render()
    {
        return view('livewire.profile');
    }
}
