@section('title')
Trucking Apps v2 | Data Transaksi Perbaikan
@endsection

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">

            <!-- flash message -->
            @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @endif
            <!-- end flash message -->

            <a href="/tperbaikans/create" wire:navigate class="btn btn-md btn-success rounded shadow-sm border-0 mb-3">TAMBAH TRANSAKSI PERBAIKAN</a>
            <div class="card border-0 rounded shadow-sm">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead class="bg-dark text-white">
                            <tr>
                                <th scope="col">Nomor</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col" style="width: 15%">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($tperbaikans as $tperbaikan)
                            <tr>
                                <td>{{ $tperbaikan->nomor }}</td>
                                <td>{{ $tperbaikan->tanggal }}</td>
                                <td class="text-center">
                                    <a href="/tperbaikans/edit/{{ $tperbaikan->id }}" wire:navigate class="btn btn-sm btn-primary">EDIT</a>
                                    {{-- <button class="btn btn-sm btn-danger">DELETE</button> --}}
                                    <button wire:click="destroy({{ $tperbaikan->id }})" class="btn btn-sm btn-danger">DELETE</button>
                                </td>
                            </tr>
                            @empty
                            <div class="alert alert-danger">
                                Data Transaksi Perbaikan belum tersedia
                            </div>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $tperbaikans->links('vendor.pagination.bootstrap-5') }}
                </div>
            </div>
        </div>
    </div>
</div>
