@extends('backend.admin')

@section('dashboard')
    
<div class="main-content">
    <form action="{{ route('edit_infomation_api') }}" method="post" enctype="multipart/form-data">
    <section class="section">
        <div class="section-body">
            <div class="row">
               
                    <div class="col-12 col-md-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Quản lý thông tin cá nhân</h4>
                            </div>
                            <div class="card-body">
                                <div class="row" style="justify-content: space-around;">
                                    <div class="form-group">
                                        <input name="MyID" id="info" type="hidden" value="{{ $data["MyID"] }}" class="form-control">
                                        {{-- <label>Họ và tên</label> --}}
                                        {{-- <input id="info" type="text" value="{{ $data["Image"] }}" class="form-control"> --}}
                                        <img style="width:100px" src="{{ asset('profile/'.  $data["Image"] ) }}">
                                        <input name="Image" id="info" type="file" value="" class="form-control" multiple>
                                    </div>
                                    <div class="form-group">
                                        <label>Họ và tên</label>
                                        <input name="FullName" id="info" type="text" value="{{ $data["FullName"] }}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Số điện thoại</label>
                                        <input name="ContactPhone" type="number" value="{{ $data["ContactPhone"] }}" class="form-control">
                                    </div>
                                    <div class="form-group" style="width:300px">
                                        <label>Email</label>
                                        <input name="ContactEmail" type="text" value="{{ $data["ContactEmail"] }}" class="form-control">
                                    </div>
                                </div>
                                <div class="row" style="justify-content: space-around;">
                                    <div class="form-group">
                                        <label>Giới tính</label>
                                        <input name="Gender" type="text" value="{{ $data["Gender"] }}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Ngày sinh</label>
                                        <input name="DateOfBirth" type="text" value="{{ $data["DateOfBirth"] }}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Nơi sinh</label>
                                        <input name="PlaceOfBirth" type="text" value="{{ $data["PlaceOfBirth"] }}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Quốc gia</label>
                                        <input name="Nationality" type="text" value="{{ $data["Nationality"] }}" class="form-control">
                                    </div> 
                                    <div class="form-group">
                                        <label>Dân tộc</label>
                                        <input name="Nation" type="text" value="{{ $data["Nation"] }}" class="form-control">
                                    </div> 
                                </div>
                            <div class="row" style="justify-content: space-around;">
                                <div class="form-group">
                                    <label>Mục tiêu nghề nghiệp</label><br>
                                    <textarea name="Target" cols="80" rows="3">{{ $data["Target"] }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Sở thích</label><br>
                                    <textarea name="Hobbies" cols="80" rows="3">{{ $data["Hobbies"] }}</textarea>
                                </div>
                            </div>
                                <div class="form-group">
                                    <label>Tình trạng hôn nhân</label>
                                    <input name="MaritalStatus" type="text" value="{{ $data["MaritalStatus"] }}" class="form-control" readonly>
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



