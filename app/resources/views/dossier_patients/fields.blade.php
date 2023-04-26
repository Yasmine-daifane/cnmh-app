<!-- Patient Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('patient_id', __('models/dossierPatients.fields.patient_id').':', 'hidden') !!}
    {!! Form::number('patient_id', null, ['class' => 'form-control', 'required','hidden']) !!}
</div>

<!-- Couverture Medical Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('couverture_medical_id', __('models/dossierPatients.fields.couverture_medical_id').':') !!}
    {!! Form::number('couverture_medical_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Numero Dossier Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero_dossier', __('models/dossierPatients.fields.numero_dossier').':') !!}
    {!! Form::number('numero_dossier', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Fonction Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fonction', __('models/employes.fields.fonction') . ':') !!}
    {{ Form::select(
        'type_handicap_id',
        ['' => '-- select fonction --'] + $type_handicap->pluck('nom', 'id')->toArray(),
        null,
        ['class' => 'form-control', 'required'],
    ) }}
</div>
<!-- Etat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('etat', __('models/dossierPatients.fields.etat').':','hidden') !!}
    {!! Form::text('etat','entretien social', null, ['class' => 'form-control', 'required','hidden', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Date Enregsitrement Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_enregsitrement', __('models/dossierPatients.fields.date_enregsitrement').':') !!}
    {!! Form::text('date_enregsitrement', null, ['class' => 'form-control','id'=>'date_enregsitrement']) !!}
</div>


@push('page_scripts')
    <script type="text/javascript">
        $('#date_enregsitrement').datepicker()
    </script>
@endpush
