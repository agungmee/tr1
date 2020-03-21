@extends('layouts.app')
@section('title','Trade Retail | List Customers')


@section('content')
<div class="container-fluid">
<br><br>
<center><h1>List Customers</h1></center>
<table id="data_customers" class="table table-striped table-bordered table-hover" style="width:150%">
    <thead>
      <tr>
        <th scope="col">Cust Code</th>
        <th scope="col">Cust Name</th>
        <th scope="col">Site</th>
        <th scope="col">Address</th>
        <th scope="col">Region</th>
        <th scope="col">Phone</th>
        <th scope="col">Sales Code</th>
        <th scope="col">Sales Name</th>
        <th scope="col">Keterangan</th>
      </tr>
    </thead>
  </table>
</div>
<script>
    $(function() {
        $('#data_customers').DataTable({
            processing: true,
            serverSide: true,
            scrollY: "300px",
            scrollX: true,
            scrollCollapse: true,
            ajax: 'customers/json',
            columns: [
                        {data: 'cust_code', name: 'cust_code'},
                        {data: 'cust_name', name: 'cust_name'},
                        {data: 'cust_territory', name: 'cust_territory'},
                        {data: 'cust_address', name: 'cust_address'},
                        {data: 'cust_region', name: 'cust_region'},
                        {data: 'cust_phone', name: 'cust_phone'},
                        {data: 'sales_code', name: 'sales_code'},
                        {data: 'sales_name', name: 'sales_name'},
                        {data: 'keterangan', name: 'keterangan'},
            ]
        });
    });
</script>
@endsection
