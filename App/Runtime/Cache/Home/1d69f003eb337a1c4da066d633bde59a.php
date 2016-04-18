<?php if (!defined('THINK_PATH')) exit();?><!-- 调用头部文件 -->
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo ($title); ?></title>
    <meta name = "keywords" content="<?php echo ($SiteInfo["keywords"]); ?>" >
    <meta name = "description" content="<?php echo ($SiteInfo["description"]); ?>" >
    <link href="/borrow/Public/css/bootstrap.min.css" rel="stylesheet">
    <link href="/borrow/Public/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="/borrow/Public/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="/borrow/Public/css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">
    <link href="/borrow/Public/css/animate.css" rel="stylesheet">
    <link href="/borrow/Public/css/style.css" rel="stylesheet">

    <!-- Data Tables -->
    <link href="/borrow/Public/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <link rel="shortcut icon" href="/borrow/Public/img/favicon.ico" />

</head>

<body>

    <div id="wrapper">
        <!-- 侧边菜单-开始 -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header" style="text-align:center;">
                        <div class="dropdown profile-element"> <span>
                        <a href="/borrow/index.php">
                            <img alt="image" class="img-circle" src="/borrow/Public/img/borrow_log_600x600.png" width="80px;"  height="80px;" />
                        </a>
                        </span>
                        <span class="clear">
                        <span class="block m-t-xs" style = "color:#fff;">
                        <strong class="font-bold">借贷管理系统</strong>
                        </span> 
<!--                         <span class="text-muted text-xs block">内部使用</span> -->
                        </span>
                        </div>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-home"></i>
                            <span class="nav-label">借款管理</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="J_menuItem" href="/borrow/index.php/Home/Borrow/add" data-index="0">添加借款</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="/borrow/index.php/Home/Borrow" data-index="1">借款列表</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="/borrow/index.php/Home/Borrow/ajaxtest" data-index="1">ajax</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-cny"></i>
                            <span class="nav-label">还款管理</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="J_menuItem" href="/borrow/index.php/Home/Repayment" data-index="2">还款列表</a>
                            </li>

                            <li>
                                <a class="J_menuItem" href="/borrow/index.php/Home/Repayment/ajaxtest" data-index="2">ajaxtable测试</a>
                            </li>

                            <li>
                                <a class="J_menuItem" href="/borrow/index.php/Home/Repayment/chart" data-index="3">还款统计</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-user"></i>
                            <span class="nav-label">借款人</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="J_menuItem" href="/borrow/index.php/Home/User" data-index="4">借款人列表</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="/borrow/index.php/Home/User/ajaxtest" data-index="4">ajax</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="/borrow/index.php/Home/User/add" data-index="5">添加借款人</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            </nav>
            <!-- 侧边菜单-结束 -->
            <!-- 头部导航-开始 -->
            <div id="page-wrapper" class="gray-bg">
                <div class="row border-bottom">
                    <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                        <div class="navbar-header">
                            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                        </div>
                        <ul class="nav navbar-top-links navbar-left">
                            <li>
                                <a class="m-r-lg text-muted welcome-message"><?php echo ($title); ?></a>
                            </li>
                        </ul>
                        <ul class="nav navbar-top-links navbar-right">
                        <span class="m-r-sm text-muted welcome-message">欢迎你,</span>
                        <li class="dropdown">
                                <a class="dropdown-toggle count-info" data-toggle="dropdown" href="javascript:void(0)">
                                       <strong><span class="text-success"><?php echo (session('name')); ?></span></strong>
                                </a>
                                <ul class="dropdown-menu dropdown-messages" style="width: 120px;">
                                    <li>
                                        <strong><a href="/borrow/index.php/Home/login/logout">退出登陆</a></strong>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- 头部导航-结束 -->
<div style="padding:10px;"></div>


<div class="row">
    <div class="col-sm-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>借款人列表</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <div class="row">
                    <div class="col-sm-3">
                            <div class="input-group m-b"><span class="input-group-btn">
                                    <button type="button" class="btn btn-primary" >编号</button> </span>
                                    <input type="text" class="form-control" id="id">
                            </div>
                    </div>
                    <div class="col-sm-3">
                            <div class="input-group m-b"><span class="input-group-btn">
                                    <button type="button" class="btn btn-primary" >姓名</button> </span>
                                    <input type="text" class="form-control" id="name">
                            </div>
                    </div>
                    <div class="col-sm-6" id="export-btn">
                            <a data-type="xls" href="javascript:;" type="button" class="btn btn-primary btn-sm">导出xls</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" id="user_table">
                        <thead>
                            <tr>
                                <th></th>
                                <th>编号</th>
                                <th>姓名</th>
                                <th>手机号</th>
                                <th>添加日期</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 调用脚部文件 -->
        <div style="padding:20px;"></div>
        <div class="footer">
            <div class="pull-right">
                One more thing！
            </div>
            <div>
                <strong>Copyright</strong> <a target="_bank" href="http://www.yangzhongchao.com/">羊种草</a> &copy; 2016
            </div>
        </div>

        </div>
        </div>

    <script src="/borrow/Public/js/jquery-2.1.1.js"></script>
    <script src="/borrow/Public/js/jquery-ui-1.10.4.min.js"></script>
    <script src="/borrow/Public/js/bootstrap.min.js"></script>
    <script src="/borrow/Public/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="/borrow/Public/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="/borrow/Public/js/inspinia.js"></script>
    <script src="/borrow/Public/js/plugins/pace/pace.min.js"></script>

    <!-- iCheck -->
    <script src="/borrow/Public/js/plugins/iCheck/icheck.min.js"></script>

    <!-- Jvectormap -->
    <script src="/borrow/Public/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="/borrow/Public/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

    <!-- Flot -->
    <script src="/borrow/Public/js/plugins/flot/jquery.flot.js"></script>
    <script src="/borrow/Public/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="/borrow/Public/js/plugins/flot/jquery.flot.resize.js"></script>

    <!-- laydate -->
    <script src="/borrow/Public/js/plugins/layer/laydate/laydate.js"></script>
    
    <!-- laydate -->
    <script src="/borrow/Public/js/plugins/validate/jquery.validate.min.js"></script>
    <script src="/borrow/Public/js/plugins/validate/messages_zh.min.js"></script>

    <!-- morris -->
    <script src="/borrow/Public/js/plugins/morris/morris.js"></script>
    <script src="/borrow/Public/js/plugins/morris/raphael-2.1.0.min.js"></script>
    
    <!-- morris -->
    <script src="/borrow/Public/js/plugins/tableexport/Blob.js"></script>
    <script src="/borrow/Public/js/plugins/tableexport/FileSaver.js"></script>
    <script src="/borrow/Public/js/plugins/tableexport/tableExport.js"></script>
    
    <!-- Data Tables -->
    <script src="/borrow/Public/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="/borrow/Public/js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <script>
        laydate({elem:"#hello",event:"focus"});
    </script>
    <!-- 菜单 -->
    <script>
            var s_url=window.location.pathname;
            var now_url = '';
            for(var i = 0;i<$("#side-menu li").length;i++){
                now_url=$("#side-menu li a").eq(i).attr("href");
                if(now_url == s_url){
                    $("#side-menu a").eq(i).parent().addClass("active");
                    $("#side-menu a").eq(i).parent().parent().parent().addClass("active");
                    $("#side-menu a").eq(i).parent().parent().addClass("in");
                }else{
                    $("#side-menu a").eq(i).parent().removeClass("active");
                }
            }        
    </script>
    <!-- 应收实收柱状图 -->
    <script>
        $(function() {
            var morris_bar_chart_16  = $("#morris-bar-chart-16");
            if (morris_bar_chart_16[0]) {
                    Morris.Bar({
                        element: "morris-bar-chart-16",
                        data: [<?php echo ($str_2016); ?>],
                        xkey: "y",
                        ykeys: ["a", "b"],
                        labels: ["应收", "实收"],
                        hideHover: "auto",
                        resize: !0,
                        barColors: ["#1ab394", "#ec5464"]
                    });
            };
            var morris_bar_chart_16  = $("#morris-bar-chart-15");
            if (morris_bar_chart_16[0]) {
                    Morris.Bar({
                        element: "morris-bar-chart-15",
                        data: [<?php echo ($str_2015); ?>],
                        xkey: "y",
                        ykeys: ["a", "b"],
                        labels: ["应收", "实收"],
                        hideHover: "auto",
                        resize: !0,
                        barColors: ["#1ab394", "#ec5464"]
                    });
            };
        });
    </script>
    <script>
    var export_btn  = $("#export-btn");
    if (export_btn) {
            var $exportLink = document.getElementById('export-btn');
            $exportLink.addEventListener('click', function(e){
                e.preventDefault();
                if(e.target.nodeName === "A"){

                    tableExport('tabletest', '<?php echo ($title); ?>', e.target.getAttribute('data-type'));
                }
            }, false);
    };
    </script>
    <script>
    function change_id(id) {
            $("input[name='id']").val(id);
    }
    </script>
    <script>
            function index_table_info ( d ) {
                // `d` is the original data object for the row
                return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
                '<tr>'+
                    '<td>编号:</td>'+
                    '<td>'+d.id+'</td>'+
                '</tr>'+
                '<tr>'+
                    '<td>备注:</td>'+
                    '<td>'+d.repayment_remarks+'</td>'+
                '</tr>'+
                '</table>';
            };


            // 还款列表
            function repayment_table_info ( d ) {
                // `d` is the original data object for the row
                return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
                '<tr>'+
                    '<td>编号:</td>'+
                    '<td>'+d.id+'</td>'+
                '</tr>'+
                '<tr>'+
                    '<td>备注:</td>'+
                    '<td>'+d.repayment_remarks+'</td>'+
                '</tr>'+
                '</table>';
            };

            // 借款列表
            function borrow_table_info ( d ) {
                // `d` is the original data object for the row
                return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
                    '<tr>'+
                        '<td>编号:</td>'+
                        '<td>'+d.id+'</td>'+
                    '</tr>'+
                    '<tr>'+
                        '<td>合同号:</td>'+
                        '<td>'+d.borrow_number+'</td>'+
                    '</tr>'+
                    '<tr>'+
                        '<td>手续费率:</td>'+
                        '<td>'+d.borrow_procedures_rate+'</td>'+
                    '</tr>'+
                    '<tr>'+
                        '<td>借款备注:</td>'+
                        '<td>'+d.borrow_remarks+'</td>'+
                    '</tr>'+                    
                '</table>';
            };

            // 借款人列表
            function user_table_info ( d ) {
                // `d` is the original data object for the row
                return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
                    '<tr>'+
                        '<td>编号:</td>'+
                        '<td>'+d.id+'</td>'+
                    '</tr>'+
                '</table>';
            };

            $(document).ready(function() {
                console.log('ready');

                // 还款列表
                var index_table =  $("#index_table").DataTable({
                      "language": {
                            "decimal":        "",
                            "emptyTable":     "没有数据",
                            "info":           "从 第_START_ 到 _END_条 /共 _TOTAL_ 条数据",
                            "infoEmpty":      "从 0到 0 /共 0条数据",
                            "infoFiltered":   "(从 _MAX_ 条数据中检索)",
                            "infoPostFix":    "",
                            "thousands":      ",",
                            "lengthMenu":     "每页显示 _MENU_ 条记录",
                            "loadingRecords": "加载中...",
                            "processing":     "搜索中...",
                            "search":         "搜索:",
                            "zeroRecords":    "没有检索到数据",
                            "paginate": {
                                "first":      "首页",
                                "last":       "尾页",
                                "next":       "后一页",
                                "previous":   "前一页"
                            },
                      },
                      // 设置相关排列
                      "dom": 't<".col-sm-4"l><".col-sm-4"i><".col-sm-4"p>',
                      "orderMulti": true,
                      "processing": true,
                      "serverSide": true,
                      "ajax": './ajaxquery',
                      ajax: {
                            url: './ajaxquery',
                            dataSrc: 'data',
                      },
                      "columnDefs": [ {
                      "targets": 8,
                      "orderable": false
                      } ],
                      "columns": [
                                {
                                      "class":          'details-control',
                                      "orderable":      false,
                                      "data":           null,
                                      "defaultContent": ''
                                },
                                { "data": "id" },
                                { "data":"borrow_number"},
                                { "data": "name"},
                                { "data": "repayment_money"},
                                { "data": "repayment_time" },
                                { "data": "real_repayment_time"},
                                { "data": "is_late" },
                                { "data": "action"}
                      ],
                      "order": [ 1, 'desc' ],
                      // "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ]

                });

                $('#id').on( 'keyup', function () {
                        index_table
                        .columns( 0 )
                        .search( this.value )
                        .draw();
                } );
                $('#borrow_number').on( 'keyup', function () {
                        index_table
                        .columns( 1)
                        .search( this.value )
                        .draw();
                } );
                $('#borrow_uname').on( 'keyup', function () {
                        index_table
                        .columns( 2 )
                        .search( this.value )
                        .draw();
                });

                $('#index_table tbody').on('click', 'td.details-control', function () {
                        var tr = $(this).closest('tr');
                        var row = index_table.row( tr );
                        if ( row.child.isShown() ) {
                            // This row is already open - close it
                            row.child.hide();
                            tr.removeClass('shown');
                        }
                        else {
                            // Open this row
                            row.child( index_table_info (row.data()) ).show();
                            tr.addClass('shown');
                        }
                } );

                // 借款列表
                var borrow_table =  $("#borrow_table").DataTable({
                      "language": {
                            "decimal":        "",
                            "emptyTable":     "没有数据",
                            "info":           "从 第_START_ 到 _END_条 /共 _TOTAL_ 条数据",
                            "infoEmpty":      "从 0到 0 /共 0条数据",
                            "infoFiltered":   "(从 _MAX_ 条数据中检索)",
                            "infoPostFix":    "",
                            "thousands":      ",",
                            "lengthMenu":     "每页显示 _MENU_ 条记录",
                            "loadingRecords": "加载中...",
                            "processing":     "搜索中...",
                            "search":         "搜索:",
                            "zeroRecords":    "没有检索到数据",
                            "paginate": {
                                "first":      "首页",
                                "last":       "尾页",
                                "next":       "后一页",
                                "previous":   "前一页"
                            },
                      },
                      // 设置相关排列
                      "dom": 't<".col-sm-4"l><".col-sm-4"i><".col-sm-4"p>',
                      "orderMulti": true,
                      "processing": true,
                      "serverSide": true,
                      "ajax": './ajaxquery',
                      ajax: {
                            url: './ajaxquery',
                            dataSrc: 'data',
                      },
                      "columnDefs": [ {
                      "targets": [13,7],
                      "orderable": false
                      }],
                      "columns": [
                                {
                                      "class":          'details-control',
                                      "orderable":      false,
                                      "data":           null,
                                      "defaultContent": ''
                                },
                                { "data": "id" },
                                { "data":"name"},
                                { "data": "contract_number"},
                                { "data": "borrow_number"},
                                { "data": "borrow_money"},
                                { "data": "borrow_time" },
                                { "data": "end_time"},
                                { "data": "borrow_duration" },
                                { "data": "borrow_interest" },
                                { "data": "borrow_interest_rate" },
                                { "data": "borrow_procedures" },
                                { "data": "repayment_type" },
                                { "data": "action"}
                      ],
                      "order": [ 1, 'desc' ],
                      // "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ]

                });

                $('#id').on( 'keyup', function () {
                        borrow_table
                        .columns( 0 )
                        .search( this.value )
                        .draw();
                } );
                $('#borrow_number').on( 'keyup', function () {
                        borrow_table
                        .columns( 1)
                        .search( this.value )
                        .draw();
                } );
                $('#borrow_uname').on( 'keyup', function () {
                        borrow_table
                        .columns( 2 )
                        .search( this.value )
                        .draw();
                });

                $('#borrow_table tbody').on('click', 'td.details-control', function () {
                        var tr = $(this).closest('tr');
                        var row = borrow_table.row( tr );
                        if ( row.child.isShown() ) {
                            // This row is already open - close it
                            row.child.hide();
                            tr.removeClass('shown');
                        }
                        else {
                            // Open this row
                            row.child( borrow_table_info(row.data()) ).show();
                            tr.addClass('shown');
                        }
                } );


            // 还款列表
            var repayment_table =  $("#repayment_table").DataTable({
                  "language": {
                        "decimal":        "",
                        "emptyTable":     "没有数据",
                        "info":           "从 第_START_ 到 _END_条 /共 _TOTAL_ 条数据",
                        "infoEmpty":      "从 0到 0 /共 0条数据",
                        "infoFiltered":   "(从 _MAX_ 条数据中检索)",
                        "infoPostFix":    "",
                        "thousands":      ",",
                        "lengthMenu":     "每页显示 _MENU_ 条记录",
                        "loadingRecords": "加载中...",
                        "processing":     "搜索中...",
                        "search":         "搜索:",
                        "zeroRecords":    "没有检索到数据",
                        "paginate": {
                            "first":      "首页",
                            "last":       "尾页",
                            "next":       "后一页",
                            "previous":   "前一页"
                        },
                  },
                  // 设置相关排列
                  "dom": 't<".col-sm-4"l><".col-sm-4"i><".col-sm-4"p>',
                  "orderMulti": true,
                  "processing": true,
                  "serverSide": true,
                  "ajax": './ajaxquery',
                  ajax: {
                        url: './ajaxquery',
                        dataSrc: 'data',
                  },
                  "columnDefs": [ {
                  "targets": 8,
                  "orderable": false
                  } ],
                  "columns": [
                            {
                                  "class":          'details-control',
                                  "orderable":      false,
                                  "data":           null,
                                  "defaultContent": ''
                            },
                            { "data": "id" },
                            { "data":"borrow_number"},
                            { "data": "name"},
                            { "data": "repayment_money"},
                            { "data": "repayment_time" },
                            { "data": "real_repayment_time"},
                            { "data": "is_late" },
                            { "data": "repayment_remarks" },
                            { "data": "action"}
                  ],
                  "order": [ 1, 'desc' ],
                  // "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ]

            });

            $('#id').on( 'keyup', function () {
                    repayment_table
                    .columns( 0 )
                    .search( this.value )
                    .draw();
            } );
            $('#borrow_number').on( 'keyup', function () {
                    repayment_table
                    .columns( 1)
                    .search( this.value )
                    .draw();
            } );
            $('#borrow_uname').on( 'keyup', function () {
                    repayment_table
                    .columns( 2 )
                    .search( this.value )
                    .draw();
            });

            $('#repayment_table tbody').on('click', 'td.details-control', function () {
                    var tr = $(this).closest('tr');
                    var row = repayment_table.row( tr );
                    if ( row.child.isShown() ) {
                        // This row is already open - close it
                        row.child.hide();
                        tr.removeClass('shown');
                    }
                    else {
                        // Open this row
                        row.child( repayment_table_info (row.data()) ).show();
                        tr.addClass('shown');
                    }
            } );


            // 借款人列表
            var user_table =  $("#user_table").DataTable({
                  "language": {
                        "decimal":        "",
                        "emptyTable":     "没有数据",
                        "info":           "从 第_START_ 到 _END_条 /共 _TOTAL_ 条数据",
                        "infoEmpty":      "从 0到 0 /共 0条数据",
                        "infoFiltered":   "(从 _MAX_ 条数据中检索)",
                        "infoPostFix":    "",
                        "thousands":      ",",
                        "lengthMenu":     "每页显示 _MENU_ 条记录",
                        "loadingRecords": "加载中...",
                        "processing":     "搜索中...",
                        "search":         "搜索:",
                        "zeroRecords":    "没有检索到数据",
                        "paginate": {
                            "first":      "首页",
                            "last":       "尾页",
                            "next":       "后一页",
                            "previous":   "前一页"
                        },
                  },
                  // 设置相关排列
                  "dom": 't<".col-sm-4"l><".col-sm-4"i><".col-sm-4"p>',
                  "orderMulti": true,
                  "processing": true,
                  "serverSide": true,
                  "ajax": './ajaxquery',
                  ajax: {
                        url: './ajaxquery',
                        dataSrc: 'data',
                  },
                  "columnDefs": [ {
                  "targets": 5,
                  "orderable": false
                  } ],
                  "columns": [
                            {
                                  "class":          'details-control',
                                  "orderable":      false,
                                  "data":           null,
                                  "defaultContent": ''
                            },
                            { "data": "id" },
                            { "data": "name"},
                            { "data":"phone"},
                            { "data":"add_time"},
                            { "data": "action"}
                  ],
                  "order": [ 1, 'desc' ],
                  // "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ]

            });

            $('#id').on( 'keyup', function () {
                    user_table
                    .columns( 1 )
                    .search( this.value )
                    .draw();
            } );
            $('#name').on( 'keyup', function () {
                    user_table
                    .columns( 2)
                    .search( this.value )
                    .draw();
            } );

            $('#user_table tbody').on('click', 'td.details-control', function () {
                    var tr = $(this).closest('tr');
                    var row = user_table.row( tr );
                    if ( row.child.isShown() ) {
                        // This row is already open - close it
                        row.child.hide();
                        tr.removeClass('shown');
                    }
                    else {
                        // Open this row
                        row.child( user_table_info (row.data()) ).show();
                        tr.addClass('shown');
                    }
            } );

    });
    </script>
</body>

</html>