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
            <!-- /.row -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-xs-12">
                    <div class="white-box">
                        <h3 class="box-title">KHU VỰC CLICK ẢO</h3>
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-xs-12">
                                <div id="world-map-marker" style="height: 490px; margin-bottom:25px;"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-xs-12">
                                <div class="table-responsive">
                                    <table class="table color-bordered-table info-bordered-table ">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Tỉnh</th>
                                            <th>Lượng click thật</th>
                                            <th>Tỉ lệ</th>

                                            <th>Lượng click ảo</th>
                                            <th>Tỉ lệ</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr role="row" class="odd">
                                            <td>1</td>
                                            <td>Hà Nội</td>
                                            <td><strong>2.000</strong></td>
                                            <td>30%</td>
                                            <td><strong>2.000</strong></td>
                                            <td>30%</td>

                                        </tr>
                                        <tr role="row" class="even">
                                            <td>1</td>
                                            <td>Hà Nội</td>
                                            <td><strong>2.000</strong></td>
                                            <td>30%</td>
                                            <td><strong>2.000</strong></td>
                                            <td>30%</td>

                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>1</td>
                                            <td>Hà Nội</td>
                                            <td><strong>2.000</strong></td>
                                            <td>30%</td>
                                            <td><strong>2.000</strong></td>
                                            <td>30%</td>

                                        </tr>
                                        <tr role="row" class="even">
                                            <td>1</td>
                                            <td>Hà Nội</td>
                                            <td><strong>2.000</strong></td>
                                            <td>30%</td>
                                            <td><strong>2.000</strong></td>
                                            <td>30%</td>

                                        </tr>
                                        <tr role="row" class="odd">
                                            <td>1</td>
                                            <td>Hà Nội</td>
                                            <td><strong>2.000</strong></td>
                                            <td>30%</td>
                                            <td><strong>2.000</strong></td>
                                            <td>30%</td>

                                        </tr>
                                        <tr role="row" class="even">
                                            <td>1</td>
                                            <td>Hà Nội</td>
                                            <td><strong>2.000</strong></td>
                                            <td>30%</td>
                                            <td><strong>2.000</strong></td>
                                            <td>30%</td>

                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--row -->
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
    {!! HTML::script(url('/')."/plugins/bower_components/vectormap/jquery-jvectormap-2.0.2.min.js") !!}
    {!! HTML::script(url('/')."/plugins/bower_components/vectormap/jquery-jvectormap-world-mill-en.js") !!}
    <script>
        var mapData = {
            "US": 298,
            "SA": 200,
            "AU": 760,
            "IN": 200,
            "GB": 120,
        };


        jQuery('#world-map-marker').vectorMap(
                {
                    map: 'world_mill_en',
                    backgroundColor: '#fff',
                    borderColor: '#fff',
                    borderOpacity: 0.25,
                    borderWidth: 0,
                    color: '#e6e6e6',
                    regionStyle : {
                        initial : {
                            fill : '#e4ecef'
                        }
                    },

                    markerStyle: {
                        initial: {
                            r: 7,
                            'fill': '#fff',
                            'fill-opacity':1,
                            'stroke': '#000',
                            'stroke-width' : 2,
                            'stroke-opacity': 0.4
                        },
                    },

                    markers : [{
                        latLng : [21.00, 78.00],
                        name : 'INDIA : 350'

                    },
                        {
                            latLng : [-33.00, 151.00],
                            name : 'Australia : 250'

                        },
                        {
                            latLng : [36.77, -119.41],
                            name : 'USA : 250'

                        },
                        {
                            latLng : [55.37, -3.41],
                            name : 'UK   : 250'

                        },
                        {
                            latLng : [25.20, 55.27],
                            name : 'UAE : 250'

                        }],
                    series: {
                        regions: [{
                            values: mapData,
                            scale: ["#03a9f3", "#02a7f1"],
                            normalizeFunction: 'polynomial'
                        }]
                    },
                    hoverOpacity: null,
                    normalizeFunction: 'linear',
                    zoomOnScroll: false,
                    scaleColors: ['#b6d6ff', '#005ace'],
                    selectedColor: '#c9dfaf',
                    selectedRegions: [],
                    enableZoom: false,
                    hoverColor: '#fff',


                });
    </script>
@endsection