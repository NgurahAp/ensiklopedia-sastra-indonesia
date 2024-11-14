<x-home-layout>
    {{-- Header --}}
    <div class="h-[30vh] w-full bg-red-700  flex flex-col items-center">
        <div class="h-[85%] bg-[#850c18] flex justify-between items-center px-5  w-3/4">
            <img src="images/logo.jpg" alt="">
            <div class="flex gap-4 pr-8">
                <input type="text" placeholder="Cari..." class="w-80 p-2 border border-gray-300 rounded-lg">
                <button class="bg-black text-white text-sm px-6 rounded-lg">CARI</button>
            </div>
        </div>
        <div class="h-[15%] w-3/4 bg-black flex text-white items-center pl-8 font-medium text-xl gap-14">
            <h1>Beranda</h1>
            <h1>Daftar Isi</h1>
            <h1>Penyusun</h1>
            <h1>Tentang</h1>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button href="route('logout')"
                    onclick="event.preventDefault();
                this.closest('form').submit();">LogOut</button>
            </form>
        </div>
    </div>
    {{-- Footer --}}
    <div class=" w-full flex flex-col items-center">
        <div class="h-full bg-white p-10  w-3/4">
            <h1 class="text-center text-5xl font-bold pt-6 pb-14">Daftar Karya Sastra</h1>
            <div class="pb-10">
                <h1 class="font-semibold text-2xl">Adam Ma'rifat <span class="font-normal pl-2">(1982)</span></h1>
                <div class="flex p-2 pt-5 gap-8 items-center">
                    <img src="images/adam-marifat.png" class="h-24 shadow-md" alt="">
                    <h1 class="text-lg text-justify text-gray-500">
                        {{ Str::words("Adam Ma'rifat merupakan kumpulan enam cerita pendek karya Danarto, seorang pengarang yang dibesarkan dalam suasana dan alam berpikir kejawen atau tasawuf kejawen. Keenam cerpen yang terhimpun bertitimangsa antara tahun 1975 hingga tahun 1981. Buku kumpulan cerpen ini pertama kali diterbitkan di Jakarta oleh Balai Pustaka, 1982, setebal 72 halaman dengan ukuran 15 x 21 cm. Sampul buku bergambar kuda bersayap berkepala perempuan berambut panjang yang bermahkota. Dengan kumpulan cerpennya ini, Danarto menjadi penerima Hadiah Sastra DKJ 1982.", 60) }}
                    </h1>
                </div>
            </div>
            <div class="pb-10">
                <h1 class="font-semibold text-2xl">Airlangga <span class="font-normal pl-2">(1928)</span></h1>
                <div class="flex p-2 pt-5 gap-8 items-center">
                    <img src="images/airlangga.png" class="h-24 shadow-md" alt="">
                    <h1 class="text-lg text-justify text-gray-500">
                        {{ Str::words(
                            'Airlangga merupakan judul drama karangan Sanusi Pane yang ditulis pertama kali dalam bahasa Belanda dan diterbitkan secara bersambung pada tahun 1928 di dalam majalah Timboel. Drama ini kemudian diterjemahkan dari bahasa Belanda oleh Das Chall dan diterbitkan Balai Pustaka pada tahun 1985 (pada tahun 2003 mencapai cetakan kesepuluh). Airlangga adalah nama seorang raja di Jawa Timur yang memerintah pada tahun 1019—1049. Airlangga datang kepada Dharmawangsa untuk meminang putri Dharmawangsa. Pada saat itu terjadi serangan dari pasukan Raja Wurawari. Airlangga dapat melarikan diri dan ia selamat.',
                            60,
                        ) }}
                    </h1>
                </div>
            </div>
            <div class="pb-10">
                <h1 class="font-semibold text-2xl">Adam Ma'rifat <span class="font-normal pl-2">(1982)</span></h1>
                <div class="flex p-2 pt-5 gap-8 items-center">
                    <img src="images/adam-marifat.png" class="h-24 shadow-md" alt="">
                    <h1 class="text-lg text-justify text-gray-500">
                        {{ Str::words("Adam Ma'rifat merupakan kumpulan enam cerita pendek karya Danarto, seorang pengarang yang dibesarkan dalam suasana dan alam berpikir kejawen atau tasawuf kejawen. Keenam cerpen yang terhimpun bertitimangsa antara tahun 1975 hingga tahun 1981. Buku kumpulan cerpen ini pertama kali diterbitkan di Jakarta oleh Balai Pustaka, 1982, setebal 72 halaman dengan ukuran 15 x 21 cm. Sampul buku bergambar kuda bersayap berkepala perempuan berambut panjang yang bermahkota. Dengan kumpulan cerpennya ini, Danarto menjadi penerima Hadiah Sastra DKJ 1982.", 60) }}
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="h-[15vh] w-full  flex flex-col items-center">
        <div class="h-[17%] w-3/4 bg-black flex text-white items-center pl-8 font-medium text-xl gap-14">
        </div>
        <div
            class="h-[83%] bg-[#850c18] text-white text-center rounded-b-lg flex justify-center items-center px-5  w-3/4">
            Hak Cipta © 2016 Badan Pengembangan dan Pembinaan Bahasa <br> Kementerian Pendidikan, Kebudayaan, Riset, dan
            Teknologi Republik Indonesia
        </div>
    </div>
</x-home-layout>
