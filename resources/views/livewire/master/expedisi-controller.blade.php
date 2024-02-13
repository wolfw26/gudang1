<div>
    <h3 class="text-center my-3 font-semibold text-sky-600 text-xl">EXPEDISI </h3>
    <!-- Container-konten -->
    <div class=" flex flex-row mt-3 gap-4">
        <!-- Table -->
        <div class=" basis-3/4">
            <table class=" table-auto w-full overflow-hidden border-separate rounded-lg">
                <thead class=" bg-purple-500 text-center capitalize">
                    <tr class=" text-center">
                        <th class=" py-1">No.</th>
                        <th>Nama</th>
                        <th>Kode Pos</th>
                        <th>Alamat</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas as $i=>$data )
                    <tr class=" text-center @if ( $i % 2 == 0)
                    bg-slate-200
                    @endif">
                        <th class=" py-1"> {{ $i + 1 }}. </th>
                        <td class=" font-semibold"> {{ $data->nama_expedisi }} </td>
                        <td> {{ $data->kode_pos }} </td>
                        <td> {{ $data->alamat_kantor }} </td>
                        <td class=" flex justify-around">
                            <button wire:click="edit({{ $data->id }})" class=" px-2 hover:shadow-md hover:bg-blue-300 hover:text-orange-500 rounded-full mt-1 font-bold font-mono bg-orange-600 text-white">E</button>
                            <button wire:click="Delete({{ $data->id }})" class=" px-2 hover:shadow-md hover:bg-blue-300 hover:text-red-500 rounded-full mt-1 font-bold font-mono bg-red-400">D</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /Table -->
        <!-- Form -->
        <div class=" basis-3/12 bg-purple-50 shadow-md px-2 py-3">
            <div class=" w-full">
                <!-- Title -->
                @if ($is_edit)
                <h2 class=" text-center font-semibold text-xl text-purple-400 capitalize">UBAH DATA</h2>
                @else
                <h2 class=" text-center font-semibold text-xl text-purple-400 capitalize">TAMBAH DATA</h2>
                @endif
                <!-- /Title -->
                <!-- Form -->
                <div>
                    <div class=" flex flex-col my-2">
                        <span class=" mx-3 text-center text-slate-600 capitalize font-semibold">Nama Expedisi</span>
                        <input wire:model="nama_expedisi" type="text" class=" px-2 border rounded-lg py-1 w-full" placeholder="Nama Expedisi ...">
                    </div>
                    <div class=" flex flex-col my-2">
                        <span class=" mx-3 text-center text-slate-600 capitalize font-semibold">Kode Pos</span>
                        <input wire:model="kode_pos" type="text" class=" px-2 border rounded-lg py-1 w-full" placeholder=" Kode Pos ...">
                    </div>
                    <div class=" flex flex-col my-2">
                        <span class=" mx-3 text-center text-slate-600 capitalize font-semibold">Alamat</span>
                        <textarea wire:model="alamat_kantor" class=" px-2 border rounded-lg py-1 w-full" cols="30" rows="3" placeholder=" Alamat ..."></textarea>
                    </div>
                    <div class=" flex flex-row justify-center">
                        @if ($is_edit)
                        <button wire:click="Update" class=" px-2 mx-2 text-white bg-orange-300 font-bold font-mono rounded-lg hover:shadow-lg">Update</button>
                        <button wire:click="ClearAll" class=" px-2 mx-2 text-slate-600 bg-slate-300 font-bold font-mono rounded-lg hover:shadow-lg">Batal</button>
                        @else
                        <button wire:click="Add" class=" px-2 py-1 border rounded-md bg-green-300 font-bold font-mono hover:bg-green-500 hover:shadow-md hover:text-white">Tambah</button>
                        @endif
                    </div>
                </div>
                <!-- /Form -->
            </div>
        </div>
        <!-- /Form -->
    </div>
    <!-- /Container-konten -->
</div>