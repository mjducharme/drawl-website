<!DOCTYPE html>
<html>
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<style>
h1 {margin: auto;}

.consent_text {
  /* Just to center the text on the page */
  margin: auto;
  width: 80%;
  height: 400px;
  /* To see the outline of the text */
  padding: 1em;
  border: 1px solid #CCC;
  border-radius: 1em;
  overflow:scroll;
}

form {display: flex; margin: auto; width: 80%; height: 100%; flex-direction: row;}

form div + div {
  margin-top: 1em;
}

.participation {flex: 1 1; border: none; margin: 0; padding: 10px; overflow: auto; }

.publication {flex: 1 1; border: none; margin: 0; padding: 10px; overflow: auto;}


label {
  /* To make sure that all labels have the same size and are properly aligned */
  display: inline-block;
  width: 90px;
  text-align: right;
}

.field, textarea {
  /* To make sure that all text fields have the same font settings
     By default, textareas have a monospace font */
  font: 1em sans-serif;

  /* To give the same size to all text fields */
  width: 300px;
  box-sizing: border-box;

  /* To harmonize the look & feel of text field border */
  border: 1px solid #999;
}

input:focus, textarea:focus {
  /* To give a little highlight on active elements */
  border-color: #000;
}

textarea {
  /* To properly align multiline text fields with their labels */
  vertical-align: top;

  /* To give enough room to type some text */
  height: 5em;
}

.checkbox {
  /* To position the buttons to the same position of the text fields */
  padding-left: 90px; /* same size as the label elements */
}

.submit{ padding-left:80%; margin: auto; }
</style>    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>@lang('messages.IndexTitle') &nbsp;>&nbsp; @lang('messages.ConsentTitle')</title>
    </head>
    <body>
    	<nav class="navbar navbar-primary bg-primary">
  			<span class="navbar-brand mb-0 h1">@lang('messages.IndexTitle') &nbsp;>&nbsp; @lang('messages.ConsentTitle')</span>
		</nav>
        <div class="consent_text" data-spy="scroll">@include('includes.'.$locale.".consent_text")</div>
    </body>
    <form action="{{ route('consent_forms.store') }}" method="post">
        @csrf
        <div class="participation"><h4>@lang('messages.ConsentParticipation')</h4>
        <p>@include('includes.'.$locale.".consent_participation_text")</p>
        <div>
            <label for="name">@lang('messages.ConsentName')</label>
            <input type="text" id="name" name="user_name" class="field" required>
        </div>
        <div>
            <label for="email">@lang('messages.ConsentEmail')</label>
            <input type="email" id="email" name="user_email" class="field" required>
        </div>
        <div class="checkbox">
            <input type="checkbox" name="consent_box" onchange="document.getElementById('c_button').disabled = !this.checked" required>
            @lang('messages.ConsentParticipationConsent')
        </div>
        <div class="submit">
            <button type="submit" id="c_button" disabled="true">@lang('messages.Submit')</button>
        </div>
        </div>
        <div class="publication">
        <h4>@lang('messages.ConsentPublication')</h4>
        <p>@include('includes.'.$locale.".consent_publication_text")</p>
        <div class="checkbox">
        <input type="checkbox" name="share_box">
        @lang('messages.ConsentPublicationConsent')
        </div>
        </div>
    </form>
</html>
