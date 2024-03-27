@extends('backend.admin')

@section('dashboard')
    
<div class="main-content">
    <form action="{{ route('update_experience_api',$data["ExpID"]) }}" method="post" enctype="multipart/form-data">
        
            <section class="section">
                <div class="section-body">
                    <div class="row">
                            <div class="col-12 col-md-6 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Quản lý project</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row" style="justify-content: space-around;">
                                            <div class="form-group">
                                                <input name="ExpID" id="info" type="hidden" value="{{ $data["ExpID"] }}" class="form-control">
                                                <img style="width:100px" src="{{ asset('profile/'.  $data["Image"] ) }}">
                                                <input name="Image" id="info" type="file" value="" class="form-control" multiple>
                                            </div>
                                            <div class="form-group" style="width:400px">
                                                <label>Tên project</label>
                                                <input name="ProjectName" id="info" type="text" value="{{ $data["ProjectName"] }}" class="form-control">
                                            </div>
                                            <div class="form-group" style="width:400px">
                                                <label>Công ty - Nơi làm việc</label>
                                                <input name="Company" type="text" value="{{ $data["Company"] }}" class="form-control">
                                            </div>
                                            
                                        </div>
                                        <div class="row" style="justify-content: space-around;">
                                            <div class="form-group" style="width:100px">
                                                <label>Số thành viên</label>
                                                <input name="Team" type="text" value="{{ $data["Team"] }}" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Vị trí</label>
                                                <input name="Position" type="text" value="{{ $data["Position"] }}" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Ngày bắt đầu</label>
                                                <input name="StartDay" type="text" value="{{ $data["StartDay"] }}" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Ngày kết thúc</label>
                                                <input name="EndDate" type="text" value="{{ $data["EndDate"] }}" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row" style="justify-content: space-around;">
                                            <div class="form-group">
                                                <label>Database</label>
                                                <input name="Datas" type="text" value="{{ $data["Datas"] }}" class="form-control">
                                            </div> 
                                            <div class="form-group">
                                                <label>Công cụ sử dụng</label>
                                                <input name="Tools" type="text" value="{{ $data["Tools"] }}" class="form-control">
                                            </div> 
                                            <div class="form-group" style="width:400px">
                                                <label>link github</label>
                                                <input name="LinkCode" type="text" value="{{ $data["LinkCode"] }}" class="form-control">
                                            </div> 
                                            <div class="form-group" style="width:400px">
                                                <label>link web</label>
                                                <input name="LinkWeb" type="text" value="{{ $data["LinkWeb"] }}" class="form-control">
                                            </div> 
                                            
                                        </div>
                                    <div class="row" style="justify-content: space-around;">
                                        <div class="form-group">
                                            <label>Nhiệm vụ</label><br>
                                            <textarea name="Responsibilities" cols="80" rows="3">{{ $data["Responsibilities"] }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Đóng góp</label><br>
                                            <textarea name="Contribute" cols="80" rows="3">{{ $data["Contribute"] }}</textarea>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label>Kỹ năng frontend</label><br>
                                            <textarea name="SkillsFrontend" cols="80" rows="3">{{ $data["SkillsFrontend"] }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Kỹ năng backend</label><br>
                                            <textarea name="SkillsBackend" cols="80" rows="3">{{ $data["SkillsBackend"] }}</textarea>
                                        </div>
                                    </div>
                                        {{-- <div class="form-group">
                                            <label>Tình trạng hôn nhân</label>
                                            <input name="MaritalStatus" type="text" value="{{ $data["MaritalStatus"] }}" class="form-control" readonly>
                                        </div> --}}
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



