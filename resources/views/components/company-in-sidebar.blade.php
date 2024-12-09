<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-edit"></i>
        <p>
            Категории компаний
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        @foreach($companyInSidebar as $item)
            <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>{{ $item->title }}</p>
                </a>
            </li>
        @endforeach
    </ul>
</li>
