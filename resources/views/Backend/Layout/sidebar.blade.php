<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{ route('master') }}">
        <i class='bx bxs-dashboard' ></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-box"></i><span>Products</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('Backend.product.add')}}">
              <i class="bi bi-circle"></i><span>Add Product</span>
            </a>
          </li>
          <li>
          <li>
            <a href="{{route('Backend.product.list')}}">
              <i class="bi bi-circle"></i><span>Product List</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
        <i class='bx bxs-category'></i><span>Category</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('Backend.category.create')}}">
              <i class="bi bi-circle"></i><span>Add Category</span>
            </a>
          </li>
          <li>
            <a href="{{route('Backend.category.list')}}">
              <i class="bi bi-circle"></i><span>Category List</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-cart-plus-fill"></i><span>Supplier</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('Backend.supplier.create')}}">
              <i class="bi bi-circle"></i><span>Add Supplier</span>
            </a>
          </li>
          <li>
            <a href="{{route('Backend.supplier.list')}}">
              <i class="bi bi-circle"></i><span>Supplier List</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-buildings-fill"></i><span>Company</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('Backend.company.create')}}">
              <i class="bi bi-circle"></i><span>Add Company</span>
            </a>
          </li>
          <li>
            <a href="{{route('Backend.company.list')}}">
              <i class="bi bi-circle"></i><span>Company List</span>
            </a>
          </li>
        </ul>
      </li><!-- End Charts Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class='bx bx-body'></i><span>Employee</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('auth.employee-register')}}">
              <i class="bi bi-circle"></i><span>Create Employee</span>
            </a>
          </li>
          <li>
            <a href="{{route('auth.show')}}">
              <i class="bi bi-circle"></i><span>Employee List</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#invoice-nav" data-bs-toggle="collapse" href="#">
          <i class='bx bx-body'></i><span>Invoice</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="invoice-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('Backend.invoice.invoice')}}">
              <i class="bi bi-circle"></i><span>Invoice</span>
            </a>
          </li>
          <li>
            <a href="{{route('Backend.invoice.return-product')}}">
              <i class="bi bi-circle"></i><span>Return Product</span>
            </a>
          </li>
          <li>
            <a href="{{route('Backend.invoice-list.items')}}">
              <i class="bi bi-circle"></i><span>Show invoice-Items</span>
            </a>
          </li>
          <li>
            <a href="{{route('Backend.invoice-list.invoice')}}">
              <i class="bi bi-circle"></i><span>Show invoice</span>
            </a>
          </li>
          <li>
            <a href="{{route('Backend.profit.show')}}">
              <i class="bi bi-circle"></i><span>Show Profits</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#Order-nav" data-bs-toggle="collapse" href="#">
          <i class='bx bx-body'></i><span>Orders</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="Order-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('Backend.order.index')}}">
              <i class="bi bi-circle"></i><span>Order</span>
            </a>
          </li>
          <li>
            <a href="{{route('Backend.invoice.return-product')}}">
              <i class="bi bi-circle"></i><span>Return Product</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#admin-nav" data-bs-toggle="collapse" href="#">
          <i class='bx bx-body'></i><span>Admins</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="admin-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('Backend.admin.create')}}">
              <i class="bi bi-circle"></i><span>Admin create</span>
            </a>
          </li>
          <li>
            <a href="{{route('Backend.admin.show')}}">
              <i class="bi bi-circle"></i><span>Admin show</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- End Icons Nav -->

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-faq.html">
          <i class="bi bi-question-circle"></i>
          <span>F.A.Q</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.html">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-register.html">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-login.html">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-error-404.html">
          <i class="bi bi-dash-circle"></i>
          <span>Error 404</span>
        </a>
      </li><!-- End Error 404 Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-blank.html">
          <i class="bi bi-file-earmark"></i>
          <span>Blank</span>
        </a>
      </li><!-- End Blank Page Nav -->

    </ul>

  </aside>