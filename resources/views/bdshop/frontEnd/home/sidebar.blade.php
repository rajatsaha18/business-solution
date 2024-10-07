<div class="col-md-12 leftmenu-grid margin-bottom-15">
    <div
        class="width-100 bg-ash2 padding-6 border-radius-top-5 margin-top-15 text-center left-menu-heading">
        <h4>User Menu</h4>
    </div>
    <div class="width-100 leftnav border-top-dashed" id="myTopnav1">

        <a href="javascript:void(0);" class="icon margin-top-7-minus" style="text-align: center;"
            onclick="myFunction1()">View Yellow Pages Categories &nbsp; <h2>☰</h2></a>

        <a class="nav4txt" style="text-align: center; background-color: #f2f2f2;" href="{{route('user.info-profile')}}" target="_blank">Welcome {{Auth::user()->business_name ?? ''}}</a>
        <a class="nav4txt" style="text-align: center; background-color: #f2f2f2;" href="{{route('user.company-detail')}}" target="_blank">Add Company Details</a>
        <a class="nav4txt" style="text-align: center; background-color: #f2f2f2;" href="{{route('user.product-info.index')}}" target="_blank">My Product </a>
        <a class="nav4txt" style="text-align: center; background-color: #f2f2f2;" href="{{route('user.product-info.create')}}" target="_blank">Add Product </a>
        <a class="nav4txt" style="text-align: center; background-color: #f2f2f2;" href="{{route('user.my.package')}}" target="_blank">My Package </a>
        {{-- <a class="nav4txt" style="text-align: center; background-color: #f2f2f2;" href="#">Manage Product </a> --}}
        <a class="nav4txt" style="text-align: center; background-color: #f2f2f2;" href="{{route('user.info-change-password')}}" target="_blank">Change Password </a>
        @if(auth()->user() != null)
        <a class="nav4txt" style="text-align: center; background-color: #f2f2f2;" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Info User Logout </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
        @else
        <a class="nav4txt" style="text-align: center; background-color: #f2f2f2;" href="{{route('info-login')}}" target="_blank">Info User Login </a>
        @endif

    </div>
</div>
