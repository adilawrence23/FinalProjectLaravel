<x-app>
<header class="mb-6 relative">

<div class="relative">
    <img src="/images/banner.jpg" alt="Banner" style="border-radius:15px" width="700" class="mb-2">
    <img src="{{$user->avatar}}" alt="Avatar" class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
       style="left:50%" width= "150">

</div>
    <div class="flex justify-between items-center mb-6">

        <div>
            <h2 class="font-bold text-2xl mb-0">{{$user->name}}</h2>
            <p class="text-sm"> {{$user->created_at->diffForHumans()}} </p>
        </div>

        <div class="flex">
       @can('edit',$user)
            <a href="{{$user->path('edit')}}" class="bg-gray-300 mr-2 rounded-full text-xs border border-gray-300 py-2 px-4 text-black">Edit
                Profile</a>
        @endcan
        <x-follow-button :user="$user"></x-follow-button>
        </div>
    </div>
    <p class=>I am wanting to add a 'User description descriptor' to an existing characteristic. The idea is that if you
        connect to the device with a generic app like LightBlue or your nRF Connect app, the app can display human
        readable text names for the characteristics.</p>

    

</header>

@include('_timeline',[
'tweeks' => $user->tweeks
])
</x-app>