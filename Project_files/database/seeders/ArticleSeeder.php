<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Article::create([
            'Category' => 'DS',
            'Title' => 'Machine Learning',
            'releaseDate' => '2024-10-10',
            'writer_id' => '1',
            'Description' => 'Di tengah pesatnya perkembangan teknologi kecerdasan buatan atau artificial intelligence (AI) saat ini. Belum banyak orang yang mengetahui ...',
            'Content' => 'Teknologi machine learning (ML) adalah mesin yang dikembangkan untuk bisa belajar dengan sendirinya tanpa arahan dari penggunanya. Pembelajaran mesin dikembangkan berdasarkan disiplin ilmu lainnya seperti statistika, matematika dan data mining sehingga mesin dapat belajar dengan menganalisa data tanpa perlu di program ulang atau diperintah.
            Dalam hal ini machine learning memiliki kemampuan untuk memperoleh data yang ada dengan perintah ia sendiri. ML juga dapat mempelajari data yang ada dan data yang ia peroleh sehingga bisa melakukan tugas tertentu. Tugas yang dapat dilakukan oleh ML pun sangat beragam, tergantung dari apa yang ia pelajari.<br><br>
            Istilah machine learning pertama kali dikemukakan oleh beberapa ilmuwan matematika seperti Adrien Marie Legendre, Thomas Bayes dan Andrey Markov pada tahun 1920-an dengan mengemukakan dasar-dasar machine learning dan konsepnya. Sejak saat itu ML banyak yang mengembangkan. Salah satu contoh dari penerapan ML yang cukup terkenal adalah Deep Blue yang dibuat oleh IBM pada tahun 1996.',
            'image' => 'assets/Machine-Learning.jpg'
        ]);

        Article::create([
            'Category' => 'NW',
            'Title' => 'Software Security',
            'releaseDate' => '2024-10-12',
            'writer_id' => '2',
            'Description' => 'Bisnis masa kini bergantung pada semakin banyaknya program perangkat lunak untuk menjalankan tugas-tugas penting. Seiring dengan semakin ...',
            'Content' => 'Keamanan perangkat lunak mengacu pada serangkaian praktik yang membantu melindungi aplikasi perangkat lunak dan solusi digital dari penyerang. Pengembang memasukkan teknik ini ke dalam siklus pengembangan perangkat lunak dan proses pengujian. Hasilnya, perusahaan dapat memastikan solusi digital mereka tetap aman dan dapat berfungsi jika terjadi serangan berbahaya.
            Pengembangan perangkat lunak yang aman sangatlah penting karena selalu ada orang yang ingin mengeksploitasi data bisnis. Karena bisnis semakin bergantung pada perangkat lunak, program-program ini harus tetap aman dan terlindungi. Dengan protokol keamanan perangkat lunak yang kuat, Anda dapat mencegah penyerang mencuri informasi yang berpotensi sensitif seperti nomor kartu kredit 
            dan rahasia dagang, serta membangun kepercayaan di antara pengguna.Pencurian data penting dapat menjadi bencana bagi pelanggan dan bisnis. Pelaku kejahatan dapat menyalahgunakan informasi sensitif dan bahkan mencuri identitas pengguna.<br><br> Selain itu, perusahaan dapat menghadapi hukuman hukum jika terjadi pelanggaran data dan mengalami kerusakan reputasi.Bisnis dapat berupaya melindungi 
            data penting dengan menerapkan teknik keamanan perangkat lunak ke dalam siklus hidup pengembangan mereka. Menerapkan teknik keamanan memungkinkan organisasi untuk secara proaktif mengidentifikasi kerentanan sistem dan melindungi perangkat lunak mereka dengan lebih baik.',
            'image' => 'assets/Software-Security.jpg'
        ]);

        Article::create([
            'Category' => 'DS',
            'Title' => 'Deep Learning',
            'releaseDate' => '2024-10-16',
            'writer_id' => '1',
            'Description' => 'Kecerdasan buatan (AI) mencoba melatih komputer untuk berpikir dan belajar seperti yang dilakukan manusia. Teknologi deep learning mendorong ...',
            'Content' => 'Deep learning adalah metode dalam kecerdasan buatan (AI) yang mengajarkan komputer untuk memproses data dengan cara yang terinspirasi otak manusia. Model deep learning dapat mengenali pola kompleks dalam gambar, teks, suara, dan data lain untuk menghasilkan wawasan dan prediksi yang akurat. Anda dapat menggunakan metode deep learning untuk mengotomatiskan tugas yang biasanya 
            membutuhkan kecerdasan manusia, seperti mendeskripsikan citra atau menyalin file suara ke dalam teks. Algoritme deep learning merupakan jaringan neural yang meniru otak manusia. Misalnya, otak manusia memiliki jutaan neuron yang saling terhubung yang bekerja sama untuk mempelajari dan memproses informasi.<br><br> Demikian pula, jaringan neural deep learning, atau jaringan neural buatan, terbuat 
            dari banyak lapisan neuron buatan yang bekerja sama di dalam komputer. Neuron buatan adalah modul perangkat lunak yang disebut simpul, yang menggunakan perhitungan matematika untuk memproses data. Jaringan neural buatan adalah algoritme deep learning yang menggunakan simpul ini untuk memecahkan masalah kompleks.',
            'image' => 'assets/Deep-Learning.jpg'
        ]);

        Article::create([
            'Category' => 'DS',
            'Title' => 'Natural Language Processing',
            'releaseDate' => '2024-10-18',
            'writer_id' => '3',
            'Description' => 'Pemrosesan bahasa alami (NLP) sangat penting untuk menganalisis data teks dan ucapan secara penuh dan efisien. Teknologi ini dapat menjelajahi ...',
            'Content' => 'Pemrosesan bahasa alami (NLP) adalah sebuah teknologi machine learning yang memberi komputer kemampuan untuk menginterpretasikan, memanipulasi, dan memahami bahasa manusia. Banyak organisasi dewasa ini memiliki begitu banyak data suara dan teks dari berbagai saluran komunikasi seperti email, pesan teks, umpan berita media sosial, video, audio, dan banyak lagi. Mereka 
            menggunakan perangkat lunak NLP untuk memproses data ini secara otomatis, menganalisis maksud atau sentimen dalam pesan, dan merespons komunikasi manusia dalam waktu nyata. NLP menggabungkan linguistik komputasi - pemodelan bahasa manusia berbasis aturan - dengan model statistik, machine learning (pembelajaran mesin), dan deep learning (pembelajaran mendalam).<br><br> Bersama-sama, kesemua 
            teknologi itu memungkinkan program komputer untuk memproses bahasa manusia dalam bentuk teks atau data suara dan untuk memahami makna sepenuhnya, lengkap dengan maksud dan sentimen pembicara atau penulisan. NLP dapat membantu perusahaan meningkatkan wawasan mereka dan mendapatkan lebih banyak visibilitas ke semua aspek operasi yang dihadapi pelanggan mereka daripada sebelumnya.',
            'image' => 'assets/nlp.jpg'
        ]);

        Article::create([
            'Category' => 'NW',
            'Title' => 'Network Administration',
            'releaseDate' => '2024-10-20',
            'writer_id' => '2',
            'Description' => 'Network administrator adalah salah satu profesi di bidang IT yang berperan penting dalam mengatur jaringan perusahaan. Dalam menjalankan tugasnya ...',
            'Content' => 'Network Administration merupakan professional yang bertanggung jawab atas pemeliharaan perangkat keras komputer dan perangkat lunak yang terdiri dari sebuah jaringan komputer. Biasanya bertugas untuk melakukan konfigurasi, pemeliharaan, pemeliharaan, dan monitoring jarinngan. Dimana fungsinya untuk spesialisasi jaringan atau analisis jaringan. Administrator bertanggung 
            jawab atas keamanan dari jaringan dan untuk menetapkan alamat IP ke perangkat yang terhubung ke jaringan. Menetapkan dan memberikan alamat subnet IP untuk mengontrol administrator atas personil yang terhubung ke subnet. Hal ini juga membantu untuk memastikan bahwa administrator mengetahui setiap sistem yang terhubung dan yang secara pribadi bertanggung jawab untuk sistem.<br><br> Network 
            Administration merupakan professional yang bertanggung jawab atas pemeliharaan perangkat keras komputer dan perangkat lunak yang terdiri dari sebuah jaringan komputer. Biasanya bertugas untuk melakukan konfigurasi, pemeliharaan, pemeliharaan, dan monitoring jarinngan. Dimana fungsinya untuk spesialisasi jaringan atau analisis jaringan. Administrator bertanggung jawab atas keamanan 
            dari jaringan dan untuk menetapkan alamat IP ke perangkat yang terhubung ke jaringan. Menetapkan dan memberikan alamat subnet IP untuk mengontrol administrator atas personil yang terhubung ke subnet. Hal ini juga membantu untuk memastikan bahwa administrator mengetahui setiap sistem yang terhubung dan yang secara pribadi bertanggung jawab untuk sistem ',
            'image' => 'assets/Network-Administrator.jpg'
        ]);

        Article::create([
            'Category' => 'NW',
            'Title' => 'Popular Network Technology',
            'releaseDate' => '2024-10-24',
            'writer_id' => '1',
            'Description' => 'Permintaan akan konektivitas dan jaringan telah meningkat secara signifikan karena semakin banyak konsumen dan bisnis yang mencari konektivitas yang ...',
            'Content' => 'Munculnya Kecerdasan Buatan (AI), 5G dan seterusnya, 6G, Internet of Things (IoT), Big Data, dan banyak lagi telah menandai transformasi luar biasa di berbagai industri. Teknologi baru ini secara digital mengubah sektor telekomunikasi untuk memenuhi permintaan bisnis dan pelanggan yang terus tumbuh. Transformasi digital dengan tren teknologi ini akan memengaruhi industri 
            telekomunikasi untuk mewujudkan inovasi, agar tetap kompetitif di pasar. Tren yang muncul pada tahun 2024 akan mendukung sektor telekomunikasi dalam menghadapi tantangan yang terlibat dalam manajemen dan keamanan jaringan.<br><br> Di tahun-tahun mendatang, dengan bantuan tren teknologi ini, industri telekomunikasi dapat merenovasi model operasional dan bisnis mereka untuk memperluas basis 
            pelanggan mereka dan meluncurkan produk, solusi, dan layanan yang inovatif. Tahun 2024 akan menandai era di mana perusahaan mengintegrasikan metode yang ramah lingkungan dan berkelanjutan ke dalam strategi dan kerangka kerja bisnis mereka. Praktik terbaik mencakup pelaksanaan prosedur hemat energi dan dorongan program tanggung jawab sosial perusahaan. Transformasi digital yang berkelanjutan 
            merupakan kendala strategis yang mencakup keunggulan kompetitif bagi perusahaan mana pun.',
            'image' => 'assets/Popular-Network.jpg'
        ]);
        
    }
}
