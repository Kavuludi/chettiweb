@extends('layouts.back_office.main')
@section('dashboard')
<div class="content-wrapper" style="min-height: 1635.56px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-info mr-1"></i> General Infomation</strong>

                <p class="text-muted">
                  Name:  {{$applicant->fname.' '.$applicant->lname}} <br>
                  Email : {{$applicant->email}} <br>
                  Marital Status: {{$applicant->m_status}} <br>
                  Gender: {{$applicant->gender}}
                </p>
                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                <p class="text-muted">
                    County : {{$applicant->county}} <br>
                    Sub-County : {{$applicant->sub_county}} <br>
                    Location : {{$applicant->location}} <br>
                    Postal Address : {{$applicant->postal_address}}
                </p>

                <hr>

                <strong><i class="fas fa-book mr-1"></i> Education</strong>

                <p class="text-muted">
                  ID/Index No. : {{$applicant->id_index_no}}
                </p>

                <hr>

                <strong><i class="fa fa-phone mr-1"></i> Contact</strong>

                <p class="text-muted">
                    {{$applicant->phone_no}}
                </p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">COURSE SELECTION</a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">UPLOADED DOCUMENT</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Others</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                      <div class="row">
                        <div class="col-md-4">
                          <h3>Selection One</h3>
                          {{$applicant->selection1}}
                        </div>
                        <div class="col-md-4">
                          <h3>Selection Two</h3>
                          {{$applicant->selection2}}
                        </div>
                        <div class="col-md-4">
                          <h3>Selection Three</h3>
                          {{$applicant->selection3}}
                        </div>
                      </div>
                      <br>
                      <h3>Prefered Intake</h3>
                      <span class="badge badge-success">{{strtoupper($applicant->prefered_intake)}}</span>
                    </div>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">
                    <div class="row">
                      <div class="col-md-4">
                        <h3>Result Slip</h3>
                        <a href="{{url('download/result_slip/'.$applicant->result_slip)}}">{{$applicant->result_slip}} <span><i class="fa fa-download"></i></span></a>
                      </div>
                      <div class="col-md-4">
                        <h3>ID/Birth Certificate</h3>
                        <a href="{{url('download/birth_cert/'.$applicant->birth_cert)}}">{{$applicant->birth_cert}} <span><i class="fa fa-download"></i></span></a>
                      </div>
                      <div class="col-md-4">
                        <h3>Bank Slip</h3>
                        <a href="{{url('download/bank_slip/'.$applicant->bank_slip)}}">{{$applicant->bank_slip}} <span><i class="fa fa-download"></i></span></a>
                      </div>
                    </div>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
                   Page 3
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection