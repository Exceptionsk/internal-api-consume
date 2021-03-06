@extends('layouts.login_view')
@section('space')
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Data Table With Full Features</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Image</th>
              <th>Name</th>
              <th>Details</th>
              <th>Update</th>
              <th>Delete</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($response as $course)
                <tr>
                  <td><img width="50" src={{$course->image}} alt=""></th>
                  <td>{{$course->name}}</td>

                  <td>
                      <a href="{{url('/courses/show/'. $course->id)}}" class="btn primary">Details</a>
                  </td>
                  <td>
                    <a href="{{url('/courses/'. $course->id .'/edit')}}" class="btn primary">Edit</a>
                  </td>
                  <td><form action="{{'/courses/delete/'. $course->id}}" method="post">
                    {{csrf_field()}}
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit"  class="btn btn-danger" value="Delete">Delete</button>
                      </form>
                  </td>
                </tr>
              @endforeach

            </tfoot>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
@endsection
