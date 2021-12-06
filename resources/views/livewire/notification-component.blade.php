
<div class="ml-3 relative">
    <x-jet-dropdown align="right" width="60">
        <x-slot name="trigger">
            <span class="inline-flex rounded-md">
                <button wire:click="markAsRead()" type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition">

                    Notificaciones

                    @if($count)
                        <span class="ml-2 inline-flex items-center justify-center px-2 py-1 mr-2 text-xs font-bold leading-none text-red-100 bg-red-600 rounded-full">{{$count}}</span>
                    @endif

                </button>
            </span>
        </x-slot>

        <x-slot name="content">
            <div class="w-60">
                <!-- Team Management -->
                <div class="block px-4 py-2 text-xs text-gray-400">
                    {{ __('Manage Team') }}
                </div>

                <div class="divide-y-2">
                    @foreach($notifications as $notification)
                        <x-jet-dropdown-link class="text-gray-700" href="{{$notification->data['url']}}">
                            {{$notification->data['message']}}

                            <span class="text-xs font-bold">{{$notification->created_at->diffForHumans()}}</span>
                        </x-jet-dropdown-link> 
                    @endforeach
                </div>
                

            </div>
        </x-slot>
    </x-jet-dropdown>
</div>
