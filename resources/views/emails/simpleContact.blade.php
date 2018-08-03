@component('mail::message')
# Nouveau message de {{ $emitter  }}

{{ $message }}

{{ config('app.name') }}
@endcomponent
