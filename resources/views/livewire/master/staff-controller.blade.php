<div>
    <h3 class="text-center my-3 font-semibold text-sky-600 text-xl">STAFF</h3>
    <div class=" flex flex-column justify-around mb-4 mt-2">
        <button wire:click="Tambah"
            class=" border bg-green-200 rounded-lg font-semibold font-mono px-3 hover:shadow-md hover:text-white hover:drop-shadow-md">
            @if ($is_tambah)
            Close
            @else
            Tambah
            @endif
        </button>
        <div>
            <input class=" border px-2 py-1 rounded-xl" type="text" placeholder="Search ..">
        </div>
    </div>
    @if ($is_tambah == False)
    {{-- Table --}}
    <div class="">
        <table class=" table-auto text-center min-w-full overflow-hidden border rounded-xl">
            <thead class=" border-b border-slate-400 bg-amber-50">
                <tr>
                    <th class=" py-2">No.</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>Jenis Kelamin</th>
                    <th>KTP</th>
                    <th>No. KK</th>
                    <th>Alamat</th>
                    <th>Domisili</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class=" border-b border-slate-300">
                @foreach ($datas as $i=>$staff )
                <tr class=" py-2 font-mono border-b-2 border-slate-300 text-center ">
                    @if ($is_edit && $staffEdit == $staff->id )
                    {{-- FORM EDIT --}}
                    <td class="py-1">{{ $i + 1 }}.</td>
                    <td><input wire:model="kode" type="text" class=" w-full px-1 border"></td>
                    <td><input wire:model="nama" type="text" class=" w-full px-1 border"></td>
                    <td><input wire:model="umur" type="text" class="border px-1 w-9"></td>
                    <td class=" min-w-24">
                        <select wire:model="jk" class="w-full border" name="" id="">
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </td>
                    <td><input wire:model="ktp" type="text" class=" w-full px-1 border"></td>
                    <td><input wire:model="kk" type="text" class="border w-full px-1"></td>
                    <td><input wire:model="alamat" type="text" class=" border w-full px-1"></td>
                    <td><input wire:model="domisili" type="text" class="border w-full px-1"></td>
                    <td class=" flex flex-column">
                        <button wire:click="Update"
                            class=" px-1 text-sm my-1 mx-1 border rounded-xl bg-orange-200">Update</button>
                        <button wire:click="Edit({{ $staff->id }})"
                            class=" px-1 text-sm my-1 mx-1 border rounded-xl bg-slate-200">Batal</button>
                    </td>
                    {{-- /FORM EDIT --}}
                    @else
                    {{-- DATA TABEL --}}
                    <td class=" py-1">{{ $i + 1 }}.</td>
                    <td>{{ $staff->kode }}</td>
                    <td class=" font-semibold">{{ $staff->nama }}</td>
                    <td>{{ $staff->umur }}</td>
                    <td>{{ $staff->jenis_kelamin }}</td>
                    <td>{{ $staff->no_ktp }}</td>
                    <td>{{ $staff->no_kk }}</td>
                    <td>{{ $staff->alamat }}</td>
                    <td>{{ $staff->domisili }}</td>
                    <td class="flex flex-column">
                        <button wire:click="Destroy"
                            class=" px-2 my-1 mx-1  border rounded-xl bg-red-200">Delete</button>
                        <button wire:click="Edit({{ $staff->id }})"
                            class=" px-2 my-1 mx-1 border rounded-xl bg-yellow-200">Edit</button>
                    </td>
                    {{-- /DATA TABEL --}}
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{-- /Table --}}
    @else
    {{-- Form --}}
    <h2 class=" font-medium text-2xl text-slate-400 text-center">Tambah Staff Baru</h2>
    <div class="border shadow-md rounded-md py-2 w-[70%] mx-auto flex flex-column px-4">
        <div class=" basis-2/4">
            {{-- *** --}}
            <div class=" px-2 mb-2 w-full">
                <span class=" ml-3 font-serif font-medium text-slate-400">Kode</span><br>
                <input wire:model="kode" type="text" class=" border rounded-xl px-2 py-1">
            </div>
            {{-- ### --}}
            {{-- *** --}}
            <div class=" px-2 mb-2 w-full">
                <span class=" ml-3 font-serif font-medium text-slate-400">Nama</span><br>
                <input wire:model="nama" type="text" class=" border rounded-xl px-2 py-1">
            </div>
            {{-- ### --}}
            {{-- *** --}}
            <div class=" px-2 mb-2 w-full">
                <span class=" ml-3 font-serif font-medium text-slate-400">Umur</span><br>
                <input wire:model="umur" type="text" class=" border rounded-xl px-2 py-1">
            </div>
            {{-- ### --}}
            {{-- *** --}}
            <div class=" px-2 mb-2 w-full">
                <span class=" ml-3 font-serif font-medium text-slate-400">Jenis Kelamin</span><br>
                <select wire:model="jk" type="text" class=" border rounded-xl px-2 py-1 w-full">
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
            {{-- ### --}}
            {{-- Button Save --}}
            <div class=" mt-5 text-center">
                <button wire:click="Add"
                    class=" px-2 py-1 font-mono rounded-md bg-green-300 text-green-800 font-medium hover:shadow-md hover:font-semibold">Simpan</button>
            </div>
            {{-- /Button Save --}}
        </div>
        <div class=" basis-2/4">
            {{-- *** --}}
            <div class=" px-2 mb-2 w-full">
                <span class=" ml-3 font-serif font-medium text-slate-400">No. KTP</span><br>
                <input wire:model="ktp" type="text" class=" border rounded-xl px-3 py-1">
            </div>
            {{-- ### --}}
            {{-- *** --}}
            <div class=" px-2 mb-2 w-full">
                <span class=" ml-3 font-serif font-medium text-slate-400">No. KK</span><br>
                <input wire:model="kk" type="text" class=" border rounded-xl px-3 py-1">
            </div>
            {{-- ### --}}
            {{-- *** --}}
            <div class=" px-2 mb-2 w-full">
                <span class=" ml-3 font-serif font-medium text-slate-400">Alamat</span><br>
                <input wire:model="alamat" type="text" class=" border rounded-xl px-3 py-1">
            </div>
            {{-- ### --}}
            {{-- *** --}}
            <div class=" px-2 mb-2 w-full">
                <span class=" ml-3 font-serif font-medium text-slate-400">Domisili</span><br>
                <input wire:model="domisili" type="text" class=" border rounded-xl px-3 py-1">
            </div>
            {{-- ### --}}
            {{-- *** --}}
            <div class=" px-2 mb-2 w-full">
                <span class=" ml-3 font-serif font-medium text-slate-400">Jabatan</span><br>
                <select wire:model="jabatan" type="text" class=" border rounded-xl px-2 py-1 w-full mb-2">
                    @foreach ($jabatans as $jb )
                    <option value="{{ $jb->id }}"> {{ $jb->nama_jabatan }}</option>
                    @endforeach
                </select>
            </div>
            {{-- ### --}}
        </div>
    </div>
    {{-- /Form --}}
    @endif
</div>