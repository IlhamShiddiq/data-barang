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
                        <a href="#" class="badge badge-info">Detail</a>
                        <a href="#" class="badge badge-success">Edit</a>
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