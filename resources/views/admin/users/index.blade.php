


@extends("master")

@section("content")

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Users managers</h1>
          </div><!-- /.col -->

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->

     <!-- /.card -->

     <div class="card">
        <div class="card-header">
          <h3 class="card-title"></h3>

        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
          <table class="table table-striped">
            <thead>
              <tr>
                <th style="width: 10px">Id</th>
                <th>Nom</th>
                <th>Role</th>
                <th style="width: 105px">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $value )

                <tr>
                <td>{{$value->id}} </td>
                <td>{{$value->name}} </td>
                <td><span class="badge bg-danger">+++</span></td>
                <td>
                    <a href="{{route("users.show",$value->id)}}" class=""><i style="color: green" class="fa-sharp fa-solid fa-eye"></i></a>
                    <a href="{{route("users.edit",$value->id)}}" class=""><i class="fa-sharp fa-solid fa-pen-to-square"></i></a>
                    <a href="" class=""><i style="color: red" class="fa-sharp fa-solid fa-trash"></i></a>
                </td>
            </tr>
            @endforeach

            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.control-sidebar -->


@endsection
