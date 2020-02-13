<?php $__env->startSection('Title', 'سفارشات دریافتی'); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('vazhenegar.DashboardCurrentUser', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('vazhenegar.DashboardAdminBadges', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="box box-primary">
    <div class="box-header">
        <i class="fa fa-star"></i>

        <h3 class="box-title">لیست سفارشات دریافتی</h3>
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
        <table class="table table-bordered" id="NewOrdersTable">
            <thead>
            <tr>
                <th scope="col">ردیف</th>
                <th scope="col">شماره سفارش</th>
                <th scope="col">موضوع</th>
                <th scope="col">تاریخ ثبت</th>
                <th scope="col">تاریخ تحویل</th>
                <th scope="col">زمینه</th>
                <th scope="col">زبان مبدا</th>
                <th scope="col">زبان مقصد</th>
                <th scope="col">عملیات</th>
            </tr>
            </thead>
            <tbody>
            <?php if(count($PaidOrdersList)==0): ?>
                <tr>
                    <td align='center' colspan='8'>هیچ فاکتوری پرداخت نشده است</td>

                </tr>
            <?php else: ?>
                <?php
                    $counter=1;
                 foreach($PaidOrdersList as $order){ //get from dashboard
                    echo '<tr>';
                    echo '<td>'.$counter++.'</td>';
                    echo '<td>'.$order['id'].'</td>';
                    echo '<td>'.$order['OrderSubject'].'</td>';
                    echo '<td class="NumberDirectionFixer">'.$order['RegisterDate'].'</td>';
                    echo '<td class="NumberDirectionFixer">'.$order['DeliveryDate'].'</td>';
                    echo '<td>'.$order['TranslationField'].'</td>';
                    echo '<td>'.$order['SourceLanguage'].'</td>';
                    echo '<td>'.$order['DestLanguage'].'</td>';
                    echo '<td>'.
                         '<a href="/dashboard/Order/'.$order['id'].'"><button type="button" class="btn btn-primary"><i class="fa fa-eye"></i></button></a>&nbsp'.
                         '<button type="button" class="btn btn-success"><i class="fa fa-arrow-down"></i></button>&nbsp'.
                         '<button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>&nbsp'.
                     '</td>';
                     echo '</tr>';
                 }
                ?>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
    <!-- /.box-body -->

</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.DashboardLayout.DashboardMasterLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Projects\vazhenegar\Main Project\resources\views/vazhenegar/DashboardAdminPaidInvoicesOrdersList.blade.php ENDPATH**/ ?>