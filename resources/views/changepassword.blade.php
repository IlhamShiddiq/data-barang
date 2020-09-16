@extends('templates/base')

@section('title', 'Add Data | DataBarang')

@section('hide', 'disabled')
  
@section('content')
<div class="row mt-5">
    <div class="col-12">
        <div class="form-add-wrapper">
            <h1 class="mb-2 title-add text-center">Ganti Password</h1>
            <hr>
            <form>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="passlama">Password Lama</label>
                        <div class="pass-field">
                            <input type="password"class="form-control" placeholder="Password Lama" id="passlama">
                            <button type="button" id="show-passlama"><i class="fas fa-eye"></i></button>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="passbaru">Password Baru</label>
                        <div class="pass-field">
                            <input type="password" class="form-control" placeholder="Password Baru" id="passbaru">
                            <button type="button" id="show-passbaru"><i class="fas fa-eye"></i></button>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="passconf">Konfirmasi Password Baru</label>
                        <div class="pass-field">
                            <input type="password" class="form-control" placeholder="Konfirmasi Password Baru" id="passconf">
                            <button type="button" id="show-passconf"><i class="fas fa-eye"></i></button>
                        </div>
                    </div>
                </div>
                <div class="form-group form-check text-center">
                    <input type="checkbox" class="form-check-input" id="agree">
                    <label class="form-check-label" for="agree">Saya yakin ingin mengganti password saya</label>
                  </div>
                <div class="add-btn mt-2">
                    <button type="submit" class="btn btn-primary">Add Data</button>
                </div>
            </form>
        </div>
    </div>
    <div class="col-12 text-center mt-3">
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