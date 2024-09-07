<x-mail::message>
# Congrats!

You have added a new car!.

Details:

Model Name: {{ $data['model_name'] }}

Brand: {{ $data['brand'] }}

Color: {{ $data['color'] }}

Year: {{ $data['year'] }}

Release Date: {{ $data['release_date'] }}

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
