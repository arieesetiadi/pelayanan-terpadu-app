<li class="nav-item dropdown dropdown-large">
    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret"
       href="#"
       data-bs-toggle="dropdown">
        <div class="notifications">
            @if ($data['count'] > 0)
                <span class="notify-badge">{{ $data['count'] }}</span>
            @endif
            <i class="bi bi-bell-fill"></i>
        </div>
    </a>
    <div class="dropdown-menu dropdown-menu-end p-0">
        <div class="p-2 -bottom m-2">
            <h5 class="h5 mb-0">Notifications</h5>
        </div>
        <div class="header-notifications-list">
            @forelse (session('notifikasiAdmin') as $notifikasi)
                @php
                    $namaPelapor = getNamaPelaporByNotification($notifikasi);
                @endphp
                @if ($namaPelapor != null)
                    <a target="_blank"
                       data-bs-toggle="tooltip"
                       data-bs-placement="left"
                       title="Pelapor : {{ $namaPelapor }}"
                       class="dropdown-item {{ $notifikasi->telah_dibaca == false ? 'bg-grey' : '' }}"
                       href="/notifikasi/cetak-pdf/{{ $notifikasi->id }}">
                    @else
                        <a target="_blank"
                           class="dropdown-item {{ $notifikasi->telah_dibaca == false ? 'bg-grey' : '' }}"
                           href="/notifikasi/cetak-pdf/{{ $notifikasi->id }}">
                @endif

                <div class="d-flex align-items-center">
                    <div class="ms-3 flex-grow-1">
                        <h6 class="mb-0 dropdown-msg-user">{{ $notifikasi->judul }}</h6>
                        <small class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">
                            {{ $notifikasi->isi }}
                        </small>
                        <small>{{ humanTimeFormat($notifikasi->dikirim_pada) }}</small>
                    </div>
                </div>
                </a>
            @empty
                <span class="d-inline-block text-center">Tidak ada notifikasi.</span>
            @endforelse
        </div>
        <div class="p-2">
            <div>
                <hr class="dropdown-divider">
            </div>
            <a class="dropdown-item"
               href="/notifikasi/read-all-admin">
                <div class="text-center">Tandai
                    semua telah
                    dibaca</div>
            </a>
        </div>
    </div>
</li>
