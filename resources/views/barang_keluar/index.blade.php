@extends('temp_source.master')
@section('content')
<div class="card">
    <div class="card-body">
        <div class="d-flex justify-content-end">
            <button type="button" class="btn btn-primary" id="btn-add-negara">
                <i class="las la-plus fs-2x"></i>
                Tambah Data
            </button>
        </div>
        <!--begin::Body-->
        <!--begin::Table container-->
        <div class="table-responsive">
            <!--begin::Table-->
            <table class="table table-striped table-row-gray-100 align-middle gs-4 gy-3 w-100">
                <thead class="fw-bolder table-primary opacity-50">
                    <th width="4%">No.</th>
                    <th width="">Nama Barang</th>
                    <th width="">Tanggal Keluar</th>
                    <th width="">Stok</th>
                </thead>
            </table>
            <!--end::Table-->
        </div>
        <!--end::Table container-->
    </div>
    <!--begin::Body-->
</div>

<div class="modal fade" id="modalNegara" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <div class="modal-content rounded">
            <div class="modal-header pb-0 border-0 justify-content-end">
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <span class="svg-icon svg-icon-1"></span>
                </div>
            </div>
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <form id="formNegara" class="form" method="POST">
                    @csrf
                    <div class="mb-13 text-center">
                        <h1 class="mb-3" id="txt-1">Data Negara</h1>
                    </div>
                    <input type="hidden" name="id_negara" id="id_negara">
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                            <span class="required">Nama Negara</span>
                        </label>
                        <input id="nama" type="text" class="form-control form-control"
                            placeholder="Nama Negara..." name="nama" />
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="fs-6 fw-bold mb-2">
                            <span class="required">Deskripsi</span>
                        </label>
                        <textarea id="deskripsi" class="form-control form-control" rows="3" name="deskripsi" placeholder="Deskripsi..."></textarea>
                    </div>
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="fs-6 fw-bold mb-2">
                            <span class="required">Upload Gambar</span>
                        </label>
                        <input id="gambar" type="file" class="form-control form-control" name="gambar"
                            value="gambar" />
                    </div>
                    <div class="text-center">
                        <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
                            <span class="indicator-label">Simpan</span>
                            <span class="indicator-progress">Tunggu...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

