@extends('core::layouts.app')
@section('title')
    {{ $title }}
@stop

@section('mFeedback') opened @stop

@section('css')
    @include('core::layouts.partials.datatables')
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
@stop

@section('js') 
    <script src="https://cdn.enterwind.com/template/epanel/js/lib/datatables-net/datatables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script>
        $(function() {
            $('#datatable').DataTable({
                order: [[ 0, "asc" ]], 
                processing: true,
                serverSide: true,
                ajax : '{!! request()->fullUrl() !!}?datatable=true', 
                columns: [
                    { data: 'pilihan', name: 'pilihan', className: 'table-check' },
                    // { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                    { data: 'nama', name: 'nama' },
                    { data: 'telepon', name: 'telepon' },
                    { data: 'email', name: 'email' },
                    { data: 'pesan', name: 'pesan' },
                    { data: 'tanggal', name: 'tanggal', className: 'table-date small' },
                    { data: 'aksi', name: 'aksi', className: 'tombol', orderable: false, searchable: false }
                ],
                "fnDrawCallback": function( oSettings ) {
                    @include('core::layouts.components.callback')
                    $('.ajax-popup-link').magnificPopup({
                        type: 'ajax',
                        closeOnBgClick: false 
                    });
                }
            });
        });
        @include('core::layouts.components.hapus')
    </script>
@stop

@section('content')

    @if(!$data->count())

        @include('core::layouts.components.kosong', [
            'icon' => 'font-icon font-icon-comment',
            'judul' => $title,
            'subjudul' => 'Sepertinya Anda belum memiliki '.str_replace('Modul ', 'data ', $title).'.', 
        ])

    @else
        
        {!! Form::open(['method' => 'delete', 'route' => ["$prefix.destroy", 'hapus-all'], 'id' => 'submit-all']) !!}

            @include('core::layouts.components.top', [
                'judul' => $title,
                'subjudul' => 'Berikut ini adalah daftar seluruh data yang telah tersimpan di dalam database.',
                'hapus' => true
            ])

            <div class="card">
                <div class="card-block table-responsive">
                    <table id="datatable" class="display table table-striped" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th class="table-check"></th>
                                {{-- <th width="1%">NO</th> --}}
                                <th width="22%">NAMA</th>
                                <th>TELEPON</th>
                                <th>EMAIL</th>
                                <th>ISI PESAN</th>
                                <th></th>
                                <th width="1"></th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
            
        {!! Form::close() !!}
    @endif
@endsection
