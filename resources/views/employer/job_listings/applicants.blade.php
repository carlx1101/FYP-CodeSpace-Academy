<div class="container">
    <h1>Applicants for {{ $jobListing->title }}</h1>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Applied At</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($applicants as $applicant)
                <tr>
                    <td>{{ $applicant->user->name }}</td>
                    <td>{{ $applicant->user->email }}</td>
                    <td>{{ $applicant->created_at->format('Y-m-d H:i') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
