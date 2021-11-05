@extends('layout.master')
@section('title')
    Family Status
@endsection
@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4>Family Status Table</h4>
        </div>
        <div class="card-body">
          <div class="form-group">

          <div class="table-responsive">
            <table class="table table-striped" id="table-1">
              <thead>                                 
                <tr>
                  <th class="text-center">
                    Family Status (PTKP)
                  </th>
                  <th>Type</th>
                  <th>Value</th>
                  <th>Employee</th>
                  <th>Employee ID</th>
                </tr>
              </thead>
              <tbody>                                 
                <tr>
                  <td class="text-center">
                    TK0
                  </td>
                  <td>Not Married, No Responsibilities</td>
                  <td>
                    Rp. 54.000.000
                  </td>
                  <td>
                    Mamang Kesbor, KimKim, Putra
                  </td>
                </tr>
                <tr>
                  <td class="text-center">
                    TK1
                  </td>
                  <td>Not Married, 1 Responsibility</td>
                  <td>
                    Rp. 58.500.000
                  </td>
                  <td>
                    Mamang Kesbor, KimKim, Putra
                  </td>
                </tr>
                <tr>
                  <td class="text-center">
                    TK2
                  </td>
                  <td>Not Married, 2 Responsibilities</td>
                  <td>
                    Rp. 63.000.000
                  </td>
                  <td>
                    Mamang Kesbor, KimKim, Putra
                  </td>
                </tr>
                <tr>
                  <td class="text-center">
                    TK3
                  </td>
                  <td>Not Married, 3 Responsibilities</td>
                  <td>
                    Rp. 67.500.000
                  </td>
                  <td>
                    Mamang Kesbor, KimKim, Putra
                  </td>
                </tr>
                <tr>
                  <td class="text-center">
                    K0
                  </td>
                  <td>Married, No Responsibilities</td>
                  <td>
                    Rp. 58.500.000
                  </td>
                  <td>
                    Mamang Kesbor, KimKim, Putra
                  </td>
                </tr>
                <tr>
                  <td class="text-center">
                    K1
                  </td>
                  <td>Married, 1 Responsibility</td>
                  <td>
                    Rp. 63.000.000
                  </td>
                  <td>
                    Mamang Kesbor, KimKim, Putra
                  </td>
                </tr>
                <tr>
                  <td class="text-center">
                    K2
                  </td>
                  <td>Married, 2 Responsibilities</td>
                  <td>
                    Rp. 67.500.000
                  </td>
                  <td>
                    Mamang Kesbor, KimKim, Putra
                  </td>
                </tr>
                <tr>
                  <td class="text-center">
                    K3
                  </td>
                  <td>Married, 3 Responsibilities</td>
                  <td>
                    Rp. 72.000.000
                  </td>
                  <td>
                    Mamang Kesbor, KimKim, Putra
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection