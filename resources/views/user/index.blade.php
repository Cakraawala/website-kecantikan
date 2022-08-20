@extends('layouts.main')

@section('title')
<title>Cakra | {{ $title }}</title>
@endsection
@section('content')

<div class="containerass" style="margin-bottom: 650px; margin-top:100px;">
    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    <h4><i class="fa fa-user">&nbsp;My Profile</i></h4>
                    <a href="/my-account/edit">Edit profile</a>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <td> Name </td>
                                <td> : </td>
                                <td> {{ $user->name ?? '-' }} </td>
                            </tr>
                            <tr>
                                <td> Username </td>
                                <td> : </td>
                                <td> {{ $user->username ?? '-' }} </td>
                            </tr>
                            <tr>
                                <td> Email </td>
                                <td> : </td>
                                <td> {{ $user->email ?? '-'  }} </td>
                            </tr>
                            <tr>
                                <td> No Telp </td>
                                <td> : </td>
                                <td> {{ $user->no_wa ?? '-' }} </td>
                            </tr>
                            <tr>
                                <td> Date Birth </td>
                                <td> : </td>
                                <td> {{ $user->tgl_lhr ?? '-' }} </td>
                            </tr>
                            <tr>
                                <td> Kode pos </td>
                                <td> : </td>
                                <td> {{ $user->code_pos ?? '-' }} </td>
                            </tr>
                            <tr>
                                <td> Full Address </td>
                                <td> : </td>
                                <td> {{ $user->address ?? '-' }} </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>


        </div>
    </div>
</div>
@endsection