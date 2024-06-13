<?php

namespace App\Livewire\Profile;

use Livewire\Component;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserDevices extends Component
{
    public $sessions = [];

    public function mount()
    {
        $this->sessions = $this->getSessions();
    }

    protected function getSessions()
    {
        return DB::table('sessions')
            ->where('user_id', Auth::id())
            ->get();
    }

    public function logoutOtherBrowserSessions($sessionId)
    {
        DB::table('sessions')
            ->where('id', $sessionId)
            ->delete();

        $this->sessions = $this->getSessions();
    }

    public function render()
    {
        return view('livewire.profile.user-devices', ['sessions' => $this->sessions]);
    }
}
