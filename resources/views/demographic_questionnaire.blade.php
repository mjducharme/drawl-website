<!DOCTYPE html>
<html>
<style>
  form {
    /* Just to center the form on the page */
    margin: 0 auto;
    width: 40%;
    /* To see the outline of the form */
    padding: 1em;
    border: 1px solid #CCC;
    border-radius: 1em;
  }

  form div + div {
    margin-top: 1em;
  }

  label {
    /* To make sure that all labels have the same size and are properly aligned */
    display: inline-block;
    width: 30%;
    text-align: right;
  }

  input, textarea {
    /* To make sure that all text fields have the same font settings
       By default, textareas have a monospace font */
    font: 1em sans-serif;

    /* To give the same size to all text fields */
    width: 65%;
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

  .button {
    /* To position the buttons to the same position of the text fields */
    padding-left: 90px; /* same size as the label elements */
  }

  button {
    /* This extra margin represent roughly the same space as the space
       between the labels and their text fields */
    margin-left: .5em;
  }

</style>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>@lang('messages.IndexTitle') &nbsp;>&nbsp; @lang('messages.DemoTitle')</title>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/formsmain.min.css') }}">
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    </head>
    <body>
      <nav class="navbar navbar-primary bg-primary">
        <span class="navbar-brand mb-0 h1">@lang('messages.IndexTitle') &nbsp;>&nbsp; @lang('messages.DemoTitle')</span>
      </nav>
    </body>
    <div class='gform_wrapper' id='gform_wrapper_1' >
    <form action="{{ route('demographic_questionnaires.store') }}" method="post">
        @csrf
        <ul class='gfield_radio' id='input_1_3'>
          

<li id='field_1_3'  class='gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible' >
  <label class='gfield_label'  >Voice Type<span class='gfield_required'>*</span></label>
  <div class='ginput_container ginput_container_radio'>
     <ul class='gfield_radio' id='input_1_3'>
        <li class='gchoice_1_3_0'><input name='Gender' type='radio' value='Male'  id='choice_1_3_0'    /><label for='choice_1_3_0' id='label_1_3_0'>Male</label></li>
        <li class='gchoice_1_3_1'><input name='Gender' type='radio' value='Female'  id='choice_1_3_1'    /><label for='choice_1_3_1' id='label_1_3_1'>Female</label></li>
     </ul>
  </div>
</li>
<li id='field_1_65'  class='gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible' >
  <label class='gfield_label' for='input_1_65' >Age<span class='gfield_required'>*</span></label>
  <div class='ginput_container ginput_container_select'>
     <select name='Years' id='input_1_65' class='medium gfield_select'   aria-required="true" aria-invalid="false">
        <option value='Select years' >Select years</option>
        <option value='1' >1</option>
        <option value='2' >2</option>
        <option value='3' >3</option>
        <option value='4' >4</option>
        <option value='5' >5</option>
        <option value='6' >6</option>
        <option value='7' >7</option>
        <option value='8' >8</option>
        <option value='9' >9</option>
        <option value='10' >10</option>
        <option value='11' >11</option>
        <option value='12' >12</option>
        <option value='13' >13</option>
        <option value='14' >14</option>
        <option value='15' >15</option>
        <option value='16' >16</option>
        <option value='17' >17</option>
        <option value='18' >18</option>
        <option value='19' >19</option>
        <option value='20' >20</option>
        <option value='21' >21</option>
        <option value='22' >22</option>
        <option value='23' >23</option>
        <option value='24' >24</option>
        <option value='25' >25</option>
        <option value='26' >26</option>
        <option value='27' >27</option>
        <option value='28' >28</option>
        <option value='29' >29</option>
        <option value='30' >30</option>
        <option value='31' >31</option>
        <option value='32' >32</option>
        <option value='33' >33</option>
        <option value='34' >34</option>
        <option value='35' >35</option>
        <option value='36' >36</option>
        <option value='37' >37</option>
        <option value='38' >38</option>
        <option value='39' >39</option>
        <option value='40' >40</option>
        <option value='41' >41</option>
        <option value='42' >42</option>
        <option value='43' >43</option>
        <option value='44' >44</option>
        <option value='45' >45</option>
        <option value='46' >46</option>
        <option value='47' >47</option>
        <option value='48' >48</option>
        <option value='49' >49</option>
        <option value='50' >50</option>
        <option value='51' >51</option>
        <option value='52' >52</option>
        <option value='53' >53</option>
        <option value='54' >54</option>
        <option value='55' >55</option>
        <option value='56' >56</option>
        <option value='57' >57</option>
        <option value='58' >58</option>
        <option value='59' >59</option>
        <option value='60' >60</option>
        <option value='61' >61</option>
        <option value='62' >62</option>
        <option value='63' >63</option>
        <option value='64' >64</option>
        <option value='65' >65</option>
        <option value='66' >66</option>
        <option value='67' >67</option>
        <option value='68' >68</option>
        <option value='69' >69</option>
        <option value='70' >70</option>
        <option value='71' >71</option>
        <option value='72' >72</option>
        <option value='73' >73</option>
        <option value='74' >74</option>
        <option value='75' >75</option>
        <option value='76' >76</option>
        <option value='77' >77</option>
        <option value='78' >78</option>
        <option value='79' >79</option>
        <option value='80' >80</option>
        <option value='81' >81</option>
        <option value='82' >82</option>
        <option value='83' >83</option>
        <option value='84' >84</option>
        <option value='85' >85</option>
        <option value='86' >86</option>
        <option value='87' >87</option>
        <option value='88' >88</option>
        <option value='89' >89</option>
        <option value='90' >90</option>
        <option value='91' >91</option>
        <option value='92' >92</option>
        <option value='93' >93</option>
        <option value='94' >94</option>
        <option value='95' >95</option>
        <option value='96' >96</option>
        <option value='97' >97</option>
        <option value='98' >98</option>
        <option value='99' >99</option>
        <option value='100' >100</option>
        <option value='101' >101</option>
        <option value='102' >102</option>
        <option value='103' >103</option>
        <option value='104' >104</option>
        <option value='105' >105</option>
     </select>
  </div>
</li>
<input type="hidden" name="Operating system" value="{{ $useragent->os->family }}">
<input type="hidden" name="Operating system version" value="{{ $useragent->os->toVersion() }}">
<input type="hidden" name="Browser" value="{{ $useragent->ua->family }}">
<input type="hidden" name="Browser version" value="{{ $useragent->ua->toVersion() }}">
<li id='field_1_5'  class='gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible' >
  <label class='gfield_label' for='input_1_5' >Primary language spoken in your childhood home<span class='gfield_required'>*</span></label>
  <div class='ginput_container ginput_container_select'>
     <select name='Primary language childhood home' id='input_1_5' class='medium gfield_select'   aria-required="true" aria-invalid="false">
        <option value='' ></option>
        <option value='Canadian English' >Canadian English</option>
        <option value='Canadian French' >Canadian French</option>
        <option value='First Nations' >First Nations</option>
        <option value='American (US) English' >American (US) English</option>
        <option value='Arabic' >Arabic</option>
        <option value='Awadhi' >Awadhi</option>
        <option value='Azerbaijani, North' >Azerbaijani, North</option>
        <option value='Azerbaijani, South' >Azerbaijani, South</option>
        <option value='Bengali' >Bengali</option>
        <option value='Bhojpuri' >Bhojpuri</option>
        <option value='Burmese' >Burmese</option>
        <option value='Chinese, Gan' >Chinese, Gan</option>
        <option value='Chinese, Hakka' >Chinese, Hakka</option>
        <option value='Chinese, Jinyu' >Chinese, Jinyu</option>
        <option value='Chinese, Mandarin' >Chinese, Mandarin</option>
        <option value='Chinese, MinNan' >Chinese, MinNan</option>
        <option value='Chinese, Wu' >Chinese, Wu</option>
        <option value='Chinese, Xiang' >Chinese, Xiang</option>
        <option value='Chinese, Yue (Cantonese)' >Chinese, Yue (Cantonese)</option>
        <option value='Dutch' >Dutch</option>
        <option value='English' >English</option>
        <option value='French' >French</option>
        <option value='German' >German</option>
        <option value='Gujarati' >Gujarati</option>
        <option value='Hausa' >Hausa</option>
        <option value='Hindi' >Hindi</option>
        <option value='Italian' >Italian</option>
        <option value='Japanese' >Japanese</option>
        <option value='Javanese' >Javanese</option>
        <option value='Kannada' >Kannada</option>
        <option value='Korean' >Korean</option>
        <option value='Maithili' >Maithili</option>
        <option value='Malayalam' >Malayalam</option>
        <option value='Marathi' >Marathi</option>
        <option value='Oriya' >Oriya</option>
        <option value='Panjabi, Eastern' >Panjabi, Eastern</option>
        <option value='Panjabi, Western' >Panjabi, Western</option>
        <option value='Persian' >Persian</option>
        <option value='Polish' >Polish</option>
        <option value='Portuguese' >Portuguese</option>
        <option value='Romanian' >Romanian</option>
        <option value='Russian' >Russian</option>
        <option value='Serbo-Croatian' >Serbo-Croatian</option>
        <option value='Sindhi' >Sindhi</option>
        <option value='Spanish' >Spanish</option>
        <option value='Sunda' >Sunda</option>
        <option value='Tamil' >Tamil</option>
        <option value='Teluga' >Teluga</option>
        <option value='Thai' >Thai</option>
        <option value='Turkish' >Turkish</option>
        <option value='Ukrainian' >Ukrainian</option>
        <option value='Urdu' >Urdu</option>
        <option value='Vietnamese' >Vietnamese</option>
        <option value='Yoruba' >Yoruba</option>
        <option value='Other' >Other</option>
     </select>
  </div>
</li>
<li id='field_1_6'  class='gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible' >
  <label class='gfield_label' for='input_1_6' >Primary language spoken in your childhood community<span class='gfield_required'>*</span></label>
  <div class='ginput_container ginput_container_select'>
     <select name='Primary language childhood community' id='input_1_6' class='medium gfield_select'   aria-required="true" aria-invalid="false">
        <option value='' ></option>
        <option value='Canadian English' >Canadian English</option>
        <option value='Canadian French' >Canadian French</option>
        <option value='First Nations' >First Nations</option>
        <option value='American (US) English' >American (US) English</option>
        <option value='Arabic' >Arabic</option>
        <option value='Awadhi' >Awadhi</option>
        <option value='Azerbaijani, North' >Azerbaijani, North</option>
        <option value='Azerbaijani, South' >Azerbaijani, South</option>
        <option value='Bengali' >Bengali</option>
        <option value='Bhojpuri' >Bhojpuri</option>
        <option value='Burmese' >Burmese</option>
        <option value='Chinese, Gan' >Chinese, Gan</option>
        <option value='Chinese, Hakka' >Chinese, Hakka</option>
        <option value='Chinese, Jinyu' >Chinese, Jinyu</option>
        <option value='Chinese, Mandarin' >Chinese, Mandarin</option>
        <option value='Chinese, MinNan' >Chinese, MinNan</option>
        <option value='Chinese, Wu' >Chinese, Wu</option>
        <option value='Chinese, Xiang' >Chinese, Xiang</option>
        <option value='Chinese, Yue (Cantonese)' >Chinese, Yue (Cantonese)</option>
        <option value='Dutch' >Dutch</option>
        <option value='English' >English</option>
        <option value='French' >French</option>
        <option value='German' >German</option>
        <option value='Gujarati' >Gujarati</option>
        <option value='Hausa' >Hausa</option>
        <option value='Hindi' >Hindi</option>
        <option value='Italian' >Italian</option>
        <option value='Japanese' >Japanese</option>
        <option value='Javanese' >Javanese</option>
        <option value='Kannada' >Kannada</option>
        <option value='Korean' >Korean</option>
        <option value='Maithili' >Maithili</option>
        <option value='Malayalam' >Malayalam</option>
        <option value='Marathi' >Marathi</option>
        <option value='Oriya' >Oriya</option>
        <option value='Panjabi, Eastern' >Panjabi, Eastern</option>
        <option value='Panjabi, Western' >Panjabi, Western</option>
        <option value='Persian' >Persian</option>
        <option value='Polish' >Polish</option>
        <option value='Portuguese' >Portuguese</option>
        <option value='Romanian' >Romanian</option>
        <option value='Russian' >Russian</option>
        <option value='Serbo-Croatian' >Serbo-Croatian</option>
        <option value='Sindhi' >Sindhi</option>
        <option value='Spanish' >Spanish</option>
        <option value='Sunda' >Sunda</option>
        <option value='Tamil' >Tamil</option>
        <option value='Teluga' >Teluga</option>
        <option value='Thai' >Thai</option>
        <option value='Turkish' >Turkish</option>
        <option value='Ukrainian' >Ukrainian</option>
        <option value='Urdu' >Urdu</option>
        <option value='Vietnamese' >Vietnamese</option>
        <option value='Yoruba' >Yoruba</option>
        <option value='Other' >Other</option>
     </select>
  </div>
</li>
<li id='field_1_10'  class='gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible' >
  <label class='gfield_label' for='input_1_10' >Primary language spoken in your adult home<span class='gfield_required'>*</span></label>
  <div class='ginput_container ginput_container_select'>
     <select name='Primary language adult home' id='input_1_10' class='medium gfield_select'   aria-required="true" aria-invalid="false">
        <option value='' ></option>
        <option value='Canadian English' >Canadian English</option>
        <option value='Canadian French' >Canadian French</option>
        <option value='First Nations' >First Nations</option>
        <option value='American (US) English' >American (US) English</option>
        <option value='Arabic' >Arabic</option>
        <option value='Awadhi' >Awadhi</option>
        <option value='Azerbaijani, North' >Azerbaijani, North</option>
        <option value='Azerbaijani, South' >Azerbaijani, South</option>
        <option value='Bengali' >Bengali</option>
        <option value='Bhojpuri' >Bhojpuri</option>
        <option value='Burmese' >Burmese</option>
        <option value='Chinese, Gan' >Chinese, Gan</option>
        <option value='Chinese, Hakka' >Chinese, Hakka</option>
        <option value='Chinese, Jinyu' >Chinese, Jinyu</option>
        <option value='Chinese, Mandarin' >Chinese, Mandarin</option>
        <option value='Chinese, MinNan' >Chinese, MinNan</option>
        <option value='Chinese, Wu' >Chinese, Wu</option>
        <option value='Chinese, Xiang' >Chinese, Xiang</option>
        <option value='Chinese, Yue (Cantonese)' >Chinese, Yue (Cantonese)</option>
        <option value='Dutch' >Dutch</option>
        <option value='English' >English</option>
        <option value='French' >French</option>
        <option value='German' >German</option>
        <option value='Gujarati' >Gujarati</option>
        <option value='Hausa' >Hausa</option>
        <option value='Hindi' >Hindi</option>
        <option value='Italian' >Italian</option>
        <option value='Japanese' >Japanese</option>
        <option value='Javanese' >Javanese</option>
        <option value='Kannada' >Kannada</option>
        <option value='Korean' >Korean</option>
        <option value='Maithili' >Maithili</option>
        <option value='Malayalam' >Malayalam</option>
        <option value='Marathi' >Marathi</option>
        <option value='Oriya' >Oriya</option>
        <option value='Panjabi, Eastern' >Panjabi, Eastern</option>
        <option value='Panjabi, Western' >Panjabi, Western</option>
        <option value='Persian' >Persian</option>
        <option value='Polish' >Polish</option>
        <option value='Portuguese' >Portuguese</option>
        <option value='Romanian' >Romanian</option>
        <option value='Russian' >Russian</option>
        <option value='Serbo-Croatian' >Serbo-Croatian</option>
        <option value='Sindhi' >Sindhi</option>
        <option value='Spanish' >Spanish</option>
        <option value='Sunda' >Sunda</option>
        <option value='Tamil' >Tamil</option>
        <option value='Teluga' >Teluga</option>
        <option value='Thai' >Thai</option>
        <option value='Turkish' >Turkish</option>
        <option value='Ukrainian' >Ukrainian</option>
        <option value='Urdu' >Urdu</option>
        <option value='Vietnamese' >Vietnamese</option>
        <option value='Yoruba' >Yoruba</option>
        <option value='Other' >Other</option>
     </select>
  </div>
</li>
<li id='field_1_8'  class='gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible' >
  <label class='gfield_label' for='input_1_8' >Primary language spoken in your adult community<span class='gfield_required'>*</span></label>
  <div class='ginput_container ginput_container_select'>
     <select name='Primary language adult community' id='input_1_8' class='medium gfield_select'   aria-required="true" aria-invalid="false">
        <option value='' ></option>
        <option value='Canadian English' >Canadian English</option>
        <option value='Canadian French' >Canadian French</option>
        <option value='First Nations' >First Nations</option>
        <option value='American (US) English' >American (US) English</option>
        <option value='Arabic' >Arabic</option>
        <option value='Awadhi' >Awadhi</option>
        <option value='Azerbaijani, North' >Azerbaijani, North</option>
        <option value='Azerbaijani, South' >Azerbaijani, South</option>
        <option value='Bengali' >Bengali</option>
        <option value='Bhojpuri' >Bhojpuri</option>
        <option value='Burmese' >Burmese</option>
        <option value='Chinese, Gan' >Chinese, Gan</option>
        <option value='Chinese, Hakka' >Chinese, Hakka</option>
        <option value='Chinese, Jinyu' >Chinese, Jinyu</option>
        <option value='Chinese, Mandarin' >Chinese, Mandarin</option>
        <option value='Chinese, MinNan' >Chinese, MinNan</option>
        <option value='Chinese, Wu' >Chinese, Wu</option>
        <option value='Chinese, Xiang' >Chinese, Xiang</option>
        <option value='Chinese, Yue (Cantonese)' >Chinese, Yue (Cantonese)</option>
        <option value='Dutch' >Dutch</option>
        <option value='English' >English</option>
        <option value='French' >French</option>
        <option value='German' >German</option>
        <option value='Gujarati' >Gujarati</option>
        <option value='Hausa' >Hausa</option>
        <option value='Hindi' >Hindi</option>
        <option value='Italian' >Italian</option>
        <option value='Japanese' >Japanese</option>
        <option value='Javanese' >Javanese</option>
        <option value='Kannada' >Kannada</option>
        <option value='Korean' >Korean</option>
        <option value='Maithili' >Maithili</option>
        <option value='Malayalam' >Malayalam</option>
        <option value='Marathi' >Marathi</option>
        <option value='Oriya' >Oriya</option>
        <option value='Panjabi, Eastern' >Panjabi, Eastern</option>
        <option value='Panjabi, Western' >Panjabi, Western</option>
        <option value='Persian' >Persian</option>
        <option value='Polish' >Polish</option>
        <option value='Portuguese' >Portuguese</option>
        <option value='Romanian' >Romanian</option>
        <option value='Russian' >Russian</option>
        <option value='Serbo-Croatian' >Serbo-Croatian</option>
        <option value='Sindhi' >Sindhi</option>
        <option value='Spanish' >Spanish</option>
        <option value='Sunda' >Sunda</option>
        <option value='Tamil' >Tamil</option>
        <option value='Teluga' >Teluga</option>
        <option value='Thai' >Thai</option>
        <option value='Turkish' >Turkish</option>
        <option value='Ukrainian' >Ukrainian</option>
        <option value='Urdu' >Urdu</option>
        <option value='Vietnamese' >Vietnamese</option>
        <option value='Yoruba' >Yoruba</option>
        <option value='Other' >Other</option>
     </select>
  </div>
</li>
<li id='field_1_12'  class='gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible' >
  <label class='gfield_label' for='input_1_12' >What languages do you use on a daily or weekly basis? Please select at least one<span class='gfield_required'>*</span></label>
  <div class='ginput_container ginput_container_select'>
     <select name='Daily weekly language 1' id='input_1_12' class='medium gfield_select'   aria-required="true" aria-invalid="false">
        <option value='Daily/weekly language 1' >Daily/weekly language 1</option>
        <option value='Canadian English' >Canadian English</option>
        <option value='Canadian French' >Canadian French</option>
        <option value='First Nations' >First Nations</option>
        <option value='American (US) English' >American (US) English</option>
        <option value='Arabic' >Arabic</option>
        <option value='Awadhi' >Awadhi</option>
        <option value='Azerbaijani, North' >Azerbaijani, North</option>
        <option value='Azerbaijani, South' >Azerbaijani, South</option>
        <option value='Bengali' >Bengali</option>
        <option value='Bhojpuri' >Bhojpuri</option>
        <option value='Burmese' >Burmese</option>
        <option value='Chinese, Gan' >Chinese, Gan</option>
        <option value='Chinese, Hakka' >Chinese, Hakka</option>
        <option value='Chinese, Jinyu' >Chinese, Jinyu</option>
        <option value='Chinese, Mandarin' >Chinese, Mandarin</option>
        <option value='Chinese, MinNan' >Chinese, MinNan</option>
        <option value='Chinese, Wu' >Chinese, Wu</option>
        <option value='Chinese, Xiang' >Chinese, Xiang</option>
        <option value='Chinese, Yue (Cantonese)' >Chinese, Yue (Cantonese)</option>
        <option value='Dutch' >Dutch</option>
        <option value='English' >English</option>
        <option value='French' >French</option>
        <option value='German' >German</option>
        <option value='Gujarati' >Gujarati</option>
        <option value='Hausa' >Hausa</option>
        <option value='Hindi' >Hindi</option>
        <option value='Italian' >Italian</option>
        <option value='Japanese' >Japanese</option>
        <option value='Javanese' >Javanese</option>
        <option value='Kannada' >Kannada</option>
        <option value='Korean' >Korean</option>
        <option value='Maithili' >Maithili</option>
        <option value='Malayalam' >Malayalam</option>
        <option value='Marathi' >Marathi</option>
        <option value='Oriya' >Oriya</option>
        <option value='Panjabi, Eastern' >Panjabi, Eastern</option>
        <option value='Panjabi, Western' >Panjabi, Western</option>
        <option value='Persian' >Persian</option>
        <option value='Polish' >Polish</option>
        <option value='Portuguese' >Portuguese</option>
        <option value='Romanian' >Romanian</option>
        <option value='Russian' >Russian</option>
        <option value='Serbo-Croatian' >Serbo-Croatian</option>
        <option value='Sindhi' >Sindhi</option>
        <option value='Spanish' >Spanish</option>
        <option value='Sunda' >Sunda</option>
        <option value='Tamil' >Tamil</option>
        <option value='Teluga' >Teluga</option>
        <option value='Thai' >Thai</option>
        <option value='Turkish' >Turkish</option>
        <option value='Ukrainian' >Ukrainian</option>
        <option value='Urdu' >Urdu</option>
        <option value='Vietnamese' >Vietnamese</option>
        <option value='Yoruba' >Yoruba</option>
        <option value='Other' >Other</option>
     </select>
  </div>
</li>
<li id='field_1_16'  class='gfield Halves gf_left_half field_sublabel_below field_description_below gfield_visibility_visible' >
  <label class='gfield_label' for='input_1_16' ></label>
  <div class='ginput_container ginput_container_select'>
     <select name='Daily weekly language 2' id='input_1_16' class='medium gfield_select'    aria-invalid="false">
        <option value='Daily/weekly language 2' >Daily/weekly language 2</option>
        <option value='Canadian English' >Canadian English</option>
        <option value='Canadian French' >Canadian French</option>
        <option value='First Nations' >First Nations</option>
        <option value='American (US) English' >American (US) English</option>
        <option value='Arabic' >Arabic</option>
        <option value='Awadhi' >Awadhi</option>
        <option value='Azerbaijani, North' >Azerbaijani, North</option>
        <option value='Azerbaijani, South' >Azerbaijani, South</option>
        <option value='Bengali' >Bengali</option>
        <option value='Bhojpuri' >Bhojpuri</option>
        <option value='Burmese' >Burmese</option>
        <option value='Chinese, Gan' >Chinese, Gan</option>
        <option value='Chinese, Hakka' >Chinese, Hakka</option>
        <option value='Chinese, Jinyu' >Chinese, Jinyu</option>
        <option value='Chinese, Mandarin' >Chinese, Mandarin</option>
        <option value='Chinese, MinNan' >Chinese, MinNan</option>
        <option value='Chinese, Wu' >Chinese, Wu</option>
        <option value='Chinese, Xiang' >Chinese, Xiang</option>
        <option value='Chinese, Yue (Cantonese)' >Chinese, Yue (Cantonese)</option>
        <option value='Dutch' >Dutch</option>
        <option value='English' >English</option>
        <option value='French' >French</option>
        <option value='German' >German</option>
        <option value='Gujarati' >Gujarati</option>
        <option value='Hausa' >Hausa</option>
        <option value='Hindi' >Hindi</option>
        <option value='Italian' >Italian</option>
        <option value='Japanese' >Japanese</option>
        <option value='Javanese' >Javanese</option>
        <option value='Kannada' >Kannada</option>
        <option value='Korean' >Korean</option>
        <option value='Maithili' >Maithili</option>
        <option value='Malayalam' >Malayalam</option>
        <option value='Marathi' >Marathi</option>
        <option value='Oriya' >Oriya</option>
        <option value='Panjabi, Eastern' >Panjabi, Eastern</option>
        <option value='Panjabi, Western' >Panjabi, Western</option>
        <option value='Persian' >Persian</option>
        <option value='Polish' >Polish</option>
        <option value='Portuguese' >Portuguese</option>
        <option value='Romanian' >Romanian</option>
        <option value='Russian' >Russian</option>
        <option value='Serbo-Croatian' >Serbo-Croatian</option>
        <option value='Sindhi' >Sindhi</option>
        <option value='Spanish' >Spanish</option>
        <option value='Sunda' >Sunda</option>
        <option value='Tamil' >Tamil</option>
        <option value='Teluga' >Teluga</option>
        <option value='Thai' >Thai</option>
        <option value='Turkish' >Turkish</option>
        <option value='Ukrainian' >Ukrainian</option>
        <option value='Urdu' >Urdu</option>
        <option value='Vietnamese' >Vietnamese</option>
        <option value='Yoruba' >Yoruba</option>
        <option value='Other' >Other</option>
     </select>
  </div>
</li>
<li id='field_1_47'  class='gfield Halves gf_right_half field_sublabel_below field_description_below gfield_visibility_visible' >
  <label class='gfield_label' for='input_1_47' ></label>
  <div class='ginput_container ginput_container_select'>
     <select name='Daily weekly language 3' id='input_1_47' class='medium gfield_select'    aria-invalid="false">
        <option value='Daily/weekly language 3' >Daily/weekly language 3</option>
        <option value='Canadian English' >Canadian English</option>
        <option value='Canadian French' >Canadian French</option>
        <option value='First Nations' >First Nations</option>
        <option value='American (US) English' >American (US) English</option>
        <option value='Arabic' >Arabic</option>
        <option value='Awadhi' >Awadhi</option>
        <option value='Azerbaijani, North' >Azerbaijani, North</option>
        <option value='Azerbaijani, South' >Azerbaijani, South</option>
        <option value='Bengali' >Bengali</option>
        <option value='Bhojpuri' >Bhojpuri</option>
        <option value='Burmese' >Burmese</option>
        <option value='Chinese, Gan' >Chinese, Gan</option>
        <option value='Chinese, Hakka' >Chinese, Hakka</option>
        <option value='Chinese, Jinyu' >Chinese, Jinyu</option>
        <option value='Chinese, Mandarin' >Chinese, Mandarin</option>
        <option value='Chinese, MinNan' >Chinese, MinNan</option>
        <option value='Chinese, Wu' >Chinese, Wu</option>
        <option value='Chinese, Xiang' >Chinese, Xiang</option>
        <option value='Chinese, Yue (Cantonese)' >Chinese, Yue (Cantonese)</option>
        <option value='Dutch' >Dutch</option>
        <option value='English' >English</option>
        <option value='French' >French</option>
        <option value='German' >German</option>
        <option value='Gujarati' >Gujarati</option>
        <option value='Hausa' >Hausa</option>
        <option value='Hindi' >Hindi</option>
        <option value='Italian' >Italian</option>
        <option value='Japanese' >Japanese</option>
        <option value='Javanese' >Javanese</option>
        <option value='Kannada' >Kannada</option>
        <option value='Korean' >Korean</option>
        <option value='Maithili' >Maithili</option>
        <option value='Malayalam' >Malayalam</option>
        <option value='Marathi' >Marathi</option>
        <option value='Oriya' >Oriya</option>
        <option value='Panjabi, Eastern' >Panjabi, Eastern</option>
        <option value='Panjabi, Western' >Panjabi, Western</option>
        <option value='Persian' >Persian</option>
        <option value='Polish' >Polish</option>
        <option value='Portuguese' >Portuguese</option>
        <option value='Romanian' >Romanian</option>
        <option value='Russian' >Russian</option>
        <option value='Serbo-Croatian' >Serbo-Croatian</option>
        <option value='Sindhi' >Sindhi</option>
        <option value='Spanish' >Spanish</option>
        <option value='Sunda' >Sunda</option>
        <option value='Tamil' >Tamil</option>
        <option value='Teluga' >Teluga</option>
        <option value='Thai' >Thai</option>
        <option value='Turkish' >Turkish</option>
        <option value='Ukrainian' >Ukrainian</option>
        <option value='Urdu' >Urdu</option>
        <option value='Vietnamese' >Vietnamese</option>
        <option value='Yoruba' >Yoruba</option>
        <option value='Other' >Other</option>
     </select>
  </div>
</li>
<li id='field_1_68'  class='gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible' >
  <label class='gfield_label' for='input_1_68' >Number of years you have lived in British Columbia<span class='gfield_required'>*</span></label>
  <div class='ginput_container ginput_container_select'>
     <select name='Years lived in BC' id='input_1_68' class='medium gfield_select'   aria-required="true" aria-invalid="false">
        <option value='Select years' >Select years</option>
        <option value='1' >1</option>
        <option value='2' >2</option>
        <option value='3' >3</option>
        <option value='4' >4</option>
        <option value='5' >5</option>
        <option value='6' >6</option>
        <option value='7' >7</option>
        <option value='8' >8</option>
        <option value='9' >9</option>
        <option value='10' >10</option>
        <option value='11' >11</option>
        <option value='12' >12</option>
        <option value='13' >13</option>
        <option value='14' >14</option>
        <option value='15' >15</option>
        <option value='16' >16</option>
        <option value='17' >17</option>
        <option value='18' >18</option>
        <option value='19' >19</option>
        <option value='20' >20</option>
        <option value='21' >21</option>
        <option value='22' >22</option>
        <option value='23' >23</option>
        <option value='24' >24</option>
        <option value='25' >25</option>
        <option value='26' >26</option>
        <option value='27' >27</option>
        <option value='28' >28</option>
        <option value='29' >29</option>
        <option value='30' >30</option>
        <option value='31' >31</option>
        <option value='32' >32</option>
        <option value='33' >33</option>
        <option value='34' >34</option>
        <option value='35' >35</option>
        <option value='36' >36</option>
        <option value='37' >37</option>
        <option value='38' >38</option>
        <option value='39' >39</option>
        <option value='40' >40</option>
        <option value='41' >41</option>
        <option value='42' >42</option>
        <option value='43' >43</option>
        <option value='44' >44</option>
        <option value='45' >45</option>
        <option value='46' >46</option>
        <option value='47' >47</option>
        <option value='48' >48</option>
        <option value='49' >49</option>
        <option value='50' >50</option>
        <option value='51' >51</option>
        <option value='52' >52</option>
        <option value='53' >53</option>
        <option value='54' >54</option>
        <option value='55' >55</option>
        <option value='56' >56</option>
        <option value='57' >57</option>
        <option value='58' >58</option>
        <option value='59' >59</option>
        <option value='60' >60</option>
        <option value='61' >61</option>
        <option value='62' >62</option>
        <option value='63' >63</option>
        <option value='64' >64</option>
        <option value='65' >65</option>
        <option value='66' >66</option>
        <option value='67' >67</option>
        <option value='68' >68</option>
        <option value='69' >69</option>
        <option value='70' >70</option>
        <option value='71' >71</option>
        <option value='72' >72</option>
        <option value='73' >73</option>
        <option value='74' >74</option>
        <option value='75' >75</option>
        <option value='76' >76</option>
        <option value='77' >77</option>
        <option value='78' >78</option>
        <option value='79' >79</option>
        <option value='80' >80</option>
        <option value='81' >81</option>
        <option value='82' >82</option>
        <option value='83' >83</option>
        <option value='84' >84</option>
        <option value='85' >85</option>
        <option value='86' >86</option>
        <option value='87' >87</option>
        <option value='88' >88</option>
        <option value='89' >89</option>
        <option value='90' >90</option>
        <option value='91' >91</option>
        <option value='92' >92</option>
        <option value='93' >93</option>
        <option value='94' >94</option>
        <option value='95' >95</option>
        <option value='96' >96</option>
        <option value='97' >97</option>
        <option value='98' >98</option>
        <option value='99' >99</option>
        <option value='100' >100</option>
        <option value='101' >101</option>
        <option value='102' >102</option>
        <option value='103' >103</option>
        <option value='104' >104</option>
        <option value='105' >105</option>
     </select>
  </div>
</li>
<li id='field_1_18'  class='gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible' >
  <label class='gfield_label' for='input_1_18' >Current BC geographic location<span class='gfield_required'>*</span></label>
  <div class='ginput_container ginput_container_select'>
     <select name='Current region' id='input_1_18' class='medium gfield_select'   aria-required="true" aria-invalid="false">
        <option value='' ></option>
        <option value='Vancouver Island/Coast' >Vancouver Island/Coast</option>
        <option value='Lower Mainland/Southwest' >Lower Mainland/Southwest</option>
        <option value='Thompson-Okanagan' >Thompson-Okanagan</option>
        <option value='Kootenay-Rockies' >Kootenay-Rockies</option>
        <option value='Cariboo-Chilcotin-Coast' >Cariboo-Chilcotin-Coast</option>
        <option value='Skeena-North Coast' >Skeena-North Coast</option>
        <option value='Peace-Northeast' >Peace-Northeast</option>
     </select>
  </div>
</li>
<li id='field_1_53'  class='gfield gfield_html gfield_html_formatted gfield_no_follows_desc field_sublabel_below field_description_below gfield_visibility_visible' ><img src="{{ asset('images/bc-regions.jpg') }}" alt="image description" width="540" height="348"></li>
<li id='field_1_20'  class='gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible' >
  <label class='gfield_label' for='input_1_20' >In which general geographic location have you lived the longest in B.C.<span class='gfield_required'>*</span></label>
  <div class='ginput_container ginput_container_select'>
     <select name='BC region lived longest' id='input_1_20' class='medium gfield_select'   aria-required="true" aria-invalid="false">
        <option value='' ></option>
        <option value='Vancouver Island/Coast' >Vancouver Island/Coast</option>
        <option value='Lower Mainland/Southwest' >Lower Mainland/Southwest</option>
        <option value='Thompson-Okanagan' >Thompson-Okanagan</option>
        <option value='Kootenay-Rockies' >Kootenay-Rockies</option>
        <option value='Cariboo-Chilcotin-Coast' >Cariboo-Chilcotin-Coast</option>
        <option value='Skeena-North Coast' >Skeena-North Coast</option>
        <option value='Peace-Northeast' >Peace-Northeast</option>
     </select>
  </div>
</li>
<li id='field_1_21'  class='gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible' >
  <label class='gfield_label' for='input_1_21' >In which B.C. city/town/community have you lived the longest?<span class='gfield_required'>*</span></label>
  <div class='ginput_container ginput_container_text'><input name='Community lived longest' id='input_1_21' type='text' value='' class='medium'     aria-required="true" aria-invalid="false" /></div>
</li>
<li id='field_1_66'  class='gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible' >
  <label class='gfield_label' for='input_1_66' >How many years in that community?<span class='gfield_required'>*</span></label>
  <div class='ginput_container ginput_container_select'>
     <select name='Years in community' id='input_1_66' class='medium gfield_select'   aria-required="true" aria-invalid="false">
        <option value='Select years' >Select years</option>
        <option value='1' >1</option>
        <option value='2' >2</option>
        <option value='3' >3</option>
        <option value='4' >4</option>
        <option value='5' >5</option>
        <option value='6' >6</option>
        <option value='7' >7</option>
        <option value='8' >8</option>
        <option value='9' >9</option>
        <option value='10' >10</option>
        <option value='11' >11</option>
        <option value='12' >12</option>
        <option value='13' >13</option>
        <option value='14' >14</option>
        <option value='15' >15</option>
        <option value='16' >16</option>
        <option value='17' >17</option>
        <option value='18' >18</option>
        <option value='19' >19</option>
        <option value='20' >20</option>
        <option value='21' >21</option>
        <option value='22' >22</option>
        <option value='23' >23</option>
        <option value='24' >24</option>
        <option value='25' >25</option>
        <option value='26' >26</option>
        <option value='27' >27</option>
        <option value='28' >28</option>
        <option value='29' >29</option>
        <option value='30' >30</option>
        <option value='31' >31</option>
        <option value='32' >32</option>
        <option value='33' >33</option>
        <option value='34' >34</option>
        <option value='35' >35</option>
        <option value='36' >36</option>
        <option value='37' >37</option>
        <option value='38' >38</option>
        <option value='39' >39</option>
        <option value='40' >40</option>
        <option value='41' >41</option>
        <option value='42' >42</option>
        <option value='43' >43</option>
        <option value='44' >44</option>
        <option value='45' >45</option>
        <option value='46' >46</option>
        <option value='47' >47</option>
        <option value='48' >48</option>
        <option value='49' >49</option>
        <option value='50' >50</option>
        <option value='51' >51</option>
        <option value='52' >52</option>
        <option value='53' >53</option>
        <option value='54' >54</option>
        <option value='55' >55</option>
        <option value='56' >56</option>
        <option value='57' >57</option>
        <option value='58' >58</option>
        <option value='59' >59</option>
        <option value='60' >60</option>
        <option value='61' >61</option>
        <option value='62' >62</option>
        <option value='63' >63</option>
        <option value='64' >64</option>
        <option value='65' >65</option>
        <option value='66' >66</option>
        <option value='67' >67</option>
        <option value='68' >68</option>
        <option value='69' >69</option>
        <option value='70' >70</option>
        <option value='71' >71</option>
        <option value='72' >72</option>
        <option value='73' >73</option>
        <option value='74' >74</option>
        <option value='75' >75</option>
        <option value='76' >76</option>
        <option value='77' >77</option>
        <option value='78' >78</option>
        <option value='79' >79</option>
        <option value='80' >80</option>
        <option value='81' >81</option>
        <option value='82' >82</option>
        <option value='83' >83</option>
        <option value='84' >84</option>
        <option value='85' >85</option>
        <option value='86' >86</option>
        <option value='87' >87</option>
        <option value='88' >88</option>
        <option value='89' >89</option>
        <option value='90' >90</option>
        <option value='91' >91</option>
        <option value='92' >92</option>
        <option value='93' >93</option>
        <option value='94' >94</option>
        <option value='95' >95</option>
        <option value='96' >96</option>
        <option value='97' >97</option>
        <option value='98' >98</option>
        <option value='99' >99</option>
        <option value='100' >100</option>
        <option value='101' >101</option>
        <option value='102' >102</option>
        <option value='103' >103</option>
        <option value='104' >104</option>
        <option value='105' >105</option>
     </select>
  </div>
</li>
<li id='field_1_59'  class='gfield field_sublabel_below field_description_below gfield_visibility_visible' >
  <label class='gfield_label' for='input_1_59' >If known, in what country was your mother born?</label>
  <div class='ginput_container ginput_container_select'>
     <select name='Birth country mother' id='input_1_59' class='medium gfield_select'    aria-invalid="false">
        <option value='Choose country' >Choose country</option>
        <option value='Afghanistan' >Afghanistan</option>
        <option value='Albania' >Albania</option>
        <option value='Algeria' >Algeria</option>
        <option value='American Samoa' >American Samoa</option>
        <option value='Andorra' >Andorra</option>
        <option value='Angola' >Angola</option>
        <option value='Antigua and Barbuda' >Antigua and Barbuda</option>
        <option value='Argentina' >Argentina</option>
        <option value='Armenia' >Armenia</option>
        <option value='Australia' >Australia</option>
        <option value='Austria' >Austria</option>
        <option value='Azerbaijan' >Azerbaijan</option>
        <option value='Bahamas' >Bahamas</option>
        <option value='Bahrain' >Bahrain</option>
        <option value='Bangladesh' >Bangladesh</option>
        <option value='Barbados' >Barbados</option>
        <option value='Belarus' >Belarus</option>
        <option value='Belgium' >Belgium</option>
        <option value='Belize' >Belize</option>
        <option value='Benin' >Benin</option>
        <option value='Bermuda' >Bermuda</option>
        <option value='Bhutan' >Bhutan</option>
        <option value='Bolivia' >Bolivia</option>
        <option value='Bosnia and Herzegovina' >Bosnia and Herzegovina</option>
        <option value='Botswana' >Botswana</option>
        <option value='Brazil' >Brazil</option>
        <option value='Brunei' >Brunei</option>
        <option value='Bulgaria' >Bulgaria</option>
        <option value='Burkina Faso' >Burkina Faso</option>
        <option value='Burundi' >Burundi</option>
        <option value='Cambodia' >Cambodia</option>
        <option value='Cameroon' >Cameroon</option>
        <option value='Canada' >Canada</option>
        <option value='Cape Verde' >Cape Verde</option>
        <option value='Cayman Islands' >Cayman Islands</option>
        <option value='Central African Republic' >Central African Republic</option>
        <option value='Chad' >Chad</option>
        <option value='Chile' >Chile</option>
        <option value='China' >China</option>
        <option value='Colombia' >Colombia</option>
        <option value='Comoros' >Comoros</option>
        <option value='Congo, Democratic Republic of the' >Congo, Democratic Republic of the</option>
        <option value='Congo, Republic of the' >Congo, Republic of the</option>
        <option value='Costa Rica' >Costa Rica</option>
        <option value='Côte d&#039;Ivoire' >Côte d&#039;Ivoire</option>
        <option value='Croatia' >Croatia</option>
        <option value='Cuba' >Cuba</option>
        <option value='Curaçao' >Curaçao</option>
        <option value='Cyprus' >Cyprus</option>
        <option value='Czech Republic' >Czech Republic</option>
        <option value='Denmark' >Denmark</option>
        <option value='Djibouti' >Djibouti</option>
        <option value='Dominica' >Dominica</option>
        <option value='Dominican Republic' >Dominican Republic</option>
        <option value='East Timor' >East Timor</option>
        <option value='Ecuador' >Ecuador</option>
        <option value='Egypt' >Egypt</option>
        <option value='El Salvador' >El Salvador</option>
        <option value='Equatorial Guinea' >Equatorial Guinea</option>
        <option value='Eritrea' >Eritrea</option>
        <option value='Estonia' >Estonia</option>
        <option value='Ethiopia' >Ethiopia</option>
        <option value='Faroe Islands' >Faroe Islands</option>
        <option value='Fiji' >Fiji</option>
        <option value='Finland' >Finland</option>
        <option value='France' >France</option>
        <option value='French Polynesia' >French Polynesia</option>
        <option value='Gabon' >Gabon</option>
        <option value='Gambia' >Gambia</option>
        <option value='Georgia' >Georgia</option>
        <option value='Germany' >Germany</option>
        <option value='Ghana' >Ghana</option>
        <option value='Greece' >Greece</option>
        <option value='Greenland' >Greenland</option>
        <option value='Grenada' >Grenada</option>
        <option value='Guam' >Guam</option>
        <option value='Guatemala' >Guatemala</option>
        <option value='Guinea' >Guinea</option>
        <option value='Guinea-Bissau' >Guinea-Bissau</option>
        <option value='Guyana' >Guyana</option>
        <option value='Haiti' >Haiti</option>
        <option value='Honduras' >Honduras</option>
        <option value='Hong Kong' >Hong Kong</option>
        <option value='Hungary' >Hungary</option>
        <option value='Iceland' >Iceland</option>
        <option value='India' >India</option>
        <option value='Indonesia' >Indonesia</option>
        <option value='Iran' >Iran</option>
        <option value='Iraq' >Iraq</option>
        <option value='Ireland' >Ireland</option>
        <option value='Israel' >Israel</option>
        <option value='Italy' >Italy</option>
        <option value='Jamaica' >Jamaica</option>
        <option value='Japan' >Japan</option>
        <option value='Jordan' >Jordan</option>
        <option value='Kazakhstan' >Kazakhstan</option>
        <option value='Kenya' >Kenya</option>
        <option value='Kiribati' >Kiribati</option>
        <option value='North Korea' >North Korea</option>
        <option value='South Korea' >South Korea</option>
        <option value='Kosovo' >Kosovo</option>
        <option value='Kuwait' >Kuwait</option>
        <option value='Kyrgyzstan' >Kyrgyzstan</option>
        <option value='Laos' >Laos</option>
        <option value='Latvia' >Latvia</option>
        <option value='Lebanon' >Lebanon</option>
        <option value='Lesotho' >Lesotho</option>
        <option value='Liberia' >Liberia</option>
        <option value='Libya' >Libya</option>
        <option value='Liechtenstein' >Liechtenstein</option>
        <option value='Lithuania' >Lithuania</option>
        <option value='Luxembourg' >Luxembourg</option>
        <option value='Macedonia' >Macedonia</option>
        <option value='Madagascar' >Madagascar</option>
        <option value='Malawi' >Malawi</option>
        <option value='Malaysia' >Malaysia</option>
        <option value='Maldives' >Maldives</option>
        <option value='Mali' >Mali</option>
        <option value='Malta' >Malta</option>
        <option value='Marshall Islands' >Marshall Islands</option>
        <option value='Mauritania' >Mauritania</option>
        <option value='Mauritius' >Mauritius</option>
        <option value='Mexico' >Mexico</option>
        <option value='Micronesia' >Micronesia</option>
        <option value='Moldova' >Moldova</option>
        <option value='Monaco' >Monaco</option>
        <option value='Mongolia' >Mongolia</option>
        <option value='Montenegro' >Montenegro</option>
        <option value='Morocco' >Morocco</option>
        <option value='Mozambique' >Mozambique</option>
        <option value='Myanmar' >Myanmar</option>
        <option value='Namibia' >Namibia</option>
        <option value='Nauru' >Nauru</option>
        <option value='Nepal' >Nepal</option>
        <option value='Netherlands' >Netherlands</option>
        <option value='New Zealand' >New Zealand</option>
        <option value='Nicaragua' >Nicaragua</option>
        <option value='Niger' >Niger</option>
        <option value='Nigeria' >Nigeria</option>
        <option value='Northern Mariana Islands' >Northern Mariana Islands</option>
        <option value='Norway' >Norway</option>
        <option value='Oman' >Oman</option>
        <option value='Pakistan' >Pakistan</option>
        <option value='Palau' >Palau</option>
        <option value='Palestine, State of' >Palestine, State of</option>
        <option value='Panama' >Panama</option>
        <option value='Papua New Guinea' >Papua New Guinea</option>
        <option value='Paraguay' >Paraguay</option>
        <option value='Peru' >Peru</option>
        <option value='Philippines' >Philippines</option>
        <option value='Poland' >Poland</option>
        <option value='Portugal' >Portugal</option>
        <option value='Puerto Rico' >Puerto Rico</option>
        <option value='Qatar' >Qatar</option>
        <option value='Romania' >Romania</option>
        <option value='Russia' >Russia</option>
        <option value='Rwanda' >Rwanda</option>
        <option value='Saint Kitts and Nevis' >Saint Kitts and Nevis</option>
        <option value='Saint Lucia' >Saint Lucia</option>
        <option value='Saint Vincent and the Grenadines' >Saint Vincent and the Grenadines</option>
        <option value='Samoa' >Samoa</option>
        <option value='San Marino' >San Marino</option>
        <option value='Sao Tome and Principe' >Sao Tome and Principe</option>
        <option value='Saudi Arabia' >Saudi Arabia</option>
        <option value='Senegal' >Senegal</option>
        <option value='Serbia' >Serbia</option>
        <option value='Seychelles' >Seychelles</option>
        <option value='Sierra Leone' >Sierra Leone</option>
        <option value='Singapore' >Singapore</option>
        <option value='Sint Maarten' >Sint Maarten</option>
        <option value='Slovakia' >Slovakia</option>
        <option value='Slovenia' >Slovenia</option>
        <option value='Solomon Islands' >Solomon Islands</option>
        <option value='Somalia' >Somalia</option>
        <option value='South Africa' >South Africa</option>
        <option value='Spain' >Spain</option>
        <option value='Sri Lanka' >Sri Lanka</option>
        <option value='Sudan' >Sudan</option>
        <option value='Sudan, South' >Sudan, South</option>
        <option value='Suriname' >Suriname</option>
        <option value='Swaziland' >Swaziland</option>
        <option value='Sweden' >Sweden</option>
        <option value='Switzerland' >Switzerland</option>
        <option value='Syria' >Syria</option>
        <option value='Taiwan' >Taiwan</option>
        <option value='Tajikistan' >Tajikistan</option>
        <option value='Tanzania' >Tanzania</option>
        <option value='Thailand' >Thailand</option>
        <option value='Togo' >Togo</option>
        <option value='Tonga' >Tonga</option>
        <option value='Trinidad and Tobago' >Trinidad and Tobago</option>
        <option value='Tunisia' >Tunisia</option>
        <option value='Turkey' >Turkey</option>
        <option value='Turkmenistan' >Turkmenistan</option>
        <option value='Tuvalu' >Tuvalu</option>
        <option value='Uganda' >Uganda</option>
        <option value='Ukraine' >Ukraine</option>
        <option value='United Arab Emirates' >United Arab Emirates</option>
        <option value='United Kingdom' >United Kingdom</option>
        <option value='United States' >United States</option>
        <option value='Uruguay' >Uruguay</option>
        <option value='Uzbekistan' >Uzbekistan</option>
        <option value='Vanuatu' >Vanuatu</option>
        <option value='Vatican City' >Vatican City</option>
        <option value='Venezuela' >Venezuela</option>
        <option value='Vietnam' >Vietnam</option>
        <option value='Virgin Islands, British' >Virgin Islands, British</option>
        <option value='Virgin Islands, U.S.' >Virgin Islands, U.S.</option>
        <option value='Yemen' >Yemen</option>
        <option value='Zambia' >Zambia</option>
        <option value='Zimbabwe' >Zimbabwe</option>
        <option value='Other' >Other</option>
     </select>
  </div>
</li>
<li id='field_1_60'  class='gfield field_sublabel_below field_description_below gfield_visibility_visible' >
  <label class='gfield_label' for='input_1_60' >If known, in what country was your father born?</label>
  <div class='ginput_container ginput_container_select'>
     <select name='Birth country father' id='input_1_60' class='medium gfield_select'    aria-invalid="false">
        <option value='Choose country' >Choose country</option>
        <option value='Afghanistan' >Afghanistan</option>
        <option value='Albania' >Albania</option>
        <option value='Algeria' >Algeria</option>
        <option value='American Samoa' >American Samoa</option>
        <option value='Andorra' >Andorra</option>
        <option value='Angola' >Angola</option>
        <option value='Antigua and Barbuda' >Antigua and Barbuda</option>
        <option value='Argentina' >Argentina</option>
        <option value='Armenia' >Armenia</option>
        <option value='Australia' >Australia</option>
        <option value='Austria' >Austria</option>
        <option value='Azerbaijan' >Azerbaijan</option>
        <option value='Bahamas' >Bahamas</option>
        <option value='Bahrain' >Bahrain</option>
        <option value='Bangladesh' >Bangladesh</option>
        <option value='Barbados' >Barbados</option>
        <option value='Belarus' >Belarus</option>
        <option value='Belgium' >Belgium</option>
        <option value='Belize' >Belize</option>
        <option value='Benin' >Benin</option>
        <option value='Bermuda' >Bermuda</option>
        <option value='Bhutan' >Bhutan</option>
        <option value='Bolivia' >Bolivia</option>
        <option value='Bosnia and Herzegovina' >Bosnia and Herzegovina</option>
        <option value='Botswana' >Botswana</option>
        <option value='Brazil' >Brazil</option>
        <option value='Brunei' >Brunei</option>
        <option value='Bulgaria' >Bulgaria</option>
        <option value='Burkina Faso' >Burkina Faso</option>
        <option value='Burundi' >Burundi</option>
        <option value='Cambodia' >Cambodia</option>
        <option value='Cameroon' >Cameroon</option>
        <option value='Canada' >Canada</option>
        <option value='Cape Verde' >Cape Verde</option>
        <option value='Cayman Islands' >Cayman Islands</option>
        <option value='Central African Republic' >Central African Republic</option>
        <option value='Chad' >Chad</option>
        <option value='Chile' >Chile</option>
        <option value='China' >China</option>
        <option value='Colombia' >Colombia</option>
        <option value='Comoros' >Comoros</option>
        <option value='Congo, Democratic Republic of the' >Congo, Democratic Republic of the</option>
        <option value='Congo, Republic of the' >Congo, Republic of the</option>
        <option value='Costa Rica' >Costa Rica</option>
        <option value='Côte d&#039;Ivoire' >Côte d&#039;Ivoire</option>
        <option value='Croatia' >Croatia</option>
        <option value='Cuba' >Cuba</option>
        <option value='Curaçao' >Curaçao</option>
        <option value='Cyprus' >Cyprus</option>
        <option value='Czech Republic' >Czech Republic</option>
        <option value='Denmark' >Denmark</option>
        <option value='Djibouti' >Djibouti</option>
        <option value='Dominica' >Dominica</option>
        <option value='Dominican Republic' >Dominican Republic</option>
        <option value='East Timor' >East Timor</option>
        <option value='Ecuador' >Ecuador</option>
        <option value='Egypt' >Egypt</option>
        <option value='El Salvador' >El Salvador</option>
        <option value='Equatorial Guinea' >Equatorial Guinea</option>
        <option value='Eritrea' >Eritrea</option>
        <option value='Estonia' >Estonia</option>
        <option value='Ethiopia' >Ethiopia</option>
        <option value='Faroe Islands' >Faroe Islands</option>
        <option value='Fiji' >Fiji</option>
        <option value='Finland' >Finland</option>
        <option value='France' >France</option>
        <option value='French Polynesia' >French Polynesia</option>
        <option value='Gabon' >Gabon</option>
        <option value='Gambia' >Gambia</option>
        <option value='Georgia' >Georgia</option>
        <option value='Germany' >Germany</option>
        <option value='Ghana' >Ghana</option>
        <option value='Greece' >Greece</option>
        <option value='Greenland' >Greenland</option>
        <option value='Grenada' >Grenada</option>
        <option value='Guam' >Guam</option>
        <option value='Guatemala' >Guatemala</option>
        <option value='Guinea' >Guinea</option>
        <option value='Guinea-Bissau' >Guinea-Bissau</option>
        <option value='Guyana' >Guyana</option>
        <option value='Haiti' >Haiti</option>
        <option value='Honduras' >Honduras</option>
        <option value='Hong Kong' >Hong Kong</option>
        <option value='Hungary' >Hungary</option>
        <option value='Iceland' >Iceland</option>
        <option value='India' >India</option>
        <option value='Indonesia' >Indonesia</option>
        <option value='Iran' >Iran</option>
        <option value='Iraq' >Iraq</option>
        <option value='Ireland' >Ireland</option>
        <option value='Israel' >Israel</option>
        <option value='Italy' >Italy</option>
        <option value='Jamaica' >Jamaica</option>
        <option value='Japan' >Japan</option>
        <option value='Jordan' >Jordan</option>
        <option value='Kazakhstan' >Kazakhstan</option>
        <option value='Kenya' >Kenya</option>
        <option value='Kiribati' >Kiribati</option>
        <option value='North Korea' >North Korea</option>
        <option value='South Korea' >South Korea</option>
        <option value='Kosovo' >Kosovo</option>
        <option value='Kuwait' >Kuwait</option>
        <option value='Kyrgyzstan' >Kyrgyzstan</option>
        <option value='Laos' >Laos</option>
        <option value='Latvia' >Latvia</option>
        <option value='Lebanon' >Lebanon</option>
        <option value='Lesotho' >Lesotho</option>
        <option value='Liberia' >Liberia</option>
        <option value='Libya' >Libya</option>
        <option value='Liechtenstein' >Liechtenstein</option>
        <option value='Lithuania' >Lithuania</option>
        <option value='Luxembourg' >Luxembourg</option>
        <option value='Macedonia' >Macedonia</option>
        <option value='Madagascar' >Madagascar</option>
        <option value='Malawi' >Malawi</option>
        <option value='Malaysia' >Malaysia</option>
        <option value='Maldives' >Maldives</option>
        <option value='Mali' >Mali</option>
        <option value='Malta' >Malta</option>
        <option value='Marshall Islands' >Marshall Islands</option>
        <option value='Mauritania' >Mauritania</option>
        <option value='Mauritius' >Mauritius</option>
        <option value='Mexico' >Mexico</option>
        <option value='Micronesia' >Micronesia</option>
        <option value='Moldova' >Moldova</option>
        <option value='Monaco' >Monaco</option>
        <option value='Mongolia' >Mongolia</option>
        <option value='Montenegro' >Montenegro</option>
        <option value='Morocco' >Morocco</option>
        <option value='Mozambique' >Mozambique</option>
        <option value='Myanmar' >Myanmar</option>
        <option value='Namibia' >Namibia</option>
        <option value='Nauru' >Nauru</option>
        <option value='Nepal' >Nepal</option>
        <option value='Netherlands' >Netherlands</option>
        <option value='New Zealand' >New Zealand</option>
        <option value='Nicaragua' >Nicaragua</option>
        <option value='Niger' >Niger</option>
        <option value='Nigeria' >Nigeria</option>
        <option value='Northern Mariana Islands' >Northern Mariana Islands</option>
        <option value='Norway' >Norway</option>
        <option value='Oman' >Oman</option>
        <option value='Pakistan' >Pakistan</option>
        <option value='Palau' >Palau</option>
        <option value='Palestine, State of' >Palestine, State of</option>
        <option value='Panama' >Panama</option>
        <option value='Papua New Guinea' >Papua New Guinea</option>
        <option value='Paraguay' >Paraguay</option>
        <option value='Peru' >Peru</option>
        <option value='Philippines' >Philippines</option>
        <option value='Poland' >Poland</option>
        <option value='Portugal' >Portugal</option>
        <option value='Puerto Rico' >Puerto Rico</option>
        <option value='Qatar' >Qatar</option>
        <option value='Romania' >Romania</option>
        <option value='Russia' >Russia</option>
        <option value='Rwanda' >Rwanda</option>
        <option value='Saint Kitts and Nevis' >Saint Kitts and Nevis</option>
        <option value='Saint Lucia' >Saint Lucia</option>
        <option value='Saint Vincent and the Grenadines' >Saint Vincent and the Grenadines</option>
        <option value='Samoa' >Samoa</option>
        <option value='San Marino' >San Marino</option>
        <option value='Sao Tome and Principe' >Sao Tome and Principe</option>
        <option value='Saudi Arabia' >Saudi Arabia</option>
        <option value='Senegal' >Senegal</option>
        <option value='Serbia' >Serbia</option>
        <option value='Seychelles' >Seychelles</option>
        <option value='Sierra Leone' >Sierra Leone</option>
        <option value='Singapore' >Singapore</option>
        <option value='Sint Maarten' >Sint Maarten</option>
        <option value='Slovakia' >Slovakia</option>
        <option value='Slovenia' >Slovenia</option>
        <option value='Solomon Islands' >Solomon Islands</option>
        <option value='Somalia' >Somalia</option>
        <option value='South Africa' >South Africa</option>
        <option value='Spain' >Spain</option>
        <option value='Sri Lanka' >Sri Lanka</option>
        <option value='Sudan' >Sudan</option>
        <option value='Sudan, South' >Sudan, South</option>
        <option value='Suriname' >Suriname</option>
        <option value='Swaziland' >Swaziland</option>
        <option value='Sweden' >Sweden</option>
        <option value='Switzerland' >Switzerland</option>
        <option value='Syria' >Syria</option>
        <option value='Taiwan' >Taiwan</option>
        <option value='Tajikistan' >Tajikistan</option>
        <option value='Tanzania' >Tanzania</option>
        <option value='Thailand' >Thailand</option>
        <option value='Togo' >Togo</option>
        <option value='Tonga' >Tonga</option>
        <option value='Trinidad and Tobago' >Trinidad and Tobago</option>
        <option value='Tunisia' >Tunisia</option>
        <option value='Turkey' >Turkey</option>
        <option value='Turkmenistan' >Turkmenistan</option>
        <option value='Tuvalu' >Tuvalu</option>
        <option value='Uganda' >Uganda</option>
        <option value='Ukraine' >Ukraine</option>
        <option value='United Arab Emirates' >United Arab Emirates</option>
        <option value='United Kingdom' >United Kingdom</option>
        <option value='United States' >United States</option>
        <option value='Uruguay' >Uruguay</option>
        <option value='Uzbekistan' >Uzbekistan</option>
        <option value='Vanuatu' >Vanuatu</option>
        <option value='Vatican City' >Vatican City</option>
        <option value='Venezuela' >Venezuela</option>
        <option value='Vietnam' >Vietnam</option>
        <option value='Virgin Islands, British' >Virgin Islands, British</option>
        <option value='Virgin Islands, U.S.' >Virgin Islands, U.S.</option>
        <option value='Yemen' >Yemen</option>
        <option value='Zambia' >Zambia</option>
        <option value='Zimbabwe' >Zimbabwe</option>
        <option value='Other' >Other</option>
     </select>
  </div>
</li>
<li id='field_1_25'  class='gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible' >
  <label class='gfield_label' for='input_1_25' >If known, in what languages were/are your parents fluent?<span class='gfield_required'>*</span></label>
  <div class='ginput_container ginput_container_select'>
     <select name='Parental language 1' id='input_1_25' class='medium gfield_select'   aria-required="true" aria-invalid="false">
        <option value='Parental language 1' >Parental language 1</option>
        <option value='Canadian English' >Canadian English</option>
        <option value='Canadian French' >Canadian French</option>
        <option value='First Nations' >First Nations</option>
        <option value='American (US) English' >American (US) English</option>
        <option value='Arabic' >Arabic</option>
        <option value='Awadhi' >Awadhi</option>
        <option value='Azerbaijani, North' >Azerbaijani, North</option>
        <option value='Azerbaijani, South' >Azerbaijani, South</option>
        <option value='Bengali' >Bengali</option>
        <option value='Bhojpuri' >Bhojpuri</option>
        <option value='Burmese' >Burmese</option>
        <option value='Chinese, Gan' >Chinese, Gan</option>
        <option value='Chinese, Hakka' >Chinese, Hakka</option>
        <option value='Chinese, Jinyu' >Chinese, Jinyu</option>
        <option value='Chinese, Mandarin' >Chinese, Mandarin</option>
        <option value='Chinese, MinNan' >Chinese, MinNan</option>
        <option value='Chinese, Wu' >Chinese, Wu</option>
        <option value='Chinese, Xiang' >Chinese, Xiang</option>
        <option value='Chinese, Yue (Cantonese)' >Chinese, Yue (Cantonese)</option>
        <option value='Dutch' >Dutch</option>
        <option value='English' >English</option>
        <option value='French' >French</option>
        <option value='German' >German</option>
        <option value='Gujarati' >Gujarati</option>
        <option value='Hausa' >Hausa</option>
        <option value='Hindi' >Hindi</option>
        <option value='Italian' >Italian</option>
        <option value='Japanese' >Japanese</option>
        <option value='Javanese' >Javanese</option>
        <option value='Kannada' >Kannada</option>
        <option value='Korean' >Korean</option>
        <option value='Maithili' >Maithili</option>
        <option value='Malayalam' >Malayalam</option>
        <option value='Marathi' >Marathi</option>
        <option value='Oriya' >Oriya</option>
        <option value='Panjabi, Eastern' >Panjabi, Eastern</option>
        <option value='Panjabi, Western' >Panjabi, Western</option>
        <option value='Persian' >Persian</option>
        <option value='Polish' >Polish</option>
        <option value='Portuguese' >Portuguese</option>
        <option value='Romanian' >Romanian</option>
        <option value='Russian' >Russian</option>
        <option value='Serbo-Croatian' >Serbo-Croatian</option>
        <option value='Sindhi' >Sindhi</option>
        <option value='Spanish' >Spanish</option>
        <option value='Sunda' >Sunda</option>
        <option value='Tamil' >Tamil</option>
        <option value='Teluga' >Teluga</option>
        <option value='Thai' >Thai</option>
        <option value='Turkish' >Turkish</option>
        <option value='Ukrainian' >Ukrainian</option>
        <option value='Urdu' >Urdu</option>
        <option value='Vietnamese' >Vietnamese</option>
        <option value='Yoruba' >Yoruba</option>
        <option value='Other' >Other</option>
     </select>
  </div>
</li>
<li id='field_1_26'  class='gfield Thirds gf_left_third field_sublabel_below field_description_below gfield_visibility_visible' >
  <label class='gfield_label' for='input_1_26' ></label>
  <div class='ginput_container ginput_container_select'>
     <select name='Parental language 2' id='input_1_26' class='medium gfield_select'    aria-invalid="false">
        <option value='Parental language 2' >Parental language 2</option>
        <option value='Canadian English' >Canadian English</option>
        <option value='Canadian French' >Canadian French</option>
        <option value='First Nations' >First Nations</option>
        <option value='American (US) English' >American (US) English</option>
        <option value='Arabic' >Arabic</option>
        <option value='Awadhi' >Awadhi</option>
        <option value='Azerbaijani, North' >Azerbaijani, North</option>
        <option value='Azerbaijani, South' >Azerbaijani, South</option>
        <option value='Bengali' >Bengali</option>
        <option value='Bhojpuri' >Bhojpuri</option>
        <option value='Burmese' >Burmese</option>
        <option value='Chinese, Gan' >Chinese, Gan</option>
        <option value='Chinese, Hakka' >Chinese, Hakka</option>
        <option value='Chinese, Jinyu' >Chinese, Jinyu</option>
        <option value='Chinese, Mandarin' >Chinese, Mandarin</option>
        <option value='Chinese, MinNan' >Chinese, MinNan</option>
        <option value='Chinese, Wu' >Chinese, Wu</option>
        <option value='Chinese, Xiang' >Chinese, Xiang</option>
        <option value='Chinese, Yue (Cantonese)' >Chinese, Yue (Cantonese)</option>
        <option value='Dutch' >Dutch</option>
        <option value='English' >English</option>
        <option value='French' >French</option>
        <option value='German' >German</option>
        <option value='Gujarati' >Gujarati</option>
        <option value='Hausa' >Hausa</option>
        <option value='Hindi' >Hindi</option>
        <option value='Italian' >Italian</option>
        <option value='Japanese' >Japanese</option>
        <option value='Javanese' >Javanese</option>
        <option value='Kannada' >Kannada</option>
        <option value='Korean' >Korean</option>
        <option value='Maithili' >Maithili</option>
        <option value='Malayalam' >Malayalam</option>
        <option value='Marathi' >Marathi</option>
        <option value='Oriya' >Oriya</option>
        <option value='Panjabi, Eastern' >Panjabi, Eastern</option>
        <option value='Panjabi, Western' >Panjabi, Western</option>
        <option value='Persian' >Persian</option>
        <option value='Polish' >Polish</option>
        <option value='Portuguese' >Portuguese</option>
        <option value='Romanian' >Romanian</option>
        <option value='Russian' >Russian</option>
        <option value='Serbo-Croatian' >Serbo-Croatian</option>
        <option value='Sindhi' >Sindhi</option>
        <option value='Spanish' >Spanish</option>
        <option value='Sunda' >Sunda</option>
        <option value='Tamil' >Tamil</option>
        <option value='Teluga' >Teluga</option>
        <option value='Thai' >Thai</option>
        <option value='Turkish' >Turkish</option>
        <option value='Ukrainian' >Ukrainian</option>
        <option value='Urdu' >Urdu</option>
        <option value='Vietnamese' >Vietnamese</option>
        <option value='Yoruba' >Yoruba</option>
        <option value='Other' >Other</option>
     </select>
  </div>
</li>
<li id='field_1_27'  class='gfield Thirds gf_middle_third field_sublabel_below field_description_below gfield_visibility_visible' >
  <label class='gfield_label' for='input_1_27' ></label>
  <div class='ginput_container ginput_container_select'>
     <select name='Parental language 3' id='input_1_27' class='medium gfield_select'    aria-invalid="false">
        <option value='Parental language 3' >Parental language 3</option>
        <option value='Canadian English' >Canadian English</option>
        <option value='Canadian French' >Canadian French</option>
        <option value='First Nations' >First Nations</option>
        <option value='American (US) English' >American (US) English</option>
        <option value='Arabic' >Arabic</option>
        <option value='Awadhi' >Awadhi</option>
        <option value='Azerbaijani, North' >Azerbaijani, North</option>
        <option value='Azerbaijani, South' >Azerbaijani, South</option>
        <option value='Bengali' >Bengali</option>
        <option value='Bhojpuri' >Bhojpuri</option>
        <option value='Burmese' >Burmese</option>
        <option value='Chinese, Gan' >Chinese, Gan</option>
        <option value='Chinese, Hakka' >Chinese, Hakka</option>
        <option value='Chinese, Jinyu' >Chinese, Jinyu</option>
        <option value='Chinese, Mandarin' >Chinese, Mandarin</option>
        <option value='Chinese, MinNan' >Chinese, MinNan</option>
        <option value='Chinese, Wu' >Chinese, Wu</option>
        <option value='Chinese, Xiang' >Chinese, Xiang</option>
        <option value='Chinese, Yue (Cantonese)' >Chinese, Yue (Cantonese)</option>
        <option value='Dutch' >Dutch</option>
        <option value='English' >English</option>
        <option value='French' >French</option>
        <option value='German' >German</option>
        <option value='Gujarati' >Gujarati</option>
        <option value='Hausa' >Hausa</option>
        <option value='Hindi' >Hindi</option>
        <option value='Italian' >Italian</option>
        <option value='Japanese' >Japanese</option>
        <option value='Javanese' >Javanese</option>
        <option value='Kannada' >Kannada</option>
        <option value='Korean' >Korean</option>
        <option value='Maithili' >Maithili</option>
        <option value='Malayalam' >Malayalam</option>
        <option value='Marathi' >Marathi</option>
        <option value='Oriya' >Oriya</option>
        <option value='Panjabi, Eastern' >Panjabi, Eastern</option>
        <option value='Panjabi, Western' >Panjabi, Western</option>
        <option value='Persian' >Persian</option>
        <option value='Polish' >Polish</option>
        <option value='Portuguese' >Portuguese</option>
        <option value='Romanian' >Romanian</option>
        <option value='Russian' >Russian</option>
        <option value='Serbo-Croatian' >Serbo-Croatian</option>
        <option value='Sindhi' >Sindhi</option>
        <option value='Spanish' >Spanish</option>
        <option value='Sunda' >Sunda</option>
        <option value='Tamil' >Tamil</option>
        <option value='Teluga' >Teluga</option>
        <option value='Thai' >Thai</option>
        <option value='Turkish' >Turkish</option>
        <option value='Ukrainian' >Ukrainian</option>
        <option value='Urdu' >Urdu</option>
        <option value='Vietnamese' >Vietnamese</option>
        <option value='Yoruba' >Yoruba</option>
        <option value='Other' >Other</option>
     </select>
  </div>
</li>
<li id='field_1_28'  class='gfield Thirds gf_right_third field_sublabel_below field_description_below gfield_visibility_visible' >
  <label class='gfield_label' for='input_1_28' ></label>
  <div class='ginput_container ginput_container_select'>
     <select name='Parental language 4' id='input_1_28' class='medium gfield_select'    aria-invalid="false">
        <option value='Parental language 4' >Parental language 4</option>
        <option value='Canadian English' >Canadian English</option>
        <option value='Canadian French' >Canadian French</option>
        <option value='First Nations' >First Nations</option>
        <option value='American (US) English' >American (US) English</option>
        <option value='Arabic' >Arabic</option>
        <option value='Awadhi' >Awadhi</option>
        <option value='Azerbaijani, North' >Azerbaijani, North</option>
        <option value='Azerbaijani, South' >Azerbaijani, South</option>
        <option value='Bengali' >Bengali</option>
        <option value='Bhojpuri' >Bhojpuri</option>
        <option value='Burmese' >Burmese</option>
        <option value='Chinese, Gan' >Chinese, Gan</option>
        <option value='Chinese, Hakka' >Chinese, Hakka</option>
        <option value='Chinese, Jinyu' >Chinese, Jinyu</option>
        <option value='Chinese, Mandarin' >Chinese, Mandarin</option>
        <option value='Chinese, MinNan' >Chinese, MinNan</option>
        <option value='Chinese, Wu' >Chinese, Wu</option>
        <option value='Chinese, Xiang' >Chinese, Xiang</option>
        <option value='Chinese, Yue (Cantonese)' >Chinese, Yue (Cantonese)</option>
        <option value='Dutch' >Dutch</option>
        <option value='English' >English</option>
        <option value='French' >French</option>
        <option value='German' >German</option>
        <option value='Gujarati' >Gujarati</option>
        <option value='Hausa' >Hausa</option>
        <option value='Hindi' >Hindi</option>
        <option value='Italian' >Italian</option>
        <option value='Japanese' >Japanese</option>
        <option value='Javanese' >Javanese</option>
        <option value='Kannada' >Kannada</option>
        <option value='Korean' >Korean</option>
        <option value='Maithili' >Maithili</option>
        <option value='Malayalam' >Malayalam</option>
        <option value='Marathi' >Marathi</option>
        <option value='Oriya' >Oriya</option>
        <option value='Panjabi, Eastern' >Panjabi, Eastern</option>
        <option value='Panjabi, Western' >Panjabi, Western</option>
        <option value='Persian' >Persian</option>
        <option value='Polish' >Polish</option>
        <option value='Portuguese' >Portuguese</option>
        <option value='Romanian' >Romanian</option>
        <option value='Russian' >Russian</option>
        <option value='Serbo-Croatian' >Serbo-Croatian</option>
        <option value='Sindhi' >Sindhi</option>
        <option value='Spanish' >Spanish</option>
        <option value='Sunda' >Sunda</option>
        <option value='Tamil' >Tamil</option>
        <option value='Teluga' >Teluga</option>
        <option value='Thai' >Thai</option>
        <option value='Turkish' >Turkish</option>
        <option value='Ukrainian' >Ukrainian</option>
        <option value='Urdu' >Urdu</option>
        <option value='Vietnamese' >Vietnamese</option>
        <option value='Yoruba' >Yoruba</option>
        <option value='Other' >Other</option>
     </select>
  </div>
</li>
<li id='field_1_61'  class='gfield field_sublabel_below field_description_below gfield_visibility_visible' >
  <label class='gfield_label' for='input_1_61' >If known, in what country was your maternal grandmother born?</label>
  <div class='ginput_container ginput_container_select'>
     <select name='Birth country maternal grandmother' id='input_1_61' class='medium gfield_select'    aria-invalid="false">
        <option value='Choose country' >Choose country</option>
        <option value='Afghanistan' >Afghanistan</option>
        <option value='Albania' >Albania</option>
        <option value='Algeria' >Algeria</option>
        <option value='American Samoa' >American Samoa</option>
        <option value='Andorra' >Andorra</option>
        <option value='Angola' >Angola</option>
        <option value='Antigua and Barbuda' >Antigua and Barbuda</option>
        <option value='Argentina' >Argentina</option>
        <option value='Armenia' >Armenia</option>
        <option value='Australia' >Australia</option>
        <option value='Austria' >Austria</option>
        <option value='Azerbaijan' >Azerbaijan</option>
        <option value='Bahamas' >Bahamas</option>
        <option value='Bahrain' >Bahrain</option>
        <option value='Bangladesh' >Bangladesh</option>
        <option value='Barbados' >Barbados</option>
        <option value='Belarus' >Belarus</option>
        <option value='Belgium' >Belgium</option>
        <option value='Belize' >Belize</option>
        <option value='Benin' >Benin</option>
        <option value='Bermuda' >Bermuda</option>
        <option value='Bhutan' >Bhutan</option>
        <option value='Bolivia' >Bolivia</option>
        <option value='Bosnia and Herzegovina' >Bosnia and Herzegovina</option>
        <option value='Botswana' >Botswana</option>
        <option value='Brazil' >Brazil</option>
        <option value='Brunei' >Brunei</option>
        <option value='Bulgaria' >Bulgaria</option>
        <option value='Burkina Faso' >Burkina Faso</option>
        <option value='Burundi' >Burundi</option>
        <option value='Cambodia' >Cambodia</option>
        <option value='Cameroon' >Cameroon</option>
        <option value='Canada' >Canada</option>
        <option value='Cape Verde' >Cape Verde</option>
        <option value='Cayman Islands' >Cayman Islands</option>
        <option value='Central African Republic' >Central African Republic</option>
        <option value='Chad' >Chad</option>
        <option value='Chile' >Chile</option>
        <option value='China' >China</option>
        <option value='Colombia' >Colombia</option>
        <option value='Comoros' >Comoros</option>
        <option value='Congo, Democratic Republic of the' >Congo, Democratic Republic of the</option>
        <option value='Congo, Republic of the' >Congo, Republic of the</option>
        <option value='Costa Rica' >Costa Rica</option>
        <option value='Côte d&#039;Ivoire' >Côte d&#039;Ivoire</option>
        <option value='Croatia' >Croatia</option>
        <option value='Cuba' >Cuba</option>
        <option value='Curaçao' >Curaçao</option>
        <option value='Cyprus' >Cyprus</option>
        <option value='Czech Republic' >Czech Republic</option>
        <option value='Denmark' >Denmark</option>
        <option value='Djibouti' >Djibouti</option>
        <option value='Dominica' >Dominica</option>
        <option value='Dominican Republic' >Dominican Republic</option>
        <option value='East Timor' >East Timor</option>
        <option value='Ecuador' >Ecuador</option>
        <option value='Egypt' >Egypt</option>
        <option value='El Salvador' >El Salvador</option>
        <option value='Equatorial Guinea' >Equatorial Guinea</option>
        <option value='Eritrea' >Eritrea</option>
        <option value='Estonia' >Estonia</option>
        <option value='Ethiopia' >Ethiopia</option>
        <option value='Faroe Islands' >Faroe Islands</option>
        <option value='Fiji' >Fiji</option>
        <option value='Finland' >Finland</option>
        <option value='France' >France</option>
        <option value='French Polynesia' >French Polynesia</option>
        <option value='Gabon' >Gabon</option>
        <option value='Gambia' >Gambia</option>
        <option value='Georgia' >Georgia</option>
        <option value='Germany' >Germany</option>
        <option value='Ghana' >Ghana</option>
        <option value='Greece' >Greece</option>
        <option value='Greenland' >Greenland</option>
        <option value='Grenada' >Grenada</option>
        <option value='Guam' >Guam</option>
        <option value='Guatemala' >Guatemala</option>
        <option value='Guinea' >Guinea</option>
        <option value='Guinea-Bissau' >Guinea-Bissau</option>
        <option value='Guyana' >Guyana</option>
        <option value='Haiti' >Haiti</option>
        <option value='Honduras' >Honduras</option>
        <option value='Hong Kong' >Hong Kong</option>
        <option value='Hungary' >Hungary</option>
        <option value='Iceland' >Iceland</option>
        <option value='India' >India</option>
        <option value='Indonesia' >Indonesia</option>
        <option value='Iran' >Iran</option>
        <option value='Iraq' >Iraq</option>
        <option value='Ireland' >Ireland</option>
        <option value='Israel' >Israel</option>
        <option value='Italy' >Italy</option>
        <option value='Jamaica' >Jamaica</option>
        <option value='Japan' >Japan</option>
        <option value='Jordan' >Jordan</option>
        <option value='Kazakhstan' >Kazakhstan</option>
        <option value='Kenya' >Kenya</option>
        <option value='Kiribati' >Kiribati</option>
        <option value='North Korea' >North Korea</option>
        <option value='South Korea' >South Korea</option>
        <option value='Kosovo' >Kosovo</option>
        <option value='Kuwait' >Kuwait</option>
        <option value='Kyrgyzstan' >Kyrgyzstan</option>
        <option value='Laos' >Laos</option>
        <option value='Latvia' >Latvia</option>
        <option value='Lebanon' >Lebanon</option>
        <option value='Lesotho' >Lesotho</option>
        <option value='Liberia' >Liberia</option>
        <option value='Libya' >Libya</option>
        <option value='Liechtenstein' >Liechtenstein</option>
        <option value='Lithuania' >Lithuania</option>
        <option value='Luxembourg' >Luxembourg</option>
        <option value='Macedonia' >Macedonia</option>
        <option value='Madagascar' >Madagascar</option>
        <option value='Malawi' >Malawi</option>
        <option value='Malaysia' >Malaysia</option>
        <option value='Maldives' >Maldives</option>
        <option value='Mali' >Mali</option>
        <option value='Malta' >Malta</option>
        <option value='Marshall Islands' >Marshall Islands</option>
        <option value='Mauritania' >Mauritania</option>
        <option value='Mauritius' >Mauritius</option>
        <option value='Mexico' >Mexico</option>
        <option value='Micronesia' >Micronesia</option>
        <option value='Moldova' >Moldova</option>
        <option value='Monaco' >Monaco</option>
        <option value='Mongolia' >Mongolia</option>
        <option value='Montenegro' >Montenegro</option>
        <option value='Morocco' >Morocco</option>
        <option value='Mozambique' >Mozambique</option>
        <option value='Myanmar' >Myanmar</option>
        <option value='Namibia' >Namibia</option>
        <option value='Nauru' >Nauru</option>
        <option value='Nepal' >Nepal</option>
        <option value='Netherlands' >Netherlands</option>
        <option value='New Zealand' >New Zealand</option>
        <option value='Nicaragua' >Nicaragua</option>
        <option value='Niger' >Niger</option>
        <option value='Nigeria' >Nigeria</option>
        <option value='Northern Mariana Islands' >Northern Mariana Islands</option>
        <option value='Norway' >Norway</option>
        <option value='Oman' >Oman</option>
        <option value='Pakistan' >Pakistan</option>
        <option value='Palau' >Palau</option>
        <option value='Palestine, State of' >Palestine, State of</option>
        <option value='Panama' >Panama</option>
        <option value='Papua New Guinea' >Papua New Guinea</option>
        <option value='Paraguay' >Paraguay</option>
        <option value='Peru' >Peru</option>
        <option value='Philippines' >Philippines</option>
        <option value='Poland' >Poland</option>
        <option value='Portugal' >Portugal</option>
        <option value='Puerto Rico' >Puerto Rico</option>
        <option value='Qatar' >Qatar</option>
        <option value='Romania' >Romania</option>
        <option value='Russia' >Russia</option>
        <option value='Rwanda' >Rwanda</option>
        <option value='Saint Kitts and Nevis' >Saint Kitts and Nevis</option>
        <option value='Saint Lucia' >Saint Lucia</option>
        <option value='Saint Vincent and the Grenadines' >Saint Vincent and the Grenadines</option>
        <option value='Samoa' >Samoa</option>
        <option value='San Marino' >San Marino</option>
        <option value='Sao Tome and Principe' >Sao Tome and Principe</option>
        <option value='Saudi Arabia' >Saudi Arabia</option>
        <option value='Senegal' >Senegal</option>
        <option value='Serbia' >Serbia</option>
        <option value='Seychelles' >Seychelles</option>
        <option value='Sierra Leone' >Sierra Leone</option>
        <option value='Singapore' >Singapore</option>
        <option value='Sint Maarten' >Sint Maarten</option>
        <option value='Slovakia' >Slovakia</option>
        <option value='Slovenia' >Slovenia</option>
        <option value='Solomon Islands' >Solomon Islands</option>
        <option value='Somalia' >Somalia</option>
        <option value='South Africa' >South Africa</option>
        <option value='Spain' >Spain</option>
        <option value='Sri Lanka' >Sri Lanka</option>
        <option value='Sudan' >Sudan</option>
        <option value='Sudan, South' >Sudan, South</option>
        <option value='Suriname' >Suriname</option>
        <option value='Swaziland' >Swaziland</option>
        <option value='Sweden' >Sweden</option>
        <option value='Switzerland' >Switzerland</option>
        <option value='Syria' >Syria</option>
        <option value='Taiwan' >Taiwan</option>
        <option value='Tajikistan' >Tajikistan</option>
        <option value='Tanzania' >Tanzania</option>
        <option value='Thailand' >Thailand</option>
        <option value='Togo' >Togo</option>
        <option value='Tonga' >Tonga</option>
        <option value='Trinidad and Tobago' >Trinidad and Tobago</option>
        <option value='Tunisia' >Tunisia</option>
        <option value='Turkey' >Turkey</option>
        <option value='Turkmenistan' >Turkmenistan</option>
        <option value='Tuvalu' >Tuvalu</option>
        <option value='Uganda' >Uganda</option>
        <option value='Ukraine' >Ukraine</option>
        <option value='United Arab Emirates' >United Arab Emirates</option>
        <option value='United Kingdom' >United Kingdom</option>
        <option value='United States' >United States</option>
        <option value='Uruguay' >Uruguay</option>
        <option value='Uzbekistan' >Uzbekistan</option>
        <option value='Vanuatu' >Vanuatu</option>
        <option value='Vatican City' >Vatican City</option>
        <option value='Venezuela' >Venezuela</option>
        <option value='Vietnam' >Vietnam</option>
        <option value='Virgin Islands, British' >Virgin Islands, British</option>
        <option value='Virgin Islands, U.S.' >Virgin Islands, U.S.</option>
        <option value='Yemen' >Yemen</option>
        <option value='Zambia' >Zambia</option>
        <option value='Zimbabwe' >Zimbabwe</option>
        <option value='Other' >Other</option>
     </select>
  </div>
</li>
<li id='field_1_62'  class='gfield field_sublabel_below field_description_below gfield_visibility_visible' >
  <label class='gfield_label' for='input_1_62' >If known, in what country was your maternal grandfather born?</label>
  <div class='ginput_container ginput_container_select'>
     <select name='Birth country maternal grandfather' id='input_1_62' class='medium gfield_select'    aria-invalid="false">
        <option value='Choose country' >Choose country</option>
        <option value='Afghanistan' >Afghanistan</option>
        <option value='Albania' >Albania</option>
        <option value='Algeria' >Algeria</option>
        <option value='American Samoa' >American Samoa</option>
        <option value='Andorra' >Andorra</option>
        <option value='Angola' >Angola</option>
        <option value='Antigua and Barbuda' >Antigua and Barbuda</option>
        <option value='Argentina' >Argentina</option>
        <option value='Armenia' >Armenia</option>
        <option value='Australia' >Australia</option>
        <option value='Austria' >Austria</option>
        <option value='Azerbaijan' >Azerbaijan</option>
        <option value='Bahamas' >Bahamas</option>
        <option value='Bahrain' >Bahrain</option>
        <option value='Bangladesh' >Bangladesh</option>
        <option value='Barbados' >Barbados</option>
        <option value='Belarus' >Belarus</option>
        <option value='Belgium' >Belgium</option>
        <option value='Belize' >Belize</option>
        <option value='Benin' >Benin</option>
        <option value='Bermuda' >Bermuda</option>
        <option value='Bhutan' >Bhutan</option>
        <option value='Bolivia' >Bolivia</option>
        <option value='Bosnia and Herzegovina' >Bosnia and Herzegovina</option>
        <option value='Botswana' >Botswana</option>
        <option value='Brazil' >Brazil</option>
        <option value='Brunei' >Brunei</option>
        <option value='Bulgaria' >Bulgaria</option>
        <option value='Burkina Faso' >Burkina Faso</option>
        <option value='Burundi' >Burundi</option>
        <option value='Cambodia' >Cambodia</option>
        <option value='Cameroon' >Cameroon</option>
        <option value='Canada' >Canada</option>
        <option value='Cape Verde' >Cape Verde</option>
        <option value='Cayman Islands' >Cayman Islands</option>
        <option value='Central African Republic' >Central African Republic</option>
        <option value='Chad' >Chad</option>
        <option value='Chile' >Chile</option>
        <option value='China' >China</option>
        <option value='Colombia' >Colombia</option>
        <option value='Comoros' >Comoros</option>
        <option value='Congo, Democratic Republic of the' >Congo, Democratic Republic of the</option>
        <option value='Congo, Republic of the' >Congo, Republic of the</option>
        <option value='Costa Rica' >Costa Rica</option>
        <option value='Côte d&#039;Ivoire' >Côte d&#039;Ivoire</option>
        <option value='Croatia' >Croatia</option>
        <option value='Cuba' >Cuba</option>
        <option value='Curaçao' >Curaçao</option>
        <option value='Cyprus' >Cyprus</option>
        <option value='Czech Republic' >Czech Republic</option>
        <option value='Denmark' >Denmark</option>
        <option value='Djibouti' >Djibouti</option>
        <option value='Dominica' >Dominica</option>
        <option value='Dominican Republic' >Dominican Republic</option>
        <option value='East Timor' >East Timor</option>
        <option value='Ecuador' >Ecuador</option>
        <option value='Egypt' >Egypt</option>
        <option value='El Salvador' >El Salvador</option>
        <option value='Equatorial Guinea' >Equatorial Guinea</option>
        <option value='Eritrea' >Eritrea</option>
        <option value='Estonia' >Estonia</option>
        <option value='Ethiopia' >Ethiopia</option>
        <option value='Faroe Islands' >Faroe Islands</option>
        <option value='Fiji' >Fiji</option>
        <option value='Finland' >Finland</option>
        <option value='France' >France</option>
        <option value='French Polynesia' >French Polynesia</option>
        <option value='Gabon' >Gabon</option>
        <option value='Gambia' >Gambia</option>
        <option value='Georgia' >Georgia</option>
        <option value='Germany' >Germany</option>
        <option value='Ghana' >Ghana</option>
        <option value='Greece' >Greece</option>
        <option value='Greenland' >Greenland</option>
        <option value='Grenada' >Grenada</option>
        <option value='Guam' >Guam</option>
        <option value='Guatemala' >Guatemala</option>
        <option value='Guinea' >Guinea</option>
        <option value='Guinea-Bissau' >Guinea-Bissau</option>
        <option value='Guyana' >Guyana</option>
        <option value='Haiti' >Haiti</option>
        <option value='Honduras' >Honduras</option>
        <option value='Hong Kong' >Hong Kong</option>
        <option value='Hungary' >Hungary</option>
        <option value='Iceland' >Iceland</option>
        <option value='India' >India</option>
        <option value='Indonesia' >Indonesia</option>
        <option value='Iran' >Iran</option>
        <option value='Iraq' >Iraq</option>
        <option value='Ireland' >Ireland</option>
        <option value='Israel' >Israel</option>
        <option value='Italy' >Italy</option>
        <option value='Jamaica' >Jamaica</option>
        <option value='Japan' >Japan</option>
        <option value='Jordan' >Jordan</option>
        <option value='Kazakhstan' >Kazakhstan</option>
        <option value='Kenya' >Kenya</option>
        <option value='Kiribati' >Kiribati</option>
        <option value='North Korea' >North Korea</option>
        <option value='South Korea' >South Korea</option>
        <option value='Kosovo' >Kosovo</option>
        <option value='Kuwait' >Kuwait</option>
        <option value='Kyrgyzstan' >Kyrgyzstan</option>
        <option value='Laos' >Laos</option>
        <option value='Latvia' >Latvia</option>
        <option value='Lebanon' >Lebanon</option>
        <option value='Lesotho' >Lesotho</option>
        <option value='Liberia' >Liberia</option>
        <option value='Libya' >Libya</option>
        <option value='Liechtenstein' >Liechtenstein</option>
        <option value='Lithuania' >Lithuania</option>
        <option value='Luxembourg' >Luxembourg</option>
        <option value='Macedonia' >Macedonia</option>
        <option value='Madagascar' >Madagascar</option>
        <option value='Malawi' >Malawi</option>
        <option value='Malaysia' >Malaysia</option>
        <option value='Maldives' >Maldives</option>
        <option value='Mali' >Mali</option>
        <option value='Malta' >Malta</option>
        <option value='Marshall Islands' >Marshall Islands</option>
        <option value='Mauritania' >Mauritania</option>
        <option value='Mauritius' >Mauritius</option>
        <option value='Mexico' >Mexico</option>
        <option value='Micronesia' >Micronesia</option>
        <option value='Moldova' >Moldova</option>
        <option value='Monaco' >Monaco</option>
        <option value='Mongolia' >Mongolia</option>
        <option value='Montenegro' >Montenegro</option>
        <option value='Morocco' >Morocco</option>
        <option value='Mozambique' >Mozambique</option>
        <option value='Myanmar' >Myanmar</option>
        <option value='Namibia' >Namibia</option>
        <option value='Nauru' >Nauru</option>
        <option value='Nepal' >Nepal</option>
        <option value='Netherlands' >Netherlands</option>
        <option value='New Zealand' >New Zealand</option>
        <option value='Nicaragua' >Nicaragua</option>
        <option value='Niger' >Niger</option>
        <option value='Nigeria' >Nigeria</option>
        <option value='Northern Mariana Islands' >Northern Mariana Islands</option>
        <option value='Norway' >Norway</option>
        <option value='Oman' >Oman</option>
        <option value='Pakistan' >Pakistan</option>
        <option value='Palau' >Palau</option>
        <option value='Palestine, State of' >Palestine, State of</option>
        <option value='Panama' >Panama</option>
        <option value='Papua New Guinea' >Papua New Guinea</option>
        <option value='Paraguay' >Paraguay</option>
        <option value='Peru' >Peru</option>
        <option value='Philippines' >Philippines</option>
        <option value='Poland' >Poland</option>
        <option value='Portugal' >Portugal</option>
        <option value='Puerto Rico' >Puerto Rico</option>
        <option value='Qatar' >Qatar</option>
        <option value='Romania' >Romania</option>
        <option value='Russia' >Russia</option>
        <option value='Rwanda' >Rwanda</option>
        <option value='Saint Kitts and Nevis' >Saint Kitts and Nevis</option>
        <option value='Saint Lucia' >Saint Lucia</option>
        <option value='Saint Vincent and the Grenadines' >Saint Vincent and the Grenadines</option>
        <option value='Samoa' >Samoa</option>
        <option value='San Marino' >San Marino</option>
        <option value='Sao Tome and Principe' >Sao Tome and Principe</option>
        <option value='Saudi Arabia' >Saudi Arabia</option>
        <option value='Senegal' >Senegal</option>
        <option value='Serbia' >Serbia</option>
        <option value='Seychelles' >Seychelles</option>
        <option value='Sierra Leone' >Sierra Leone</option>
        <option value='Singapore' >Singapore</option>
        <option value='Sint Maarten' >Sint Maarten</option>
        <option value='Slovakia' >Slovakia</option>
        <option value='Slovenia' >Slovenia</option>
        <option value='Solomon Islands' >Solomon Islands</option>
        <option value='Somalia' >Somalia</option>
        <option value='South Africa' >South Africa</option>
        <option value='Spain' >Spain</option>
        <option value='Sri Lanka' >Sri Lanka</option>
        <option value='Sudan' >Sudan</option>
        <option value='Sudan, South' >Sudan, South</option>
        <option value='Suriname' >Suriname</option>
        <option value='Swaziland' >Swaziland</option>
        <option value='Sweden' >Sweden</option>
        <option value='Switzerland' >Switzerland</option>
        <option value='Syria' >Syria</option>
        <option value='Taiwan' >Taiwan</option>
        <option value='Tajikistan' >Tajikistan</option>
        <option value='Tanzania' >Tanzania</option>
        <option value='Thailand' >Thailand</option>
        <option value='Togo' >Togo</option>
        <option value='Tonga' >Tonga</option>
        <option value='Trinidad and Tobago' >Trinidad and Tobago</option>
        <option value='Tunisia' >Tunisia</option>
        <option value='Turkey' >Turkey</option>
        <option value='Turkmenistan' >Turkmenistan</option>
        <option value='Tuvalu' >Tuvalu</option>
        <option value='Uganda' >Uganda</option>
        <option value='Ukraine' >Ukraine</option>
        <option value='United Arab Emirates' >United Arab Emirates</option>
        <option value='United Kingdom' >United Kingdom</option>
        <option value='United States' >United States</option>
        <option value='Uruguay' >Uruguay</option>
        <option value='Uzbekistan' >Uzbekistan</option>
        <option value='Vanuatu' >Vanuatu</option>
        <option value='Vatican City' >Vatican City</option>
        <option value='Venezuela' >Venezuela</option>
        <option value='Vietnam' >Vietnam</option>
        <option value='Virgin Islands, British' >Virgin Islands, British</option>
        <option value='Virgin Islands, U.S.' >Virgin Islands, U.S.</option>
        <option value='Yemen' >Yemen</option>
        <option value='Zambia' >Zambia</option>
        <option value='Zimbabwe' >Zimbabwe</option>
        <option value='Other' >Other</option>
     </select>
  </div>
</li>
<li id='field_1_63'  class='gfield field_sublabel_below field_description_below gfield_visibility_visible' >
  <label class='gfield_label' for='input_1_63' >If known, in what country was your paternal grandmother born?</label>
  <div class='ginput_container ginput_container_select'>
     <select name='Birth country paternal grandmother' id='input_1_63' class='medium gfield_select'    aria-invalid="false">
        <option value='Choose country' >Choose country</option>
        <option value='Afghanistan' >Afghanistan</option>
        <option value='Albania' >Albania</option>
        <option value='Algeria' >Algeria</option>
        <option value='American Samoa' >American Samoa</option>
        <option value='Andorra' >Andorra</option>
        <option value='Angola' >Angola</option>
        <option value='Antigua and Barbuda' >Antigua and Barbuda</option>
        <option value='Argentina' >Argentina</option>
        <option value='Armenia' >Armenia</option>
        <option value='Australia' >Australia</option>
        <option value='Austria' >Austria</option>
        <option value='Azerbaijan' >Azerbaijan</option>
        <option value='Bahamas' >Bahamas</option>
        <option value='Bahrain' >Bahrain</option>
        <option value='Bangladesh' >Bangladesh</option>
        <option value='Barbados' >Barbados</option>
        <option value='Belarus' >Belarus</option>
        <option value='Belgium' >Belgium</option>
        <option value='Belize' >Belize</option>
        <option value='Benin' >Benin</option>
        <option value='Bermuda' >Bermuda</option>
        <option value='Bhutan' >Bhutan</option>
        <option value='Bolivia' >Bolivia</option>
        <option value='Bosnia and Herzegovina' >Bosnia and Herzegovina</option>
        <option value='Botswana' >Botswana</option>
        <option value='Brazil' >Brazil</option>
        <option value='Brunei' >Brunei</option>
        <option value='Bulgaria' >Bulgaria</option>
        <option value='Burkina Faso' >Burkina Faso</option>
        <option value='Burundi' >Burundi</option>
        <option value='Cambodia' >Cambodia</option>
        <option value='Cameroon' >Cameroon</option>
        <option value='Canada' >Canada</option>
        <option value='Cape Verde' >Cape Verde</option>
        <option value='Cayman Islands' >Cayman Islands</option>
        <option value='Central African Republic' >Central African Republic</option>
        <option value='Chad' >Chad</option>
        <option value='Chile' >Chile</option>
        <option value='China' >China</option>
        <option value='Colombia' >Colombia</option>
        <option value='Comoros' >Comoros</option>
        <option value='Congo, Democratic Republic of the' >Congo, Democratic Republic of the</option>
        <option value='Congo, Republic of the' >Congo, Republic of the</option>
        <option value='Costa Rica' >Costa Rica</option>
        <option value='Côte d&#039;Ivoire' >Côte d&#039;Ivoire</option>
        <option value='Croatia' >Croatia</option>
        <option value='Cuba' >Cuba</option>
        <option value='Curaçao' >Curaçao</option>
        <option value='Cyprus' >Cyprus</option>
        <option value='Czech Republic' >Czech Republic</option>
        <option value='Denmark' >Denmark</option>
        <option value='Djibouti' >Djibouti</option>
        <option value='Dominica' >Dominica</option>
        <option value='Dominican Republic' >Dominican Republic</option>
        <option value='East Timor' >East Timor</option>
        <option value='Ecuador' >Ecuador</option>
        <option value='Egypt' >Egypt</option>
        <option value='El Salvador' >El Salvador</option>
        <option value='Equatorial Guinea' >Equatorial Guinea</option>
        <option value='Eritrea' >Eritrea</option>
        <option value='Estonia' >Estonia</option>
        <option value='Ethiopia' >Ethiopia</option>
        <option value='Faroe Islands' >Faroe Islands</option>
        <option value='Fiji' >Fiji</option>
        <option value='Finland' >Finland</option>
        <option value='France' >France</option>
        <option value='French Polynesia' >French Polynesia</option>
        <option value='Gabon' >Gabon</option>
        <option value='Gambia' >Gambia</option>
        <option value='Georgia' >Georgia</option>
        <option value='Germany' >Germany</option>
        <option value='Ghana' >Ghana</option>
        <option value='Greece' >Greece</option>
        <option value='Greenland' >Greenland</option>
        <option value='Grenada' >Grenada</option>
        <option value='Guam' >Guam</option>
        <option value='Guatemala' >Guatemala</option>
        <option value='Guinea' >Guinea</option>
        <option value='Guinea-Bissau' >Guinea-Bissau</option>
        <option value='Guyana' >Guyana</option>
        <option value='Haiti' >Haiti</option>
        <option value='Honduras' >Honduras</option>
        <option value='Hong Kong' >Hong Kong</option>
        <option value='Hungary' >Hungary</option>
        <option value='Iceland' >Iceland</option>
        <option value='India' >India</option>
        <option value='Indonesia' >Indonesia</option>
        <option value='Iran' >Iran</option>
        <option value='Iraq' >Iraq</option>
        <option value='Ireland' >Ireland</option>
        <option value='Israel' >Israel</option>
        <option value='Italy' >Italy</option>
        <option value='Jamaica' >Jamaica</option>
        <option value='Japan' >Japan</option>
        <option value='Jordan' >Jordan</option>
        <option value='Kazakhstan' >Kazakhstan</option>
        <option value='Kenya' >Kenya</option>
        <option value='Kiribati' >Kiribati</option>
        <option value='North Korea' >North Korea</option>
        <option value='South Korea' >South Korea</option>
        <option value='Kosovo' >Kosovo</option>
        <option value='Kuwait' >Kuwait</option>
        <option value='Kyrgyzstan' >Kyrgyzstan</option>
        <option value='Laos' >Laos</option>
        <option value='Latvia' >Latvia</option>
        <option value='Lebanon' >Lebanon</option>
        <option value='Lesotho' >Lesotho</option>
        <option value='Liberia' >Liberia</option>
        <option value='Libya' >Libya</option>
        <option value='Liechtenstein' >Liechtenstein</option>
        <option value='Lithuania' >Lithuania</option>
        <option value='Luxembourg' >Luxembourg</option>
        <option value='Macedonia' >Macedonia</option>
        <option value='Madagascar' >Madagascar</option>
        <option value='Malawi' >Malawi</option>
        <option value='Malaysia' >Malaysia</option>
        <option value='Maldives' >Maldives</option>
        <option value='Mali' >Mali</option>
        <option value='Malta' >Malta</option>
        <option value='Marshall Islands' >Marshall Islands</option>
        <option value='Mauritania' >Mauritania</option>
        <option value='Mauritius' >Mauritius</option>
        <option value='Mexico' >Mexico</option>
        <option value='Micronesia' >Micronesia</option>
        <option value='Moldova' >Moldova</option>
        <option value='Monaco' >Monaco</option>
        <option value='Mongolia' >Mongolia</option>
        <option value='Montenegro' >Montenegro</option>
        <option value='Morocco' >Morocco</option>
        <option value='Mozambique' >Mozambique</option>
        <option value='Myanmar' >Myanmar</option>
        <option value='Namibia' >Namibia</option>
        <option value='Nauru' >Nauru</option>
        <option value='Nepal' >Nepal</option>
        <option value='Netherlands' >Netherlands</option>
        <option value='New Zealand' >New Zealand</option>
        <option value='Nicaragua' >Nicaragua</option>
        <option value='Niger' >Niger</option>
        <option value='Nigeria' >Nigeria</option>
        <option value='Northern Mariana Islands' >Northern Mariana Islands</option>
        <option value='Norway' >Norway</option>
        <option value='Oman' >Oman</option>
        <option value='Pakistan' >Pakistan</option>
        <option value='Palau' >Palau</option>
        <option value='Palestine, State of' >Palestine, State of</option>
        <option value='Panama' >Panama</option>
        <option value='Papua New Guinea' >Papua New Guinea</option>
        <option value='Paraguay' >Paraguay</option>
        <option value='Peru' >Peru</option>
        <option value='Philippines' >Philippines</option>
        <option value='Poland' >Poland</option>
        <option value='Portugal' >Portugal</option>
        <option value='Puerto Rico' >Puerto Rico</option>
        <option value='Qatar' >Qatar</option>
        <option value='Romania' >Romania</option>
        <option value='Russia' >Russia</option>
        <option value='Rwanda' >Rwanda</option>
        <option value='Saint Kitts and Nevis' >Saint Kitts and Nevis</option>
        <option value='Saint Lucia' >Saint Lucia</option>
        <option value='Saint Vincent and the Grenadines' >Saint Vincent and the Grenadines</option>
        <option value='Samoa' >Samoa</option>
        <option value='San Marino' >San Marino</option>
        <option value='Sao Tome and Principe' >Sao Tome and Principe</option>
        <option value='Saudi Arabia' >Saudi Arabia</option>
        <option value='Senegal' >Senegal</option>
        <option value='Serbia' >Serbia</option>
        <option value='Seychelles' >Seychelles</option>
        <option value='Sierra Leone' >Sierra Leone</option>
        <option value='Singapore' >Singapore</option>
        <option value='Sint Maarten' >Sint Maarten</option>
        <option value='Slovakia' >Slovakia</option>
        <option value='Slovenia' >Slovenia</option>
        <option value='Solomon Islands' >Solomon Islands</option>
        <option value='Somalia' >Somalia</option>
        <option value='South Africa' >South Africa</option>
        <option value='Spain' >Spain</option>
        <option value='Sri Lanka' >Sri Lanka</option>
        <option value='Sudan' >Sudan</option>
        <option value='Sudan, South' >Sudan, South</option>
        <option value='Suriname' >Suriname</option>
        <option value='Swaziland' >Swaziland</option>
        <option value='Sweden' >Sweden</option>
        <option value='Switzerland' >Switzerland</option>
        <option value='Syria' >Syria</option>
        <option value='Taiwan' >Taiwan</option>
        <option value='Tajikistan' >Tajikistan</option>
        <option value='Tanzania' >Tanzania</option>
        <option value='Thailand' >Thailand</option>
        <option value='Togo' >Togo</option>
        <option value='Tonga' >Tonga</option>
        <option value='Trinidad and Tobago' >Trinidad and Tobago</option>
        <option value='Tunisia' >Tunisia</option>
        <option value='Turkey' >Turkey</option>
        <option value='Turkmenistan' >Turkmenistan</option>
        <option value='Tuvalu' >Tuvalu</option>
        <option value='Uganda' >Uganda</option>
        <option value='Ukraine' >Ukraine</option>
        <option value='United Arab Emirates' >United Arab Emirates</option>
        <option value='United Kingdom' >United Kingdom</option>
        <option value='United States' >United States</option>
        <option value='Uruguay' >Uruguay</option>
        <option value='Uzbekistan' >Uzbekistan</option>
        <option value='Vanuatu' >Vanuatu</option>
        <option value='Vatican City' >Vatican City</option>
        <option value='Venezuela' >Venezuela</option>
        <option value='Vietnam' >Vietnam</option>
        <option value='Virgin Islands, British' >Virgin Islands, British</option>
        <option value='Virgin Islands, U.S.' >Virgin Islands, U.S.</option>
        <option value='Yemen' >Yemen</option>
        <option value='Zambia' >Zambia</option>
        <option value='Zimbabwe' >Zimbabwe</option>
        <option value='Other' >Other</option>
     </select>
  </div>
</li>
<li id='field_1_64'  class='gfield field_sublabel_below field_description_below gfield_visibility_visible' >
  <label class='gfield_label' for='input_1_64' >If known, in what country was your paternal grandfather born?</label>
  <div class='ginput_container ginput_container_select'>
     <select name='Birth country paternal grandfather' id='input_1_64' class='medium gfield_select'    aria-invalid="false">
        <option value='Choose country' >Choose country</option>
        <option value='Afghanistan' >Afghanistan</option>
        <option value='Albania' >Albania</option>
        <option value='Algeria' >Algeria</option>
        <option value='American Samoa' >American Samoa</option>
        <option value='Andorra' >Andorra</option>
        <option value='Angola' >Angola</option>
        <option value='Antigua and Barbuda' >Antigua and Barbuda</option>
        <option value='Argentina' >Argentina</option>
        <option value='Armenia' >Armenia</option>
        <option value='Australia' >Australia</option>
        <option value='Austria' >Austria</option>
        <option value='Azerbaijan' >Azerbaijan</option>
        <option value='Bahamas' >Bahamas</option>
        <option value='Bahrain' >Bahrain</option>
        <option value='Bangladesh' >Bangladesh</option>
        <option value='Barbados' >Barbados</option>
        <option value='Belarus' >Belarus</option>
        <option value='Belgium' >Belgium</option>
        <option value='Belize' >Belize</option>
        <option value='Benin' >Benin</option>
        <option value='Bermuda' >Bermuda</option>
        <option value='Bhutan' >Bhutan</option>
        <option value='Bolivia' >Bolivia</option>
        <option value='Bosnia and Herzegovina' >Bosnia and Herzegovina</option>
        <option value='Botswana' >Botswana</option>
        <option value='Brazil' >Brazil</option>
        <option value='Brunei' >Brunei</option>
        <option value='Bulgaria' >Bulgaria</option>
        <option value='Burkina Faso' >Burkina Faso</option>
        <option value='Burundi' >Burundi</option>
        <option value='Cambodia' >Cambodia</option>
        <option value='Cameroon' >Cameroon</option>
        <option value='Canada' >Canada</option>
        <option value='Cape Verde' >Cape Verde</option>
        <option value='Cayman Islands' >Cayman Islands</option>
        <option value='Central African Republic' >Central African Republic</option>
        <option value='Chad' >Chad</option>
        <option value='Chile' >Chile</option>
        <option value='China' >China</option>
        <option value='Colombia' >Colombia</option>
        <option value='Comoros' >Comoros</option>
        <option value='Congo, Democratic Republic of the' >Congo, Democratic Republic of the</option>
        <option value='Congo, Republic of the' >Congo, Republic of the</option>
        <option value='Costa Rica' >Costa Rica</option>
        <option value='Côte d&#039;Ivoire' >Côte d&#039;Ivoire</option>
        <option value='Croatia' >Croatia</option>
        <option value='Cuba' >Cuba</option>
        <option value='Curaçao' >Curaçao</option>
        <option value='Cyprus' >Cyprus</option>
        <option value='Czech Republic' >Czech Republic</option>
        <option value='Denmark' >Denmark</option>
        <option value='Djibouti' >Djibouti</option>
        <option value='Dominica' >Dominica</option>
        <option value='Dominican Republic' >Dominican Republic</option>
        <option value='East Timor' >East Timor</option>
        <option value='Ecuador' >Ecuador</option>
        <option value='Egypt' >Egypt</option>
        <option value='El Salvador' >El Salvador</option>
        <option value='Equatorial Guinea' >Equatorial Guinea</option>
        <option value='Eritrea' >Eritrea</option>
        <option value='Estonia' >Estonia</option>
        <option value='Ethiopia' >Ethiopia</option>
        <option value='Faroe Islands' >Faroe Islands</option>
        <option value='Fiji' >Fiji</option>
        <option value='Finland' >Finland</option>
        <option value='France' >France</option>
        <option value='French Polynesia' >French Polynesia</option>
        <option value='Gabon' >Gabon</option>
        <option value='Gambia' >Gambia</option>
        <option value='Georgia' >Georgia</option>
        <option value='Germany' >Germany</option>
        <option value='Ghana' >Ghana</option>
        <option value='Greece' >Greece</option>
        <option value='Greenland' >Greenland</option>
        <option value='Grenada' >Grenada</option>
        <option value='Guam' >Guam</option>
        <option value='Guatemala' >Guatemala</option>
        <option value='Guinea' >Guinea</option>
        <option value='Guinea-Bissau' >Guinea-Bissau</option>
        <option value='Guyana' >Guyana</option>
        <option value='Haiti' >Haiti</option>
        <option value='Honduras' >Honduras</option>
        <option value='Hong Kong' >Hong Kong</option>
        <option value='Hungary' >Hungary</option>
        <option value='Iceland' >Iceland</option>
        <option value='India' >India</option>
        <option value='Indonesia' >Indonesia</option>
        <option value='Iran' >Iran</option>
        <option value='Iraq' >Iraq</option>
        <option value='Ireland' >Ireland</option>
        <option value='Israel' >Israel</option>
        <option value='Italy' >Italy</option>
        <option value='Jamaica' >Jamaica</option>
        <option value='Japan' >Japan</option>
        <option value='Jordan' >Jordan</option>
        <option value='Kazakhstan' >Kazakhstan</option>
        <option value='Kenya' >Kenya</option>
        <option value='Kiribati' >Kiribati</option>
        <option value='North Korea' >North Korea</option>
        <option value='South Korea' >South Korea</option>
        <option value='Kosovo' >Kosovo</option>
        <option value='Kuwait' >Kuwait</option>
        <option value='Kyrgyzstan' >Kyrgyzstan</option>
        <option value='Laos' >Laos</option>
        <option value='Latvia' >Latvia</option>
        <option value='Lebanon' >Lebanon</option>
        <option value='Lesotho' >Lesotho</option>
        <option value='Liberia' >Liberia</option>
        <option value='Libya' >Libya</option>
        <option value='Liechtenstein' >Liechtenstein</option>
        <option value='Lithuania' >Lithuania</option>
        <option value='Luxembourg' >Luxembourg</option>
        <option value='Macedonia' >Macedonia</option>
        <option value='Madagascar' >Madagascar</option>
        <option value='Malawi' >Malawi</option>
        <option value='Malaysia' >Malaysia</option>
        <option value='Maldives' >Maldives</option>
        <option value='Mali' >Mali</option>
        <option value='Malta' >Malta</option>
        <option value='Marshall Islands' >Marshall Islands</option>
        <option value='Mauritania' >Mauritania</option>
        <option value='Mauritius' >Mauritius</option>
        <option value='Mexico' >Mexico</option>
        <option value='Micronesia' >Micronesia</option>
        <option value='Moldova' >Moldova</option>
        <option value='Monaco' >Monaco</option>
        <option value='Mongolia' >Mongolia</option>
        <option value='Montenegro' >Montenegro</option>
        <option value='Morocco' >Morocco</option>
        <option value='Mozambique' >Mozambique</option>
        <option value='Myanmar' >Myanmar</option>
        <option value='Namibia' >Namibia</option>
        <option value='Nauru' >Nauru</option>
        <option value='Nepal' >Nepal</option>
        <option value='Netherlands' >Netherlands</option>
        <option value='New Zealand' >New Zealand</option>
        <option value='Nicaragua' >Nicaragua</option>
        <option value='Niger' >Niger</option>
        <option value='Nigeria' >Nigeria</option>
        <option value='Northern Mariana Islands' >Northern Mariana Islands</option>
        <option value='Norway' >Norway</option>
        <option value='Oman' >Oman</option>
        <option value='Pakistan' >Pakistan</option>
        <option value='Palau' >Palau</option>
        <option value='Palestine, State of' >Palestine, State of</option>
        <option value='Panama' >Panama</option>
        <option value='Papua New Guinea' >Papua New Guinea</option>
        <option value='Paraguay' >Paraguay</option>
        <option value='Peru' >Peru</option>
        <option value='Philippines' >Philippines</option>
        <option value='Poland' >Poland</option>
        <option value='Portugal' >Portugal</option>
        <option value='Puerto Rico' >Puerto Rico</option>
        <option value='Qatar' >Qatar</option>
        <option value='Romania' >Romania</option>
        <option value='Russia' >Russia</option>
        <option value='Rwanda' >Rwanda</option>
        <option value='Saint Kitts and Nevis' >Saint Kitts and Nevis</option>
        <option value='Saint Lucia' >Saint Lucia</option>
        <option value='Saint Vincent and the Grenadines' >Saint Vincent and the Grenadines</option>
        <option value='Samoa' >Samoa</option>
        <option value='San Marino' >San Marino</option>
        <option value='Sao Tome and Principe' >Sao Tome and Principe</option>
        <option value='Saudi Arabia' >Saudi Arabia</option>
        <option value='Senegal' >Senegal</option>
        <option value='Serbia' >Serbia</option>
        <option value='Seychelles' >Seychelles</option>
        <option value='Sierra Leone' >Sierra Leone</option>
        <option value='Singapore' >Singapore</option>
        <option value='Sint Maarten' >Sint Maarten</option>
        <option value='Slovakia' >Slovakia</option>
        <option value='Slovenia' >Slovenia</option>
        <option value='Solomon Islands' >Solomon Islands</option>
        <option value='Somalia' >Somalia</option>
        <option value='South Africa' >South Africa</option>
        <option value='Spain' >Spain</option>
        <option value='Sri Lanka' >Sri Lanka</option>
        <option value='Sudan' >Sudan</option>
        <option value='Sudan, South' >Sudan, South</option>
        <option value='Suriname' >Suriname</option>
        <option value='Swaziland' >Swaziland</option>
        <option value='Sweden' >Sweden</option>
        <option value='Switzerland' >Switzerland</option>
        <option value='Syria' >Syria</option>
        <option value='Taiwan' >Taiwan</option>
        <option value='Tajikistan' >Tajikistan</option>
        <option value='Tanzania' >Tanzania</option>
        <option value='Thailand' >Thailand</option>
        <option value='Togo' >Togo</option>
        <option value='Tonga' >Tonga</option>
        <option value='Trinidad and Tobago' >Trinidad and Tobago</option>
        <option value='Tunisia' >Tunisia</option>
        <option value='Turkey' >Turkey</option>
        <option value='Turkmenistan' >Turkmenistan</option>
        <option value='Tuvalu' >Tuvalu</option>
        <option value='Uganda' >Uganda</option>
        <option value='Ukraine' >Ukraine</option>
        <option value='United Arab Emirates' >United Arab Emirates</option>
        <option value='United Kingdom' >United Kingdom</option>
        <option value='United States' >United States</option>
        <option value='Uruguay' >Uruguay</option>
        <option value='Uzbekistan' >Uzbekistan</option>
        <option value='Vanuatu' >Vanuatu</option>
        <option value='Vatican City' >Vatican City</option>
        <option value='Venezuela' >Venezuela</option>
        <option value='Vietnam' >Vietnam</option>
        <option value='Virgin Islands, British' >Virgin Islands, British</option>
        <option value='Virgin Islands, U.S.' >Virgin Islands, U.S.</option>
        <option value='Yemen' >Yemen</option>
        <option value='Zambia' >Zambia</option>
        <option value='Zimbabwe' >Zimbabwe</option>
        <option value='Other' >Other</option>
     </select>
  </div>
</li>
<li id='field_1_33'  class='gfield field_sublabel_below field_description_below gfield_visibility_visible' >
  <label class='gfield_label' for='input_1_33' >If known, in what languages were/are your grandparents fluent?</label>
  <div class='ginput_container ginput_container_select'>
     <select name='Grandparents language 1' id='input_1_33' class='medium gfield_select'    aria-invalid="false">
        <option value='Grandparents&#039; language 1' >Grandparents&#039; language 1</option>
        <option value='Canadian English' >Canadian English</option>
        <option value='Canadian French' >Canadian French</option>
        <option value='First Nations' >First Nations</option>
        <option value='American (US) English' >American (US) English</option>
        <option value='Arabic' >Arabic</option>
        <option value='Awadhi' >Awadhi</option>
        <option value='Azerbaijani, North' >Azerbaijani, North</option>
        <option value='Azerbaijani, South' >Azerbaijani, South</option>
        <option value='Bengali' >Bengali</option>
        <option value='Bhojpuri' >Bhojpuri</option>
        <option value='Burmese' >Burmese</option>
        <option value='Chinese, Gan' >Chinese, Gan</option>
        <option value='Chinese, Hakka' >Chinese, Hakka</option>
        <option value='Chinese, Jinyu' >Chinese, Jinyu</option>
        <option value='Chinese, Mandarin' >Chinese, Mandarin</option>
        <option value='Chinese, MinNan' >Chinese, MinNan</option>
        <option value='Chinese, Wu' >Chinese, Wu</option>
        <option value='Chinese, Xiang' >Chinese, Xiang</option>
        <option value='Chinese, Yue (Cantonese)' >Chinese, Yue (Cantonese)</option>
        <option value='Dutch' >Dutch</option>
        <option value='English' >English</option>
        <option value='French' >French</option>
        <option value='German' >German</option>
        <option value='Gujarati' >Gujarati</option>
        <option value='Hausa' >Hausa</option>
        <option value='Hindi' >Hindi</option>
        <option value='Italian' >Italian</option>
        <option value='Japanese' >Japanese</option>
        <option value='Javanese' >Javanese</option>
        <option value='Kannada' >Kannada</option>
        <option value='Korean' >Korean</option>
        <option value='Maithili' >Maithili</option>
        <option value='Malayalam' >Malayalam</option>
        <option value='Marathi' >Marathi</option>
        <option value='Oriya' >Oriya</option>
        <option value='Panjabi, Eastern' >Panjabi, Eastern</option>
        <option value='Panjabi, Western' >Panjabi, Western</option>
        <option value='Persian' >Persian</option>
        <option value='Polish' >Polish</option>
        <option value='Portuguese' >Portuguese</option>
        <option value='Romanian' >Romanian</option>
        <option value='Russian' >Russian</option>
        <option value='Serbo-Croatian' >Serbo-Croatian</option>
        <option value='Sindhi' >Sindhi</option>
        <option value='Spanish' >Spanish</option>
        <option value='Sunda' >Sunda</option>
        <option value='Tamil' >Tamil</option>
        <option value='Teluga' >Teluga</option>
        <option value='Thai' >Thai</option>
        <option value='Turkish' >Turkish</option>
        <option value='Ukrainian' >Ukrainian</option>
        <option value='Urdu' >Urdu</option>
        <option value='Vietnamese' >Vietnamese</option>
        <option value='Yoruba' >Yoruba</option>
        <option value='Other' >Other</option>
     </select>
  </div>
</li>
<li id='field_1_34'  class='gfield Thirds gf_left_third field_sublabel_below field_description_below gfield_visibility_visible' >
  <label class='gfield_label' for='input_1_34' ></label>
  <div class='ginput_container ginput_container_select'>
     <select name='Grandparents language 2' id='input_1_34' class='medium gfield_select'    aria-invalid="false">
        <option value='Grandparents&#039; language 2' >Grandparents&#039; language 2</option>
        <option value='Canadian English' >Canadian English</option>
        <option value='Canadian French' >Canadian French</option>
        <option value='First Nations' >First Nations</option>
        <option value='American (US) English' >American (US) English</option>
        <option value='Arabic' >Arabic</option>
        <option value='Awadhi' >Awadhi</option>
        <option value='Azerbaijani, North' >Azerbaijani, North</option>
        <option value='Azerbaijani, South' >Azerbaijani, South</option>
        <option value='Bengali' >Bengali</option>
        <option value='Bhojpuri' >Bhojpuri</option>
        <option value='Burmese' >Burmese</option>
        <option value='Chinese, Gan' >Chinese, Gan</option>
        <option value='Chinese, Hakka' >Chinese, Hakka</option>
        <option value='Chinese, Jinyu' >Chinese, Jinyu</option>
        <option value='Chinese, Mandarin' >Chinese, Mandarin</option>
        <option value='Chinese, MinNan' >Chinese, MinNan</option>
        <option value='Chinese, Wu' >Chinese, Wu</option>
        <option value='Chinese, Xiang' >Chinese, Xiang</option>
        <option value='Chinese, Yue (Cantonese)' >Chinese, Yue (Cantonese)</option>
        <option value='Dutch' >Dutch</option>
        <option value='English' >English</option>
        <option value='French' >French</option>
        <option value='German' >German</option>
        <option value='Gujarati' >Gujarati</option>
        <option value='Hausa' >Hausa</option>
        <option value='Hindi' >Hindi</option>
        <option value='Italian' >Italian</option>
        <option value='Japanese' >Japanese</option>
        <option value='Javanese' >Javanese</option>
        <option value='Kannada' >Kannada</option>
        <option value='Korean' >Korean</option>
        <option value='Maithili' >Maithili</option>
        <option value='Malayalam' >Malayalam</option>
        <option value='Marathi' >Marathi</option>
        <option value='Oriya' >Oriya</option>
        <option value='Panjabi, Eastern' >Panjabi, Eastern</option>
        <option value='Panjabi, Western' >Panjabi, Western</option>
        <option value='Persian' >Persian</option>
        <option value='Polish' >Polish</option>
        <option value='Portuguese' >Portuguese</option>
        <option value='Romanian' >Romanian</option>
        <option value='Russian' >Russian</option>
        <option value='Serbo-Croatian' >Serbo-Croatian</option>
        <option value='Sindhi' >Sindhi</option>
        <option value='Spanish' >Spanish</option>
        <option value='Sunda' >Sunda</option>
        <option value='Tamil' >Tamil</option>
        <option value='Teluga' >Teluga</option>
        <option value='Thai' >Thai</option>
        <option value='Turkish' >Turkish</option>
        <option value='Ukrainian' >Ukrainian</option>
        <option value='Urdu' >Urdu</option>
        <option value='Vietnamese' >Vietnamese</option>
        <option value='Yoruba' >Yoruba</option>
        <option value='Other' >Other</option>
     </select>
  </div>
</li>
<li id='field_1_35'  class='gfield Thirds gf_middle_third field_sublabel_below field_description_below gfield_visibility_visible' >
  <label class='gfield_label' for='input_1_35' ></label>
  <div class='ginput_container ginput_container_select'>
     <select name='Grandparents language 3' id='input_1_35' class='medium gfield_select'    aria-invalid="false">
        <option value='Grandparents&#039; language 3' >Grandparents&#039; language 3</option>
        <option value='Canadian English' >Canadian English</option>
        <option value='Canadian French' >Canadian French</option>
        <option value='First Nations' >First Nations</option>
        <option value='American (US) English' >American (US) English</option>
        <option value='Arabic' >Arabic</option>
        <option value='Awadhi' >Awadhi</option>
        <option value='Azerbaijani, North' >Azerbaijani, North</option>
        <option value='Azerbaijani, South' >Azerbaijani, South</option>
        <option value='Bengali' >Bengali</option>
        <option value='Bhojpuri' >Bhojpuri</option>
        <option value='Burmese' >Burmese</option>
        <option value='Chinese, Gan' >Chinese, Gan</option>
        <option value='Chinese, Hakka' >Chinese, Hakka</option>
        <option value='Chinese, Jinyu' >Chinese, Jinyu</option>
        <option value='Chinese, Mandarin' >Chinese, Mandarin</option>
        <option value='Chinese, MinNan' >Chinese, MinNan</option>
        <option value='Chinese, Wu' >Chinese, Wu</option>
        <option value='Chinese, Xiang' >Chinese, Xiang</option>
        <option value='Chinese, Yue (Cantonese)' >Chinese, Yue (Cantonese)</option>
        <option value='Dutch' >Dutch</option>
        <option value='English' >English</option>
        <option value='French' >French</option>
        <option value='German' >German</option>
        <option value='Gujarati' >Gujarati</option>
        <option value='Hausa' >Hausa</option>
        <option value='Hindi' >Hindi</option>
        <option value='Italian' >Italian</option>
        <option value='Japanese' >Japanese</option>
        <option value='Javanese' >Javanese</option>
        <option value='Kannada' >Kannada</option>
        <option value='Korean' >Korean</option>
        <option value='Maithili' >Maithili</option>
        <option value='Malayalam' >Malayalam</option>
        <option value='Marathi' >Marathi</option>
        <option value='Oriya' >Oriya</option>
        <option value='Panjabi, Eastern' >Panjabi, Eastern</option>
        <option value='Panjabi, Western' >Panjabi, Western</option>
        <option value='Persian' >Persian</option>
        <option value='Polish' >Polish</option>
        <option value='Portuguese' >Portuguese</option>
        <option value='Romanian' >Romanian</option>
        <option value='Russian' >Russian</option>
        <option value='Serbo-Croatian' >Serbo-Croatian</option>
        <option value='Sindhi' >Sindhi</option>
        <option value='Spanish' >Spanish</option>
        <option value='Sunda' >Sunda</option>
        <option value='Tamil' >Tamil</option>
        <option value='Teluga' >Teluga</option>
        <option value='Thai' >Thai</option>
        <option value='Turkish' >Turkish</option>
        <option value='Ukrainian' >Ukrainian</option>
        <option value='Urdu' >Urdu</option>
        <option value='Vietnamese' >Vietnamese</option>
        <option value='Yoruba' >Yoruba</option>
        <option value='Other' >Other</option>
     </select>
  </div>
</li>
<li id='field_1_36'  class='gfield Thirds gf_right_third field_sublabel_below field_description_below gfield_visibility_visible' >
  <label class='gfield_label' for='input_1_36' ></label>
  <div class='ginput_container ginput_container_select'>
     <select name='Grandparents language 4' id='input_1_36' class='medium gfield_select'    aria-invalid="false">
        <option value='Grandparents&#039; language 4' >Grandparents&#039; language 4</option>
        <option value='Canadian English' >Canadian English</option>
        <option value='Canadian French' >Canadian French</option>
        <option value='First Nations' >First Nations</option>
        <option value='American (US) English' >American (US) English</option>
        <option value='Arabic' >Arabic</option>
        <option value='Awadhi' >Awadhi</option>
        <option value='Azerbaijani, North' >Azerbaijani, North</option>
        <option value='Azerbaijani, South' >Azerbaijani, South</option>
        <option value='Bengali' >Bengali</option>
        <option value='Bhojpuri' >Bhojpuri</option>
        <option value='Burmese' >Burmese</option>
        <option value='Chinese, Gan' >Chinese, Gan</option>
        <option value='Chinese, Hakka' >Chinese, Hakka</option>
        <option value='Chinese, Jinyu' >Chinese, Jinyu</option>
        <option value='Chinese, Mandarin' >Chinese, Mandarin</option>
        <option value='Chinese, MinNan' >Chinese, MinNan</option>
        <option value='Chinese, Wu' >Chinese, Wu</option>
        <option value='Chinese, Xiang' >Chinese, Xiang</option>
        <option value='Chinese, Yue (Cantonese)' >Chinese, Yue (Cantonese)</option>
        <option value='Dutch' >Dutch</option>
        <option value='English' >English</option>
        <option value='French' >French</option>
        <option value='German' >German</option>
        <option value='Gujarati' >Gujarati</option>
        <option value='Hausa' >Hausa</option>
        <option value='Hindi' >Hindi</option>
        <option value='Italian' >Italian</option>
        <option value='Japanese' >Japanese</option>
        <option value='Javanese' >Javanese</option>
        <option value='Kannada' >Kannada</option>
        <option value='Korean' >Korean</option>
        <option value='Maithili' >Maithili</option>
        <option value='Malayalam' >Malayalam</option>
        <option value='Marathi' >Marathi</option>
        <option value='Oriya' >Oriya</option>
        <option value='Panjabi, Eastern' >Panjabi, Eastern</option>
        <option value='Panjabi, Western' >Panjabi, Western</option>
        <option value='Persian' >Persian</option>
        <option value='Polish' >Polish</option>
        <option value='Portuguese' >Portuguese</option>
        <option value='Romanian' >Romanian</option>
        <option value='Russian' >Russian</option>
        <option value='Serbo-Croatian' >Serbo-Croatian</option>
        <option value='Sindhi' >Sindhi</option>
        <option value='Spanish' >Spanish</option>
        <option value='Sunda' >Sunda</option>
        <option value='Tamil' >Tamil</option>
        <option value='Teluga' >Teluga</option>
        <option value='Thai' >Thai</option>
        <option value='Turkish' >Turkish</option>
        <option value='Ukrainian' >Ukrainian</option>
        <option value='Urdu' >Urdu</option>
        <option value='Vietnamese' >Vietnamese</option>
        <option value='Yoruba' >Yoruba</option>
        <option value='Other' >Other</option>
     </select>
  </div>
</li>
<li id='field_1_39'  class='gfield field_sublabel_below field_description_below gfield_visibility_visible' >
  <label class='gfield_label' for='input_1_39' >What other languages have you studied, and how fluent are you?</label>
  <div class='ginput_container ginput_container_select'>
     <select name='Other languages 1' id='input_1_39' class='medium gfield_select'    aria-invalid="false">
        <option value='Choose language 1' >Choose language 1</option>
        <option value='Canadian English' >Canadian English</option>
        <option value='Canadian French' >Canadian French</option>
        <option value='First Nations' >First Nations</option>
        <option value='American (US) English' >American (US) English</option>
        <option value='Arabic' >Arabic</option>
        <option value='Awadhi' >Awadhi</option>
        <option value='Azerbaijani, North' >Azerbaijani, North</option>
        <option value='Azerbaijani, South' >Azerbaijani, South</option>
        <option value='Bengali' >Bengali</option>
        <option value='Bhojpuri' >Bhojpuri</option>
        <option value='Burmese' >Burmese</option>
        <option value='Chinese, Gan' >Chinese, Gan</option>
        <option value='Chinese, Hakka' >Chinese, Hakka</option>
        <option value='Chinese, Jinyu' >Chinese, Jinyu</option>
        <option value='Chinese, Mandarin' >Chinese, Mandarin</option>
        <option value='Chinese, MinNan' >Chinese, MinNan</option>
        <option value='Chinese, Wu' >Chinese, Wu</option>
        <option value='Chinese, Xiang' >Chinese, Xiang</option>
        <option value='Chinese, Yue (Cantonese)' >Chinese, Yue (Cantonese)</option>
        <option value='Dutch' >Dutch</option>
        <option value='English' >English</option>
        <option value='French' >French</option>
        <option value='German' >German</option>
        <option value='Gujarati' >Gujarati</option>
        <option value='Hausa' >Hausa</option>
        <option value='Hindi' >Hindi</option>
        <option value='Italian' >Italian</option>
        <option value='Japanese' >Japanese</option>
        <option value='Javanese' >Javanese</option>
        <option value='Kannada' >Kannada</option>
        <option value='Korean' >Korean</option>
        <option value='Maithili' >Maithili</option>
        <option value='Malayalam' >Malayalam</option>
        <option value='Marathi' >Marathi</option>
        <option value='Oriya' >Oriya</option>
        <option value='Panjabi, Eastern' >Panjabi, Eastern</option>
        <option value='Panjabi, Western' >Panjabi, Western</option>
        <option value='Persian' >Persian</option>
        <option value='Polish' >Polish</option>
        <option value='Portuguese' >Portuguese</option>
        <option value='Romanian' >Romanian</option>
        <option value='Russian' >Russian</option>
        <option value='Serbo-Croatian' >Serbo-Croatian</option>
        <option value='Sindhi' >Sindhi</option>
        <option value='Spanish' >Spanish</option>
        <option value='Sunda' >Sunda</option>
        <option value='Tamil' >Tamil</option>
        <option value='Teluga' >Teluga</option>
        <option value='Thai' >Thai</option>
        <option value='Turkish' >Turkish</option>
        <option value='Ukrainian' >Ukrainian</option>
        <option value='Urdu' >Urdu</option>
        <option value='Vietnamese' >Vietnamese</option>
        <option value='Yoruba' >Yoruba</option>
        <option value='Other' >Other</option>
     </select>
  </div>
</li>
<li id='field_1_40'  class='gfield Thirds gf_left_third field_sublabel_below field_description_above gfield_visibility_visible' >
  <label class='gfield_label'  >Reading/Writing</label>
  <div class='ginput_container ginput_container_radio'>
     <ul class='gfield_radio' id='input_1_40'>
        <li class='gchoice_1_40_0'><input name='Other languages 1 reading' type='radio' value='None'  id='choice_1_40_0'    /><label for='choice_1_40_0' id='label_1_40_0'>None</label></li>
        <li class='gchoice_1_40_1'><input name='Other languages 1 reading' type='radio' value='Basic'  id='choice_1_40_1'    /><label for='choice_1_40_1' id='label_1_40_1'>Basic</label></li>
        <li class='gchoice_1_40_2'><input name='Other languages 1 reading' type='radio' value='Moderate'  id='choice_1_40_2'    /><label for='choice_1_40_2' id='label_1_40_2'>Moderate</label></li>
        <li class='gchoice_1_40_3'><input name='Other languages 1 reading' type='radio' value='Fluent'  id='choice_1_40_3'    /><label for='choice_1_40_3' id='label_1_40_3'>Fluent</label></li>
     </ul>
  </div>
</li>
<li id='field_1_42'  class='gfield Halves gf_middle_third field_sublabel_below field_description_above gfield_visibility_visible' >
  <label class='gfield_label'  >Speaking</label>
  <div class='ginput_container ginput_container_radio'>
     <ul class='gfield_radio' id='input_1_42'>
        <li class='gchoice_1_42_0'><input name='Other languages 1 speaking' type='radio' value='None'  id='choice_1_42_0'    /><label for='choice_1_42_0' id='label_1_42_0'>None</label></li>
        <li class='gchoice_1_42_1'><input name='Other languages 1 speaking' type='radio' value='Basic'  id='choice_1_42_1'    /><label for='choice_1_42_1' id='label_1_42_1'>Basic</label></li>
        <li class='gchoice_1_42_2'><input name='Other languages 1 speaking' type='radio' value='Moderate'  id='choice_1_42_2'    /><label for='choice_1_42_2' id='label_1_42_2'>Moderate</label></li>
        <li class='gchoice_1_42_3'><input name='Other languages 1 speaking' type='radio' value='Fluent'  id='choice_1_42_3'    /><label for='choice_1_42_3' id='label_1_42_3'>Fluent</label></li>
     </ul>
  </div>
</li>
<li id='field_1_41'  class='gfield Halves gf_right_third field_sublabel_below field_description_above gfield_visibility_visible' >
  <label class='gfield_label'  >Listening</label>
  <div class='ginput_container ginput_container_radio'>
     <ul class='gfield_radio' id='input_1_41'>
        <li class='gchoice_1_41_0'><input name='Other languages 1 listening' type='radio' value='None'  id='choice_1_41_0'    /><label for='choice_1_41_0' id='label_1_41_0'>None</label></li>
        <li class='gchoice_1_41_1'><input name='Other languages 1 listening' type='radio' value='Basic'  id='choice_1_41_1'    /><label for='choice_1_41_1' id='label_1_41_1'>Basic</label></li>
        <li class='gchoice_1_41_2'><input name='Other languages 1 listening' type='radio' value='Moderate'  id='choice_1_41_2'    /><label for='choice_1_41_2' id='label_1_41_2'>Moderate</label></li>
        <li class='gchoice_1_41_3'><input name='Other languages 1 listening' type='radio' value='Fluent'  id='choice_1_41_3'    /><label for='choice_1_41_3' id='label_1_41_3'>Fluent</label></li>
     </ul>
  </div>
</li>
<li id='field_1_43'  class='gfield field_sublabel_below field_description_below gfield_visibility_visible' >
  <label class='gfield_label' for='input_1_43' >Other languages studied?</label>
  <div class='ginput_container ginput_container_select'>
     <select name='Other languages 2' id='input_1_43' class='medium gfield_select'    aria-invalid="false">
        <option value='Choose Language 2' >Choose Language 2</option>
        <option value='Canadian English' >Canadian English</option>
        <option value='Canadian French' >Canadian French</option>
        <option value='First Nations' >First Nations</option>
        <option value='American (US) English' >American (US) English</option>
        <option value='Arabic' >Arabic</option>
        <option value='Awadhi' >Awadhi</option>
        <option value='Azerbaijani, North' >Azerbaijani, North</option>
        <option value='Azerbaijani, South' >Azerbaijani, South</option>
        <option value='Bengali' >Bengali</option>
        <option value='Bhojpuri' >Bhojpuri</option>
        <option value='Burmese' >Burmese</option>
        <option value='Chinese, Gan' >Chinese, Gan</option>
        <option value='Chinese, Hakka' >Chinese, Hakka</option>
        <option value='Chinese, Jinyu' >Chinese, Jinyu</option>
        <option value='Chinese, Mandarin' >Chinese, Mandarin</option>
        <option value='Chinese, MinNan' >Chinese, MinNan</option>
        <option value='Chinese, Wu' >Chinese, Wu</option>
        <option value='Chinese, Xiang' >Chinese, Xiang</option>
        <option value='Chinese, Yue (Cantonese)' >Chinese, Yue (Cantonese)</option>
        <option value='Dutch' >Dutch</option>
        <option value='English' >English</option>
        <option value='French' >French</option>
        <option value='German' >German</option>
        <option value='Gujarati' >Gujarati</option>
        <option value='Hausa' >Hausa</option>
        <option value='Hindi' >Hindi</option>
        <option value='Italian' >Italian</option>
        <option value='Japanese' >Japanese</option>
        <option value='Javanese' >Javanese</option>
        <option value='Kannada' >Kannada</option>
        <option value='Korean' >Korean</option>
        <option value='Maithili' >Maithili</option>
        <option value='Malayalam' >Malayalam</option>
        <option value='Marathi' >Marathi</option>
        <option value='Oriya' >Oriya</option>
        <option value='Panjabi, Eastern' >Panjabi, Eastern</option>
        <option value='Panjabi, Western' >Panjabi, Western</option>
        <option value='Persian' >Persian</option>
        <option value='Polish' >Polish</option>
        <option value='Portuguese' >Portuguese</option>
        <option value='Romanian' >Romanian</option>
        <option value='Russian' >Russian</option>
        <option value='Serbo-Croatian' >Serbo-Croatian</option>
        <option value='Sindhi' >Sindhi</option>
        <option value='Spanish' >Spanish</option>
        <option value='Sunda' >Sunda</option>
        <option value='Tamil' >Tamil</option>
        <option value='Teluga' >Teluga</option>
        <option value='Thai' >Thai</option>
        <option value='Turkish' >Turkish</option>
        <option value='Ukrainian' >Ukrainian</option>
        <option value='Urdu' >Urdu</option>
        <option value='Vietnamese' >Vietnamese</option>
        <option value='Yoruba' >Yoruba</option>
        <option value='Other' >Other</option>
     </select>
  </div>
</li>
<li id='field_1_44'  class='gfield Thirds gf_left_third field_sublabel_below field_description_above gfield_visibility_visible' >
  <label class='gfield_label'  >Reading/Writing</label>
  <div class='ginput_container ginput_container_radio'>
     <ul class='gfield_radio' id='input_1_44'>
        <li class='gchoice_1_44_0'><input name='Other languages 2 reading' type='radio' value='None'  id='choice_1_44_0'    /><label for='choice_1_44_0' id='label_1_44_0'>None</label></li>
        <li class='gchoice_1_44_1'><input name='Other languages 2 reading' type='radio' value='Basic'  id='choice_1_44_1'    /><label for='choice_1_44_1' id='label_1_44_1'>Basic</label></li>
        <li class='gchoice_1_44_2'><input name='Other languages 2 reading' type='radio' value='Moderate'  id='choice_1_44_2'    /><label for='choice_1_44_2' id='label_1_44_2'>Moderate</label></li>
        <li class='gchoice_1_44_3'><input name='Other languages 2 reading' type='radio' value='Fluent'  id='choice_1_44_3'    /><label for='choice_1_44_3' id='label_1_44_3'>Fluent</label></li>
     </ul>
  </div>
</li>
<li id='field_1_45'  class='gfield Halves gf_middle_third field_sublabel_below field_description_above gfield_visibility_visible' >
  <label class='gfield_label'  >Speaking</label>
  <div class='ginput_container ginput_container_radio'>
     <ul class='gfield_radio' id='input_1_45'>
        <li class='gchoice_1_45_0'><input name='Other languages 2 speaking' type='radio' value='None'  id='choice_1_45_0'    /><label for='choice_1_45_0' id='label_1_45_0'>None</label></li>
        <li class='gchoice_1_45_1'><input name='Other languages 2 speaking' type='radio' value='Basic'  id='choice_1_45_1'    /><label for='choice_1_45_1' id='label_1_45_1'>Basic</label></li>
        <li class='gchoice_1_45_2'><input name='Other languages 2 speaking' type='radio' value='Moderate'  id='choice_1_45_2'    /><label for='choice_1_45_2' id='label_1_45_2'>Moderate</label></li>
        <li class='gchoice_1_45_3'><input name='Other languages 2 speaking' type='radio' value='Fluent'  id='choice_1_45_3'    /><label for='choice_1_45_3' id='label_1_45_3'>Fluent</label></li>
     </ul>
  </div>
</li>
<li id='field_1_46'  class='gfield Halves gf_right_third field_sublabel_below field_description_above gfield_visibility_visible' >
  <label class='gfield_label'  >Listening</label>
  <div class='ginput_container ginput_container_radio'>
     <ul class='gfield_radio' id='input_1_46'>
        <li class='gchoice_1_46_0'><input name='Other languages 2 listening' type='radio' value='None'  id='choice_1_46_0'    /><label for='choice_1_46_0' id='label_1_46_0'>None</label></li>
        <li class='gchoice_1_46_1'><input name='Other languages 2 listening' type='radio' value='Basic'  id='choice_1_46_1'    /><label for='choice_1_46_1' id='label_1_46_1'>Basic</label></li>
        <li class='gchoice_1_46_2'><input name='Other languages 2 listening' type='radio' value='Moderate'  id='choice_1_46_2'    /><label for='choice_1_46_2' id='label_1_46_2'>Moderate</label></li>
        <li class='gchoice_1_46_3'><input name='Other languages 2 listening' type='radio' value='Fluent'  id='choice_1_46_3'    /><label for='choice_1_46_3' id='label_1_46_3'>Fluent</label></li>
     </ul>
  </div>
</li>
<li id='field_1_48'  class='gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible' >
  <label class='gfield_label'  >Are you active as a singer such as in a choir, band, or soloist?<span class='gfield_required'>*</span></label>
  <div class='ginput_container ginput_container_radio'>
     <ul class='gfield_radio' id='input_1_48'>
        <li class='gchoice_1_48_0'><input name='Active singer' type='radio' value='Yes'  id='choice_1_48_0'    /><label for='choice_1_48_0' id='label_1_48_0'>Yes</label></li>
        <li class='gchoice_1_48_1'><input name='Active singer' type='radio' value='No'  id='choice_1_48_1'    /><label for='choice_1_48_1' id='label_1_48_1'>No</label></li>
     </ul>
  </div>
</li>
<li id='field_1_49'  class='gfield Halves gf_left_half field_sublabel_below field_description_below gfield_visibility_visible' >
  <label class='gfield_label'  >What singing instruction have you received?</label>
  <div class='ginput_container ginput_container_checkbox'>
  <ul class='gfield_checkbox' id='input_1_49'>
<li class='gchoice_1_49_1'>
								<input name='Singing school choir' type='checkbox'  value='School Choir'  id='choice_1_49_1'   />
								<label for='choice_1_49_1' id='label_1_49_1'>School Choir</label>
							</li><li class='gchoice_1_49_2'>
								<input name='Singing community church choir' type='checkbox'  value='Community/Church choir'  id='choice_1_49_2'   />
								<label for='choice_1_49_2' id='label_1_49_2'>Community/Church choir</label>
							</li><li class='gchoice_1_49_3'>
								<input name='Singing college university choir' type='checkbox'  value='College/University choir'  id='choice_1_49_3'   />
								<label for='choice_1_49_3' id='label_1_49_3'>College/University choir</label>
							</li><li class='gchoice_1_49_4'>
								<input name='Singing private training' type='checkbox'  value='Private vocal training'  id='choice_1_49_4'   />
								<label for='choice_1_49_4' id='label_1_49_4'>Private vocal training</label>
							</li><li class='gchoice_1_49_5'>
								<input name='Singing professional training' type='checkbox'  value='Professional vocal training'  id='choice_1_49_5'   />
								<label for='choice_1_49_5' id='label_1_49_5'>Professional vocal training</label>
							</li><li class='gchoice_1_49_6'>
								<input name='Singing other instruction' type='checkbox'  value='Other'  id='choice_1_49_6'   />
								<label for='choice_1_49_6' id='label_1_49_6'>Other</label>
							</li></ul></div></li><li id='field_1_67'  class='gfield field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label' for='input_1_67' >Years of singing instruction</label><div class='ginput_container ginput_container_select'><select name='Singing years of instruction' id='input_1_67' class='medium gfield_select'    aria-invalid="false"><option value='Select years' >Select years</option><option value='1' >1</option><option value='2' >2</option><option value='3' >3</option><option value='4' >4</option><option value='5' >5</option><option value='6' >6</option><option value='7' >7</option><option value='8' >8</option><option value='9' >9</option><option value='10' >10</option><option value='11' >11</option><option value='12' >12</option><option value='13' >13</option><option value='14' >14</option><option value='15' >15</option><option value='16' >16</option><option value='17' >17</option><option value='18' >18</option><option value='19' >19</option><option value='20' >20</option><option value='21' >21</option><option value='22' >22</option><option value='23' >23</option><option value='24' >24</option><option value='25' >25</option><option value='26' >26</option><option value='27' >27</option><option value='28' >28</option><option value='29' >29</option><option value='30' >30</option><option value='31' >31</option><option value='32' >32</option><option value='33' >33</option><option value='34' >34</option><option value='35' >35</option><option value='36' >36</option><option value='37' >37</option><option value='38' >38</option><option value='39' >39</option><option value='40' >40</option><option value='41' >41</option><option value='42' >42</option><option value='43' >43</option><option value='44' >44</option><option value='45' >45</option><option value='46' >46</option><option value='47' >47</option><option value='48' >48</option><option value='49' >49</option><option value='50' >50</option><option value='51' >51</option><option value='52' >52</option><option value='53' >53</option><option value='54' >54</option><option value='55' >55</option><option value='56' >56</option><option value='57' >57</option><option value='58' >58</option><option value='59' >59</option><option value='60' >60</option><option value='61' >61</option><option value='62' >62</option><option value='63' >63</option><option value='64' >64</option><option value='65' >65</option><option value='66' >66</option><option value='67' >67</option><option value='68' >68</option><option value='69' >69</option><option value='70' >70</option><option value='71' >71</option><option value='72' >72</option><option value='73' >73</option><option value='74' >74</option><option value='75' >75</option><option value='76' >76</option><option value='77' >77</option><option value='78' >78</option><option value='79' >79</option><option value='80' >80</option><option value='81' >81</option><option value='82' >82</option><option value='83' >83</option><option value='84' >84</option><option value='85' >85</option><option value='86' >86</option><option value='87' >87</option><option value='88' >88</option><option value='89' >89</option><option value='90' >90</option><option value='91' >91</option><option value='92' >92</option><option value='93' >93</option><option value='94' >94</option><option value='95' >95</option><option value='96' >96</option><option value='97' >97</option><option value='98' >98</option><option value='99' >99</option><option value='100' >100</option><option value='101' >101</option><option value='102' >102</option><option value='103' >103</option><option value='104' >104</option><option value='105' >105</option></select></div></li><li id='field_1_51'  class='gfield field_sublabel_below field_description_below gfield_visibility_hidden' ><label class='gfield_label'  >We have been overwhelmed by the response to this project and our limited supply of CDs, tickets, and cards has run out. We apologize that we are unable to offer any more of these items.</label><div class='ginput_container ginput_container_radio'><ul class='gfield_radio' id='input_1_51'><li class='gchoice_1_51_0'><input name='Requested item' type='radio' value='No, thank you.' checked='checked' id='choice_1_51_0'    /><label for='choice_1_51_0' id='label_1_51_0'>No, thank you.</label></li><li class='gchoice_1_51_1'><input name='Requested item' type='radio' value='a CD of UBC School of Music performances'  id='choice_1_51_1'    /><label for='choice_1_51_1' id='label_1_51_1'>a CD of UBC School of Music performances</label></li><li class='gchoice_1_51_2'><input name='Requested item' type='radio' value='School of Music thank you cards'  id='choice_1_51_2'    /><label for='choice_1_51_2' id='label_1_51_2'>School of Music thank you cards</label></li><li class='gchoice_1_51_3'><input name='Requested item' type='radio' value='a ticket to a UBC School of Music concert (excepting Opera)'  id='choice_1_51_3'    /><label for='choice_1_51_3' id='label_1_51_3'>a ticket to a UBC School of Music concert (excepting Opera)</label></li></ul></div></li><li id='field_1_52'  class='gfield field_sublabel_below field_description_below gfield_visibility_visible' ><label class='gfield_label gfield_label_before_complex'  >Address</label>    
                    <div class='ginput_complex ginput_container has_street has_street2 has_city has_state has_zip has_country ginput_container_address' id='input_1_52' >
                         <span class='ginput_full address_line_1' id='input_1_52_1_container' >
                                        <input type='text' name='Address Line 1' id='input_1_52_1' value=''    />
                                        <label for='input_1_52_1' id='input_1_52_1_label' >Street Address</label>
                                    </span><span class='ginput_full address_line_2' id='input_1_52_2_container' >
                                        <input type='text' name='Address Line 2' id='input_1_52_2' value=''   />
                                        <label for='input_1_52_2' id='input_1_52_2_label' >Address Line 2</label>
                                    </span><span class='ginput_left address_city' id='input_1_52_3_container' >
                                    <input type='text' name='Address city' id='input_1_52_3' value=''   />
                                    <label for='input_1_52_3' id='input_1_52_3_label' >City</label>
                                 </span><span class='ginput_right address_state' id='input_1_52_4_container' >
                                        <input type='text' name='Address province' id='input_1_52_4' value=''      />
                                        <label for='input_1_52_4' id='Address province' >State / Province / Region</label>
                                      </span><span class='ginput_left address_zip' id='input_1_52_5_container' >
                                    <input type='text' name='Address postal' id='input_1_52_5' value=''    />
                                    <label for='input_1_52_5' id='Address postal' >ZIP / Postal Code</label>
                                </span><span class='ginput_right address_country' id='input_1_52_6_container' >
                                        <select name='Address country' id='input_1_52_6'   ><option value='' selected='selected'></option><option value='Afghanistan' >Afghanistan</option><option value='Åland Islands' >Åland Islands</option><option value='Albania' >Albania</option><option value='Algeria' >Algeria</option><option value='American Samoa' >American Samoa</option><option value='Andorra' >Andorra</option><option value='Angola' >Angola</option><option value='Anguilla' >Anguilla</option><option value='Antarctica' >Antarctica</option><option value='Antigua and Barbuda' >Antigua and Barbuda</option><option value='Argentina' >Argentina</option><option value='Armenia' >Armenia</option><option value='Aruba' >Aruba</option><option value='Australia' >Australia</option><option value='Austria' >Austria</option><option value='Azerbaijan' >Azerbaijan</option><option value='Bahamas' >Bahamas</option><option value='Bahrain' >Bahrain</option><option value='Bangladesh' >Bangladesh</option><option value='Barbados' >Barbados</option><option value='Belarus' >Belarus</option><option value='Belgium' >Belgium</option><option value='Belize' >Belize</option><option value='Benin' >Benin</option><option value='Bermuda' >Bermuda</option><option value='Bhutan' >Bhutan</option><option value='Bolivia' >Bolivia</option><option value='Bonaire, Sint Eustatius and Saba' >Bonaire, Sint Eustatius and Saba</option><option value='Bosnia and Herzegovina' >Bosnia and Herzegovina</option><option value='Botswana' >Botswana</option><option value='Bouvet Island' >Bouvet Island</option><option value='Brazil' >Brazil</option><option value='British Indian Ocean Territory' >British Indian Ocean Territory</option><option value='Brunei Darrussalam' >Brunei Darrussalam</option><option value='Bulgaria' >Bulgaria</option><option value='Burkina Faso' >Burkina Faso</option><option value='Burundi' >Burundi</option><option value='Cambodia' >Cambodia</option><option value='Cameroon' >Cameroon</option><option value='Canada' >Canada</option><option value='Cape Verde' >Cape Verde</option><option value='Cayman Islands' >Cayman Islands</option><option value='Central African Republic' >Central African Republic</option><option value='Chad' >Chad</option><option value='Chile' >Chile</option><option value='China' >China</option><option value='Christmas Island' >Christmas Island</option><option value='Cocos Islands' >Cocos Islands</option><option value='Colombia' >Colombia</option><option value='Comoros' >Comoros</option><option value='Congo, Democratic Republic of the' >Congo, Democratic Republic of the</option><option value='Congo, Republic of the' >Congo, Republic of the</option><option value='Cook Islands' >Cook Islands</option><option value='Costa Rica' >Costa Rica</option><option value='Côte d&#039;Ivoire' >Côte d&#039;Ivoire</option><option value='Croatia' >Croatia</option><option value='Cuba' >Cuba</option><option value='Curaçao' >Curaçao</option><option value='Cyprus' >Cyprus</option><option value='Czech Republic' >Czech Republic</option><option value='Denmark' >Denmark</option><option value='Djibouti' >Djibouti</option><option value='Dominica' >Dominica</option><option value='Dominican Republic' >Dominican Republic</option><option value='Ecuador' >Ecuador</option><option value='Egypt' >Egypt</option><option value='El Salvador' >El Salvador</option><option value='Equatorial Guinea' >Equatorial Guinea</option><option value='Eritrea' >Eritrea</option><option value='Estonia' >Estonia</option><option value='Eswatini (Swaziland)' >Eswatini (Swaziland)</option><option value='Ethiopia' >Ethiopia</option><option value='Falkland Islands' >Falkland Islands</option><option value='Faroe Islands' >Faroe Islands</option><option value='Fiji' >Fiji</option><option value='Finland' >Finland</option><option value='France' >France</option><option value='French Guiana' >French Guiana</option><option value='French Polynesia' >French Polynesia</option><option value='French Southern Territories' >French Southern Territories</option><option value='Gabon' >Gabon</option><option value='Gambia' >Gambia</option><option value='Georgia' >Georgia</option><option value='Germany' >Germany</option><option value='Ghana' >Ghana</option><option value='Gibraltar' >Gibraltar</option><option value='Greece' >Greece</option><option value='Greenland' >Greenland</option><option value='Grenada' >Grenada</option><option value='Guadeloupe' >Guadeloupe</option><option value='Guam' >Guam</option><option value='Guatemala' >Guatemala</option><option value='Guernsey' >Guernsey</option><option value='Guinea' >Guinea</option><option value='Guinea-Bissau' >Guinea-Bissau</option><option value='Guyana' >Guyana</option><option value='Haiti' >Haiti</option><option value='Heard and McDonald Islands' >Heard and McDonald Islands</option><option value='Holy See' >Holy See</option><option value='Honduras' >Honduras</option><option value='Hong Kong' >Hong Kong</option><option value='Hungary' >Hungary</option><option value='Iceland' >Iceland</option><option value='India' >India</option><option value='Indonesia' >Indonesia</option><option value='Iran' >Iran</option><option value='Iraq' >Iraq</option><option value='Ireland' >Ireland</option><option value='Isle of Man' >Isle of Man</option><option value='Israel' >Israel</option><option value='Italy' >Italy</option><option value='Jamaica' >Jamaica</option><option value='Japan' >Japan</option><option value='Jersey' >Jersey</option><option value='Jordan' >Jordan</option><option value='Kazakhstan' >Kazakhstan</option><option value='Kenya' >Kenya</option><option value='Kiribati' >Kiribati</option><option value='Kuwait' >Kuwait</option><option value='Kyrgyzstan' >Kyrgyzstan</option><option value='Lao People&#039;s Democratic Republic' >Lao People&#039;s Democratic Republic</option><option value='Latvia' >Latvia</option><option value='Lebanon' >Lebanon</option><option value='Lesotho' >Lesotho</option><option value='Liberia' >Liberia</option><option value='Libya' >Libya</option><option value='Liechtenstein' >Liechtenstein</option><option value='Lithuania' >Lithuania</option><option value='Luxembourg' >Luxembourg</option><option value='Macau' >Macau</option><option value='Macedonia' >Macedonia</option><option value='Madagascar' >Madagascar</option><option value='Malawi' >Malawi</option><option value='Malaysia' >Malaysia</option><option value='Maldives' >Maldives</option><option value='Mali' >Mali</option><option value='Malta' >Malta</option><option value='Marshall Islands' >Marshall Islands</option><option value='Martinique' >Martinique</option><option value='Mauritania' >Mauritania</option><option value='Mauritius' >Mauritius</option><option value='Mayotte' >Mayotte</option><option value='Mexico' >Mexico</option><option value='Micronesia' >Micronesia</option><option value='Moldova' >Moldova</option><option value='Monaco' >Monaco</option><option value='Mongolia' >Mongolia</option><option value='Montenegro' >Montenegro</option><option value='Montserrat' >Montserrat</option><option value='Morocco' >Morocco</option><option value='Mozambique' >Mozambique</option><option value='Myanmar' >Myanmar</option><option value='Namibia' >Namibia</option><option value='Nauru' >Nauru</option><option value='Nepal' >Nepal</option><option value='Netherlands' >Netherlands</option><option value='New Caledonia' >New Caledonia</option><option value='New Zealand' >New Zealand</option><option value='Nicaragua' >Nicaragua</option><option value='Niger' >Niger</option><option value='Nigeria' >Nigeria</option><option value='Niue' >Niue</option><option value='Norfolk Island' >Norfolk Island</option><option value='North Korea' >North Korea</option><option value='Northern Mariana Islands' >Northern Mariana Islands</option><option value='Norway' >Norway</option><option value='Oman' >Oman</option><option value='Pakistan' >Pakistan</option><option value='Palau' >Palau</option><option value='Palestine, State of' >Palestine, State of</option><option value='Panama' >Panama</option><option value='Papua New Guinea' >Papua New Guinea</option><option value='Paraguay' >Paraguay</option><option value='Peru' >Peru</option><option value='Philippines' >Philippines</option><option value='Pitcairn' >Pitcairn</option><option value='Poland' >Poland</option><option value='Portugal' >Portugal</option><option value='Puerto Rico' >Puerto Rico</option><option value='Qatar' >Qatar</option><option value='Réunion' >Réunion</option><option value='Romania' >Romania</option><option value='Russia' >Russia</option><option value='Rwanda' >Rwanda</option><option value='Saint Barthélemy' >Saint Barthélemy</option><option value='Saint Helena' >Saint Helena</option><option value='Saint Kitts and Nevis' >Saint Kitts and Nevis</option><option value='Saint Lucia' >Saint Lucia</option><option value='Saint Martin' >Saint Martin</option><option value='Saint Pierre and Miquelon' >Saint Pierre and Miquelon</option><option value='Saint Vincent and the Grenadines' >Saint Vincent and the Grenadines</option><option value='Samoa' >Samoa</option><option value='San Marino' >San Marino</option><option value='Sao Tome and Principe' >Sao Tome and Principe</option><option value='Saudi Arabia' >Saudi Arabia</option><option value='Senegal' >Senegal</option><option value='Serbia' >Serbia</option><option value='Seychelles' >Seychelles</option><option value='Sierra Leone' >Sierra Leone</option><option value='Singapore' >Singapore</option><option value='Sint Maarten' >Sint Maarten</option><option value='Slovakia' >Slovakia</option><option value='Slovenia' >Slovenia</option><option value='Solomon Islands' >Solomon Islands</option><option value='Somalia' >Somalia</option><option value='South Africa' >South Africa</option><option value='South Georgia' >South Georgia</option><option value='South Korea' >South Korea</option><option value='South Sudan' >South Sudan</option><option value='Spain' >Spain</option><option value='Sri Lanka' >Sri Lanka</option><option value='Sudan' >Sudan</option><option value='Suriname' >Suriname</option><option value='Svalbard and Jan Mayen Islands' >Svalbard and Jan Mayen Islands</option><option value='Sweden' >Sweden</option><option value='Switzerland' >Switzerland</option><option value='Syria' >Syria</option><option value='Taiwan' >Taiwan</option><option value='Tajikistan' >Tajikistan</option><option value='Tanzania' >Tanzania</option><option value='Thailand' >Thailand</option><option value='Timor-Leste' >Timor-Leste</option><option value='Togo' >Togo</option><option value='Tokelau' >Tokelau</option><option value='Tonga' >Tonga</option><option value='Trinidad and Tobago' >Trinidad and Tobago</option><option value='Tunisia' >Tunisia</option><option value='Turkey' >Turkey</option><option value='Turkmenistan' >Turkmenistan</option><option value='Turks and Caicos Islands' >Turks and Caicos Islands</option><option value='Tuvalu' >Tuvalu</option><option value='Uganda' >Uganda</option><option value='Ukraine' >Ukraine</option><option value='United Arab Emirates' >United Arab Emirates</option><option value='United Kingdom' >United Kingdom</option><option value='United States' >United States</option><option value='Uruguay' >Uruguay</option><option value='US Minor Outlying Islands' >US Minor Outlying Islands</option><option value='Uzbekistan' >Uzbekistan</option><option value='Vanuatu' >Vanuatu</option><option value='Venezuela' >Venezuela</option><option value='Vietnam' >Vietnam</option><option value='Virgin Islands, British' >Virgin Islands, British</option><option value='Virgin Islands, U.S.' >Virgin Islands, U.S.</option><option value='Wallis and Futuna' >Wallis and Futuna</option><option value='Western Sahara' >Western Sahara</option><option value='Yemen' >Yemen</option><option value='Zambia' >Zambia</option><option value='Zimbabwe' >Zimbabwe</option></select>
                                        <label for='input_1_52_6' id='input_1_52_6_label' >Country</label>
                                    </span>
                    <div class='gf_clear gf_clear_complex'></div>
                </div></li>
        <div class="button">
            <button type="submit">@lang('messages.Next')</button>
        </div>
    </form>
    </div>
</html>