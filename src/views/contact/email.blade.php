@component('mail::message')
# Introduction

There is a new query from {{ $name }} with an email: {{ $email }}
Message: {{ $message }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
