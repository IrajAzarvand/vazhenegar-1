@extends('auth.DashboardLayout.DashboardMasterLayout')

@php
    use Illuminate\Support\Facades\Auth;
    use App\Http\Controllers\DashboardMenuPicker;
    $user=new App\User;
    $CurrentUser=Auth::user();
    $CurrentUser->Mode='ON'; $CurrentUser->save();
    $Role=$CurrentUser->role()->value('RoleName');
    $UserFullName=$CurrentUser->FirstName .' '. $CurrentUser->LastName;
    $UserStatus=$CurrentUser->Status;
    $UserMode=$CurrentUser->Mode;
    $Menus= (new DashboardMenuPicker)->MenuPicker($CurrentUser);

@endphp

@section('Title', '- پنل '.$Role)



@section('content')
    {{--=========================================================--}}

    @include('auth.DashboardLayout.TopBar')

    {{--=========================================================--}}

    @include('auth.DashboardLayout.RightSideBar')

    {{--=========================================================--}}

    @include('auth.DashboardLayout.LeftSideBar')

    {{--======= Get Main Content of dashboard from dashboard elements according to user type ========--}}

    {{--    Content Wrapper. Contains page content--}}
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
        @switch($CurrentUser->role()->value('id'))
            {{--=============================== ِ Admin =======================================--}}

            @case(1)
            @include('auth.DashboardLayout.AdminBadges')
            @include('auth.DashboardLayout.OrdersList')

            <!-- Main row -->
                <div class="row">
                    <!-- right col -->
                    <section class="col-lg-7 connectedSortable">
                        @include('auth.DashboardLayout.Charts')
                        @include('auth.DashboardLayout.ChatBox')
                        @include('auth.DashboardLayout.EmailWidget')
                    </section>
                    <!-- /.right col -->


                    <!-- left col (We are only adding the ID to make the widgets sortable)-->
                    <section class="col-lg-5 connectedSortable">
                        @include('auth.DashboardLayout.Calendar')
                    </section>
                    <!-- left col -->

                </div>
                <!-- /.row (main row) -->



                @break
                {{--=============================== ِ Translator =======================================--}}

                @case(8)



                @break
                {{--=============================== ِ Customer =======================================--}}

                @case(11)



                @break
            @endswitch
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
