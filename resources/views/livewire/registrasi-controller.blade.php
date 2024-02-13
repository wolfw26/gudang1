<div class=" px-1 min-h-screen bg-gradient-to-b from-orange-200 to-orange-300 py-2 flex justify-center">
    <div class="card px-3 mt-32 pt-3 pb-4  h-full w-[90vh] rounded-2xl shadow-2xl relative flex justify-center bg-white mx-10 md:mx-0">
        <h1 class=" text-center absolute -top-3 right-4/4 shadow-xl border border-blue-700 rounded-2xl bg-orange-500 px-3 py-1 font-mono font-extrabold text-white text-lg">REGISTRASI</h1>

        <div id="form" class="py-2 w-full mt-10 md:w-[50%] flex flex-col justify-center my-2">
            <div class="flex flex-col md:max-w-[90%] ">
                <span class=" text-slate-700 font-bold text-center text-lg">Username</span>
                <input wire:model.live="name" type="text" class="border rounded-lg pl-3 min-h-8 @error('name')
                border-red-400
            @enderror" placeholder="Username">
                @error('name')
                <i class="text-red-300">{{ $message}}</i>
                @enderror
            </div>
            <div class="flex flex-col md:max-w-[90%] ">
                <span class=" text-slate-700 font-bold text-center text-lg">Username</span>
                <input wire:model.live="email" type="email" class="border rounded-lg pl-3 min-h-8 @error('email')
                border-red-400
            @enderror" placeholder="Email">
                @error('email')
                <i class="text-red-300">{{ $message}}</i>
                @enderror
            </div>
            <div class="flex flex-col md:max-w-[90%] my-2">
                <span class=" text-slate-700 font-bold text-center text-lg">Password</span>
                <input wire:model.live="password" type="password" class="border @error('password')
                    border-red-400
                @enderror rounded-lg pl-3 min-h-8" placeholder="Password">
                @error('password')
                <i class="text-red-300">{{ $message}}</i>
                @enderror
            </div>
            {{ $password }}
            <button wire:click="Save" class="border font-bold py-1 border-orange-300 hover:bg-orange-500 mx-20 rounded-xl hover:text-white my-3 text-orange-700">Daftar</button>
            <span class="text-center">Sudah memiliki akun? <a class=" text-blue-600 italic" href="{{ route('login') }}">Masuk</a></span>
        </div>
    </div>
</div>
