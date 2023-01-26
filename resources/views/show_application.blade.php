@extends('layouts.app')

@section('title')
  YOUR APPLICATION
@endsection

@section('content')
  @include('layouts.navbar')
  <style>
    .push-top {
      margin-top: 30px;
    }

    .header {
      padding: 20px;
      text-align: center;
    }

    .td {
      align: center;
    }
  </style>
  <div class="header">
    <h1>STUDENT APPLICATION DETAILS</h1>
  </div>
  <div class="push-top">
    @if (session()->get('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}
      </div><br />
    @endif
    <table class="table">

      @foreach ($applications as $row)
        <tr>
          <th>NO</th>
          <td>{{ $row->id }}</td>
        </tr>
        <tr>
          <th>Level</th>
          <td>{{ $row->level }}</td>
        </tr>
        <tr>
          <th>Nationality</th>
          <td>{{ $row->nationality }}</td>
        </tr>
        <tr>
          <th>Campus</th>
          <td>{{ $row->campus }}</td>
        </tr>
        <tr>
          <th>
            Programme 1
          </th>
          <td>{{ $row->programme1 }}</td>
        </tr>
        <tr>
          <th>Programme 2</th>
          <td>{{ $row->programme2 }}</td>
        </tr>
        <tr>
          <th>Programme 3</th>
          <td>{{ $row->programme3 }}</td>
        </tr>
        <tr>
          <th>Full Name</th>
          <td>{{ $row->fullname }}</td>
        </tr>
        <tr>
          <th>NRIC</th>
          <td>{{ $row->nric }}</td>
        </tr>
        <tr>
          <th>Contact Number</th>
          <td>{{ $row->phone }}</td>
        </tr>
        <tr>
          <th>Email</th>
          <td>{{ $row->email }}</td>
        </tr>
        <tr>
          <th>Document</th>
          <td>{{ $row->files }}</td>
        </tr>
        <tr>
          <th>Guardian Name</th>
          <td>{{ $row->guardianname }}</td>
        </tr>
        <tr>
          <th>Guardian NRIC</th>
          <td>{{ $row->guardiannric }}</td>
        </tr>
        <tr>
          <th>Guardian Contact Number</th>
          <td>{{ $row->guardianphone }}</td>
        </tr>
        <tr>
          <th>Guardian Email</th>
          <td>{{ $row->guardianemail }}</td>
        </tr>
        <tr>
          <td>
            <a href="/application/{{ $row->id }}/edit" class="btn btn-secondary" target="_blank">Update</a>

          </td>
          <td><a href="/application/{{ $row->id }}/destroy" class="btn btn-danger" title="Delete Application"
              onclick="return confirm('Confirm to delete?')">Delete</a></td>
        </tr>
      @endforeach
    </table>
  </div>
  @include('layouts.footer')
@endsection
