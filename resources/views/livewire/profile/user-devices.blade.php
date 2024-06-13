<div class="card">
    <div class="card-header">
        <h4 class="card-title">Manage Devices</h4>
    </div>

    <!-- Body -->
    <div class="card-body">
        <p class="card-text">View and manage devices where you're currently logged in.</p>
    </div>
    <!-- End Body -->

    <!-- Table -->
    <div class="table-responsive">
        <table class="table table-thead-bordered table-nowrap table-align-middle card-table">
            <thead class="thead-light">
                <tr>
                    <th>Browser</th>
                    <th>Device</th>
                    <th>Location (IP)</th>
                    <th>Most recent activity</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($sessions as $session)
                    @php
                        $userAgent = $session->user_agent;
                        $browser = '';
                        $platform = '';
                        $device = '';

                        if (strpos($userAgent, 'Windows') !== false) {
                            $platform = 'Windows';
                        } elseif (strpos($userAgent, 'Mac') !== false) {
                            $platform = 'Mac';
                        } elseif (strpos($userAgent, 'Linux') !== false) {
                            $platform = 'Linux';
                        } elseif (strpos($userAgent, 'Android') !== false) {
                            $platform = 'Android';
                        } elseif (strpos($userAgent, 'iOS') !== false) {
                            $platform = 'iOS';
                        }

                        if (strpos($userAgent, 'Chrome') !== false) {
                            $browser = 'Chrome';
                        } elseif (strpos($userAgent, 'Firefox') !== false) {
                            $browser = 'Firefox';
                        } elseif (strpos($userAgent, 'Safari') !== false) {
                            $browser = 'Safari';
                        } elseif (strpos($userAgent, 'Edge') !== false) {
                            $browser = 'Edge';
                        }

                        if (strpos($userAgent, 'Mobile') !== false) {
                            $device = 'Mobile';
                        } elseif (strpos($userAgent, 'Tablet') !== false) {
                            $device = 'Tablet';
                        } else {
                            $device = 'Desktop';
                        }
                    @endphp

                    <tr>
                        <td class="align-items-center">
                            <img class="avatar avatar-xss me-2" src="{{ asset('assets/svg/brands/' . strtolower($browser) . '-icon.svg') }}" alt="Image Description">
                            {{ $browser }} on {{ $platform }}
                        </td>
                        <td>
                            <i class="bi-{{ strtolower($device) }} fs-3 me-2"></i>
                            {{ $device }}
                            @if ($session->id === session()->getId())
                                <span class="badge bg-soft-success text-success ms-1">Current</span>
                            @endif
                        </td>
                        <td>{{ $session->ip_address }}</td>
                        <td>{{ \Carbon\Carbon::createFromTimestamp($session->last_activity)->diffForHumans() }}</td>
                        <td>
                            @if ($session->id !== session()->getId())
                                <button class="btn btn-white btn-sm" wire:click="logoutOtherBrowserSessions('{{ $session->id }}')">Logout</button>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- End Table -->
</div>
