<div>
    <form action="{{ route('tperbaikan.store') }}" method="POST">
        @csrf

        <div class="form-group {{ $errors->has('nomor') ? 'has-error' : '' }}">
            NOMOR
            <input type="text" name="nomor" class="form-control"
                   value="{{ old('nomor') }}" required>
            @if($errors->has('nomor'))
                <em class="invalid-feedback">
                    {{ $errors->first('nomor') }}
                </em>
            @endif
        </div>

        <div class="form-group {{ $errors->has('tanggal') ? 'has-error' : '' }}">
            TANGGAL
            <input type="date" name="tanggal" class="form-control"
                   value="{{ old('tanggal') }}">
            @if($errors->has('tanggal'))
                <em class="invalid-feedback">
                    {{ $errors->first('tanggal') }}
                </em>
            @endif
        </div>

        <div class="card">
            {{-- <div class="card-header">
                Detail Transaksi Perbaikan
            </div> --}}

            <div class="card-body">
                <table class="table" id="tperbaikandetail_table">
                    <thead>
                    <tr>
                        <th>Armada</th>
                        <th>Jenis Perbaikan</th>
                        <th>Jumlah</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($tperbaikandetails as $index => $tperbaikandetail)
                        <tr>
                            <td>
                                <select name="tperbaikandetails[{{$index}}][armada]" wire:model="tperbaikandetails.{{$index}}.armada" class="form-control">
                                    <option value="">-- choose Armada --</option>
                                    @foreach ($allArmadas as $armada)
                                        <option value="{{ $armada->id }}">
                                            {{ $armada->merk }} - {{ $armada->nopol }}
                                        </option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                <select name="tperbaikandetails[{{$index}}][jperbaikan]" wire:model="tperbaikandetails.{{$index}}.jperbaikan" class="form-control">
                                    <option value="">-- choose Jenis Perbaikan --</option>
                                    @foreach ($allJperbaikans as $jperbaikan)
                                        <option value="{{ $jperbaikan->id }}">
                                            {{ $jperbaikan->jenis }}
                                        </option>
                                    @endforeach
                                </select>
                            </td>
                            <td></td>
                            <td>
                                <a href="#" wire:click.prevent="removeTperbaikandetail({{$index}})">Delete</a>
                            </td>
                            {{-- <td>
                                <input type="number"
                                       name="orderProducts[{{$index}}][quantity]"
                                       class="form-control"
                                       wire:model="orderProducts.{{$index}}.quantity" />
                            </td>
                            <td>
                                <a href="#" wire:click.prevent="removeProduct({{$index}})">Delete</a>
                            </td> --}}
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-sm btn-secondary"
                            wire:click.prevent="addTperbaikandetail">Add Detail</button>
                    </div>
                </div>
            </div>
        </div>
        <br />
        <div>
            <input class="btn btn-primary" type="submit" value="Save Order">
        </div>
    </form>
</div>
