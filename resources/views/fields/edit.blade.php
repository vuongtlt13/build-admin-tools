@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            @lang('models/fields.singular')
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($field, ['route' => ['fields.update', $field->id], 'method' => 'patch']) !!}

                        @include('fields.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
