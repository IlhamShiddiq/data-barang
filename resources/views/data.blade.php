@extends('templates.base')

@section('title', 'Data | DataBarang')

@section('content')
    <div class="row">
        <div class="col-12 mt-5">
            <form action="" class="form-search">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                      <button class="btn btn-secondary" type="button" id="button-addon2"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </div>
                  </div>
            </form>
        </div>
        <div class="col-12 mt-2">
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col" width="60%">Name</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>
                        <a href="#" class="badge badge-info" data-toggle="modal" data-target="#detail">Detail</a>
                        <a href="edit" class="badge badge-success">Edit</a>
                        <a href="#" class="badge badge-danger">Delete</a>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>
                        <a href="#" class="badge badge-info">Detail</a>
                        <a href="#" class="badge badge-success">Edit</a>
                        <a href="#" class="badge badge-danger">Delete</a>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>
                        <a href="#" class="badge badge-info">Detail</a>
                        <a href="#" class="badge badge-success">Edit</a>
                        <a href="#" class="badge badge-danger">Delete</a>
                    </td>
                  </tr>
                </tbody>
              </table>
        </div>
    </div>
@endsection

@section('more')
  <!-- Logout Modal -->
  <div class="modal fade" id="detail" tabindex="-1" aria-labelledby="Detail Modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nama ( Id )</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-4 text-center">
                    <div class="view-img">

                    </div>
                  </div>
                  <div class="col-md-8">
                    <form>
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1">Cat</span>
                        </div>
                        <input type="text" class="form-control form-control-sm" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                      </div>
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1">Exp</span>
                        </div>
                        <input type="text" class="form-control form-control-sm" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                      </div>
                      <div class="input-group mb-1">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1">Stk</span>
                        </div>
                        <input type="text" class="form-control form-control-sm" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer"> </div>
        </div>
    </div>
  </div>
@endsection