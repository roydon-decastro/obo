Hello <i>{{ $demo->receiver }}</i>,
<p>This is a demo email for testing purposes! Also, it's the HTML version.</p>
 
<p><u>Demo object values:</u></p>
 
<div>
<p><b>Demo OneFive:</b>&nbsp;{{ $demo->demo_one }}</p>
<p><b>Demo Two:</b>&nbsp;{{ $demo->demo_two }}</p>
</div>
 
<p><u>Values passed by With method:</u></p>
 
<div>
<p><b>testVarOne:</b>&nbsp;{{ $permit->fname }}</p>
<p><b>testVarTwo:</b>&nbsp;{{ $testVarTwo }}</p>
</div>
 

Thank You,
<br/>
<h3>{{ $demo->sender }}</h3>
<h4>Calapan City, Oriental Mindoro</h4>
