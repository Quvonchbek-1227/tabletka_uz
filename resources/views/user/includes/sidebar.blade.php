<div class="quixnav">
    <div class="quixnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label first">Tikarg'i Bo'limler</li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                <i class="fa-solid fa-house-medical"></i>
                <span class="nav-text">Da'rixana</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('user.pharmacy.index') }}">Barliq Da'rixanalar</a></li>
                    <li><a href="{{ route('user.pharmacy.create') }}">Da'rixana Qosiw</a></li>
                    <li><a href="">Da'rixana Statistika</a></li>
                </ul>
            </li>
            <li class="nav-label"></li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                <i class="fa-solid fa-capsules"></i>
                <span class="nav-text">Da'riler</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('user.drugs.index') }}">Barliq Da'riler</a></li>
                    <li><a href="{{ route('user.drugs.create') }}">Da'ri Qosiw</a></li>
                    <li><a href="">Da'ri Statistika</a></li>
                </ul>
            </li>
            
        </ul>
    </div>


</div>