<div>
    @if ( $is_detail)
    @if ($detail && $detail->count() > 0)
    @foreach ($detail as $dtm )
    <span>Kode</span> <br>
    {{ $dtm->barangMasuk->kode_container }} <br>
    <span>Nama Barang :</span> <br>
    {{ $dtm->namaBarang->nama_barang}} <br>
    <span>JUmlah</span><br>
    {{ $dtm->jumlah }} <br>
    @endforeach
    @else
    <h4>BARANG TIDAK ADA</h4>
    @endif
    @else
    <h1 class=" font-mono font-bold text-lg">BARANG MASUK</h1>
    <div class=" mt-3">
        <div class=" mb-2">
            <button wire:click="tambah"
                class=" font-extrabold bg-green-200 px-2 text-xl pb-1 border rounded-full hover:shadow-md hover:scale-110">
                @if ($is_form)
                x
                @else
                +
                @endif
            </button>
        </div>
        @if ( $is_form)
        @if ($is_edit)
        <h2 class=" text-center font-mono font-bold text-2xl">Edit Data</h2>
        @else

        {{-- Tambah --}}
        <h2 class=" text-center font-mono font-bold text-2xl">Tambah Data</h2>
        <div class=" flex flex-colum gap-3">
            <div class=" w-[30%] mx-auto shadow-lg px-10 py-2 rounded-xl">
                <div class="my-1 flex flex-col">
                    <span class=" my-3 mx-3 text-slate-400 drop-shadow-md">Kode Container</span>
                    <input wire:model="kode_container" type="string"
                        class=" px-2 py-1 mb-2 border rounded-md shadow-md">
                </div>
                <div class="my-1 flex flex-col">
                    <span class=" my-3 mx-3 text-slate-400 drop-shadow-md">Supplier</span>
                    <select wire:model="supplier" class=" px-2 py-1 mb-2 border rounded-md shadow-md">
                        @foreach ( $suppliers as $sp )
                        <option value="{{ $sp->nama_supplier }}">{{ $sp->nama_supplier }}</option>
                        @endforeach
                    </select>
                </div>

                @foreach ($forms as $frm)
                <p>{{ json_encode($frm) }}</p>
                @endforeach
            </div>
            <div class=" w-[70%] mx-auto shadow-lg px-10 py-8 rounded-xl">
                <button wire:click="addForm"
                    class=" font-extrabold hover:bg-green-200 px-2 py-1 text-xl border rounded-full hover:shadow-md hover:scale-110">+</button>
                @foreach ( $forms as $index=>$form )
                @if ($index < 1) <div class=" flex flex-row justify-center">
                    <span class=" my-3 mx-3 text-slate-400 drop-shadow-md">Barang</span>
                    <span class=" my-3 mx-3 text-slate-400 drop-shadow-md">Jumlah</span>
                    <button wire:click="clear" class=" px-2 py-1 mx-4 text-slate-300 rounded-lg">Clear</button>
            </div>
            @endif
            <div class=" flex flex-row justify-center">
                <div class=" my-2 flex flex-col">
                    {{-- <span class=" my-3 mx-3 text-slate-400 drop-shadow-md">Barang</span> --}}
                    <select wire:model.live="forms.{{ $index }}.barang" name="" id=""
                        class=" px-2 py-1 mb-2 border rounded-md shadow-md">
                        @foreach ( $barangs as $barang )
                        <option value=" {{ (int) $barang->id }}"> {{ $barang->nama_barang }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="my-2 flex flex-col mx-2">
                    {{-- <span class=" my-3 mx-3 text-slate-400 drop-shadow-md">Jumlah</span> --}}
                    <input wire:model.live="forms.{{ $index }}.jumlah" type="number"
                        class=" w-16 px-2 py-1 mb-2 border rounded-md shadow-md">
                </div>
            </div>
            @endforeach
            <div class=" w-full flex justify-center">
                <button wire:click="Add"
                    class=" px-2 py-1 border bg-green-300 font-mono font-bold hover:scale-125 hover:shadow-md rounded-xl">Tambah</button>
            </div>
        </div>
    </div>
    {{-- /TAMBAH --}}
    @endif
    @else
    <div>
        <table class=" table-auto w-full overflow-hidden rounded-xl">
            <thead class=" bg-sky-300">
                <tr>
                    <th>No.</th>
                    <th>Kode Container</th>
                    <th>Tanggal Masuk</th>
                    <th>Total Barang</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $datas as $i=>$data )
                <tr class=" text-center">
                    <th>{{ $i + 1}}</th>
                    <td class=" bg-green-300 font-extrabold"> {{ $data->kode_container }} </td>
                    <td>{{ date('d-M-Y', strtotime($data->date)) }}</td>
                    <td>{{ $data->detail_barang_masuk->sum('jumlah') }}</td>
                    <td>
                        <button
                            class="px-1 hover:scale-110 mx-1 hover:shadow-lg text-sm font-extrabold bg-yellow-50 border rounded-2xl">Batal</button>
                        <button wire:click="Detail({{ $data->id }})"
                            class="px-1 hover:scale-110 mx-1 hover:shadow-lg text-sm font-extrabold bg-orange-200 border rounded-2xl">Detail</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif
    @endif
</div>