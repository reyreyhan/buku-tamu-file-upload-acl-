<div class="sidebar" data-color="purple" data-background-color="white" data-image="{{ asset('assets/img/sidebar-1.jpg')}}">
    <!--
Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

Tip 2: you can also add an image using data-image tag
-->
    <div class="logo">
        <a href="" class="simple-text logo-normal">
            Admin Dashboard
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">

          <li class="nav-item  active">
              <a class="nav-link" href="{{ url('/profile ')}}">
                  <i class="material-icons">account_circle</i>
                  <p>Profile</p>
              </a>
          </li>

            @if(session('sessionUser')[0]->role->role == "Admin")
            <li class="nav-item  active">
                <a class="nav-link" href="{{ url('/admin ')}}">
                    <i class="material-icons">assignment_ind</i>
                    <p>User Control</p>
                </a>
            </li>
            @endif

            <li class="nav-item  active">
                <a class="nav-link" href="{{ url('/visitor ')}}">
                    <i class="material-icons">dashboard</i>
                    <p>Input Visitor</p>
                </a>
            </li>

            <li class="nav-item  active">
                <a class="nav-link" href="{{ url('/masuk/logout ')}}">
                    <i class="material-icons">block</i>
                    <p>Logout</p>
                </a>
            </li>

        </ul>
    </div>
</div>
