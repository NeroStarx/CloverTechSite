@extends('index')
@section('content')

      <div class="content">
        <div class="container-fluid">
          <div class="row">
              <div class="col-md-12">
                  <div class="card">
                      <div class="card-header card-header-info">
                          <h4 class="card-title">Create Une Decision</h4>
                      </div>
                      <div class="card-body">
                          <form action="{{route('decision.store')}}" method="post" enctype="multipart/form-data">
                              {{csrf_field()}}
                              <div class="row">
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label class="bmd-label-floating">Id de Wilaya</label>
                                          <select name="wilaya_id" id="wilaya"class="form-control">
                                              @foreach($wilayas as $wilaya)

                                                  <option value="{{$wilaya->id}}">{{$wilaya->name}}</option>

                                              @endforeach
                                          </select>
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label class="bmd-label-floating">Title</label>
                                          <input type="text" name="title" class="form-control">
                                      </div>
                                  </div>
                              </div>
                              <div class="row">

                              <div class="col-md-8">
                                      <div class="form-group">
                                          <label class="bmd-label-floating">Content</label>
                                          <input type="text" id="value" name="value" class="form-control"></input>
                                      </div>
                                  </div>
                              </div>




                              <button type="submit" class="btn btn-info pull-right">Create Decision</button>
                              <div class="clearfix"></div>
                          </form>
                      </div>
                  </div>
              </div>
              <div class="col-md-12">
                  <div class="card">
                      <div class="card-header card-header-info "  >
                          <h4 class="card-title ">Update Decision</h4>
                      </div>
                      <div class="card-body">
                          <form action="{{route('decision.update')}}" method="post" enctype="multipart/form-data">
                              {{csrf_field()}}
                              <div class="row">
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label class="bmd-label-floating">Id de Wilaya</label>
                                          <select name="id" class="form-control">
                                              @foreach($mydecisions as $decision)

                                                  <option value="{{$decision->id}}">{{$decision->title}}</option>

                                              @endforeach
                                          </select>
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label class="bmd-label-floating">Id de Wilaya</label>
                                          <select name="wilaya_id" id="wilaya"class="form-control">
                                              @foreach($wilayas as $wilaya)

                                                  <option value="{{$wilaya->id}}">{{$wilaya->name}}</option>

                                              @endforeach
                                          </select>
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label class="bmd-label-floating">Title</label>
                                          <input type="text" name="title" class="form-control">
                                      </div>
                                  </div>
                              </div>
                              <div class="row">

                                  <div class="col-md-8">
                                      <div class="form-group">
                                          <label class="bmd-label-floating">Content</label>
                                          <input type="text" name="value" class="form-control"></input>
                                      </div>
                                  </div>
                              </div>




                              <button type="submit" class="btn btn-info pull-right">Update Decision</button>
                              <div class="clearfix"></div>
                          </form>
                      </div>
                  </div>
              </div>
              <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-info">
                  <h4 class="card-title ">My Decisions</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-info">
                        <th>
                          ID
                        </th>
                        <th>
                          Wilaya
                        </th>
                        <th>
                          Title
                        </th>
                        <th>
                          Content
                        </th>
                        <th>
                          Date
                        </th><th>
                          Delete
                        </th>
                      </thead>
                      <tbody>
                      @foreach($mydecisions as $decision)
                        <tr>
                          <td>
                            {{$decision->id}}
                          </td>
                          <td>
                            {{$decision->wilaya->name}}
                          </td>
                          <td>
                            {{$decision->title}}
                          </td>
                          <td>
                            {{$decision->content}}
                          </td>
                          <td class="text-info">
                              {{$decision->created_at->diffForHumans()}}
                          </td>
                            <td>
                                <a   class="btn btn-info pull-right" href="{{route('decision.delete',['id'=>$decision->id])}}"><span>Delete Decision</span></a>
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
 @endsection
<script src="{{ asset('../assets/js/core/jquery.min.js')}}"></script>
<script src="{{ asset('../assets/js/core/popper.min.js')}}"></script>
<script src="{{ asset('../assets/js/core/bootstrap-material-design.min.js')}}"></script>
<script src="{{ asset('../assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
<!-- Plugin for the momentJs  -->
<script src="{{ asset('../assets/js/plugins/moment.min.js')}}"></script>
<!--  Plugin for Sweet Alert -->
<script src="{{ asset('../assets/js/plugins/sweetalert2.js')}}"></script>
<!-- Forms Validations Plugin -->
<script src="{{ asset('../assets/js/plugins/jquery.validate.min.js')}}"></script>
<!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="{{ asset('../assets/js/plugins/jquery.bootstrap-wizard.js')}}"></script>
<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="{{ asset('../assets/js/plugins/bootstrap-selectpicker.js')}}"></script>
<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src="{{ asset('../assets/js/plugins/bootstrap-datetimepicker.min.js')}}"></script>
<!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
<script src="{{ asset('../assets/js/plugins/jquery.dataTables.min.js')}}"></script>
<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="{{ asset('../assets/js/plugins/bootstrap-tagsinput.js')}}"></script>
<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="{{ asset('../assets/js/plugins/jasny-bootstrap.min.js')}}"></script>
<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src="{{ asset('../assets/js/plugins/fullcalendar.min.js')}}"></script>
<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
<script src="{{ asset('../assets/js/plugins/jquery-jvectormap.js')}}"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{ asset('../assets/js/plugins/nouislider.min.js')}}"></script>
<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
<!-- Library for adding dinamically elements -->
<script src="{{ asset('../assets/js/plugins/arrive.min.js')}}"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chartist JS -->
<script src="{{ asset('../assets/js/plugins/chartist.min.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{ asset('../assets/js/plugins/bootstrap-notify.js')}}"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('../assets/js/material-dashboard.js?v=2.1.2')}}" type="text/javascript"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ asset('../assets/demo/demo.js')}}"></script>

</body>

</html>
