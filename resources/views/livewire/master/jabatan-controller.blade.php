<div>
    <h3 class="text-center my-3 font-semibold text-sky-600 text-xl">JABATAN </h3>
    <div class="flex flex-column justify-between">
        <div id="tabel-jabatan" class=" basis-[68%] border rounded-xl shadow-md py-3 px-2 ">
            <h3 class="text-center text-slate-400 drop-shadow-sm text-2xl font-medium">JABATAN</h3>
            <table class="table-auto min-w-full">
                <thead class=" text-center">
                    <tr class="text-center border-b border-slate-500">
                        <th class=" py-2">No.</th>
                        <th>Kode</th>
                        <th>Jabatan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach ($data as $i=>$jbt )
                    <tr class="text-center border-b border-slate-200">
                        <td class=" py-2">{{ $i + 1 }}.</td>
                        <td class=" font-semibold border-b ">{{ $jbt->kode_jabatan }}</td>
                        <td class=" capitalize font-medium">{{ $jbt->nama_jabatan }}</td>
                        <td class="flex flex-row justify-evenly">
                            <button wire:click="Delete({{ $jbt->id }})"
                                class="border mt-1 hover:shadow-orange-600 rounded-xl hover:shadow-sm text-orange-300 hover:font-bold px-2">delete</button>
                            <button wire:click="Edit({{ $jbt->id }})"
                                class="border mt-1 hover:shadow-yellow-300 rounded-xl hover:shadow-sm text-slate-300 hover:font-bold px-2">edit</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class=" basis-[30%] border rounded-xl shadow-md py-3">
            <h1 class=" text-center text-slate-400 drop-shadow-sm text-2xl font-medium">
                @if ($is_edit)
                Update Data
                @else
                Tambah Data
                @endif
            </h1>
            <div class=" my-2 px-3">
                <span class=" text-start font-medium text-md my-1 mx-2">Kode</span> <br>
                <input wire:model.blur="kd_jabatan" type="text" class=" @error('kd_jabatan')
                    border-red-400
                @enderror px-3 py-1 border rounded-xl" required>
                @error('kd_jabatan')
                <br>
                <em class=" text-sm text-red-400">{{ $message }}</em>
                @enderror
            </div>
            <div class=" my-2 px-3">
                <span class=" text-start font-medium text-md my-1 mx-2">Jabatan</span>
                <input wire:model.live="nm_jabatan" type="text" class="px-3 py-1 border rounded-xl" required>
            </div>
            <div class="flex justify-center">
                @if ($is_edit)
                <div class=" w-full flex flex-column justify-around">
                    <button wire:click="Update"
                        class=" border rounded-lg bg-orange-200 text-sm font-mono px-1 hover:shadow-md">Update</button>
                    <button wire:click="Cancel"
                        class=" border rounded-lg bg-slate-300 text-sm font-mono px-1 hover:shadow-md">Cancel</button>
                </div>
                @else
                <button wire:click="Add" type="button"
                    class=" px-3 py-2 rounded-xl  bg-green-400 font-medium text-xl hover:border hover:border-green-500 hover:bg-white hover:font-semiboldx hover:shadow-md">Add</button>
                @endif
            </div>
        </div>
    </div>
</div>