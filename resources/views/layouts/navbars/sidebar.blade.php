<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <!-- ACA VAN LOS HEADERS -->
  <div class="logo">
    <a href="https://creative-tim.com/" class="simple-text logo-normal">
      {{ __('Creative Tim') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'recarga' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('view.recarga') }}">
          <i class="material-icons">currency_exchange</i>
          <p>{{ __('Recarga') }}</p>
        </a>
      </li>
    </ul>
  </div>
</div>