@section('title')
Data Jenis Perbaikan - Trucking Apps v2
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

            <a href="/jperbaikans/create" wire:navigate class="btn btn-md btn-success rounded shadow-sm border-0 mb-3">ADD NEW JENIS PERBAIKAN</a>
            <div class="card border-0 rounded shadow-sm">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead class="bg-dark text-white">
                            <tr>
                                <th scope="col">Jenis</th>
                                <th scope="col" style="width: 15%">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($jperbaikans as $jperbaikan)
                            <tr>
                                <td>{{ $jperbaikan->jenis }}</td>
                                <td class="text-center">
                                    <a href="/jperbaikans/edit/{{ $jperbaikan->id }}" wire:navigate class="btn btn-sm btn-primary">EDIT</a>
                                    {{-- <button class="btn btn-sm btn-danger">DELETE</button> --}}
                                    <button wire:click="destroy({{ $jperbaikan->id }})" class="btn btn-sm btn-danger">DELETE</button>
                                </td>
                            </tr>
                            @empty
                            <div class="alert alert-danger">
                                Data Jenis Perbaikan belum Tersedia.
                            </div>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $jperbaikans->links('vendor.pagination.bootstrap-5') }}
                </div>
            </div>
        </div>
    </div>
</div>
