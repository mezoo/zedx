@if (isset($adFields[$field->id]))
    <span class="label label-primary no-radius">{{ $field->name }}</span><span class="label label-success no-radius">{{ $adFields[$field->id] }} {{ getAdCurrency($ad, $field->unit) }}</span>
@endif
