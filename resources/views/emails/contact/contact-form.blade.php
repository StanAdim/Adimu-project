@component('mail::message')
#Thank you for your Massege
    Name: {{$data['name']}}
    Email: {{$data['email']}}
    Comment:
{{$data['comment']}}
@endcomponent
