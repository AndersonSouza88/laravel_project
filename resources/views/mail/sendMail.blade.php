@component('mail::message')
# Segue Link para recuperação de senha
 

@component('mail::button', ['url' => config('app.url')])
Acessar o Link
@endcomponent

Se você não fez esse solicitação, favor desconsiderar essa mensagem :)

{{ config('app.name') }}
@endcomponent