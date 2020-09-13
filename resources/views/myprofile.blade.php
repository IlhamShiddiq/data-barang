@extends('templates/base')

@section('title', 'Add Data | DataBarang')

@section('hide', 'disabled')

@section('content')
    <div class="row mt-5">
        <div class="col-12">
            <div class="form-add-wrapper">
                <h1 class="mb-2 title-add text-center">My Profile</h1>
                <hr>
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="idPegawai">Id Pegawai</label>
                            <input type="text" readonly class="form-control" placeholder="Id Pegawai" id="idPegawai">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="username">Username</label>
                            <input type="text" readonly class="form-control" placeholder="Username" id="username">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="nama">Nama Pegawai</label>
                            <input type="text" class="form-control" placeholder="Nama Pegawai" id="nama">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="alamat">Address</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" id="alamat" placeholder="Address"></textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="foto">File Photo</label>
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                  <input type="file" class="custom-file-input" id="foto" aria-describedby="inputGroupFileAddon01">
                                  <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="phone">Nomor Telepon</label>
                            <input type="number" class="form-control" placeholder="Nomor Telepon" id="phone">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <div class="view-img">

                            </div>
                        </div>
                    </div>
                    <div class="add-btn mt-2">
                        <button type="submit" class="btn btn-success">Edit Data</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-12 text-center mt-3 mb-5">
            <button type="button" data-toggle="modal" data-target="#cancel" class="btn btn-sm btn-secondary pl-5 pr-5">Cancel</button>
        </div>
    </div>
@endsection

@section('more')
    <!-- Cancel Modal -->
    <div class="modal fade" id="cancel" tabindex="-1" aria-labelledby="Logout Modal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Please Confirm</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure want to cancel? Your datas on the field won't be saved
                </div>
                <div class="modal-footer">
                    <a href="/data" class="btn btn-primary">Yes</a>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>
@endsection