{{--================ Badges For Customer ====================================--}}
<!-- Small boxes (Stat box) -->
<div class="row">
    {{--==================== Current Orders ================================--}}

    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua-gradient">
            <div class="inner">
            @php/*count of orders that added by user and not complete yet will show here - fill from badges quantification in shared folder*/@endphp
                <h3 id="CustomerCurrentOrders"></h3>

                <p>سفارشات جاری</p>
            </div>
            <div class="icon">
                <i class="fa fa-pencil-square-o"></i>
            </div>
            <a href="{{route('OL',[DashboardCurrentUser::$RoleId, '1',DashboardCurrentUser::$id])}}" class="small-box-footer">اطلاعات بیشتر <i
                    class="fa fa-arrow-circle-left"></i></a>
        </div>
    </div>
    <!-- ./col -->
    {{--=================== Finished Orders =================================--}}

    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green-gradient">
            <div class="inner">

                @php/*count of orders that added by user and not complete yet will show here - fill from badges quantification in shared folder*/@endphp
                <h3 id="CustomerFinishedOrders"></h3>

                <p>سفارشات تکمیل شده</p>
            </div>
            <div class="icon">
                <i class="fa fa-check-square-o"></i>
            </div>
            <a href="{{route('OL',[DashboardCurrentUser::$RoleId, '8',DashboardCurrentUser::$id])}}" class="small-box-footer">اطلاعات بیشتر <i
                    class="fa fa-arrow-circle-left"></i></a>
        </div>
    </div>
    <!-- ./col -->
    {{--==================== Messages ================================--}}

    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow-gradient">
            <div class="inner">
                <h3 id="CustomerMessages">0</h3>

                <p>پیام ها</p>
            </div>
            <div class="icon">
                <i class="fa fa-envelope-open-o"></i>
            </div>
            <a href="#" class="small-box-footer">اطلاعات بیشتر <i
                    class="fa fa-arrow-circle-left"></i></a>
        </div>
    </div>
    <!-- ./col -->
    {{--=================== Invoices  =================================--}}

    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-light-blue-gradient">
            <div class="inner">
                <h3 id="CustomerInvoices"></h3>

                <p>فاکتورها</p>
            </div>
            <div class="icon">
                <i class="fa fa-money"></i>
            </div>
            <a href="{{route('OL',[DashboardCurrentUser::$RoleId, '2',DashboardCurrentUser::$id])}}" class="small-box-footer">اطلاعات بیشتر <i
                    class="fa fa-arrow-circle-left"></i></a>
        </div>
    </div>
    <!-- ./col -->
</div>
<!-- /.row -->
{{--=================== End Of Customer Badges   =================================--}}
