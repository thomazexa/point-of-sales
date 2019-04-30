@extends('layouts.master')

@section('title')
    <title>Manajemen Produk</title>
@endsection

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manajemen Produk</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Produk</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        @card
                            @slot('title')
                            <a href="{{ url('produktransactionexcel/xls') }}"><button class="btn btn-success">Download Excel xls</button></a>
                            <a href="{{ url('produktransactionexcel/xlsx') }}"><button class="btn btn-success">Download Excel xlsx</button></a>
                            <a href="{{ url('produktransactionexcel/csv') }}"><button class="btn btn-success">Download CSV</button></a>
                            @endslot
                            
                            @if (session('success'))
                                @alert(['type' => 'success'])
                                    {!! session('success') !!}
                                @endalert
                            @endif
                            
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Supplier</th>
                                            <th>Stok Sebelum</th>
                                            <th>Barang Yang di terima</th>
                                            <th>Tanggal Terima</th>
                                            <th>Last Update</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 1; @endphp
                                        @forelse ($products as $row)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>
                                                <strong>{{ ucfirst($row->supplier_name) }}</strong>
                                            </td>
                                            <td>{{ $row->stock }}</td>
                                            <td>{{ $row->new_stock }}</td>
                                            <td>{{ $row->received_date }}</td>
                                            <td>{{ $row->updated_at }}</td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="7" class="text-center">Tidak ada data</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                            <div class="float-right">
                                {!! $products->links() !!}
                            </div>
                            @slot('footer')

                            @endslot
                        @endcard
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection