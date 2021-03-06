@extends('front.template')

@section('main')
    <div id="wrapper">
        <!-- Navigation - Top -->
    @include('front/modules/nav-top')
    <!-- Navigation - Top -->

        <!-- Left navbar-header -->
    @include('front/modules/nav-left')
    <!-- Left navbar-header end -->
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">IP Click Ảo</h4> </div>
                <div class="col-lg-6 col-sm-4 col-md-4 col-xs-12"> </div>
                <div class="col-lg-3 col-sm-4 col-md-4 col-xs-12">
                    <div class="input-group"><input class="form-control input-daterange-datepicker" placeholder="01/01/2015 - 01/31/2015" type="text"> <span class="input-group-addon"><i class="icon-calender"></i></span> </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <!-- .row -->
            <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="white-box">
                        <h3 class="box-title"><small class="pull-right m-t-10 text-success"><i class="fa fa-sort-asc"></i> Tăng 18% so với hôm qua</small> WEBSITE TRAFFIC</h3>
                        <div class="stats-row">
                            <div class="stat-item">
                                <h6>PC</h6> <b>80.40%</b></div>
                            <div class="stat-item">
                                <h6>Mobile</h6> <b>15.40%</b></div>
                            <div class="stat-item">
                                <h6>Tablet</h6> <b>5.50%</b></div>
                        </div>
                        <div id="sparkline8"></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="white-box">
                        <h3 class="box-title"><small class="pull-right m-t-10 text-danger"><i class="fa fa-sort-desc"></i> Giảm 19% so với hôm qua</small>CLICK ẢO</h3>
                        <div class="stats-row">
                            <div class="stat-item">
                                <h6>PC</h6> <b>80.40%</b></div>
                            <div class="stat-item">
                                <h6>Mobile</h6> <b>15.40%</b></div>
                            <div class="stat-item">
                                <h6>Tablet</h6> <b>5.50%</b></div>
                        </div>
                        <div id="sparkline9"></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="white-box" style="min-height:215px">
                        <h3 class="box-title"><i class="ti-cut text-danger"></i> TIẾT KIỆM ƯỚC TÍNH</h3>
                        <div class="text-right"> <span class="text-muted">Tiết kiệm từ đầu tháng</span>
                            <h1><sup><i class="ti-arrow-down text-danger"></i></sup> $5,000</h1>
                        </div>
                        <span class="text-danger">Tiết kiệm 50%</span>
                        <div class="progress m-b-0">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%;"> <span class="sr-only">230% Complete</span> </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <!-- .row -->
            <!-- .row -->
            <div class="row">
                <div class="col-lg-12">
                    <form class="form-horizontal" id="form_display_ip" method="get" action="/click/ip-click-ao" accept-charset="utf-8">
                        <input type="hidden" id="num_page" name="page" value="{{ $page }}">
                        <input type="hidden" id="sort_field" name="sfield" value="{{ $sfield }}">
                        <input type="hidden" id="sort_direction" name="sdir" value="{{ $sdir }}">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Danh sách IP</h3>
                            <p class="text-muted m-b-20">Danh sách IP click và truy cập website của bạn. Bạn có thể chặn ngay IP click ảo hoặc <a href="">Cấu Hình Chặn Tự Động</a></p>
                            <div class="row padding-bottom-10px">
                                <div class="col-sm-6" style="padding-top:10px">
                                    <label class="form-inline">HIỂN THỊ
                                        <select id="select_num_row" name="num_row" class="form-control input-sm">
                                            <option value="50" {{ $num_row == 50 ? 'selected' : '' }}>50</option>
                                            <option value="100" {{ $num_row == 100 ? 'selected' : '' }}>100</option>
                                            <option value="150" {{ $num_row == 150 ? 'selected' : '' }}>150</option>
                                            <option value="200" {{ $num_row == 200 ? 'selected' : '' }}>200</option>
                                        </select> KẾT QUẢ </label>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <div class="form-group" style="margin-bottom: 0px;">
                                        <div class="input-group fix-300px pull-right">
                                            <input type="text" name="search_ip" value="{{$search_text}}" class="form-control" placeholder="Tìm kiếm ip">
                                            <span class="input-group-btn">
                                                <button type="submit" id="btn_search" class="btn waves-effect waves-light btn-default"><i class="fa fa-search"></i></button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive dataTables_wrapper ">
                                    @if($max_page > 1)
                                        <div style="margin-bottom: 5px;" class="dataTables_paginate paging_simple_numbers" id="div_paging">
                                            <a class="paginate_button previous {{$page == 1 ? "disabled" : ""}}" id="paging_previous">Trước</a>
                                            <span>
                                                @for ($x = 1; $x <= $max_page; $x++)
                                                    <a class="paginate_button {{ $page == $x ? 'current' : '' }}" data-value="{{$x}}">{{$x}}</a>
                                                @endfor
                                            </span>
                                            <a class="paginate_button next {{$page == $max_page ? "disabled" : ""}}" id="paging_next">Sau</a>
                                        </div>
                                    @endif
                                    <table class="table table-striped color-table inverse-table ">
                                        <thead>
                                        <tr>
                                            <th>Stt</th>
                                            <th>Lần click đầu</th>
                                            <th>IP</th>
                                            <th>Action</th>
                                            <th><span class="sort-caption" id="sort_click" name="sort_click">Số click</span></th>
                                            <th><span class="sort-caption" id="sort_view" name="sort_view">Xem trang</span></th>
                                            <th>Chi phí</th>

                                            <th>Thiết bị</th>
                                            <th>Trình duyệt</th>
                                            <th>Tỉnh thành</th>
                                            <th>Quốc gia</th>
                                            <th>Tình Trạng</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($domain_logs as $log)
                                                <tr>
                                                    <td>{{($page - 1) * $num_row + $loop->index + 1}}</td>
                                                    <td>{{ date('H:i:s d/m/Y', strtotime($log->created))}}</td>
                                                    <td><button class="btn btn-block btn-outline btn-info  btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Xem lịch sử IP">{{$log->ip}}</button></td>
                                                    <td><button class="btn btn-block btn-outline btn-success btn-sm " data-toggle="tooltip" data-placement="top" title="" data-original-title="Chặn ngay IP này">Chặn Ngay</button></td>

                                                    <td>1</td>
                                                    <td>3</td>
                                                    <td>310.000 vnd</td>

                                                    <td>{{ $log->device == "Computer" ? "Computer" : $log->device_name}}</td>
                                                    <td>{{$log->browser}}</td>
                                                    <td>{{$log->city}}</td>
                                                    <td>{{$log->country}}</td>
                                                    <td><div class="label label-table label-success">Click Ảo</div></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                        <?php echo $domain_logs->render(); ?>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        <!-- row -->
        <!-- /.row -->
        <!-- .right-sidebar -->
        @include('front/modules/nav-right')
        <!-- /.right-sidebar -->
        </div>
        <!-- /.container-fluid -->
        <footer class="footer text-center"> 2016 &copy; FFF.COM.VN - New version </footer>
    </div>
    <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->

@endsection

@section('scripts')
<script>
    $(function () {
        $("#div_paging span a").click(function(){
            $("#num_page").val($(this).attr("data-value"));
            $("#form_display_ip").submit();
        });
        $("#select_num_row").change(function(){
            $("#form_display_ip").submit();
        });
        $("#paging_previous").click(function(){
            @if($page - 1 >= 1)
                $("#num_page").val("{{$page - 1}}");
                $("#form_display_ip").submit();
            @endif
        });
        $("#paging_next").click(function(){
            @if($page + 1 <= $max_page)
                $("#num_page").val("{{$page + 1}}");
            $("#form_display_ip").submit();
            @endif
        });

        $("#sort_click").click(function(){
            var sfield = $("#sort_field").val();
            if(sfield == '' || sfield == 'view') {
                $("#sort_field").val('click');
                $("#sort_direction").val('asc');
            } else if(sfield == 'click') {
                if($("#sort_direction").val() == 'asc') {
                    $("#sort_direction").val('desc');
                } else {
                    $("#sort_direction").val('asc');
                }
            }
            $("#form_display_ip").submit();
        });
        $("#sort_view").click(function(){
            var sfield = $("#sort_field").val();
            if(sfield == '' || sfield == 'click') {
                $("#sort_field").val('view');
                $("#sort_direction").val('asc');
            } else if(sfield == 'view') {
                if($("#sort_direction").val() == 'asc') {
                    $("#sort_direction").val('desc');
                } else {
                    $("#sort_direction").val('asc');
                }
            }
            $("#form_display_ip").submit();
        });
    });
</script>
@endsection