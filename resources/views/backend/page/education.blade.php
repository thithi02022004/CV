@extends('backend.admin')

@section('dashboard')
    
<div class="main-content">
    <form action="{{ route('update_education_api',$data["EduID"]) }}" method="post" enctype="multipart/form-data">
        
            <section class="section">
                <div class="section-body">
                    <div class="row">
                            <div class="col-12 col-md-6 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Quản lý Học vấn</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row" style="justify-content: space-around;">
                                            <div class="form-group">
                                                <input name="EduID " id="info" type="hidden" value="{{ $data["EduID"] }}" class="form-control">
                                                <label>Ảnh bằng cấp</label><br>
                                                <img style="width:100px" src="{{ asset('profile/'.  $data["ImageDegree"] ) }}">
                                                <input name="ImageDegree" id="info" type="file" value="" class="form-control" multiple>
                                            </div>
                                            <div class="form-group">
                                                <label>Ảnh chứng chỉ</label><br>
                                                <img style="width:100px" src="{{ asset('profile/'.  $data["ImageQualifications"] ) }}">
                                                <input name="ImageQualifications" id="info" type="file" value="" class="form-control" multiple>
                                            </div>
                                            <div class="form-group" style="width:400px">
                                                <label>Trường học - Trung tâm</label>
                                                <input name="Education" id="info" type="text" value="{{ $data["Education"] }}" class="form-control">
                                            </div>
                                            <div class="form-group" style="width:400px">
                                                <label>Tên chứng chỉ</label>
                                                <input name="Qualifications" type="text" value="{{ $data["Qualifications"] }}" class="form-control">
                                            </div>
                                            <div class="form-group" style="width:100px">
                                                <label>Năm tốt nghiệp</label>
                                                <input name="YearOfGraduation" type="text" value="{{ $data["YearOfGraduation"] }}" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Điểm số</label>
                                                <input name="Point" type="text" value="{{ $data["Point"] }}" class="form-control">
                                            </div>
                                            
                                        </div>
                                        
                                        <button class="btn btn-primary" id="toastr-2" type="submit" style="width:100px; height:50px; font-size:15px;">Cập nhật
                                    </div>
                                    
                                </div>
                            </div>
                    </div>
                </div>
            </section>
       
</form>
</div>



@endsection



