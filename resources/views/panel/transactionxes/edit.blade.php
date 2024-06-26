@extends('layouts.panel')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.transactionx.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("panel.transactionxes.update", [$transactionx->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required">{{ trans('cruds.transactionx.fields.type') }}</label>
                <select class="form-control {{ $errors->has('type') ? 'is-invalid' : '' }}" name="type" id="type" required>
                    <option value disabled {{ old('type', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Transactionx::TYPE_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('type', $transactionx->type) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.transactionx.fields.type_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="amount">{{ trans('cruds.transactionx.fields.amount') }}</label>
                <input class="form-control {{ $errors->has('amount') ? 'is-invalid' : '' }}" type="number" name="amount" id="amount" value="{{ old('amount', $transactionx->amount) }}" step="0.01">
                @if($errors->has('amount'))
                    <div class="invalid-feedback">
                        {{ $errors->first('amount') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.transactionx.fields.amount_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="commission_rate">{{ trans('cruds.transactionx.fields.commission_rate') }}</label>
                <input class="form-control {{ $errors->has('commission_rate') ? 'is-invalid' : '' }}" type="number" name="commission_rate" id="commission_rate" value="{{ old('commission_rate', $transactionx->commission_rate) }}" step="0.01" max="100">
                @if($errors->has('commission_rate'))
                    <div class="invalid-feedback">
                        {{ $errors->first('commission_rate') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.transactionx.fields.commission_rate_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="commission">{{ trans('cruds.transactionx.fields.commission') }}</label>
                <input class="form-control {{ $errors->has('commission') ? 'is-invalid' : '' }}" type="number" name="commission" id="commission" value="{{ old('commission', $transactionx->commission) }}" step="0.01">
                @if($errors->has('commission'))
                    <div class="invalid-feedback">
                        {{ $errors->first('commission') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.transactionx.fields.commission_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="amount_net">{{ trans('cruds.transactionx.fields.amount_net') }}</label>
                <input class="form-control {{ $errors->has('amount_net') ? 'is-invalid' : '' }}" type="number" name="amount_net" id="amount_net" value="{{ old('amount_net', $transactionx->amount_net) }}" step="0.01">
                @if($errors->has('amount_net'))
                    <div class="invalid-feedback">
                        {{ $errors->first('amount_net') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.transactionx.fields.amount_net_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="date">{{ trans('cruds.transactionx.fields.date') }}</label>
                <input class="form-control datetime {{ $errors->has('date') ? 'is-invalid' : '' }}" type="text" name="date" id="date" value="{{ old('date', $transactionx->date) }}" required>
                @if($errors->has('date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.transactionx.fields.date_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="payer_id">{{ trans('cruds.transactionx.fields.payer') }}</label>
                <select class="form-control select2 {{ $errors->has('payer') ? 'is-invalid' : '' }}" name="payer_id" id="payer_id" required>
                    @foreach($payers as $id => $entry)
                        <option value="{{ $id }}" {{ (old('payer_id') ? old('payer_id') : $transactionx->payer->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('payer'))
                    <div class="invalid-feedback">
                        {{ $errors->first('payer') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.transactionx.fields.payer_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection
