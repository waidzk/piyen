@extends('layouts.main')

@section('container')
@include('layouts.sidebar')
<div class="static ml-12 p-8">
    <section class="head-profile flex flex-col items-center justify-center">
        <div class="photo-profile m-1">
            <img class="w-40 rounded-full" src="{{ asset('image/assets/profile-pic/'.$user->photo) }}" alt="User_Profiles">
        </div>
        <div class="max-w-xl info-profile flex flex-col items-center m-3">
            <h2 class="username text-2xl font-semibold">{{ $user->username }}</h2>
            <h3 class="text-md text-black">{{ $user->name }}</h3>
            <h3 class="text-md mb-4 mt-2 ">
                <svg class="inline" xmlns="http://www.w3.org/2000/svg" width="21"viewBox="0 0 24 24" fill="none" stroke="#ec4899" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                <span class="text-pink-500 text-lg">{{ $user->birthday }}</span> 
            </h3>
            <span class="w-1/2 text-md text-center mb-4">{{ $user->bio }}</span>
        </div>
    </section>
    <section class="content-profile">
        <div class="navigation-profile flex justify-center">
            <ul class="flex flex-row justify-center m-auto w-96">
                    <li class="m-2 cursor-pointer"><a href="{{ route('user-feeds', $user->username) }}" id="myFeeds" class="item-menu flex flex-row items-center stroke-pink-500 text-pink-500"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7" />
                        </svg><span class="text-sm font-medium">Feeds</span></a>
                    </li>
                    <li class="m-2 cursor-pointer"><a href="{{ route('user-articles', $user->username) }}" id="myArticles" class="item-menu flex flex-row items-center stroke-slate-400 text-slate-400"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                        </svg><span class="text-sm font-medium">Articles</span></a>
                    </li>
                    <li class="m-2 cursor-pointer"><a href="{{ route('user-voted', $user->username) }}" id="myVoted" class="item-menu flex flex-row items-center stroke-slate-400 text-slate-400"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                        </svg><span class="text-sm font-medium">Voted</span></a>
                    </li>
                @if(auth()->user()->username == $user->username)
                    <li class="m-2">
                        <a class="flex flex-row items-center stroke-slate-400 text-slate-400" href="{{ route('user-edit', auth()->user()->username) }}"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                        </svg>
                        <span class="text-sm font-medium">Edit Profile</span></a>
                    </li>
                 @endif
            </ul>
        </div>
        <div class="page"></div>

        @switch($title)
            @case($user->username.' Feeds')
                @include('user.profile.partials.myfeeds')
                @break
            @case($user->username.' Articles')
                @include('user.profile.partials.myarticles')
                @break
            @case('Votes')
                @include('user.profile.partials.myvotes')
                @break
            @default
                @include('user.profile.partials.myfeeds')
        @endswitch
        
    </section>
</div>
@endsection