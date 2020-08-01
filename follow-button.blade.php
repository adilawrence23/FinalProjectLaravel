@unless(auth()->user()->is($user))
<form method="POST" action="{{route('follow',$user->username)}}">
        @csrf
            <button type="submit" class="bg-blue-500 rounded-full shadow py-2 px-4 text-xs text-white">{{auth()->user()->following($user) ? 'Unfollow Me' : 'Follow Me'}}</button>
        </form>
@endunless