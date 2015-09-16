<header class="navbar navbar-inverse" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <a href="/" id="logo" class="navbar-brand">@lang('staticpage.app_name')</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="/">@lang('staticpage.home')</a></li>
      <li><a href="/help">@lang('staticpage.help')</a></li>
      @if(Auth::check())
        @if(Auth::user()->admin)
          <li><a href="#">@lang('auth.admin')</a></li>
        @endif
        <li><a href="auth/logout">@lang('staticpage.log_out')</a></li>
      @else
        <li><a href="auth/login">@lang('staticpage.log_in')</a></li>
      @endif
    </ul>
  </div>
</header>
