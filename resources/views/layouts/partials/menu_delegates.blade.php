<div class="sidebar-wrapper">
      <div class="logo">
          <a href="{{ url('/') }}" class="simple-text">
              Rangers
          </a>
      </div>

      <ul class="nav">
          <li>
              <a href="{{ url('/') }}">
                  <i class="ti-panel"></i>
                  <p>Dashboard</p>
              </a>
          </li>
          <li>
              <a href="{{ url('/') }}">
                  <i class="ti-agenda"></i>
                  <p>Kelas Workshop</p>
              </a>
          </li>
          <li>
              <a href="{{ url('/') }}">
                  <i class="ti-face-smile"></i>
                  <p>Menu Makan</p>
              </a>
          </li>
          <li>
              <a href="{{ url('/') }}">
                  <i class="ti-bar-chart"></i>
                  <p>Voting Komunitas</p>
              </a>
          </li>
          <li>
              <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  <i class="ti-lock"></i>
                  <p>Logout</p>
              </a>
          </li>
      </ul>
</div>
@include('layouts.partials.logout_form')
