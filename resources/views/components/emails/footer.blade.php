{{ Illuminate\Mail\Markdown::parse('---') }}

Thank you,<br>
{{ config('app.name') ?? 'Black' }}

{{ Illuminate\Mail\Markdown::parse('[Contact Support](https://black/docs/contact)') }}
