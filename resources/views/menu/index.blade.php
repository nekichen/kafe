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
                        <a href="{{ route('menus.create') }}" class="badge badge-sm bg-gradient-primary mb-3 fs-6">Add New
                            Item</a>
                        <h6>Menus Data</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0" id="data">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No
                                        </th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Menu</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Category</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Price</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Stock</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            First Image</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Second Image</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Third Image</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Description</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Action</th>
                                        <!-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employed</th> -->
                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($menu as $idx => $data)
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    {{ $idx + 1 . '. ' }}
                                                </div>
                                            </td>
                                            @if (strlen($data->menu) > 18)
                                                <td data-bs-toggle="tooltip" data-bs-placement="right"
                                                    data-bs-custom-class="custom-tooltip"
                                                    data-bs-title="{{ $data->menu }}" style="cursor: help;">
                                                    {{ substr($data->menu, 0, 18) . '...' }}
                                                </td>
                                            @else
                                                <td>
                                                    {{ $data->menu }}
                                                </td>
                                            @endif
                                            @if (strlen($data->jenis) > 5)
                                                <td data-bs-toggle="tooltip" data-bs-placement="right"
                                                    data-bs-custom-class="custom-tooltip"
                                                    data-bs-title="{{ $data->jenis }}" style="cursor: help">
                                                    {{ substr($data->jenis, 0, 5) . '...' }}
                                                </td>
                                            @else
                                                <td>
                                                    {{ $data->jenis }}
                                                </td>
                                            @endif
                                            <td>
                                                {{ $data->harga }}
                                            </td>
                                            <td>
                                                {{ $data->stok }}
                                            </td>
                                            <td>
                                                <img src="storage/{{ $data->foto1 }}" alt="{{ $data->foto1 }}"
                                                    class="w-50 img-thumbnail zoom" data-bs-toggle="modal"
                                                    data-bs-target="#foto1_{{ $data->id }}">
                                            </td>
                                            <td>
                                                <img src="storage/{{ $data->foto2 }}" alt="{{ $data->foto2 }}"
                                                    class="w-50 img-thumbnail zoom" data-bs-toggle="modal"
                                                    data-bs-target="#foto2_{{ $data->id }}">
                                            </td>
                                            <td>
                                                <img src="storage/{{ $data->foto3 }}" alt="{{ $data->foto3 }}"
                                                    class="w-50 img-thumbnail zoom" data-bs-toggle="modal"
                                                    data-bs-target="#foto3_{{ $data->id }}">
                                            </td>
                                            @if (strlen($data->deskripsi) > 18)
                                                <td data-bs-toggle="tooltip" data-bs-placement="right"
                                                    data-bs-custom-class="custom-tooltip"
                                                    data-bs-title="{{ $data->deskripsi }}" style="cursor: help;">
                                                    {{ substr($data->deskripsi, 0, 18) . '...' }}
                                                </td>
                                            @else
                                                <td>
                                                    {{ $data->deskripsi }}
                                                </td>
                                            @endif
                                            <td class="align-middle text-center text-sm">
                                                <span class="badge badge-sm bg-gradient-success">Edit</span>
                                                <span class="badge badge-sm bg-gradient-danger">Delete</span>
                                            </td>
                                        </tr>
                                        {{-- Modal Foto1 --}}
                                        <div class="modal fade" id="foto1_{{ $data->id }}" tabindex="-1"
                                            aria-labelledby="foto1_{{ $data->id }}label" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <img src="storage/{{ $data->foto1 }}" alt="{{ $data->foto1 }}"
                                                            class="w-100">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Modal foto2 --}}
                                        <div class="modal fade" id="foto2_{{ $data->id }}" tabindex="-1"
                                            aria-labelledby="foto2_{{ $data->id }}label" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <img src="storage/{{ $data->foto2 }}" alt="{{ $data->foto2 }}"
                                                            class="w-100">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Modal foto3 --}}
                                        <div class="modal fade" id="foto3_{{ $data->id }}" tabindex="-1"
                                            aria-labelledby="foto3_{{ $data->id }}label" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <img src="storage/{{ $data->foto3 }}" alt="{{ $data->foto3 }}"
                                                            class="w-100">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <input type="hidden" id="status" class="form-control"
            value="@isset($status){{ $status }}@endisset">
        <input type="hidden" id="pesan" class="form-control"
            value="@isset($pesan){{ $pesan }}@endisset">

        <script>
            const body = document.getElementById('master')
            const status = document.getElementById('status')
            const pesan = document.getElementById('pesan')

            function save() {
                if (status.value === 'save') {
                    swal("Good Job!", pesan.value, "success")
                }
            }
            body.onload = function() {
                save()
            }
        </script>
    </div>


    <!-- Tutup table -->

    <footer class="footer pt-3  ">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-6 mb-lg-0 mb-4">
                    <div class="copyright text-center text-sm text-muted text-lg-start">
                        ©
                        <script>
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
                            <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative
                                Tim</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted"
                                target="_blank">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/blog" class="nav-link text-muted"
                                target="_blank">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted"
                                target="_blank">License</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    </div>

@endsection
