
<div id="admin-side-menu" class="side-menu">
  <aside class="menu m-t-30 m-l-10">
    <p class="menu-label">General</p>
    <ul class="menu-list">
      <li>
        <a href="{{route('manage.dashboard')}}" class="{{Nav::isRoute('manage.dashboard')}}">Inicio</a>
      </li>
    </ul>

    <p class="menu-label">
      Content
    </p>
    <ul class="menu-list">
      <li><a href="{{route('posts.index')}}" class="{{Nav::isResource('posts', 2)}}">Blog Posts</a></li>
    </ul>

    <p class="menu-label">Administracion</p>
    <ul class="menu-list">
      <li><a href="{{route('users.index')}}" class="{{Nav::isResource('users')}}">Usuarios</a></li>
      <li>
          <a href="#" class="has-submenu {{Nav::hasSegment(['roles','permissions'], 2)}}">Roles &amp; Permisos</a>
          <ul class="submenu">
            <li><a href="{{route('roles.index')}}" class="{{Nav::isResource('roles')}}">Roles</a></li>
            <li><a href="{{route('permissions.index')}}" class="{{Nav::isResource('permissions')}}">Permisos</a></li>
          </ul>
      </li>
      
    
    </ul>
  </aside>
</div>
