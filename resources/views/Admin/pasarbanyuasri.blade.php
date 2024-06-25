<x-template-layout>
    <h2 class="text-xl font-semibold leading-tight text-gray-800">
        {{$title}}
    </h2>
    <div class="px-6 py-4 bg-white rounded shadow sm:px-2 sm:py-1 sm:br-gray-100">
        <div class="grid grid-cols-12">
            <div class="col-span-6 p-4">
                <a href="{{route('pasarbanyuasri.create')}}" class="px-4 py-1 text-gray-500 border border-gray-300 rounded-r-md border-1-0 border-gray-50 text-black-600 hover:text-white hover:bg-blue-600">Tambah</a>
            </div>
        </div>
        <br>
        <div class="container">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center col">No</th>
                            <th class="text-center col">Tanggal</th>
                            <th class="text-center col">Kode Pangan</th>
                            <th class="text-center col">Nama Pangan</th>
                            <th class="text-center col">Harga Pangan </th>
                            <th class="text-center col">Stok</th>
                            <th class="text-center col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php $no = 1; ?>
                        @foreach ($pasarbanyuasri as $index => $item)
                        <tr>
                            <td>{{$no}}</td>
                            <td class='text-center'>{{$item->tanggal}}</td>
                            <td class='text-center'>{{$item->kode}}</td>
                            <td class='text-center'>{{@$item->namaBarang->nama}}</td>
                            <td class='text-center'>{{$item->harga}}</td>
                            <td class='text-center'>{{$item->stok}}</td>
                            <td>
                                <a href="{{ route('pasarbanyuasri.edit', ['pasarbanyuasri' => $item->id_pasarbanyuasri]) }}" class="btn btn-success btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                                <form action="{{ route('pasarbanyuasri.destroy', ['pasarbanyuasri' => $item->id_pasarbanyuasri]) }}" method="POST" onsubmit="return confirm('Apakah Anda Yakin akan menghapus data ini?')" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm"><i class="fa-solid fa-trash-can"></i></button>
                                </form>
                            </td>
                        </tr>
                        <?php $no++; ?>
                        @endforeach
                    </tbody>
                </table>
                @include('sweetalert::alert')
            </div>
        </div>
    </div>


</x-template-layout>