@extends('pegawai.layouts.default')

@section('content')

    <div class="mB-20">
        <a href="#" class="btn btn-info">
            <h5>Add Sertifikat +</h5>
        </a>
    </div>

    <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            
            <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </tfoot>
            
            <tbody>
                <tr>
                    <td>Admin</td>
                    <td>2</td>
                    <td>3</td>
                </tr>
            </tbody>
        
        </table>
    </div>

@endsection