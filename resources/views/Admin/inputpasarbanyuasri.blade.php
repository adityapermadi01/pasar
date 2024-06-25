<x-template-layout>
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{$title}}
    </h2>
    <div class="shadow px-6 py-4 bg-white rounded sm:px-2 sm:py-1 sm:br-gray-100">
        <div class="container">
            <form action="{{(isset($pasarbanyuasri))?route('pasarbanyuasri.update',$pasarbanyuasri->id_pasarbanyuasri):route('pasarbanyuasri.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @if(isset($pasarbanyuasri))
                @method('PUT')
                @endif
                <div class="form-group row">
                    <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                    <div class="col-sm-5">
                        <input type="Date" name="tanggal" id="tanggal" autocomplete="family-name" value="{{(isset($pasarbanyuasri))?$pasarbanyuasri->tanggal:old('tanggal') }}" class="mt-1  @error('tanggal') border-red-500 @enderror  form-control">
                        <div class="text-xs text-red-600">@error('tanggal'){{$message}} @enderror</div>
                    </div>
                </div><br>

                <div class="form-group row">
                    <label for="kode" class="col-sm-2 col-form-label">Kode Pangan</label>
                    <div class="col-sm-5">
                        <input type="number" name="kode" id="kode" autocomplete="family-name" value="{{(isset($pasarbanyuasri))?$pasarbanyuasri->kode:old('kode') }}" class="mt-1  @error('kode') border-red-500 @enderror  form-control">
                        <div class="text-xs text-red-600">@error('kode'){{$message}} @enderror</div>
                    </div>
                </div><br>


                <div class="form-group row">
                    <label for="harga" class="col-sm-2 col-form-label">Harga Pangan</label>
                    <div class="col-sm-5">
                        <select class="form-control" name="id_barang" id="id_barang">
                            <option disabled value>Pilih Jurusan</option>


                            @foreach($barang as $item)
                            <option value="{{$item->id_barang}}">{{$item->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <br>

                <div class="form-group row">
                    <label for="harga" class="col-sm-2 col-form-label">Harga Pangan</label>
                    <div class="col-sm-5">
                        <input type="number" name="harga" id="harga" autocomplete="family-name" value="{{(isset($pasarbanyuasri))?$pasarbanyuasri->harga:old('harga') }}" class="mt-1  @error('harga') border-red-500 @enderror  form-control">
                        <div class="text-xs text-red-600">@error('harga'){{$message}} @enderror</div>
                    </div>
                </div><br>

                <div class="form-group row">
                    <label for="stok" class="col-sm-2 col-form-label">Stok Pangan</label>
                    <div class="col-sm-5">
                        <input type="number" name="stok" id="stok" autocomplete="family-name" value="{{(isset($pasarbanyuasri))?$pasarbanyuasri->stok:old('stok') }}" class="mt-1  @error('stok') border-red-500 @enderror  form-control">
                        <div class="text-xs text-red-600">@error('stok'){{$message}} @enderror</div>
                    </div>
                </div><br>

                <div class="form-group row">
                    <div class="col-sm-5">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-template-layout>