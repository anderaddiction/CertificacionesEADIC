@extends('adminlte::page')

@section('title', __('Certificate State'))

@section('content_header')
<h1>{{ __('Certificate State') }}</h1>
@stop

@section('content')
    <div class="container-fluid">
        <!-- DATATABLE EXAMPLE -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">{{ __('Certificate State Table') }}</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="col-sm-1 mb-3">
                    <a href="{{ route('certificate_status.create') }}" class="btn btn-block bg-gradient-primary" title="{{ __('Add') }}"><i
                            class="fas fa-pencil"></i></a>
                </div>
                <div class="col-12 mb-3">
                    @if (session()->has('Success'))
                    <div class="alert bg-teal alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h6><i class="icon fas fa-check"></i> Feliciades! {{ session('Success') }}</h6>
                    </div>
                    @endif
                </div>
                <table id="example2" class="table table-bordered table-hover dt-responsive nowrap">
                    <thead class="text-center">
                        <tr>
                            <th>ID</th>
                            <th>{{ __('Code') }}</th>
                            <th>{{ __('Name') }}</th>
                            <th>{{ __('Concepto') }}</th>
                            <th>{{ __('Status') }}</th>
                            <th>{{ __('Note') }}</th>
                            <th>{{ __('Created At') }}</th>
                            <th>{{ __('Action') }}</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($certificates as $certificate)
                            <tr>
                                <td>{{ $certificate->present()->id() }}</td>
                                <td>{{ $certificate->present()->code() }}</td>
                                <td>{{ $certificate->present()->name() }}</td>
                                <td>{{ $certificate->present()->concept() }}</td>
                                <td>{!! $certificate->present()->status() !!}</td>
                                <td>{{ $certificate->present()->note() }}</td>
                                <td>{{ $certificate->present()->createdAt() }}</td>
                                <td>
                                    <form action="{{ route('certificate_status.destroy', $certificate) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        {!! $certificate->present()->actionButtons() !!}
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot class="text-center">
                        <tr>
                            <th>ID</th>
                            <th>{{ __('Code') }}</th>
                            <th>{{ __('Name') }}</th>
                            <th>{{ __('Concepto') }}</th>
                            <th>{{ __('Status') }}</th>
                            <th>{{ __('Note') }}</th>
                            <th>{{ __('Created At') }}</th>
                            <th>{{ __('Action') }}</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
                the plugin.
            </div>
        </div>
        <!-- /.card -->
    </div>

@stop

@section('plugins.Select2', true)

@section('css')
{{-- Here your customs css --}}
@stop

@section('js')
<script>
    $(document).ready(function () {
        $("#example2").DataTable({
            "responsive": true,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        });
    });
</script>
@stop
