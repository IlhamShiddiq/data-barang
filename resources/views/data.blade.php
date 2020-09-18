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
                  @foreach ($listbarang as $list)
                    <tr>
                      <th scope="row">{{$loop->iteration}}</th>
                      <td>{{$list->barang}}</td>
                      <td>
                          <a href="#" class="badge badge-info" data-toggle="modal" data-target="#detail" data-id="{{$list->id}}" data-barang="{{$list->barang}}" data-stok="{{$list->stok}}" data-expired="{{$list->expired}}" data-image="{{$list->image}}" data-kategori="{{$list->kategori}}">Detail</a>
                          <a href="{{url('/edit')}}" class="badge badge-success">Edit</a>
                          <a href="#" class="badge badge-danger">Delete</a>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
@endsection

@section('more')
  <!-- Detail Modal -->
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
                        <div class="cat"></div>
                      </div>
                      <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1">Exp</span>
                        </div>
                        <div class="exp"></div>
                      </div>
                      <div class="input-group mb-1">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1">Stk</span>
                        </div>
                        <div class="stok"></div>
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

@section('script')
    <script>
      $('#detail').on('show.bs.modal', function (event) {
        let button = $(event.relatedTarget) // Button that triggered the modal
        let id = button.data('id')
        let barang = button.data('barang')
        let stok = button.data('stok')
        let expired = button.data('expired')
        let image = button.data('image')
        let kategori = button.data('kategori')
        let modal = $(this)

        if(expired === '0000-00-00')
        {
          expired = '-'
        }

        modal.find('.modal-title').text(`${barang} (ID : ${id})`)
        modal.find('.view-img').html(`<img src="uploaded_files/barang/${image}" alt="${barang}" width="100">`)
        modal.find('.cat').html(`<input type="text" class="form-control" value="${kategori}">`)
        modal.find('.exp').html(`<input type="text" class="form-control" value="${expired}">`)
        modal.find('.stok').html(`<input type="text" class="form-control" value="${stok}">`)
      })
    </script>
@endsection