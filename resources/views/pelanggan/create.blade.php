@extends('dashboard.master')
@section('nav')
    @include('dashboard.nav')
    @section('page', 'Customers')
@section('main')
    @include('dashboard.main')

    <!-- Table -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Customers Form</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <div class="card border-1 m-3 pt-3">    
                    <form action="" method="post">
                        <div class="mb-3 ms-3 me-3">
                            <label for="fullname" class="form-label">Full Name</label>
                            <input type="text" id="fullname" name="fullname" class="form-control" placeholder="Full Name" aria-label="Full Name">
                        </div>
                        <div class="mb-3 ms-3 me-3">
                            <label for="address1" class="form-label">Address</label>
                            <textarea id="address1" name="address1" class="form-control" placeholder="Address" aria-label="Address"></textarea>
                        </div>
                        <div class="mb-3 ms-3 me-3">
                            <label for="address2" class="form-label">Second Address</label>
                            <textarea id="address2" name="address2" class="form-control" placeholder="Second Address" aria-label="Second Address"></textarea>
                        </div>
                        <div class="mb-3 ms-3 me-3">
                            <label for="address3" class="form-label">Third Address</label>
                            <textarea id="address3" name="address3" class="form-control" placeholder="Third Address" aria-label="Third Address"></textarea>
                        </div>
                        <div class="mb-3 ms-3 me-3">
                            <label for="phone_number" class="form-label">Phone Number</label>
                            <input type="tel" id="phone_number" name="phone_number" class="form-control" placeholder="Phone Number" aria-label="Phone Number">
                        </div>
                        <div class="mb-3 ms-3 me-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" id="username" name="username" class="form-control" placeholder="Username" aria-label="Username">
                        </div>
                        <div class="mb-3 ms-3 me-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" id="password" name="password" class="form-control" placeholder="Password" aria-label="Password">
                        </div>
                        <div class="mb-3 ms-3 me-3">
                            <label for="photo" class="form-label">Photo</label>
                            <input type="file" id="photo" name="photo" class="form-control" placeholder="Photo" aria-label="Photo">
                        </div>
                        <div class="row ms-3 me-3 d-flex justify-content-end">
                            <div class="col-3">
                                <a href="{{ route('customers.index') }}" type="button" class="btn bg-gradient-secondary w-100">Cancel</a>
                            </div>
                            <div class="col-3">
                                <button type="button" class="btn bg-gradient-primary w-100">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

<!-- Tutup table -->

      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                for a better web.
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
@endsection