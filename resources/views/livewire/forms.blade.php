<div class="soft-card space-y-10">
    <div class="soft-section-title">
        <h2>Formulir Pengguna</h2>
        <p>Isi detail berikut untuk menambahkan atau memperbarui data pengguna.</p>
    </div>

    @if (session('message'))
        <div class="soft-alert soft-alert-success mb-6 p-4 rounded-lg bg-green-100 text-green-800 font-semibold"
            x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 3000)">
            {{ session('message') }}
        </div>
    @endif

    @if (session('error'))
        <div class="soft-alert soft-alert-error mb-6 p-4 rounded-lg bg-red-100 text-red-800 font-semibold"
            x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 3000)">
            {{ session('error') }}
        </div>
    @endif

    <form wire:submit.prevent="handleSubmit" class="soft-form" action="#" method="POST">
        @csrf

        <div class="soft-form-grid">
            <div class="soft-field">
                <label for="name" class="soft-label">Nama Lengkap</label>
                <input type="text" id="name" name="name" class="soft-input"
                    placeholder="Masukkan nama lengkap pengguna" wire:model='name' />
                <p class="soft-hint">Gunakan nama resmi sesuai identitas.</p>
                @error('name')
                    <p class="soft-error">{{ $message }}</p>
                @enderror
            </div>

            <div class="soft-field">
                <label for="email" class="soft-label">Email Aktif</label>
                <input type="email" id="email" name="email" class="soft-input"
                    placeholder="nama.pengguna@contoh.com" wire:model="email" />
                <p class="soft-hint">Alamat email akan digunakan untuk notifikasi.</p>
                @error('email')
                    <p class="soft-error">{{ $message }}</p>
                @enderror
            </div>

            <div class="soft-field">
                <label for="phone" class="soft-label">Nomor Telpon</label>
                <input type="text" id="phone" name="phone" class="soft-input" placeholder="0857...."
                    wire:model="phone" />
                @error('phone')
                    <p class="soft-error">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="soft-form-actions flex gap-4">
            <button type="button" wire:click.prevent="handleReset" class="soft-button soft-button-ghost"
                wire:loading.attr="disabled" wire:target="handleSubmit">
                <span>Reset Form</span>
            </button>
            <button type="button" wire:click="handleSubmit" class="soft-button soft-button-add"
                wire:loading.attr="disabled" wire:target="handleSubmit">
                <span class="flex items-center gap-2" wire:loading.remove wire:target="handleSubmit">
                    <span>Simpan Pengguna</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 13l4 4L19 7" />
                    </svg>
                </span>
                <span class="flex items-center gap-2" wire:loading wire:target="handleSubmit">
                    <span class="soft-spinner"></span>
                    <span>Menyimpan...</span>
                </span>
            </button>
        </div>
    </form>
</div>
