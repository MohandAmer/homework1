@extends('site.app')
@push('css')
    <style>

    </style>
@endpush
@section('content')
<div class="contuner">
<div class="table-responsive table table-hover">
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th></th>
          <th>
            Extra small devices
            <small>Phones (&lt;768px)</small>
          </th>
          <th>
            Small devices
            <small>Tablets (&ge;768px)</small>
          </th>
          <th>
            Medium devices
            <small>Desktops (&ge;992px)</small>
          </th>
          <th>
            Large devices
            <small>Desktops (&ge;1200px)</small>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th class="text-nowrap" scope="row">Grid behavior</th>
          <td>Horizontal at all times</td>
          <td colspan="3">Collapsed to start, horizontal above breakpoints</td>
        </tr>
        <tr>
          <th class="text-nowrap" scope="row">Container width</th>
          <td>None (auto)</td>
          <td>750px</td>
          <td>970px</td>
          <td>1170px</td>
        </tr>
        <tr>
          <th class="text-nowrap" scope="row">Class prefix</th>
          <td><code>.col-xs-</code></td>
          <td><code>.col-sm-</code></td>
          <td><code>.col-md-</code></td>
          <td><code>.col-lg-</code></td>
        </tr>
        <tr>
          <th class="text-nowrap" scope="row"># of columns</th>
          <td colspan="4">12</td>
        </tr>
        <tr>
          <th class="text-nowrap" scope="row">Column width</th>
          <td class="text-muted">Auto</td>
          <td>~62px</td>
          <td>~81px</td>
          <td>~97px</td>
        </tr>
        <tr>
          <th class="text-nowrap" scope="row">Gutter width</th>
          <td colspan="4">30px (15px on each side of a column)</td>
        </tr>
        <tr>
          <th class="text-nowrap" scope="row">Nestable</th>
          <td colspan="4">Yes</td>
        </tr>
        <tr>
          <th class="text-nowrap" scope="row">Offsets</th>
          <td colspan="4">Yes</td>
        </tr>
        <tr>
          <th class="text-nowrap" scope="row">Column ordering</th>
          <td colspan="4">Yes</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@endsection

@push('js')
    <script>
        
    </script>
@endpush