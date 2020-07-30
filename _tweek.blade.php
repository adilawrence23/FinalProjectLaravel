<div class="flex p-4 border-b border-b-gray-400">

    <div class="mr-2 flex-shrink-0">
        <img src="{{$tweek->user->avatar}}" alt="Avatar" class="rounded-full mr-2">
    </div>

    <div>
        <h5 class="font-bold mb-4">{{$tweek->user->name}}</h5>
        <p class="text-sm">
        {{$tweek->body}}
        </p>
    </div>

</div>