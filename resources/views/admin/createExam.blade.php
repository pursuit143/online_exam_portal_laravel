@extends('admin.layouts.master')
@section('title','Exam Management - Pursuit Academy')
@section('styles')
    <link rel="stylesheet" href="{{asset('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-4 mr-1">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createExam">Create</button>
          </div>
          <div class="col-sm-3">
            <h1>Exam Management</h1>
          </div>
          <div class="col-sm-4">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Exam List</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
              <table id="examlist" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Exam Name</th>
                  <th>Date & Time</th>
                  <th>Total Marks</th>
                  <th>Duration</th>
                  <th>Correct Mark</th>
                  <th>Wrong Mark</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>RRB NTPC</td>
                        <td>25-06-2021 10:30 AM</td>
                        <td>100</td>
                        <td>90 Minutes</td>
                        <td>1 Mark</td>
                        <td>- 0.25 Mark</td>
                        <td><span class="badge bg-success">Completed</span></th>
                        <td>
                            <button type="button" class="btn btn-primary btn-sm">Edit</button>
                            <button type="button" class="btn btn-dark btn-sm">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>RRB NTPC</td>
                        <td>25-06-2021 10:30 AM</td>
                        <td>100</td>
                        <td>90 Minutes</td>
                        <td>1 Mark</td>
                        <td>- 0.25 Mark</td>
                        <td><span class="badge bg-dark">Started</span></th>
                        <td>
                            <button type="button" class="btn btn-primary btn-sm">Edit</button>
                            <button type="button" class="btn btn-dark btn-sm">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>RRB NTPC</td>
                        <td>25-06-2021 10:30 AM</td>
                        <td>100</td>
                        <td>90 Minutes</td>
                        <td>1 Mark</td>
                        <td>- 0.25 Mark</td>
                        <td><span class="badge bg-primary">Created</span></th>
                        <td>
                            <button type="button" class="btn btn-primary btn-sm">Edit</button>
                            <button type="button" class="btn btn-dark btn-sm">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>RRB NTPC</td>
                        <td>25-06-2021 10:30 AM</td>
                        <td>100</td>
                        <td>90 Minutes</td>
                        <td>1 Mark</td>
                        <td>- 0.25 Mark</td>
                        <td><span class="badge bg-warning text-dark">Pending</span></th>
                        <td>
                            <button type="button" class="btn btn-primary btn-sm">Edit</button>
                            <button type="button" class="btn btn-dark btn-sm">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>RRB NTPC</td>
                        <td>25-06-2021 10:30 AM</td>
                        <td>100</td>
                        <td>90 Minutes</td>
                        <td>1 Mark</td>
                        <td>- 0.25 Mark</td>
                        <td><span class="badge bg-warning text-dark">Pending</span></th>
                        <td>
                            <button type="button" class="btn btn-primary btn-sm">Edit</button>
                            <button type="button" class="btn btn-dark btn-sm">Delete</button>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

    {{-- create exam modal --}}
<div class="modal fade" id="createExam">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h4 class="modal-title">Create Exam</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <!-- form start -->
                <form role="form">
                    <div class="form-group row">
                        <label for="examname" class="col-sm-4 col-form-label">Exam Name</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="examName" placeholder="Enter Exam Name" autofocus>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="dateTime" class="col-sm-4 col-form-label">Date & Time</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="dateTime" placeholder="Select Date & Time">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="totalMarks" class="col-sm-4 col-form-label">Total Marks</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="totalMarks" placeholder="Enter Total Marks">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="duration" class="col-sm-4 col-form-label">Duration</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="duration" placeholder="Enter Duration in Minutes">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="correctMark" class="col-sm-4 col-form-label">Correct Answer Mark</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="correctMark" placeholder="Enter Mark for correct Answer">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="wrongMark" class="col-sm-4 col-form-label">Wrong Answer Mark</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="wrongMark" placeholder="Enter Mark for wrong Answer">
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div> 
<!-- /.content-wrapper -->
@endsection
@section('scripts')
<script src="{{asset('adminlte//plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('adminlte//plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('adminlte//plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('adminlte//plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script>
  $(function () {
    $("#examlist").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endsection