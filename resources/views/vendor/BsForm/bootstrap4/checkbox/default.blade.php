<?php
    $id = 'checkbox-'.Str::random('4').'-'.$name;
?>

<div class="form-group">
    <div class="form-check">
        @if($hasDefaultValue)
            {{ Form::hidden($name, $defaultValue) }}
        @endif
        {{ Form::checkbox($name, $value, $checked, ['class' => 'form-check-input', 'id' => $id]) }}


        {{-- {{ Form::label($name, $label) }} --}}

        <label class="" for="{{ $id }}">
            {{ $label }}
        </label>
        <small class="form-text text-muted">{{ $note }}</small>
    </div>
</div>


