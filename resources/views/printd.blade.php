@extends('app')
@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card m-b-30">
            <div class="card-body">
                <form id="addBarang">
                    <div class="form-group row">
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="nb" id="nb" hidden>
                            <label for="usr">Nama Barang</label>
                            <input type="text" class="form-control" id="kode" name="kode" value="" readonly hidden>
                            <select class="form-control select2" name="nbs" id="nbs">
                                <option></option>
                            </select>
                        </div>
                        <div class="col-sm-2">
                            <label for="usr">Harga Satuan</label>
                            <input type="text" class="form-control rp" id="hargajual" name="hargajual" value=""
                                onkeyup="sum();">
                        </div>
                        <div class="col-sm-2">
                            <label for="usr">Jumlah Jual</label>
                            <input type="text" class="form-control" id="jumlah" name="jumlah" value="0"
                                placeholder="Masukan Jumlah" onkeyup="sum();" onload="sum()">
                        </div>
                        <div class="col-sm-2">
                            <label for="usr">Harga Akhir</label>
                            <input type="text" class="form-control" id="hargaakhir" name="hargaakhir" value=""
                                readonly>
                        </div>
                    </div>

            </div>
            <button type="submit" class="btn btn-block pull-left btn-flat btn-success" name="tambah"><span
                    class="ti-shopping-cart mr-2"></span>Tambah Barang</button>
            </form>
        </div>
    </div>
</div>
@endsection
