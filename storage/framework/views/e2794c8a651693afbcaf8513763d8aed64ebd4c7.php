
<!-- Small boxes (Stat box) -->
<div class="row">
    

    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua-gradient">
            <div class="inner">
            <?php/*count of orders that added by user and not complete yet will show here - fill from badges quantification in shared folder*/?>
                <h3 id="CustomerCurrentOrders"></h3>

                <p>سفارشات جاری</p>
            </div>
            <div class="icon">
                <i class="fa fa-pencil-square-o"></i>
            </div>
            <a href="<?php echo e(route('OL',['1',DashboardCurrentUser::$id])); ?>" class="small-box-footer">اطلاعات بیشتر <i
                    class="fa fa-arrow-circle-left"></i></a>
        </div>
    </div>
    <!-- ./col -->
    

    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green-gradient">
            <div class="inner">

                <?php/*count of orders that added by user and not complete yet will show here - fill from badges quantification in shared folder*/?>
                <h3 id="CustomerFinishedOrders"></h3>

                <p>سفارشات تکمیل شده</p>
            </div>
            <div class="icon">
                <i class="fa fa-check-square-o"></i>
            </div>
            <a href="<?php echo e(route('OL',['8',DashboardCurrentUser::$id])); ?>" class="small-box-footer">اطلاعات بیشتر <i
                    class="fa fa-arrow-circle-left"></i></a>
        </div>
    </div>
    <!-- ./col -->
    

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
    

    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-light-blue-gradient">
            <div class="inner">
                <h3 id="CustomerInvoices"></h3>

                <p>فاکتور ها</p>
            </div>
            <div class="icon">
                <i class="fa fa-money"></i>
            </div>
            <a href="<?php echo e(route('OL',['2',DashboardCurrentUser::$id])); ?>" class="small-box-footer">اطلاعات بیشتر <i
                    class="fa fa-arrow-circle-left"></i></a>
        </div>
    </div>
    <!-- ./col -->
</div>
<!-- /.row -->

<?php /**PATH D:\projects\vazhenegar\Main Project\resources\views/vazhenegar/DashboardElements/Customer/DashboardCustomerBadges.blade.php ENDPATH**/ ?>