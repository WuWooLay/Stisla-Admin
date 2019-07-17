<!-- DashBoard DropDown Start -->
<li class="dropdown">
    <a href="#" class="nav-link has-dropdown"><i class="{{ $icon }}"></i><span>{{ $title }}</span></a>
    
    <ul class="dropdown-menu">
        @foreach ($lists as $list)
            <li><a class="nav-link" href="{{$list['href']}}">{{$list['name']}}</a></li>
        @endforeach
    </ul>

    {{ $slot }}
</li>
<!-- DashBoard DropDown End-->