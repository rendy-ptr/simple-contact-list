<div class="soft-card space-y-10">
    <div class="soft-section-title">
        <h2>Formulir Pengguna</h2>
        <p>Isi detail berikut untuk menambahkan atau memperbarui data pengguna.</p>
    </div>

    <form action="#" method="POST" class="soft-form">
        @csrf

        <div class="soft-form-grid">
            <div class="soft-field">
                <label for="name" class="soft-label">Nama Lengkap</label>
                <input type="text" id="name" name="name" class="soft-input"
                    placeholder="Masukkan nama lengkap pengguna" />
                <p class="soft-hint">Gunakan nama resmi sesuai identitas.</p>
            </div>

            <div class="soft-field">
                <label for="email" class="soft-label">Email Aktif</label>
                <input type="email" id="email" name="email" class="soft-input"
                    placeholder="nama.pengguna@contoh.com" />
                <p class="soft-hint">Alamat email akan digunakan untuk notifikasi.</p>
            </div>

            <div class="soft-field">
                <label for="role" class="soft-label">Peran Pengguna</label>
                <select id="role" name="role" class="soft-input">
                    <option value="">Pilih peran...</option>
                    <option value="admin">Admin</option>
                    <option value="editor">Editor</option>
                    <option value="viewer">Viewer</option>
                </select>
                <p class="soft-hint">Peran menentukan akses fitur di aplikasi.</p>
            </div>

            <div class="soft-field">
                <label for="team" class="soft-label">Divisi / Tim</label>
                <input type="text" id="team" name="team" class="soft-input"
                    placeholder="Contoh: Produk, Keuangan" />
            </div>
        </div>

        <div class="soft-field">
            <label class="soft-label">Status Akun</label>
            <div class="soft-options">
                <label for="status-active" class="soft-option">
                    <input type="radio" name="status" id="status-active" value="active" />
                    <span>Aktif</span>
                </label>
                <label for="status-pending" class="soft-option">
                    <input type="radio" name="status" id="status-pending" value="pending" />
                    <span>Menunggu</span>
                </label>
                <label for="status-archived" class="soft-option">
                    <input type="radio" name="status" id="status-archived" value="archived" />
                    <span>Diarsipkan</span>
                </label>
            </div>
        </div>

        <div class="soft-field">
            <label for="bio" class="soft-label">Bio Singkat</label>
            <textarea id="bio" name="bio" class="soft-input" placeholder="Tuliskan catatan singkat mengenai pengguna..."></textarea>
        </div>

        <div class="soft-form-actions">
            <button type="reset" class="soft-button soft-button-ghost">
                <span>Reset Form</span>
            </button>
            <button type="submit" class="soft-button soft-button-add">
                <span>Simpan Pengguna</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 13l4 4L19 7" />
                </svg>
            </button>
        </div>
    </form>
</div>
