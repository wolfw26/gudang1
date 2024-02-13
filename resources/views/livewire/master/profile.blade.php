<div class=" justify-center flex">
    <div class=" min-w-[70%] mt-4">
        <h3 class="text-center my-2 font-semibold text-slate-500 text-2xl">PROFILE</h3>
        @if ($staffExist)
        <!-- Data -->
        <div class="border shadow-md rounded-xl py-2 px-3">
            <!-- form -->
            <div class=" flex flex-col px-3">
                <span class=" my-1 text-md mx-2 font-semibold text-slate-400">NAMA :</span>
                <input type="text" class="border shadow-sm rounded-md px-3 py-1" value="{{ $data->nama }}" readonly>
            </div>
            <!-- /form -->
            <!-- form -->
            <div class=" flex flex-col px-3">
                <span class=" my-1 text-md mx-2 font-semibold text-slate-400">KODE :</span>
                <input type="text" class="border shadow-sm rounded-md px-3 py-1" value="{{ $data->kode }}" readonly>
            </div>
            <!-- /form -->
            <!-- form -->
            <div class=" flex flex-col px-3">
                <span class=" my-1 text-md mx-2 font-semibold text-slate-400">UMUR :</span>
                <input type="number" class="border shadow-sm rounded-md px-3 py-1" value="{{ $data->umur }}" readonly>
            </div>
            <!-- /form -->
            <!-- form -->
            <div class=" flex flex-col px-3">
                <span class=" my-1 text-md mx-2 font-semibold text-slate-400">Jenis-Kelamin :</span>
                <input type="text" class="border shadow-sm rounded-md  py-1" @if ($data->jenis_kelamin == 'L')
                value=" LAKI-LAKI"
                @else
                value="PEREMPUAN"
                @endif readonly>
            </div>
            <!-- /form -->
            <!-- form -->
            <div class=" flex flex-col px-3">
                <span class=" my-1 text-md mx-2 font-semibold text-slate-400">No. KTP :</span>
                <input type="number" class="border shadow-sm rounded-md px-3 py-1" value="{{ $data->no_ktp }}" readonly>
            </div>
            <!-- /form -->
            <!-- form -->
            <div class=" flex flex-col px-3">
                <span class=" my-1 text-md mx-2 font-semibold text-slate-400">No. KK :</span>
                <input type="number" class="border shadow-sm rounded-md px-3 py-1" value="{{ $data->no_kk ?? '-' }}"
                    readonly>
            </div>
            <!-- /form -->
            <div class=" flex flex-col px-3">
                <span class=" my-1 text-md mx-2 font-semibold text-slate-400">Alamat :</span>
                <input type="text" class="border shadow-sm rounded-md px-3 py-1" value="{{ $data->alamat }}" readonly>
            </div>
            <!-- /form -->
            <!-- /form -->
            <div class=" flex flex-col px-3">
                <span class=" my-1 text-md mx-2 font-semibold text-slate-400">Domisili :</span>
                <input type="text" class="border shadow-sm rounded-md px-3 py-1" value="{{ $data->domisili }}" readonly>
            </div>
            <!-- /form -->
        </div>
        <!-- /DATA -->
        @else
        <!-- start-form -->
        <div class="border shadow-md rounded-xl py-2 px-3">
            <!-- form -->
            <div class=" flex flex-col px-3">
                <span class=" my-1 text-md mx-2 font-semibold text-slate-400">NAMA :</span>
                <input wire:model="nama" type="text" class="border shadow-sm rounded-md px-3 py-1" required>
            </div>
            <!-- /form -->
            <!-- form -->
            <div class=" flex flex-col px-3">
                <span class=" my-1 text-md mx-2 font-semibold text-slate-400">KODE :</span>
                <input wire:model="kode" type="text" class="border shadow-sm rounded-md px-3 py-1" required>
            </div>
            <!-- /form -->
            <!-- form -->
            <div class=" flex flex-col px-3">
                <span class=" my-1 text-md mx-2 font-semibold text-slate-400">UMUR :</span>
                <input wire:model="umur" type="number" class="border shadow-sm rounded-md px-3 py-1" required>
            </div>
            <!-- /form -->
            <!-- form -->
            <div class=" flex flex-col px-3">
                <span class=" my-1 text-md mx-2 font-semibold text-slate-400">Jenis-Kelamin :</span>
                <select wire:model="jenis_kelamin" class="border shadow-sm rounded-md px-3 py-1" name="" id="" required>
                    <option value="L">Laki-Laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
            <!-- /form -->
            <!-- form -->
            <div class=" flex flex-col px-3">
                <span class=" my-1 text-md mx-2 font-semibold text-slate-400">No. KTP :</span>
                <input wire:model="ktp" type="number" class="border shadow-sm rounded-md px-3 py-1" required>
            </div>
            <!-- /form -->
            <!-- form -->
            <div class=" flex flex-col px-3">
                <span class=" my-1 text-md mx-2 font-semibold text-slate-400">No. KK :</span>
                <input wire:model="kk" type="number" class="border shadow-sm rounded-md px-3 py-1">
            </div>
            <!-- /form -->
            <div class=" flex flex-col px-3">
                <span class=" my-1 text-md mx-2 font-semibold text-slate-400">Alamat :</span>
                <input wire:model="alamat" type="text" class="border shadow-sm rounded-md px-3 py-1" required>
            </div>
            <!-- /form -->
            <!-- /form -->
            <div class=" flex flex-col px-3">
                <span class=" my-1 text-md mx-2 font-semibold text-slate-400">Domisili :</span>
                <input wire:model="domisili" type="text" class="border shadow-sm rounded-md px-3 py-1" required>
            </div>
            <!-- form -->
            <div class=" flex flex-col px-3">
                <span class=" my-1 text-md mx-2 font-semibold text-slate-400">Jabatan :</span>
                <select wire:model="jabatan" class="border shadow-sm rounded-md px-3 py-1" name="" id="" required>
                    @foreach ($jabatans as $jbt )
                    <option value="{{ $jbt->id }}"> {{ $jbt->nama_jabatan }} </option>
                    @endforeach
                </select>
            </div>
            <!-- /form -->
            <div class=" my-4 flex justify-center">
                <button wire:click="Add"
                    class=" px-3 py-2 rounded-md font-semibold bg-green-400 shadow-sm shadow-green-500">Update</button>
            </div>
            <!-- /form -->
        </div>
        <!-- /end-form -->
        @endif
    </div>
</div>