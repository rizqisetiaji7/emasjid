@extends('layouts.main')

@section('title', 'Informasi Masjid')

@section('content')
   <div class="row">
      <div class="col-12">
         <div class="card">
            <div class="card-header">
               <h5 class="card-title mb-0">Silahkan isi data masjid yang anda kelola.</h5>
            </div>
            <div class="card-body">
               {!! Form::model($masjid, ['route' => 'masjid.store', 'method' => 'POST', 'autocomplete' => 'off']) !!}
                  <div class="mb-3 row">
                     <label for="nama" class="col-12 col-sm-3 col-form-label">
                        Nama masjid <span class="text-danger">*</span>
                     </label>
                     <div class="col-12 col-sm-9">
                        {!! Form::text('nama', NULL, ['class' => "form-control", 'placeholder' => 'Isi nama masjid']) !!}
                        <div class="text-danger">{!! $errors->first('nama') !!}</div>
                     </div>
                  </div>
                  
                  <div class="mb-3 row">
                     <label for="telepon" class="col-12 col-sm-3 col-form-label">
                        Nomor telepon <span class="text-danger">*</span>
                     </label>
                     <div class="col-12 col-sm-9">
                        {!! Form::number('telepon', NULL, ['class' => 'form-control', 'placeholder' => 'No. telepon / nomor HP Pengurus']) !!}
                        <div class="text-danger">{!! $errors->first('telepon') !!}</div>
                     </div>
                  </div>
                  
                  <div class="mb-3 row">
                     <label for="email" class="col-12 col-sm-3 col-form-label">
                        Email <span class="text-muted small">(Isi jika ada)</span>
                     </label>
                     <div class="col-12 col-sm-9">
                        {!! Form::email('email', NULL, ['class' => 'form-control', 'placeholder' => 'Alamat email']) !!}
                        <div class="text-danger">{!! $errors->first('email') !!}</div>
                     </div>
                  </div>
                  
                  <div class="mb-4 row">
                     <label for="alamat" class="col-12 col-sm-3 col-form-label">
                        Alamat masjid <span class="text-danger">*</span>
                     </label>
                     <div class="col-12 col-sm-9">
                        {!! Form::textarea('alamat', NULL, ['class' => 'form-control', 'rows' => '4', 'placeholder' => 'Alamat lengkap']) !!}
                        <div class="text-danger">{!! $errors->first('alamat') !!}</div>
                     </div>
                  </div>

                  <div class="row justify-content-end">
                     <div class="col-12">
                        <div class="d-grid gap-2 d-sm-flex justify-content-sm-end">
                           {!! Form::submit('Simpan', ['class' => 'btn btn-primary']) !!}
                        </div>
                     </div>
                  </div>
               {!! Form::close() !!}
            </div>
         </div>
      </div>
   </div>
@endsection