@component('mail::message')
# Introduction

The body of your message.

- One
- Two
- Three

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

@component('mail::panel', ['url' => ''])
Lorem ipusm dolar sit amet.
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
