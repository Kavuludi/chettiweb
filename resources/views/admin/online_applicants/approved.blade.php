@extends('layouts.back_office.main')
 
@section('dashboard')
      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Approved Students</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Approved Students</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID/Index No.</th>
                    <th>Full Name</th>
                    <th>Phone N0.</th>
                    <th>1st Selection</th>
                    <th>2nd Selection</th>
                    <th>3rd Selection</th>
                    <th>Date</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                      @foreach ($approvals as $applicant)
                        <tr>
                            <td>{{$applicant->id_index_no}}</td>
                            <td>{{$applicant->fname .' '.$applicant->lname}}</td>
                            <td>{{$applicant->phone_no}}</td>
                            <td>{{$applicant->selection1}}</td>
                            <td>{{$applicant->selection2}}</td>
                            <td>{{$applicant->selection3}}</td>
                            <td>{{$applicant->created_at->format('d/m/Y')}}</td>
                            <td>
                                 <a href="{{url('applications/applicants_detail')."/".$applicant->id}}" title="View Details"><span class="right badge badge-info"><i class="fa fa-eye"></i></span></a>
                                 <a href="{{url('approve_applicant/'.$applicant->id)}}" title="Approve Applicant"><span class="right badge badge-success"><i class="fa fa-check"></i></span></a>
                                 <a href="" title="Review Applicant"><span class="right badge badge-warning"><i class="fas fa-copy"></i></span></a>
                               
                            </td>
                        </tr>
                      @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>ID/Index No.</th>
                    <th>Full Name</th>
                    <th>Phone N0.</th>
                    <th>1st Selection</th>
                    <th>2nd Selection</th>
                    <th>3rd Selection</th>
                    <th>Date</th>
                    <th>Actions</th>
                  </tr>
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
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection

