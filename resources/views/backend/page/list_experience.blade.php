@extends('backend.admin')

@section('dashboard')
    
<div class="main-content">
    <form action="#" method="post" enctype="multipart/form-data">
        @csrf
        <section class="section">
            <div class="section-body">
                <div class="row">
                    
                        <div class="col-12 col-md-6 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Các dự án </h4>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-md">
                                            <tr>
                                                <th>#</th>
                                                <th>Tên dự án</th>
                                                <th>Ngày tham gia</th>
                                                <th>Ngày kết thúc</th>
                                                <th>Trạng thái</th>
                                                <th>Hành động</th>
                                            </tr>
                                            @foreach ($exp as $exp)
                                            <tr>
                                                
                                                <td><input type="hidden" value="{{ $exp["ExpID"] }}"></td>
                                                <td>{{ $exp["ProjectName"] }}</td>
                                                <td>{{ $exp["StartDay"] }}</td>
                                                <td>{{ $exp["EndDate"] }}</td>
                                                <td>
                                                    <div class="badge badge-success">{{ $exp["Status"] }}</div>
                                                </td>
                                                <td><a href="{{ route('show_edit_experience',$exp["ExpID"]) }}" class="btn btn-primary">Chi tiết</a></td>
                                               
                                            </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <nav class="d-inline-block">
                                        <ul class="pagination mb-0">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                                            </li>
                                            <li class="page-item active"><a class="page-link" href="#">1 <span
                        class="sr-only">(current)</span></a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">2</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    
                </div>
            </div>
        </section>

</form>
</div>



@endsection



