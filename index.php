<!DOCTYPE html>
<html lang="en" class="h-full bg-dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahsiswa</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-full"> 
    
    <div class="bg-dark">

  <div class="relative isolate px-6 pt-14 lg:px-8">
    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
      <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
    <div class="mx-auto max-w-5xl">
        <div class="text-center">
            <h1 class="text-balance text-5xl font-semibold tracking-tight text-gray-900 sm:text-4xl mb-4">Data Mahasiswa</h1>
            
        </div>
        
        <div class="relative max-w-60 text-center mb-4 rounded-full px-3 py-1 text-sm/6 text-gray-600 bg-indigo-200 ring-2 ring-indigo-700/10 hover:ring-indigo-900/20 font-semibold text-indigo-600" >
            <a href="tambah.php" class=""><i class="bi bi-plus-lg"></i> Tambah Data</a>
        </div>

    <div class="relative overflow-x-auto shadow-lg sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 light:text-gray-900 table-auto">
            <thead class="text-xs text-gray-50 uppercase bg-gray-50 dark:bg-gray-700 light:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3 text-center">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Nim
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Alamat
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        <span>Opsi</span>
                    </th>
                </tr>
            </thead>
            <tbody>
            <?php
                include 'koneksi.php';
                $no = 1;
                $data = mysqli_query($conn, "select * from mahasiswa");
                
                if (mysqli_num_rows($data) > 0) {
                    $no = 1;
                    while ($d = mysqli_fetch_array($data)) {

            ?>
                <tr class="bg-white border-b light:bg-gray-800 light:border-gray-700 text-gray-900">
                    <th class="px-6 py-4 text-center">
                        <?php echo $d['id']; ?>
                    </th>
                    <td class="px-6 py-4 text-center">
                        <?php echo $d['nim']; ?>
                    </td>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap" >
                        <?php echo $d['nama']; ?>
                    </th>
                    <td class="px-6 py-4">
                        <?php echo $d['alamat']; ?>
                    </td>
                    <td class=" text-center">
                            <a href="edit.php?id=<?php echo $d['id']; ?>" class="relative text-center bg-green-800 p-2 text-white px-4 me-2">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <a href="hapus.php?id=<?php echo $d['id']; ?>" class="relative text-center bg-red-800 p-2 text-white px-4">
                                <i class="bi bi-trash3-fill"></i>
                            </a>
                    </td>
                </tr>
                <?php
                    }
                    } else {
                        ?>

                        <tr>
                            <td colspan="6" class="text-center px-6 py-4">
                                <p class="text-red-900">
                                <i class="bi bi-emoji-frown">Tidak ada data yang ditemukan</i> 
                                </p>
                                    <br>
                                <a href="tambah.php" class="p-2 text-indigo-900"><i class="bi bi-plus-lg"></i> Tambahkan Data</a>
                            </td>
                        </tr>
                    <?php
                    }
                ?>
            </tbody>
        </table>
    </div>


    </div>
    <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
      <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
  </div>
</div>

<p class="text-sm text-indigo-600 p-5 my-6 text-center">Aplikasi Sederhana <i>(latihan PHP & MySQL & Tailwind)</i> by : <a href="https://github.com/Fadhilhakim">Fadhil Hakim</a></p>

</body>
</html>