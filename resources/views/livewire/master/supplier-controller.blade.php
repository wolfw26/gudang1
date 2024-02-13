<div>
    @if ($is_form)
    {{-- FORM --}}
    {{-- Head form --}}
    @if ($is_edit)
    <div class=" w-full flex flex-row justify-start">
        <button wire:click="cancelForm"
            class=" py-1 px-2 border text-black rounded-lg bg-slate-300 font-semibold font-mono">BATAL</button>
        <h2 class="  ml-[20rem] font-semibold font-mono text-2xl text-orange-300">UBAH DATA</h2> {{ $id_supplier }}
    </div>
    @else
    <div class=" flex w-full flex-row justify-start">
        <button wire:click="cancelForm"
            class=" py-1 px-2 border text-black rounded-lg bg-slate-300 font-semibold font-mono">BATAL</button>
        <h2 class=" ml-[20rem] font-semibold font-mono text-2xl text-green-300">TAMBAH DATA</h2>
    </div>
    @endif
    {{-- /Head Form --}}
    {{-- Head elemen --}}
    <div class=" text-center py-4 w-3/4 mx-auto bg-red-50 my-3 rounded-xl">
        <div class=" w-full">
            <span class=" mx-3 text-slate-500">KODE</span> <br>
            <input wire:model.live="kode" type="text" class="py-1 px-2 w-2/4 border rounded-xl" placeholder="Kode..">
        </div>
        {{ $nama_supplier }}
        <div class=" w-full">
            <span class=" mx-3 text-slate-500">SUPPLIER</span> <br>
            <input wire:model.live="nama_supplier" type="text" class="py-1 px-2 w-2/4 border rounded-xl"
                placeholder="Nama Supplier..">
        </div>
        <div class=" w-full">
            <span class=" mx-3 text-slate-500">ALAMAT</span> <br>
            <textarea wire:model.live="alamat" class="border rounded-xl py-1 w-2/4 px-2" name="" id="" cols="30"
                rows="5" placeholder="Alamat..."></textarea>
        </div>
        <div class=" w-full">
            <span class=" mx-3 text-slate-500">KODE POS</span> <br>
            <input wire:model.live="kode_pos" type="number" class="py-1 px-2 w-2/4 border rounded-xl"
                placeholder="kode pos..">
        </div>
        <div class=" w-full">
            <span class=" mx-3 text-slate-500">No. TELEPON</span> <br>
            <input wire:model.live="telepon" type="number" class="py-1 px-2 w-2/4 border rounded-xl"
                placeholder="08465xxxxx">
        </div>
        <div class=" w-full">
            <span class=" mx-3 text-slate-500">E-MAIL</span> <br>
            <input wire:model.live="email" type="email" class="py-1 px-2 w-2/4 border rounded-xl"
                placeholder="email@contoh.com">
        </div>
        {{ $status }}
        <div class=" w-full">
            <span class=" mx-3 text-slate-500">STATUS</span> <br>
            <select wire:model.live="status" class="border rounded-md px-2 py-1 w-2/4" name="" id="">
                <option value="Aktif">Aktif</option>
                <option value="Non-Aktif">Non-Aktif</option>
            </select>
        </div>
        <div class=" w-full flex justify-center my-4">
            @if ($is_edit)
            <button wire:click="Update"
                class=" rounded-md bg-yellow-300 shadow-md hover:border hover:border-orange-600 px-2">UPDATE</button>
            @else
            <button wire:click="Add"
                class=" bg-green-400 shadow-md hover:border hover:border-green-600 rounded-md px-2">TAMBAH</button>
            @endif
        </div>
    </div>
    {{-- /FORM --}}
    @else
    {{-- TABLE --}}
    <h3 class="text-center my-3 font-semibold text-sky-600 text-xl">SUPPLIER</h3>{{ $id_supplier }}
    <div class="flex-row justify-evenly">
        @if ($is_form )
        <div class=" w-full">
            <button wire:click="cancelForm"
                class=" py-1 px-2 border text-black rounded-lg bg-slate-300 font-semibold font-mono">BATAL</button>
        </div>
        @else
        <button wire:click="tambah"
            class=" my-3 bg-green-300 rounded-md px-1 py-1 font-mono hover:shadow-lg ">Tambah</button>
        @endif
    </div>
    <table class="table-auto min-w-full">
        <thead class="text-xs text-center font-semibold uppercase text-gray-400 bg-gray-50">
            <tr>
                <th class="py-1">No.</th>
                <th>Kode</th>
                <th>Supplier</th>
                <th>Kode Pos</th>
                <th>Kontak</th>
                <th>E-Mail</th>
                <th>Alamat</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datas as $no=>$data )
            <tr class=" border-b border-slate-300 align-middle text-center capitalize">
                <td class=" py-1 px-1">{{ $no + 1 }}</td>
                <td class=" py-1 px-1">{{ $data->kode }}</td>
                <td class=" py-1 px-1">{{ $data->nama_supplier }}</td>
                <td class=" py-1 px-1">{{ $data->kode_pos }}</td>
                <td class=" py-1 px-1">{{ $data->telepon }}</td>
                <td class=" py-1 px-1">{{ $data->email }}</td>
                <td class=" py-1 px-1">{{ $data->alamat }}</td>
                <td class=" py-1 px-1">{{ $data->status }}</td>
                <td class="flex-row flex justify-around bg-slate-200 h-full py-[20%]">
                    <button wire:click="edit({{ $data->id }})"
                        class="border-2 border-orange-400 hover:bg-orange-300 px-2 rounded-full mx-1">
                        E</button>
                    <button wire:click="Delete({{ $data->id }})"
                        class=" border-2 mx-1 border-red-500 hover:bg-red-300 px-2 rounded-full">
                        D</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>