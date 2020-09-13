<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Publication</th>
        <th>Language</th>
        <th>Date/Time</th>
        <th>Recording Filenames</th>
        @foreach($fieldnames as $fieldname)
            <th>{{ $fieldname }}</th>   
        @endforeach
    </tr>
    </thead>
    <tbody>
    @foreach($consent_forms as $consent_form)
        @forelse ($consent_form->demographic_questionnaires as $demographic_questionnaire)
             <tr>
                <td>{{ $consent_form->id }}</td>
                <td>{{ $consent_form->name }}</td>
                <td>{{ $consent_form->email }}</td>
                <td>{{ $consent_form->public ? "granted" : "withheld" }}</td>
                <td>{{ $consent_form->language }}</td>
                <td>{{ $consent_form->created_at }}</td>
                <td>{{ $consent_form->recording_filenames }}</td>
                @foreach($fieldnames as $fieldname)
                    <td>{{ $demographic_questionnaire[$fieldname] }}
                @endforeach
            </tr>  
        @empty
            <tr>
                <td>{{ $consent_form->id }}</td>
                <td>{{ $consent_form->name }}</td>
                <td>{{ $consent_form->email }}</td>
                <td>{{ $consent_form->public ? "granted" : "withheld" }}</td>
                <td>{{ $consent_form->language }}</td>
                <td>{{ $consent_form->created_at }}</td>
                <td>{{ $consent_form->recording_filenames }}</td>
            </tr>
        @endforelse
    @endforeach
    </tbody>
</table>
