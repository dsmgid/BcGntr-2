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
                            <select class="form-control select2" name="nbs" id="nbs" onchange="getHarga()">
                                <option></option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <label for="usr">Harga</label>
                            <select class="form-control select2" name="harga" id="harga">
                                <option></option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <label for="usr">Barcode</label>
                            <input type="text" class="form-control" name="barcode" id="barcode" readonly>
                        </div>
                    </div>

            </div>
            <button type="submit" class="btn btn-block pull-left btn-flat btn-success" name="tambah"><span
                    class="ti-shopping-cart mr-2"></span>Tambah Barang</button>
            </form>
        </div>
        <br>
        <div class="card m-t-30">
            <div class="card-body table-responsive">
              <table id="table" class="table table-bordered dt-responsive nowrap"
              style="border-collapse: collapse; border-spacing: 0; width: 100%;">
              <thead>
                  <tr>
                      <td>No</td>
                      <td>Nama</td>
                      <td>Harga</td>
                      <td>Barcode</td>
                      <td>Action</td>
                  </tr>
              </thead>
              <tbody>
              </tbody>
          </table>
            </div>
        </div>
    </div>

</div>
@endsection
@section('footer')
    <script async src="/assets/js/print.js"></script>
@endsection
