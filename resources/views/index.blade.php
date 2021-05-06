@extends('app')
@section('content')
<div class="row">
    <div class="col-12">
        <button  class="btn btn-success" data-bs-toggle="modal" data-bs-target="#add_data_Modal">
            Tambah Barang
          </button>
        <div class="card m-b-30">
            <div class="card-body table-responsive">
              <table id="table" class="table table-bordered dt-responsive nowrap"
              style="border-collapse: collapse; border-spacing: 0; width: 100%;">
              <thead>
                  <tr>
                      <td>No</td>
                      <td>Nama</td>
                      <td>Harga</td>
                      <td>barcode</td>
                      <td>Action</td>
                  </tr>
              </thead>
              <tbody>
              </tbody>
          </table>
            </div>
        </div>
    </div> <!-- end col -->
  </div> <!-- end row -->
@endsection
<div id="add_data_Modal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit data barang</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" id="insert_form" data-parsley-validate>
                    <div class="mb-3 form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama" class="form-control" id="nama" required="">
                        </div>
                    </div>
                    <div class="mb-3 form-group row">
                      <label for="number" class="col-sm-2 col-form-label">Barcode</label>
                      <div class="col-sm-10">
                          <input type="number" name="barcode" class="form-control" id="barcode" required="">
                      </div>
                  </div>
                    <div class="mb-3 form-group row">
                        <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-bs-dismiss="modal"
                    onclick="console.log('Modal Closed');">Close</button>
            </div>

        </div>
    </div>
</div>
<div id="harga_modal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit data harga</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" id="harga_form" data-parsley-validate>
                    <input type="number" name="id" class="form-control" id="id-harga" required="" value="" readonly>
                    <div class="mb-3 form-group row">
                      <label for="number" class="col-sm-2 col-form-label">Harga</label>
                      <div class="col-sm-10">
                          <input type="number" name="harga" class="form-control" id="harga" required="">
                      </div>
                    </div>
                    <div class="mb-3 form-group row">
                        <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />
                    </div>
                </form>
                <table id="harga_table" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Harga</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody id="harga_child">
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-bs-dismiss="modal"
                    onclick="console.log('Modal Closed');">Close</button>
            </div>
        </div>
    </div>
</div>
@section('footer')
<script async src="/assets/js/index.js"></script>
@endsection
