@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">User List</div>

                <div class="panel-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>E-Mail</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@section('scripts')
    <script>
        $(document).ready( function () {
            $('.table').DataTable({
                processing: true,
                serverSide: true,
                ajax : '{!! route('users.showall') !!}',
                columns: [
                    {{--  { data: 'id' , name: 'id' },
                    { data: 'name' , name: 'name' },
                    { data: 'email' , name: 'email' },  --}}
                    {{--  or use this  --}}
                    { data: 'id'},
                    { data: 'name'},
                    { data: 'email'},
                ],
            });
        });
    </script>
@endsection
@endsection
