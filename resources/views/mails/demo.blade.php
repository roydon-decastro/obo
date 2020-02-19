<p> Hello {{ucwords($demo->receiver) }}</p>,
<p> This is an auto-generated email regarding your permit application from the good Office of the Building Official. Please DO NOT REPLY to this email.</p>
<p>Please see details below:</p>
<br/>

<ul>
    <li><strong>Status: {{ $demo->status }}</strong></li>
    <li>Location of Construction:{{ ucwords($demo->location) }} </li>
    <li>Application ID: {{ $demo->application_id }}</li>
</ul>
<br/>
Thank You,
<h3>{{ $demo->sender }}</h3>
<h4>Calapan City, Oriental Mindoro</h4>
