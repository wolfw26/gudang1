<div>
    <h1 class="text-center text-2xl font-extrabold text-slate-600">STOK BARANG</h1>
    <div>
        <table class=" w-full border-separate table-auto rounded-xl overflow-hidden">
            <thead class=" bg-sky-400">
                <tr class=" text-center drop-shadow-lg text-slate-800">
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>T. Awal</th>
                    <th>Total</th>
                    <th>Note</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $datas as $i=>$data )
                <tr class="
                    @if ( $i % 2 == 0)
                        bg-slate-200
                    @endif">
                    <th class=" py-1 text-center font-bold">{{ $i + 1 }}.</th>
                    <td class=" text-start font-mono font-semibold">{{ $data->barang->nama_barang }}</td>
                    <td class=" text-center font-semibold font-mono">{{ $data->total_awal }}</td>
                    <td class=" font-bold text-center drop-shadow-md font-serif">{{ $data->total }}</td>
                    <td class=" font-light text-blue-300">{{ $data->catatan }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>