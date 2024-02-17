@extends('dashboard.master')
@section('nav')
    @include('dashboard.nav')
    @section('page', 'Users')
@section('main')
    @include('dashboard.main')

    <!-- Table -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>User Form</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <div class="card border-1 m-3 pt-3">    
                    <form action="{{ route('users.store') }}" method="post" id="frmUser" autocomplete="off">
                        @csrf
                        <div class="mb-3 ms-3 me-3">
                            <label for="username" class="form-label">User Name</label>
                            <input type="text" id="username" name="nama" class="form-control" placeholder="Username" aria-label="Username" autocomplete="off">
                        </div>
                        <div class="mb-3 ms-3 me-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" id="password" name="password" class="form-control" placeholder="Password" aria-label="Password" autocomplete="off">
                        </div>
                        <div class="mb-3 ms-3 me-3">
                            <label for="level" class="form-label">Level</label>
                            <select class="form-select" aria-label="Default select example" name="level" id="level">
                            <option value="" selected>Select Level</option>
                            <option value="admin">Admin</option>
                            <option value="administrasi">Administrator</option>
                            <option value="kasir">Cashier</option>
                            <option value="manager">Manager</option>
                            </select>
                        </div>
                        
                        <div class="row ms-3 me-3 d-flex justify-content-end">
                            <div class="col-3">
                                <a href="{{ route('users.index') }}" type="button" class="btn bg-gradient-secondary w-100">Cancel</a>
                            </div>
                            <div class="col-3">
                                <button type="button" class="btn bg-gradient-primary w-100" id="save">Save</button>
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

    <script>
      const btnSave = document.getElementById('save');
      const form = document.getElementById('frmUser');
      const user = document.getElementById('username'); 
      const pass = document.getElementById('password');
      const lev = document.getElementById('level');

      let pesan = '';

      function save(){
        if(user.value === ""){
          user.focus()
          swal("Incomplete Data", "Username is required!", "error")
        }else if(pass.value === ""){
          pass.focus()
          swal("Incomplete Data", "Password is required!", "error")
        }else if(lev.value === ""){
          lev.focus()
          swal("Incomplete Data", "Level must be selected!", "error")
        }else{
          form.submit();
        }
      }

      btnSave.onclick = function(){
        save();
      }
    </script>
@endsection