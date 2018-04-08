@extends('templates.main')
@section('main')
  <main>
    <ul class="list-inline text-center mt-2">
      <li class="list-inline-item"><span class="fa fa-globe"></span> Publish</li>
      <li class="list-inline-item" ng-click="edit_details=1"><span class="fa fa-edit"></span> Edit</li>
      <li class="list-inline-item"><span class="fa fa-close"></span> Close</li>
    </ul>
    <iframe src="http://localhost/personal/">
      <p>Your browser does not support iframes.</p>
    </iframe>
    <ul class="list-inline text-center mt-2">
      <li class="list-inline-item"><span class="fa fa-globe"></span> Publish</li>
      <li class="list-inline-item"><span class="fa fa-edit"></span> Edit</li>
      <li class="list-inline-item"><span class="fa fa-close"></span> Close</li>
    </ul>
  </main>
@endsection
