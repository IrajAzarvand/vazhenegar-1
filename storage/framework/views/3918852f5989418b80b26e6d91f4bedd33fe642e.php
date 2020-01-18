


<!-- ******* All JS Files ******* -->

<!-- jQuery js -->
<script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>

<!-- Popper js -->
<script src="<?php echo e(asset('js/popper.min.js')); ?>"></script>

<!-- Bootstrap js -->
<script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>

<!-- All js -->
<script src="<?php echo e(asset('js/uza.bundle.js')); ?>"></script>

<!-- Active js -->
<script src="<?php echo e(asset('js/default-assets/active.js')); ?>"></script>


<script src="js/persian-date.min.js"></script>

<!-- Datepicker main script -->
<!-- ------------------------------------------------------------------------------------ -->
<script src="js/persian-datepicker.js"></script>

<!-- Init datepicker -->
<!-- ------------------------------------------------------------------------------------ -->
<script type="text/javascript">
    $(document).ready(function () {
        let pd;
        pd = $('.date_picker').persianDatepicker({
            // altField: '#DTAlt',
            // altFormat: 'YYYY-MM-DD',
            initialValue: false,
            observer: false,
            format: 'YYYY - MM - DD',
            autoClose: true,
            calendar: {
                persian: {
                    enabled: true,
                    locale: 'fa',
                    showHint: true,
                    leapYearMode: "astronomical"
                }
            },
            dayPicker: {
                enabled: true
            },
            yearPicker: {
                enabled: true
            },
            timePicker: {
                enabled: false,
                meridian: {
                    enabled: false
                }
            },

        });
    });

</script>
<!-- ------------------------------------------------------------------------------------ -->

<?php /**PATH E:\Projects\vazhenegar\Main Project\resources\views\vazhenegar\layout\Scripts.blade.php ENDPATH**/ ?>