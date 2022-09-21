@extends('layout.main')


@section('container')

<section class="content">
    <div class="container-fluid">
        <!-- /.row -->
        <div class="row">
            <div class="col-12">
            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Data Film</h3><br>
                <br>
                <button class="btn btn-success mt-2" onclick="tambah()"><i class="fa fa-plus"></i> Tambah</button>

                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                        <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                        </button>
                    </div>
                    </div>

                </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Opsi</th>
                        <th>Poster</th>
                        <th>Title</th>
                        <th>Release Date</th>
                        <th>Overview</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php $no =1; ?>
                    @foreach ($data['results'] as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>
                                <button class="btn btn-sm btn-primary"><i class="fa fa-edit"></i> Edit</button>
                                <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Hapus</button>
                            </td>
                            <td>
                                <img src="https://api.themoviedb.org/3/movie/now_playing?api_key=c17663909b650175249435dbafa389c1&language=en-US&page=1{{ $item['poster_path'] }}" alt="poster">
                            </td>
                            <td><b>{{ $item['title'] }}</b></td>
                            <td>{{ date('d F Y', strtotime($item['release_date'])) }}</td>
                            <td>{{ (strlen($item['overview'])> 15) ? substr($item['overview'], 15).'...' : $item['overview'] }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
    </div>
</section>


<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="/now_playing/save" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" name="title" id="title" placeholder="Title">
                </div>
                <div class="form-group">
                    <input type="date" class="form-control" name="release_date" id="release_date" >
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="overview" id="overview" cols="30" rows="10" placeholder="Overview"></textarea>
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

  <script>
    function tambah(){
        $('.modal-title').text('Tambah Movie');
        $('#modal').modal('show');
    }
  </script>

  
@endsection