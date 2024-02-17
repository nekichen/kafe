@extends('dashboard.master')
@section('nav')
    @include('dashboard.nav')
    @section('page', 'Menus')
@section('main')
    @include('dashboard.main')

    <!-- Table -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Menus Form</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <div class="card border-1 m-3 pt-3">    
                    <form action="" method="post">
                        <div class="mb-3 ms-3 me-3">
                            <label for="menu" class="form-label">Menu</label>
                            <input type="text" id="menu" name="menu" class="form-control" placeholder="Menu" aria-label="Menu">
                        </div>
                        <div class="ms-3 me-3">
                            <label for="jenis" class="form-label">Category's Name</label>
                            <div class="input-group">
                                <input style="height: 42px;border-radius: 10px 0 0 10px !important;" id="jenis" name="jenis" type="text" class="form-control" placeholder="Category's Name" aria-label="Category's Name" aria-describedby="button-addon2">
                                <button class="btn bg-gradient-warning" type="button" id="find-category">Find</button>
                            </div>
                        </div>
                        <div class="mb-3 ms-3 me-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" id="price" name="price" class="form-control" placeholder="Price" aria-label="Price">
                        </div>
                        <div class="mb-3 ms-3 me-3">
                            <label for="stock" class="form-label">Stock</label>
                            <input type="number" id="stock" name="stock" class="form-control" placeholder="Stock" aria-label="Stock">
                        </div>
                        <div class="mb-3 ms-3 me-3">
                            <label for="photo1" class="form-label">First Photo</label>
                            <input type="file" id="photo1" name="photo1" class="form-control" placeholder="First Photo" aria-label="First Photo">
                        </div>
                        <div class="mb-3 ms-3 me-3">
                            <label for="photo2" class="form-label">Second Photo</label>
                            <input type="file" id="photo2" name="photo2" class="form-control" placeholder="Second Photo" aria-label="Second Photo">
                        </div>
                        <div class="mb-3 ms-3 me-3">
                            <label for="photo3" class="form-label">Third Photo</label>
                            <input type="file" id="photo3" name="photo3" class="form-control" placeholder="Third Photo" aria-label="Third Photo">
                        </div>
                        <div class="row ms-3 me-3 d-flex justify-content-end">
                            <div class="col-3">
                                <a href="{{ route('categories.index') }}" type="button" class="btn bg-gradient-secondary w-100">Cancel</a>
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