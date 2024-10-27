@extends('layouts.front')
@section('main')
    {{-- <div class="jumbotron">

    </div> --}}
    <div class="container ptb-30">
        <div class="card mt-5">
            <form action="{{url('online_application')}}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="row">
				<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 wow fadeInUp">
					<div class="section-title text-center">
                        <h2>CheTTi Online Application</h2>
                        <p>Welcome to our Online Application Form. Please check below for available courses that meet your qualifications and send your application by filling out this Application Form. Fields marked with <b>*</b> are mandatory meaning that they should not be left blank.</p>
					</div>
				</div>
			</div>
            <div class="card-body row">
                <div class="card-header">
                    <h5><b>CONTACT INFORMATION</b></h5>
                    <hr>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                    <label for="571290b31b0a8d"><span class="required">
                First Name                            <span class="error">*</span>
                        <input type="text" required name="fname" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                    <label for="571290b31b0a8d"><span class="required">
                Last Name                           <span class="error">*</span>
                        <input type="text" required name="lname" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                    <label for="571290b31b0a8d"><span class="required">
                Email Address                            <span class="error">*</span>
                        <input type="email" required name="email" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                    <label for="571290b31b0a8d"><span class="required">
                Phone Number                           <span class="error">*</span>
                        <input type="tel" required name="phone_no" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                    <label for="571290b31b0a8d"><span class="required">
                ID No./Birth Certificate No.                           <span class="error">*</span>
                        <input type="text" required name="id_index_no" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                    <label for="571290b31b0a8d"><span class="required">
                Gender                            <span class="error">*</span>
                        <select name="gender" required class="form-control" id="">
                            <option value="" selected disabled>Select Your Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                    <label for="571290b31b0a8d"><span class="required">
                Marital Status                           <span class="error">*</span>
                        <select name="m_status" required class="form-control" id="">
                            <option value="" selected disabled>Select Your Status</option>
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                            <option value="Divorced">Divorced</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                    <label for="571290b31b0a8d"><span class="required">
                County                           <span class="error">*</span>
                        <select required class="form-control" name="county">
                            <option value="Baringo">Baringo</option>
                            <option value="Bomet">Bomet</option>
                            <option value="Bungoma">Bungoma</option>
                            <option value="Busia">Busia</option>
                            <option value="Elgeyo marakwet">Elgeyo Marakwet</option>
                            <option value="Embu">Embu</option>
                            <option value="Garissa">Garissa</option>
                            <option value="Homa bay">Homa Bay</option>
                            <option value="Isiolo">Isiolo</option>
                            <option value="Kajiado">Kajiado</option>
                            <option value="Kakamega">Kakamega</option>
                            <option value="Kericho">Kericho</option>
                            <option value="Kiambu">Kiambu</option>
                            <option value="Kilifi">Kilifi</option>
                            <option value="Kirinyaga">Kirinyaga</option>
                            <option value="Kisii">Kisii</option>
                            <option value="Kisumu">Kisumu</option>
                            <option value="Kitui">Kitui</option>
                            <option value="Kwale">Kwale</option>
                            <option value="Laikipia">Laikipia</option>
                            <option value="Lamu">Lamu</option>
                            <option value="Machakos">Machakos</option>
                            <option value="Makueni">Makueni</option>
                            <option value="Mandera">Mandera</option>
                            <option value="Meru">Meru</option>
                            <option value="Migori">Migori</option>
                            <option value="Marsabit">Marsabit</option>
                            <option value="Mombasa">Mombasa</option>
                            <option value="Muranga">Muranga</option>
                            <option value="Nairobi">Nairobi</option>
                            <option value="Nakuru">Nakuru</option>
                            <option value="Nandi">Nandi</option>
                            <option value="Narok">Narok</option>
                            <option value="Nyamira">Nyamira</option>
                            <option value="Nyandarua">Nyandarua</option>
                            <option value="Nyeri">Nyeri</option>
                            <option value="Samburu">Samburu</option>
                            <option value="Siaya">Siaya</option>
                            <option value="Taita taveta">Taita Taveta</option>
                            <option value="Tana river">Tana River</option>
                            <option value="Tharaka nithi">Tharaka Nithi</option>
                            <option value="Trans nzoia">Trans Nzoia</option>
                            <option value="Turkana">Turkana</option>
                            <option value="Uasin gishu">Uasin Gishu</option>
                            <option value="Vihiga">Vihiga</option>
                            <option value="Wajir">Wajir</option>
                            <option value="Pokot">West Pokot</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                    <label for="571290b31b0a8d"><span class="required">
                Sub county/Constituency                            <span class="error">*</span>
                        <input type="text" required name="sub_county" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                    <label for="571290b31b0a8d"><span class="required">
                Location                           <span class="error">*</span>
                        <input type="text" required name="location" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                    <label for="571290b31b0a8d"><span class="required">
                Postal Address                            <span class="error">*</span>
                        <input type="text" required name="postal_address" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                    <label for="571290b31b0a8d"><span class="required">
                Next of Kin Name                            <span class="error">*</span>
                        <input type="text" required name="parent_name" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                    <label for="571290b31b0a8d"><span class="required">
                Next of Kin Contact                            <span class="error">*</span>
                        <input type="tel" required name="parent_contact" class="form-control">
                    </div>
                </div>
            </div>
            <div class="card-header">
                <h5><b>COURSE SELECTION</b></h5>
                <hr>
            </div>
            <div class="card-body row">
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="571290b31b0a8d"><span class="required">
                Course you are applying (1st Selection)                            <span class="error">*</span>
                        <select name="selection1" required class="form-control" id="_abe973150ed6de" data-placeholder="Select">
                            <option value="" selected disabled>— Select Course—</option>
                        <option value="CHETTI001">Diploma in Tourism Management</option>
                        <option value="CHETTI002">Diploma in Fashion Design & Garment Making</option>
                        <option value="CHETTI003">Diploma in Information Communication Technology</option>
                        <option value="CHETTI004">Diploma in Human Resourse Management</option>
                        <option value="CHETTI005">Craft in Tourism Management</option>
                        <option value="CHETTI006">Craft in Food and Beverage</option>
                        <option value="CHETTI007">Craft in Building Construction Technology</option>
                        <option value="CHETTI008">Craft in Electrical Engineering</option>
                        <option value="CHETTI009">Craft in Supply Chain Management</option>
                        <option value="CHETTI010">Craft in Information Communication Technology</option>
                        <option value="CHETTI011">Craft in secretariat studies</option>
                        <option value="CHETTI012">Craft of Social Work and Community Development</option>
                        <option value="CHETTI013">Craft in Information Science</option>
                        <option value="CHETTI014">Artisan in Masonry</option>
                        <option value="CHETTI015">Artisan in Plumbing</option>
                        <option value="CHETTI016">Artisan in Electical Installation</option>
                        <option value="CHETTI017">Artisan in StoreKeeping</option>
                         <option value="CHETTI018">Computer Packages</option>

                     </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Course you are applying (2nd Selection)</label>
                        <select required name="selection2" class="form-control" id="_abe973150ed6de" data-placeholder="Select">
                            <option value="" selected disabled>— Select Course—</option>
                        <option value="CHETTI001">Diploma in Tourism Management</option>
                        <option value="CHETTI002">Diploma in Fashion Design & Garment Making</option>
                        <option value="CHETTI003">Diploma in Information Communication Technology</option>
                        <option value="CHETTI004">Diploma in Human Resourse Management</option>
                        <option value="CHETTI005">Craft in Tourism Management</option>
                        <option value="CHETTI006">Craft in Food and Beverage</option>
                        <option value="CHETTI007">Craft in Building Construction Technology</option>
                        <option value="CHETTI008">Craft in Electrical Engineering</option>
                        <option value="CHETTI009">Craft in Supply Chain Management</option>
                        <option value="CHETTI010">Craft in Information Communication Technology</option>
                        <option value="CHETTI011">Craft in secretariat studies</option>
                        <option value="CHETTI012">Craft of Social Work and Community Development</option>
                        <option value="CHETTI013">Craft in Information Science</option>
                        <option value="CHETTI014">Artisan in Masonry</option>
                        <option value="CHETTI015">Artisan in Plumbing</option>
                        <option value="CHETTI016">Artisan in Electical Installation</option>
                        <option value="CHETTI017">Artisan in StoreKeeping</option>
                         <option value="CHETTI018">Computer Packages</option>
                     </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Course you are applying (3rd Selection)</label>
                        <select required name="selection3" class="form-control" id="_abe973150ed6de" data-placeholder="Select">
                            <option value="" selected disabled>— Select Course—</option>
                           <option value="CHETTI001">Diploma in Tourism Management</option>
                        <option value="CHETTI002">Diploma in Fashion Design & Garment Making</option>
                        <option value="CHETTI003">Diploma in Information Communication Technology</option>
                        <option value="CHETTI004">Diploma in Human Resourse Management</option>
                        <option value="CHETTI005">Craft in Tourism Management</option>
                        <option value="CHETTI006">Craft in Food and Beverage</option>
                        <option value="CHETTI007">Craft in Building Construction Technology</option>
                        <option value="CHETTI008">Craft in Electrical Engineering</option>
                        <option value="CHETTI009">Craft in Supply Chain Management</option>
                        <option value="CHETTI010">Craft in Information Communication Technology</option>
                        <option value="CHETTI011">Craft in secretariat studies</option>
                        <option value="CHETTI012">Craft of Social Work and Community Development</option>
                        <option value="CHETTI013">Craft in Information Science</option>
                        <option value="CHETTI014">Artisan in Masonry</option>
                        <option value="CHETTI015">Artisan in Plumbing</option>
                        <option value="CHETTI016">Artisan in Electical Installation</option>
                        <option value="CHETTI017">Artisan in StoreKeeping</option>
                         <option value="CHETTI018">Computer Packages</option>
                     </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="571290b31b0a8d"><span class="required">
                Preferred Intake                           <span class="error">*</span>
                        <select required name="prefered_intake" class="form-control" id="">
                            <option value="" selected disabled>Intake</option>
                            <option value="January">January</option>
                            <option value="May">May</option>
                            <option value="September">September</option>
                        </select>
                    </div>
                </div>

            </div>
            <div class="card-header">
                <h5><b>UPLOAD DOCUMENT</b></h5>
                <hr>
            </div>
            <div class="card-body row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Attach Result Slip file:*</label>
                        <input type="file" required name="result_slip" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Attach ID/Birth Certificate File:*</label>
                        <input type="file" required name="birth_cert" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Attach A Bank Slip File:*</label>
                        <input type="file" required name="bank_slip" class="form-control">
                    </div>
                </div>
            </div>
            <p style="font-weight: bold">
                Note: <span class="text-danger">All documents You Submit Should be .pdf format</span>
            </p>
            <div class="form-group">
                <button type="submit" class="btn-style btn btn-block" >-- Submit Application --</button>
            </div>
            </form>
        </div>
    </div>
@include('sweetalert::alert')
@endsection
