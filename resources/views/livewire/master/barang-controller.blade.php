<div>

    <div class="my-3">
        <button wire:click.debounce.50ms="Tambah" class="px-2 py-auto pb-1 font-extrabold hover:shadow-sm hover:shadow-green-800 mx-3 border border-green-300 rounded-2xl hover:text-white hover:bg-green-300">
            @if ($is_Tambah)
            x
            @else
            +
            @endif
        </button>
        <input type="text" class="border rounded-2xl px-3 py-1" placeholder="Cari...">
    </div>
    {{-- Form Tambah --}}
    @if ($is_Tambah)
    <h1 class="text-center font-medium text-slate-600 text-2xl drop-shadow-md">Tambah Data Barang</h1>
    <div class="grid gap-5 grid-cols-2 border rounded-2xl py-4 my-4 shadow-md px-3">
        <div>
            <div class=" flex flex-col mb-3">
                <span class=" font-medium mx-3 text-slate-500 my-1">Kode</span>
                <input wire:model="kode" type="number" class=" px-2 py-1 border rounded-2xl" placeholder="Kode Barang">
            </div>
            <div class=" flex flex-col mb-3">
                <span class=" font-medium mx-3 text-slate-500 my-1">Nama Barang</span>
                <input wire:model="barang" type="text" class=" px-2 py-1 border rounded-2xl" placeholder="Nama Barang">
            </div>
            <div class=" flex flex-col mb-3">
                <span class=" font-medium mx-3 text-slate-500 my-1">Merk</span>
                <input wire:model="merk" type="text" class=" px-2 py-1 border rounded-2xl" placeholder="Merk">
            </div>
        </div>
        <div>
            <div class=" flex flex-col mb-2">
                <span class=" font-medium mx-3 text-slate-500">Jenis</span>
                <select wire:model="JenisBarang" class=" px-2 py-1 border rounded-2xl font-semibold capitalize" placeholder="Kode Barang" name="" id="">
                    @foreach ( $jenis as $jenisBarang )
                    <option class=" capitalize font-medium" value="{{ $jenisBarang->id }}">{{
                        $jenisBarang->nama_jenis
                        }}</option>
                    @endforeach
                </select>
            </div>
            <div class=" flex flex-col mb-2">
                <span class=" font-medium mx-3 text-slate-500">Supplier</span>
                <select wire:model="SupplierBarang" class=" px-2 py-1 border rounded-2xl font-semibold" placeholder="Kode Barang" name="" id="">
                    @foreach ( $suppliers as $supplier )
                    <option class=" capitalize font-medium" value="{{ $supplier->id }}">{{
                        $supplier->nama_supplier
                        }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex justify-center my-3">
                <button wire:click="Add" class=" px-2 py-1 bg-green-300 rounded-2xl font-semibold text-white hover:border hover:border-green-500 hover:text-green-700">Tambah
                    Data</button>
            </div>
        </div>
    </div>
    @endif
    {{-- /Form Tambah --}}
    <!-- table -->
    <div>
        <table class="table-auto min-w-full bg-sky-100 rounded-lg overflow-hidden">
            <thead class="text-center font-serif bg-sky-300">
                <tr class="border-b border-slate-600">
                    <th class=" py-2 px-2">No</th>
                    <th class=" py-2 px-2">Kode</th>
                    <th class=" py-2 px-2">Nama Barang</th>
                    <th class=" py-2 px-2">Merk</th>
                    <th class=" py-2 px-2">Jenis</th>
                    <th class=" py-2 px-2">Supplier</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach ( $datas as $i=>$data )
                <tr class="py-7 border-b">
                    <td class=" py-2 px-2 text-black font-medium">{{ $i + 1 }}.</td>
                    <td class=" py-2 px-2">{{ $data->kode_barang }}</td>
                    <td class=" py-2 px-2 capitalize">{{ $data->nama_barang }}</td>
                    <td class=" py-2 px-2 capitalize">{{ $data->merk }}</td>
                    <td class=" py-2 px-2"> <span class="text-white bg-indigo-400 px-2 py-1 rounded-2xl font-semibold text-[10px]">{{
                            $data->jenisBarang->nama_jenis ??
                            '-' }}</span></td>
                    <td class=" py-2 px-2">{{ $data->supplier->nama_supplier ?? '-' }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /table -->
</div>