@extends('layouts.app')

@section('content')



  <script src="../../plugins/jQuery/jQuery-2.2.0.min.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Slimscroll -->
    <script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../../plugins/fastclick/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <!-- fullCalendar 2.2.5 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
    <script src="../../plugins/fullcalendar/fullcalendar.min.js"></script>
    <!-- Page specific script -->


    <section class="content-header">
      <h1 style="color:#807e7d">
         EVENT
        <small class="pull-right">21 Agustus 2017 10:45</small>
      </h1>
    </section>


    <section class="content">
          <div class="box box-warning">
            <div class="box-header with-border">
               <span class="info-box-icon" style="background-color: white"><i class="ion ion-ios-calendar-outline"></i></span>
              <div class="info-box-content">
                <span class="info-box-number" style="margin-top: 30px; font-style: bold"><h4>Event</h4></span>
              </div>
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i> 
              </div>
            </div>
            <div class="box-body pad">
              {!! Form::open(['action' => 'EventController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Judul" width="50%" name="nama_event"><br>
                <input type="text" class="form-control" name="penyelenggara" placeholder="Penyelenggara" width="50%"><br>
                <input type="text" class="form-control" name="lokasi_event" placeholder="Tempat Penyeleggaran" width="50%">
                <label>Date start:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="Date" class="form-control pull-right" id="reservation" name="tgl_mulai">
                </div>
                <label>Date start:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="Date" class="form-control pull-right" id="reservation" name="tgl_akhir">
                </div>
                <br>
                <div class="form-group">
                <div class="btn btn-default btn-file">
                  {{Form::file('image_event')}} Upload Image
                </div>
                </div>
                <div class="form-group">
                  {{Form::textarea('deskripsi_event', '',['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder'=>'Body Text'])}}
                </div>
                <div class="box-footer">
                  <button type="submit" class="btn btn-warning pull-right">Submit</button>
                </div>
              {!! Form::close() !!}
            </div>
          </div>
    </section>



<!-- jQuery 2.2.0 -->
<script src="../../plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- CK Editor -->
<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1');
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
  });
</script>

@endsection

