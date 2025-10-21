<div class="space-y-16">
    <header class="soft-card">
        <div class="flex flex-col gap-10 md:flex-row md:items-center md:justify-between">
            <div class="w-full space-y-6 text-left">
                <div class="space-y-4">
                    <h1 class="text-4xl font-black tracking-tight sm:text-6xl md:text-5xl">{{ $title }}</h1>
                    <p class="text-xs font-semibold uppercase tracking-[0.32em] text-[var(--soft-muted)]">
                        {{ count($users) }} Pengguna Aktif
                    </p>
                </div>
            </div>
        </div>
    </header>

    <div class="soft-scroll-area">
        <ul class="flex flex-col gap-10">
            @forelse ($users as $user)
                <li class="soft-card grid items-center gap-2 md:grid-cols-[auto,1fr,auto]">
                    <div class="flex items-center gap-6">
                        <div class="soft-avatar">
                            <span>{{ strtoupper(mb_substr($user->name, 0, 1)) }}</span>
                        </div>

                        <div class="space-y-1 text-left">
                            <p class="text-2xl font-semibold tracking-tight md:text-3xl">{{ $user->name }}</p>
                            <div
                                class="flex flex-wrap items-center gap-3 text-sm font-semibold uppercase tracking-[0.24em] text-[var(--soft-muted)]">
                                <span>{{ $user->email }}</span>
                                <span class="soft-chip">Active</span>
                            </div>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <button type="button" class="soft-button soft-button-edit">
                            <span>Edit</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                        <button type="button" class="soft-button soft-button-delete">
                            <span>Hapus</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>
                </li>
            @empty
                <li
                    class="soft-card p-16 text-center text-xl font-semibold uppercase tracking-[0.28em] text-[var(--soft-muted)]">
                    Belum ada pengguna yang terdaftar
                </li>
            @endforelse
        </ul>
    </div>
</div>
