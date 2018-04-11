@extends('templates.main')
@section('main')
  <main>
    <ul class="list-inline text-center mt-2">
      <li class="list-inline-item"><span class="fa fa-globe"></span> Publish</li>
      <li class="list-inline-item" ng-click="edit_details=1"><span class="fa fa-edit"></span> Edit</li>
      <li class="list-inline-item"><span class="fa fa-close"></span> Close</li>
    </ul>
    <iframe id="website-preview">
      <p>Your browser does not support iframes.</p>
    </iframe>
    <ul class="list-inline text-center mt-2">
      <li class="list-inline-item"><span class="fa fa-globe"></span> Publish</li>
      <li class="list-inline-item"><span class="fa fa-edit"></span> Edit</li>
      <li class="list-inline-item"><span class="fa fa-close"></span> Close</li>
    </ul>
  </main>
  <div id="wait" style="display:none;width:32px;height:32px;border:1px solid black;position:absolute;top:50%;left:50%;padding:2px;"><img src='/img/loading.gif' width="64" height="64" /><br>Loading..</div>
@endsection
