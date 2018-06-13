@extends('main')

@section('title','- Create Celestial Body')

@section('content')
        <div class="row">
            <div class="col-md-12">
            <h1>Create a Celestial Body</h1>
            <hr>
            {!! Form::open(['route' => 'cb.store', 'files' => true]) !!}

                {{ Form::label('right_ascension', 'Right Ascension') }}
                {!! Form::number('right_ascension',null,['class'=> 'form-control', 'placeholder' =>'Right Ascension', 'step'=>0.01]) !!}  

                {{ Form::label('declination', 'Declination') }}
                {!! Form::number('declination',null,['class'=> 'form-control', 'placeholder' =>'Declination', 'step'=>0.01]) !!} 

                {{ Form::label('name', 'Name') }}
                {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Name']) !!}
                <br />
                {!! Form::checkbox('verified',1,0,['class'=>'form-check-input']) !!}
                {{ Form::label('verified', 'Verified?') }}
                <hr>
                {!! Form::label('cbtype', 'Type of Celestial Body:', ['class' => 'col-md-4 control-label-lg']) !!}
                    <div class="col-md-6">
                        <div class="checkbox">
                            <label>{!! Form::radio('cbtype', '0', true) !!} Not Specified</label>
                        </div>
                        <div class="checkbox">
                            <label>{!! Form::radio('cbtype', '1') !!} Comet</label>
                        </div>
                        <div class="checkbox">
                            <label>{!! Form::radio('cbtype', '2') !!} Galaxy</label>
                        </div>
                        <div class="checkbox">
                            <label>{!! Form::radio('cbtype', '3') !!} Moon</label>
                        </div>
                        <div class="checkbox">
                            <label>{!! Form::radio('cbtype', '4') !!} Planet</label>
                        </div>
                        <div class="checkbox">
                            <label>{!! Form::radio('cbtype', '5') !!} Star</label>
                        </div>
                    </div>
                
                
                {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-secondary']) !!}

                <hr>
                <div class="col-md-11 offset-md-1">
                    <p class="lead"> For Comets: </p>
                    {!! Form::label('comet_speed', 'Speed: ') !!}
                    {!! Form::number('comet_speed',null,['class'=> 'form-control', 'placeholder' =>'Speed']) !!}
                </div>
                <div class="col-md-11 offset-md-1">
                    <p class="lead"> For Galaxies: </p>
                    {!! Form::label('galaxy_brightness', 'Brightness: ') !!}
                    {!! Form::number('galaxy_brightness',null,['class'=> 'form-control', 'placeholder' =>'Brightness']) !!}

                    {!! Form::label('galaxy_redshift', 'Redshift: ') !!}
                    {!! Form::number('galaxy_redshift',null,['class'=> 'form-control', 'placeholder' =>'Red Shift']) !!}

                    {!! Form::label('galaxy_type', 'Type: ') !!}
                    {!! Form::select('galaxy_type', json_decode('{"spiral":"Spiral","elliptical":"Elliptical","irregular":"Irregular"}', true), null, ['class' => 'form-control']) !!}
                </div>
                <div class="col-md-11 offset-md-1">
                    <p class="lead"> For Moons: </p>
                    {!! Form::label('moon-plid', 'Planet Id: ') !!}
                    {!! Form::input('number','moon-plid',null,['class'=> 'form-control', 'placeholder' =>'Planet ID']) !!}

                    {!! Form::label('moon-period', 'Orbital Period: ') !!}
                    {!! Form::input('number','moon-period',null,['class'=> 'form-control', 'placeholder' =>'Orbital Period']) !!}

                    {!! Form::label('moon-radius', 'Moon Radius: ') !!}
                    {!! Form::input('number','moon-radius',null,['class'=> 'form-control', 'placeholder' =>'Radius']) !!}
                </div>
                <div class="col-md-11 offset-md-1">
                    <p class="lead"> For Planets: </p>
                    {!! Form::label('planet-period', 'Orbital Period: ') !!}
                    {!! Form::input('number','planet-period',null,['class'=> 'form-control', 'placeholder' =>'Orbital Period']) !!}

                    {!! Form::label('planet-type', 'Planet Type: ') !!}
                    {!! Form::select('planet-type', json_decode('{"gas_giant":"Gas Giant","earth_like":"Earth-Like","super_earth":"Super Earth"}', true), null, ['class' => 'form-control']) !!}
                </div>
                <div class="col-md-11 offset-md-1">
                    <p class="lead"> For Stars: </p>
                    {!! Form::label('star-spectral', 'Spectral Type: ') !!}
                    {!! Form::input('number','star-spectral',null,['class'=> 'form-control', 'placeholder' =>'Spectral ID']) !!}
                </div>
            {!!  Form::close() !!}
            <br />
            </div>
        </div>
@endsection