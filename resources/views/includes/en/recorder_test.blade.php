<ol>
			<li>Please test the recording by clicking the microphone button. It will glow red. Speak a few sentences, and click the button again. You can listen to the test recording in the playback window. Make sure you can hear yourself clearly and there are no noises in the background. <strong>Do not submit this test recording.</strong></li>
			<li>Click the <b>@lang('messages.RecorderReadingTitle')</b> tab and start recording by clicking the microphone button once again. When it glows red, you can start reading out loud. When you are done, click on the microphone button to end the recording, and submit your recording.
			@if(config('app.wlar_additional_reading_enabled'))
				Then click on the <b>@lang('messages.RecorderAdditionalReadingTitle')</b> tab for instructions about the second recording.
			@endif
			</li>
</ol>
