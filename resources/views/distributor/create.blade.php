@extends('dashboard.master')
@section('nav')
    @include('dashboard.nav')
    @section('page', 'Distributor')
@section('main')
    @include('dashboard.main')

    <!-- Table -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Distributor Form</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <div class="card border-1 m-3 pt-3">    
                    <form action="{{ route('distributors.store') }}" method="post" id="frmDist">
                        @csrf
                        <div class="mb-3 ms-3 me-3">
                            <label for="distributor" class="form-label">Distributor</label>
                            <input type="text" id="distributor" name="distributor" class="form-control" placeholder="Distributor's Name" aria-label="Distributor">
                        </div>
                        <div class="mb-3 ms-3 me-3">
                            <label for="dist_address" class="form-label">Address</label>
                            <textarea id="alamat" name="alamat" class="form-control" placeholder="Address" aria-label="Address"></textarea>
                        </div>
                        <div class="mb-3 ms-3 me-3">
                            <label for="dist_phone" class="form-label">Phone Number</label>
                            <input type="tel" id="telepon" name="telepon" class="form-control" placeholder="Phone Number" aria-label="Phone Number">
                        </div>
                        <div class="row ms-3 me-3 d-flex justify-content-end">
                            <div class="col-3">
                                <a href="{{ route('distributors.index') }}" type="button" class="btn bg-gradient-secondary w-100">Cancel</a>
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
      const form = document.getElementById('frmDist');
      const dist = document.getElementById('distributor');
      const addr = document.getElementById('alamat');
      const telp = document.getElementById('telepon');
      let pesan = '';

      function save(){
        if(dist.value === ""){
          dist.focus()
          swal("Incomplete Data", "Distributor's Name is still empty!", "error")
        }else if(addr.value === ""){
          addr.focus()
          swal("Incomplete Data", "Address is still empty!", "error")
        }else if(telp.value === ""){
          telp.focus()
          swal("Incomplete Data", "Phone Number is still empty!", "error")
        }else{
          form.submit();
        }
      }

      btnSave.onclick = function(){
        save();
      }

    </script>
@endsection