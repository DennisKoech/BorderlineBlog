@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light-50 sidebar collapse">
          <div class="sidebar-sticky pt-3">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active text-dark" href="#">
                  Users
                </a>
              </li>
             <li class="nav-item">
            <a class="nav-link text-dark" href="#">
              Flagged Posts
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="#">
              Posts
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="#">
              The Ban Zone
            </a>
          </li>
        </ul>
      </div>
    </nav>
</div>
</div>
@endsection