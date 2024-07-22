# papan_bunga
Tampilan untuk papan bunga

# Requirement
- php 8^

# what is this app about?
this app will work with papan bunga currency to show what is the current queue

# Cara Install
##XAMPP
1. Jalankan XAMPP
2. Copy file .env.example lalu rename file menjadi .env
    - Setting database silahkan ubah :
        1. DB_DATABASE
        2. DB_USERNAME
        3. DB_PASSWORD
    - Ubah nilai INTERVAL_FLAG_MOVE sesuai kebutuhan (lama bendera berubah/berganti) misal
        60 menit
        INTERVAL_FLAG_MOVE=60000
    - Ubah nilai TOTAL_FLAG_SHOWED sesuai kebutuhan (Banyak bendera di tampilkan dalam table) misal
        11 row
        TOTAL_FLAG_SHOWED=11
3. Untuk login admin bisa akses
    URL/login
