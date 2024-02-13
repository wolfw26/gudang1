<div class=" flex-col justify-center pt-36 bg-gradient-to-b from-blue-950 to-indigo-600 min-h-screen">
    <h1 class=" text-center font-black font-julee text-white text-[50px]">LOGIN</h1>
    <div class=" mt-10">
        <div class=" flex flex-col justify-center mx-10 my-2">
            <span class=" font-julee font-thin text-white text-center">Username</span>
            <input wire:model.live="username" class="border-b border-slate-400 bg-transparent py-1 px-2 focus:outline-none focus:border-white
            focus:border-b-2" type="text">
        </div>
        <div class=" flex flex-col justify-center mx-10 mt-10">
            <span class=" font-julee font-thin text-white text-center">Password</span>
            <input wire:model.live="password" class="border-b border-slate-400 bg-transparent py-1 px-2 focus:outline-none focus:border-white
            focus:border-b-2" type="password">
        </div>
        <div class=" mt-16 w-full flex justify-center">
            <button wire:click="Login"
                class=" py-1 px-28 rounded-2xl bg-green-400 font-medium text-white hover:scale-110 hover:shadow-sm hover:shadow-white">SIGN
                IN</button>
        </div>
        <div class=" w-full flex justify-center mt-10">
            <a class=" text-white drop-shadow-lg font-italic font-lato text-center"
                href="{{ route('login.admin') }}">Admin</a>
        </div>
    </div>
</div>