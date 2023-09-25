@section('title')
Trucking Apps v2 | Data Armada
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

            <a href="/armadas/create" wire:navigate class="btn btn-md btn-success rounded shadow-sm border-0 mb-3">TAMBAH ARMADA</a>
            <div class="card border-0 rounded shadow-sm">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead class="bg-dark text-white">
                            <tr>
                                <th scope="col">Merk</th>
                                <th scope="col">Nopol</th>
                                <th scope="col" style="width: 15%">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($armadas as $armada)
                            <tr>
                                <td>{{ $armada->merk }}</td>
                                <td>{{ $armada->nopol }}</td>
                                <td class="text-center">
                                    <a href="/armadas/edit/{{ $armada->id }}" wire:navigate class="btn btn-sm btn-primary">EDIT</a>
                                    {{-- <button class="btn btn-sm btn-danger">DELETE</button> --}}
                                    <button wire:click="destroy({{ $armada->id }})" class="btn btn-sm btn-danger">DELETE</button>
                                </td>
                            </tr>
                            @empty
                            <div class="alert alert-danger">
                                Data Armada belum tersedia
                            </div>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $armadas->links('vendor.pagination.bootstrap-5') }}
                </div>
            </div>
        </div>
    </div>
</div>
