{{--Top Bar--}}
@section('TopBar')
    <header class="main-header">
        <!-- Logo -->
        <a class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini">پنل</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>کنترل پنل {{$user->role($RoleId)}}</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="label label-success">4</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">۴ پیام خوانده نشده</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li><!-- start message -->
                                        <a href="#">
                                            <div class="pull-right">
                                                <img src="auth/dist/img/user2-160x160.jpg" class="img-circle"
                                                     alt="User Image">
                                            </div>
                                            <h4>
                                                علیرضا
                                                <small><i class="fa fa-clock-o"></i> ۵ دقیقه پیش</small>
                                            </h4>
                                            <p>متن پیام</p>
                                        </a>
                                    </li>
                                    <!-- end message -->
                                    <li>
                                        <a href="#">
                                            <div class="pull-right">
                                                <img src="auth/dist/img/user3-128x128.jpg" class="img-circle"
                                                     alt="User Image">
                                            </div>
                                            <h4>
                                                نگین
                                                <small><i class="fa fa-clock-o"></i> ۲ ساعت پیش</small>
                                            </h4>
                                            <p>متن پیام</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="pull-right">
                                                <img src="auth/dist/img/user4-128x128.jpg" class="img-circle"
                                                     alt="User Image">
                                            </div>
                                            <h4>
                                                نسترن
                                                <small><i class="fa fa-clock-o"></i> امروز</small>
                                            </h4>
                                            <p>متن پیام</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="pull-right">
                                                <img src="auth/dist/img/user3-128x128.jpg" class="img-circle"
                                                     alt="User Image">
                                            </div>
                                            <h4>
                                                نگین
                                                <small><i class="fa fa-clock-o"></i> دیروز</small>
                                            </h4>
                                            <p>متن پیام</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="pull-right">
                                                <img src="auth/dist/img/user4-128x128.jpg" class="img-circle"
                                                     alt="User Image">
                                            </div>
                                            <h4>
                                                نسترن
                                                <small><i class="fa fa-clock-o"></i> ۲ روز پیش</small>
                                            </h4>
                                            <p>متن پیام</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer"><a href="#">نمایش تمام پیام ها</a></li>
                        </ul>
                    </li>
                    <!-- Notifications: style can be found in dropdown.less -->
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="label label-warning">۱۰</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">۱۰ اعلان جدید</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-users text-aqua"></i> ۵ کاربر جدید ثبت نام کردند
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-warning text-yellow"></i> اخطار دقت کنید
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-users text-red"></i> ۴ کاربر جدید ثبت نام کردند
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-shopping-cart text-green"></i> ۲۵ سفارش جدید
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-user text-red"></i> نام کاربریتان را تغییر دادید
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer"><a href="#">نمایش همه</a></li>
                        </ul>
                    </li>
                    <!-- Tasks: style can be found in dropdown.less -->
                    <li class="dropdown tasks-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-flag-o"></i>
                            <span class="label label-danger">۹</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">۹ کار برای انجام دارید</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                ساخت دکمه
                                                <small class="pull-left">20%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-aqua" style="width: 20%"
                                                     role="progressbar"
                                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">20% تکمیل شده</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                ساخت قالب جدید
                                                <small class="pull-left">40%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-green" style="width: 40%"
                                                     role="progressbar"
                                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">40% تکمیل شده</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                تبلیغات
                                                <small class="pull-left">60%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-red" style="width: 60%"
                                                     role="progressbar"
                                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">60% تکمیل شده</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                ساخت صفحه فرود
                                                <small class="pull-left">80%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-yellow" style="width: 80%"
                                                     role="progressbar"
                                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <span class="sr-only">80% تکمیل شده</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="#">نمایش همه</a>
                            </li>
                        </ul>
                    </li>
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="auth/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                            <span class="hidden-xs">{{$UserFullName}}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="auth/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                <p>
                                    {{$UserFullName}}
                                    <small>کد کاربری {{$CurrentUser->id}}</small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">
                                <div class="row">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">صفحه من</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">فروش</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">دوستان</a>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-right">
                                    <a class="btn btn-default btn-flat"
                                       onclick="event.preventDefault();
                                           document.getElementById('UserStatusChange').submit();">پروفایل</a>

                                    {{--                                    <form id="UserStatusChange"--}}
                                    {{--                                          action="{{route('changestatus', ['UserId'=>$CurrentUser->id, 'Status'=>'A'])}}"--}}
                                    {{--                                          method="POST"--}}
                                    {{--                                          style="display: none;">--}}

                                    {{--                                        @csrf--}}
                                    {{--                                    </form>--}}
                                </div>

                                <div class="pull-left">
                                    <a class="btn btn-default btn-flat"
                                       onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">خروج</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
@endsection
{{--====================================================--}}

@section('RightSideBar')
    <!-- right side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-right image">
                    <img src="auth/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-right info">
                    <p>{{$UserFullName}}</p>
                    <a id="UserMode" href="#"><i class="fa fa-circle text-success"></i>{{$user->mode($UserMode)}}
                    </a>
                </div>
            </div>

            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">منو</li>
                {{--========================================================================--}}
                <li class="active treeview">
                    <a href="#">
                        <i class="fa fa-dashboard"></i>
                        <span>داشبرد</span>
                        <span class="pull-left-container">
                            <i class="fa fa-angle-right pull-left"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> داشبرد اول</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> داشبرد دوم</a></li>
                    </ul>
                </li>
                {{--========================================================================--}}
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-files-o"></i>
                        <span>لایه های صفحه</span>
                        <span class="pull-left-container">
                                <i class="fa fa-angle-right pull-left"></i>
                                <span class="label label-primary pull-left">4</span>
                            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> نوار بالا</a></li>
                        <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> باکس ها</a></li>
                        <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> فیکس شده</a></li>
                        <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> سایدبار</a>
                        </li>
                    </ul>
                </li>
                {{--========================================================================--}}
                <li>
                    <a href="pages/widgets.html">
                        <i class="fa fa-th"></i> <span>ویجت ها</span>
                        <span class="pull-left-container">
              <small class="label pull-left bg-green">جدید</small>
            </span>
                    </a>
                </li>

                {{--========================================================================--}}

                <li>
                    <a href="pages/mailbox/mailbox.html">
                        <i class="fa fa-envelope"></i> <span>ایمیل ها</span>
                        <span class="pull-left-container">
                          <small class="label pull-left bg-yellow">۱۲</small>
                          <small class="label pull-left bg-green">۱۶</small>
                          <small class="label pull-left bg-red">۵</small>
                        </span>
                    </a>
                </li>
                {{--========================================================================--}}
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>
@endsection
{{--====================================================--}}

@section('MainContent')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    {{--================ Badges For Admin ====================================--}}

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                {{--==================== New Orders ================================--}}

                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua-gradient">
                        <div class="inner">
                            <h3>150</h3>

                            <p>سفارش جدید</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-file-text"></i>
                        </div>
                        <a href="#" class="small-box-footer">اطلاعات بیشتر <i
                                class="fa fa-arrow-circle-left"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                {{--=================== Online Users =================================--}}

                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green-gradient">
                        <div class="inner">

                            <script>
                                setInterval(function () {
                                    $.ajax({
                                        type: "GET",
                                        url: '/GetOnlineUsers',
                                        success: function (data) {
                                            $('#OnlineAmount').empty();
                                            $('#OnlineAmount').append(data);
                                        }
                                    });
                                }, 1000);

                            </script>
                            <h3 id="OnlineAmount"></h3>

                            <p>کاربران آنلاین</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-wifi"></i>
                        </div>
                        <a href="#" class="small-box-footer">اطلاعات بیشتر <i
                                class="fa fa-arrow-circle-left"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                {{--==================== Employment ================================--}}

                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow-gradient">
                        <div class="inner">
                            <h3>44</h3>

                            <p>درخواست همکاری جدید</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer">اطلاعات بیشتر <i
                                class="fa fa-arrow-circle-left"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                {{--=================== Site Visit Statistics  =================================--}}

                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-light-blue-gradient">
                        <div class="inner">
                            <h3>{{(new App\Session)->GetSiteVisitors(1)}}</h3> {{--visitors of last day--}}

                            <p>بازدید امروز</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-line-chart"></i>
                        </div>
                        <a href="#" class="small-box-footer">اطلاعات بیشتر <i
                                class="fa fa-arrow-circle-left"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
        {{--=================== End Of Admin Badges   =================================--}}

        {{--=================== Orders List  =================================--}}

            <div class="box box-primary">
                <div class="box-header">
                    <i class="ion ion-clipboard"></i>

                    <h3 class="box-title">لیست سفارشات</h3>
                    <!-- tools box -->
                    <div class="pull-left box-tools">
                        <button type="button" class="btn bg-info btn-sm" data-widget="collapse"><i
                                class="fa fa-minus"></i>
                        </button>
                    </div>
                    <!-- /. tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
                    <ul class="todo-list">
                        <li>
                            <!-- drag handle -->
                            <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                            <!-- checkbox -->
                            <input type="checkbox" value="">
                            <!-- todo text -->
                            <span class="text">ساخت قالب</span>
                            <!-- Emphasis label -->
                            <small class="label label-danger"><i class="fa fa-clock-o"></i> ۲ دقیقه</small>
                            <!-- General tools such as edit or delete-->
                            <div class="tools">
                                <i class="fa fa-edit"></i>
                                <i class="fa fa-trash-o"></i>
                            </div>
                        </li>
                        <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                            <input type="checkbox" value="">
                            <span class="text">بهینه سازی قالب سایت</span>
                            <small class="label label-info"><i class="fa fa-clock-o"></i> ۴ ساعت</small>
                            <div class="tools">
                                <i class="fa fa-edit"></i>
                                <i class="fa fa-trash-o"></i>
                            </div>
                        </li>
                        <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                            <input type="checkbox" value="">
                            <span class="text">ایجاد صفحه فرود سایت</span>
                            <small class="label label-warning"><i class="fa fa-clock-o"></i> ۱ روز</small>
                            <div class="tools">
                                <i class="fa fa-edit"></i>
                                <i class="fa fa-trash-o"></i>
                            </div>
                        </li>
                        <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                            <input type="checkbox" value="">
                            <span class="text">تبلیغات سایت</span>
                            <small class="label label-success"><i class="fa fa-clock-o"></i> ۳ روز</small>
                            <div class="tools">
                                <i class="fa fa-edit"></i>
                                <i class="fa fa-trash-o"></i>
                            </div>
                        </li>
                        <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                            <input type="checkbox" value="">
                            <span class="text">بررسی اعلان ها</span>
                            <small class="label label-primary"><i class="fa fa-clock-o"></i> ۱ هفته</small>
                            <div class="tools">
                                <i class="fa fa-edit"></i>
                                <i class="fa fa-trash-o"></i>
                            </div>
                        </li>
                        <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                            <input type="checkbox" value="">
                            <span class="text">طراحی سیستم جدید</span>
                            <small class="label label-default"><i class="fa fa-clock-o"></i> ۲ ماه</small>
                            <div class="tools">
                                <i class="fa fa-edit"></i>
                                <i class="fa fa-trash-o"></i>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix no-border" style="text-align: center;">
                    <div class="box-tools" style="display: inline-block;">
                        <ul class="pagination pagination-sm inline">
                            <li><a href="#">&laquo;</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">&raquo;</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            {{--=================== End Of Orders List  =================================--}}

            <div class="row">
                <section class="col-lg-12 col-md-12">
                    <div class="box box-info">
                        <div class="box-header">
                            <i class="fa fa-info-circle"></i>
                            <h3 class="box-title">قالب AdminLTE فارسی ورژن 2.4.0</h3>
                            <!-- tools box -->
                            <div class="pull-left box-tools">
                                <button type="button" class="btn bg-info btn-sm" data-widget="collapse"><i
                                        class="fa fa-minus"></i>
                                </button>
                            </div>
                            <!-- /. tools -->
                        </div>
                        <div class="box-body">
                            <h5>این قالب به صورت html هست و برای بخش کنترل پنل و مدیریت سایت های مختلف مناسب می
                                باشد.</h5>
                            <h5>نسخه اصلی این قالب AdminLTE می باشد که توسط <a href="https://adminlte.io">Almsaeed
                                    Studio</a> به صورت رایگان قرار داده شده است.</h5>
                            <br><h5><b>ویژگی های قالب و تفاوت های آن با قالب اصلی:</b></h5>
                            <h5>۱- قالب به صورت کامل و حرفه ای فارسی و راست چین شده.</h5>
                            <h5>۲- انتخاب تاریخ به صورت شمسی یا دیتا پیکر توسط کتاب خانه باباخانی اضافه شده.</h5>
                            <h5>۳- ویرایشگر CK Editor فارسی و راست چین شده.</h5>
                            <h5>۴- ویرایشگر TinyMCE فارسی و راست چین شده و به قالب اضافه شده.</h5>
                            <h5>۵- همچنین فونت فارسی برای خوانایی بیشتر حروف و اعداد فارسی به قالب افزوده شد.</h5>
                            <br>
                            <h6><b>قالب توسط علیرضا حسینی زاده و به صورت رایگان منتشر شده است.</b></h6>
                            <h6><b>برای دانلود قالب و دریافت آپدیت های آن به این <a
                                        href="https://github.com/hosseinizadeh/AdminLTE_Persian">وب سایت</a> مراجعه
                                    کنید.</b></h6>
                        </div>
                    </div>
                </section>
            </div>



            <!-- Main row -->
            <div class="row">
                <!-- right col -->
                <section class="col-lg-7 connectedSortable">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="nav-tabs-custom">
                        <!-- Tabs within a box -->
                        <ul class="nav nav-tabs pull-left">
                            <li class="active"><a href="#revenue-chart" data-toggle="tab">نمودار</a></li>
                            <li><a href="#sales-chart" data-toggle="tab">چارت</a></li>
                            <li class="pull-right header"><i class="fa fa-inbox"></i> فروش</li>
                        </ul>
                        <div class="tab-content no-padding">
                            <!-- Morris chart - Sales -->
                            <div class="chart tab-pane active" id="revenue-chart"
                                 style="position: relative; height: 300px;"></div>
                            <div class="chart tab-pane" id="sales-chart"
                                 style="position: relative; height: 300px;"></div>
                        </div>
                    </div>
                    <!-- /.nav-tabs-custom -->

                    <!-- Chat box -->
                    <div class="box box-success">
                        <div class="box-header">
                            <i class="fa fa-comments-o"></i>

                            <h3 class="box-title">گفتگو</h3>

                            <div class="box-tools pull-left" data-toggle="tooltip" title="وضعیت">
                                <div class="btn-group" data-toggle="btn-toggle">
                                    <button type="button" class="btn btn-default btn-sm active"><i
                                            class="fa fa-square text-green"></i>
                                    </button>
                                    <button type="button" class="btn btn-default btn-sm"><i
                                            class="fa fa-square text-red"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="box-body chat" id="chat-box">
                            <!-- chat item -->
                            <div class="item">
                                <img src="auth/dist/img/user4-128x128.jpg" alt="user image" class="online">

                                <p class="message">
                                    <a href="#" class="name">
                                        <small class="text-muted pull-left"><i class="fa fa-clock-o"></i>
                                            2:15</small>
                                        نسترن
                                    </a>
                                    فایل مورد نظر شما
                                </p>
                                <div class="attachment">
                                    <h4>فایل ضمیمه</h4>

                                    <p class="filename">
                                        Theme-thumbnail-image.jpg
                                    </p>

                                    <div class="pull-left">
                                        <button type="button" class="btn btn-primary btn-sm btn-flat">دانلود
                                        </button>
                                    </div>
                                </div>
                                <!-- /.attachment -->
                            </div>
                            <!-- /.item -->
                            <!-- chat item -->
                            <div class="item">
                                <img src="auth/dist/img/user3-128x128.jpg" alt="user image" class="offline">

                                <p class="message">
                                    <a href="#" class="name">
                                        <small class="text-muted pull-left"><i class="fa fa-clock-o"></i>
                                            5:15</small>
                                        نگین
                                    </a>
                                    ممنونم
                                </p>
                            </div>
                            <!-- /.item -->
                            <!-- chat item -->
                            <div class="item">
                                <img src="auth/dist/img/user2-160x160.jpg" alt="user image" class="offline">

                                <p class="message">
                                    <a href="#" class="name">
                                        <small class="text-muted pull-left"><i class="fa fa-clock-o"></i>
                                            5:30</small>
                                        محمد
                                    </a>
                                    با تشکر از شما
                                </p>
                            </div>
                            <!-- /.item -->
                        </div>
                        <!-- /.chat -->
                        <div class="box-footer">
                            <div class="input-group">
                                <input class="form-control" placeholder="Type message...">

                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-success"><i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box (chat box) -->

                    <!-- TO DO List -->
                    <div class="box box-primary">
                        <div class="box-header">
                            <i class="ion ion-clipboard"></i>

                            <h3 class="box-title">لیست کارها</h3>

                            <div class="box-tools pull-left">
                                <ul class="pagination pagination-sm inline">
                                    <li><a href="#">&laquo;</a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">&raquo;</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
                            <ul class="todo-list">
                                <li>
                                    <!-- drag handle -->
                                    <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                                    <!-- checkbox -->
                                    <input type="checkbox" value="">
                                    <!-- todo text -->
                                    <span class="text">ساخت قالب</span>
                                    <!-- Emphasis label -->
                                    <small class="label label-danger"><i class="fa fa-clock-o"></i> ۲ دقیقه</small>
                                    <!-- General tools such as edit or delete-->
                                    <div class="tools">
                                        <i class="fa fa-edit"></i>
                                        <i class="fa fa-trash-o"></i>
                                    </div>
                                </li>
                                <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                                    <input type="checkbox" value="">
                                    <span class="text">بهینه سازی قالب سایت</span>
                                    <small class="label label-info"><i class="fa fa-clock-o"></i> ۴ ساعت</small>
                                    <div class="tools">
                                        <i class="fa fa-edit"></i>
                                        <i class="fa fa-trash-o"></i>
                                    </div>
                                </li>
                                <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                                    <input type="checkbox" value="">
                                    <span class="text">ایجاد صفحه فرود سایت</span>
                                    <small class="label label-warning"><i class="fa fa-clock-o"></i> ۱ روز</small>
                                    <div class="tools">
                                        <i class="fa fa-edit"></i>
                                        <i class="fa fa-trash-o"></i>
                                    </div>
                                </li>
                                <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                                    <input type="checkbox" value="">
                                    <span class="text">تبلیغات سایت</span>
                                    <small class="label label-success"><i class="fa fa-clock-o"></i> ۳ روز</small>
                                    <div class="tools">
                                        <i class="fa fa-edit"></i>
                                        <i class="fa fa-trash-o"></i>
                                    </div>
                                </li>
                                <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                                    <input type="checkbox" value="">
                                    <span class="text">بررسی اعلان ها</span>
                                    <small class="label label-primary"><i class="fa fa-clock-o"></i> ۱ هفته</small>
                                    <div class="tools">
                                        <i class="fa fa-edit"></i>
                                        <i class="fa fa-trash-o"></i>
                                    </div>
                                </li>
                                <li>
                      <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                                    <input type="checkbox" value="">
                                    <span class="text">طراحی سیستم جدید</span>
                                    <small class="label label-default"><i class="fa fa-clock-o"></i> ۲ ماه</small>
                                    <div class="tools">
                                        <i class="fa fa-edit"></i>
                                        <i class="fa fa-trash-o"></i>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer clearfix no-border">
                            <button type="button" class="btn btn-default pull-left"><i class="fa fa-plus"></i> جدید
                            </button>
                        </div>
                    </div>
                    <!-- /.box -->

                    <!-- quick email widget -->
                    <div class="box box-info">
                        <div class="box-header">
                            <i class="fa fa-envelope"></i>

                            <h3 class="box-title">ایمیل</h3>
                            <!-- tools box -->
                            <div class="pull-left box-tools">
                                <button type="button" class="btn btn-info btn-sm" data-widget="remove"
                                        data-toggle="tooltip"
                                        title="Remove">
                                    <i class="fa fa-times"></i></button>
                            </div>
                            <!-- /. tools -->
                        </div>
                        <div class="box-body">
                            <form action="#" method="post">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="emailto" placeholder="ایمیل">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" placeholder="موضوع">
                                </div>
                                <div>
                  <textarea class="textarea" placeholder="متن ایمیل"
                            style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                </div>
                            </form>
                        </div>
                        <div class="box-footer clearfix">
                            <button type="button" class="pull-left btn btn-default" id="sendEmail">ارسال
                                <i class="fa fa-arrow-circle-left"></i></button>
                        </div>
                    </div>

                </section>
                <!-- /.right col -->
                <!-- left col (We are only adding the ID to make the widgets sortable)-->
                <section class="col-lg-5 connectedSortable">

                    <!-- solid sales graph -->
                    <div class="box box-solid bg-teal-gradient">
                        <div class="box-header">
                            <i class="fa fa-th"></i>

                            <h3 class="box-title">نمودار فروش</h3>

                            <div class="box-tools pull-left">
                                <button type="button" class="btn bg-teal btn-sm" data-widget="collapse"><i
                                        class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn bg-teal btn-sm" data-widget="remove"><i
                                        class="fa fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="box-body border-radius-none">
                            <div class="chart" id="line-chart" style="height: 250px;"></div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer no-border">
                            <div class="row">
                                <div class="col-xs-4 text-center" style="border-left: 1px solid #f4f4f4">
                                    <input type="text" class="knob" data-readonly="true" value="20" data-width="60"
                                           data-height="60"
                                           data-fgColor="#39CCCC">

                                    <div class="knob-label">سفارش ایمیلی</div>
                                </div>
                                <!-- ./col -->
                                <div class="col-xs-4 text-center" style="border-left: 1px solid #f4f4f4">
                                    <input type="text" class="knob" data-readonly="true" value="50" data-width="60"
                                           data-height="60"
                                           data-fgColor="#39CCCC">

                                    <div class="knob-label">سفارش آنلاین</div>
                                </div>
                                <!-- ./col -->
                                <div class="col-xs-4 text-center">
                                    <input type="text" class="knob" data-readonly="true" value="30" data-width="60"
                                           data-height="60"
                                           data-fgColor="#39CCCC">

                                    <div class="knob-label">سفارش فیزیکی</div>
                                </div>
                                <!-- ./col -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.box-footer -->
                    </div>
                    <!-- /.box -->

                    <!-- Calendar -->
                    <div class="box box-solid bg-green-gradient">
                        <div class="box-header">
                            <i class="fa fa-calendar"></i>

                            <h3 class="box-title">تقویم</h3>
                            <!-- tools box -->
                            <div class="pull-left box-tools">
                                <!-- button with a dropdown -->
                                <div class="btn-group">
                                    <button type="button" class="btn btn-success btn-sm dropdown-toggle"
                                            data-toggle="dropdown">
                                        <i class="fa fa-bars"></i></button>
                                    <ul class="dropdown-menu pull-left" role="menu">
                                        <li><a href="#">رویداد تازه</a></li>
                                        <li><a href="#">حذف رویدادها</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">نمایش تقویم</a></li>
                                    </ul>
                                </div>
                                <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i
                                        class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i
                                        class="fa fa-times"></i>
                                </button>
                            </div>
                            <!-- /. tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                            <!--The calendar -->
                            <div id="calendar" style="width: 100%"></div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer text-black">
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- Progress bars -->
                                    <div class="clearfix">
                                        <span class="pull-right">نمایشگاه</span>
                                        <small class="pull-left">90%</small>
                                    </div>
                                    <div class="progress xs">
                                        <div class="progress-bar progress-bar-green" style="width: 90%;"></div>
                                    </div>

                                    <div class="clearfix">
                                        <span class="pull-right">کمپین ۳۰ درصد</span>
                                        <small class="pull-left">70%</small>
                                    </div>
                                    <div class="progress xs">
                                        <div class="progress-bar progress-bar-green" style="width: 70%;"></div>
                                    </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-6">
                                    <div class="clearfix">
                                        <span class="pull-right">کمپین ایمیل</span>
                                        <small class="pull-left">60%</small>
                                    </div>
                                    <div class="progress xs">
                                        <div class="progress-bar progress-bar-green" style="width: 60%;"></div>
                                    </div>

                                    <div class="clearfix">
                                        <span class="pull-right">کمپین تجارت الکترونیک</span>
                                        <small class="pull-left">40%</small>
                                    </div>
                                    <div class="progress xs">
                                        <div class="progress-bar progress-bar-green" style="width: 40%;"></div>
                                    </div>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                    </div>
                    <!-- /.box -->

                </section>
                <!-- left col -->
            </div>
            <!-- /.row (main row) -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
