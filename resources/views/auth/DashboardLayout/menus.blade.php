@php
    $user_menus=\App\UserMenu::where('Role_id',Auth::user()->Role)
                               ->where('Department_id',Auth::user()->Department)
                                ->get(['Url', 'MenuItem']);
foreach ($user_menus as $menu){
    echo $menu->MenuItem;
    echo '<br/>';
    echo $menu->Url;
    echo '<br/>';
}
@endphp
