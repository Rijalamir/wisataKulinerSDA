<div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://ui-avatars.com/api/?name={{ auth()->user()->name }}" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">{{ auth()->user()->name }}</p>
          <p class="app-sidebar__user-designation">Administrator</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item active" href="{{ route('dashboard') }}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>

        <li><a class="app-menu__item" href="{{ route('kategori.index') }}"><i class="app-menu__icon fa fa-list"></i><span class="app-menu__label">Kategori</span></a></li>
  
        <li><a class="app-menu__item" href="{{ route('namatempat.index') }}"><i class="app-menu__icon fa fa-list"></i><span class="app-menu__label">Nama Tempat Kuliner</span></a></li>
      
        <li><a class="app-menu__item" href="{{ route('namakuliner.index') }}"><i class="app-menu__icon fa fa-list"></i><span class="app-menu__label">Nama Data Kuliner</span></a></li>
      </ul>
      
        