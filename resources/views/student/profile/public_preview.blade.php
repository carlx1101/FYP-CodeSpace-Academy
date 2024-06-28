<div class="card-header">
    <h2>{{ $user->name }}'s Public Profile</h2>
</div>
<div class="card-body">
    <p><strong>Name:</strong> {{ $user->name }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>
    <p><strong>Profile Picture:</strong></p>
    @if($user->profile_picture)
        <img src="{{ asset('storage/' . $user->profile_picture) }}" alt="Profile Picture" class="img-thumbnail">
    @else
        <p>No profile picture available.</p>
    @endif
