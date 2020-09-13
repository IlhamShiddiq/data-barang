@extends('templates/base')

@section('title', 'Add Data | DataBarang')

@section('hide', 'disabled')
    
@section('content')
    <div class="row mt-5">
        <div class="col-12">
            <div class="form-add-wrapper">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="idBarang">Id Barang</label>
                            <input type="text" readonly class="form-control" placeholder="Id Barang" id="idBarang">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="namaBarang">Nama Barang</label>
                            <input type="text" class="form-control" placeholder="Nama Barang" id="namaBarang">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="kategoriBarang">Kategori Barang</label>
                            <select id="kategoriBarang" class="form-control">
                                <option selected>1</option>
                                <option>2</option>
                                <option value="3"></option>
                            </select>
                        </div>
                        <div class="form-group col-md-5">
                            <label for="kadaluarsa">Expired Date</label>
                            <input type="date" class="form-control" id="kadaluarsa">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="stok">Stock</label>
                            <input type="number" class="form-control" placeholder="Stok Barang" id="stok">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="foto">File Photo</label>
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                  <input type="file" class="custom-file-input" id="foto" aria-describedby="inputGroupFileAddon01">
                                  <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                            </div>
                            <div class="view-img">

                            </div>
                        </div>
                    </div>
                    <div class="add-btn mt-2">
                        <button type="submit" class="btn btn-primary">Add Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection