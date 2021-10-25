@component('mail::message')
# Introduction

The body of your message.
<div>
    <label>Product Title</label>
    <p>{{$mailData['title']}}</p>
    <br>
    <label>Product Category</label>
    <p>{{$mailData['category']}}</p>
    <br>
    <label>Product Description</label>
    <p>{{$mailData['description']}}</p>
    <br>
</div>

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
