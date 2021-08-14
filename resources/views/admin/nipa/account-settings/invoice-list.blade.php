@extends('admin.layouts.admin')

@section('content')

<div class="content-wrapper">
    <div class="container-fluid">

        <div class="page-wrapper">
            <div class="page-content">

                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">Orders</div>


                </div>
                <div class="breadcrumb-subtitle">
                    {{-- <p>Fill in the form below to specify the account details.</p> --}}
                </div>
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <h6 class="mb-0 text-uppercase">Archived Invoices</h6>
                        <hr>
                        <div class="card border-top border-0 border-4 border-white">
                            <div class="card-body">
                                <div class="table-responsive" style="padding-bottom: 212px;">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Order Id</th>
                                                <th scope="col">Invoice Id</th>
                                                <th scope="col">View Invoice</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $item)
                                            @php

                                            $inv=DB::table('order_addresses')->where('invoice_id',$item->invoice_id)->first();
                                            @endphp
                                            <tr>
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->invoice_id }}</td>
                                                <td>
                                                    <div>
                                                        @if ($item->order_status == "pending")
                                                        <a type="button" href=""
                                                            class="btn btn-danger waves-effect waves-light m-1"><span>Pending</span>
                                                        </a>
                                                        @endif
                                                        @if ($item->order_status == "accept")
                                                        <a type="button" href=""
                                                            class="btn btn-danger waves-effect waves-light m-1"><span>Accept</span>
                                                        </a>
                                                        @endif
                                                        @if ($item->order_status == "process")
                                                        <a type="button" href=""
                                                            class="btn btn-danger waves-effect waves-light m-1"><span>Process</span>
                                                        </a>
                                                        @endif
                                                        @if ($item->order_status == "complete")
                                                        <a type="button" href=""
                                                            class="btn btn-danger waves-effect waves-light m-1"><span>Complete</span>
                                                        </a>
                                                        @endif



                                                        <a type="button" href="{{ route('invoice_view',$item->id) }}"
                                                            class="btn btn-warning waves-effect waves-light m-1"><span>View</span>
                                                        </a>
                                                        <a type="button" href="{{route('order_status_edit',$item->id)}}"
                                                            class="btn btn-success waves-effect waves-light m-1"><i class="fa fa-pencil"></i><span>Edit Status</span>
                                                        </a>

                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--start overlay-->
        <div class="overlay"></div>
        <!--end overlay-->
    </div>
    <!-- End container-fluid-->
</div>

@endsection