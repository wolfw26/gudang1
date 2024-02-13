<div class=" px-1 min-h-screen bg-gradient-to-b from-sky-500 to-blue-300 py-2 flex justify-center">
    <div class="card px-3 mt-32 pt-3 pb-4  h-full w-[90vh] rounded-2xl shadow-2xl relative flex justify-center bg-white mx-10 md:mx-0">
        <h1 class=" text-center absolute -top-3 right-4/4 shadow-xl border border-blue-700 rounded-2xl bg-blue-500 px-3 py-1 font-mono font-extrabold text-white text-lg">LOGIN</h1>
        @error('loginErr')
        <em class=" absolute mt-4 px-1 py-1">{{ $message }}</em>
    @enderror
        <div id="form" class="py-2 w-full mt-10 md:w-[50%] flex flex-col justify-center my-2">
            <div class="flex flex-col md:max-w-[90%] ">
                <span class=" text-slate-700 font-bold text-center text-lg">Username</span>
                <input wire:model.blur="email" type="text" class="border @error($email)
                    error
                @enderror rounded-lg pl-3 min-h-8" placeholder="Username">
                @error($email)
                <em> {{ $message }} </em>
                @enderror
            </div>
            <div class="flex flex-col md:max-w-[90%] my-2">
                <span class=" text-slate-700 font-bold text-center text-lg">Password</span>
                <input wire:model.live="password" type="password" class="border rounded-lg pl-3 min-h-8 @error($password)
                    error
                @enderror" placeholder="password">
                @error($password)
                <em> {{ $message }} </em>
                @enderror
            </div>
            <div class="mb-3">
                <input wire:model.live="remember" type="checkbox" name="" id="">
                <label for="checkbox">Remember Me</label>
            </div>
            {{ $remember }}
            <button wire:click="loginUser" class="border font-bold py-1 border-blue-300 hover:bg-blue-500 mx-20 rounded-xl hover:text-white my-3">Login</button>
            <span class="text-center">Belum memiliki akun? <a class=" text-blue-600 italic" href="{{ route('registrasi')}}">Registrasi</a></span>
        </div>
    </div>
</div>
