@section('title')
Edit Jenis Perbaikan - Trucking Apps v2
@endsection

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <form wire:submit="update">

                        <div class="form-group mb-4">
                            <label class="fw-bold">JENIS</label>
                            <input type="text" class="form-control @error('jenis') is-invalid @enderror" wire:model="jenis" placeholder="Masukkan Jenis Perbaikan">

                            <!-- error message untuk jenis -->
                            @error('jenis')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
                        <button type="reset" class="btn btn-md btn-warning">RESET</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
