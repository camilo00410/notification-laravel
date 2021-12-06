<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NotificationComponent extends Component
{

    public $notifications, $count;

    protected $listeners = ['notification'];

    public function mount(){
        $this->notification();
    }

    public function notification()
    {
        $this->notifications = auth()->user()->notifications;
        $this->count = auth()->user()->unreadNotifications->count();
    }

    public function markAsRead()
    {
        auth()->user()->unreadNotifications->markAsRead();
        $this->count = 0;
    }

    public function render()
    {
        return view('livewire.notification-component');
    }
}
