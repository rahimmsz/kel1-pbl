<?php

namespace App\Controllers;

use App\Models\BarangModel;
use App\Controllers\BaseController;
use App\Models\KategoriModel;
use PHPUnit\Util\Log\JUnit;

class Barang extends BaseController
{
    protected $barangModel;
    protected $kategoriModel;

    public function __construct()
    {
        $this->barangModel = new BarangModel();
        $this->kategoriModel = new KategoriModel();
    }

    public function index()
    {

        $data = [
            'title' => 'Barang',
            'judul' => 'Data Barang',
            'barang' => $this->barangModel->getBarang()
        ];
        return view('Barang/index', $data);
    }

    public function detailBarang($id_barang)
    {
        $data = [
            'title' => 'Barang',
            'judul' => 'Detail Barang',
            'barang' => $this->barangModel->getBarang($id_barang)
        ];

        if (empty($data['barang'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Barang dengan id : ' . $id_barang .  ' Tidak Ditemukan');
        }

        return view('barang/detail_barang', $data);
    }

    public function formTambahBarang()
    {
        $data = [
            'title' => 'Barang',
            'judul' => 'Form Tambah Barang',
            'kategori' => $this->kategoriModel->getKategori(),
        ];

        return view('barang/tambah_barang', $data);
    }

    public function tambahBarang()
    {
        $validate = $this->validate([
            'nama_barang' => [
                'label' => 'Nama Barang',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong.',
                ]
            ],
            'id_kategori' => [
                'label' => 'Kategori',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong.'
                ]
            ],
            'gambar' => [
                'label' => 'Gambar',
                'rules' => 'is_image[gambar]|max_size[gambar,2048]|mime_in[gambar,image/jpg,image/png,image/jpeg]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar !!!',
                    'is_image' => 'File yang diupload bukan gambar !!!',
                    'mime_in' => 'File yang diupload harus berformat (JPG/JPEG/PNG)'
                ]
            ],
            'warna' => [
                'label' => 'Warna',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong.'
                ]
            ],
            'ukuran' => [
                'label' => 'Ukuran',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong.'
                ]
            ],
            'jumlah' => [
                'label' => 'Jumlah',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong.'
                ]
            ],
        ]);

        $file_gambar = $this->request->getFile('gambar');

        if ($file_gambar->getError() == 4) {
            $nama_gambar = 'default_image.jpg';
        } else {
            $nama_gambar = $file_gambar->getRandomName();
            $file_gambar->move('img_data', $nama_gambar);
        }


        if ($validate) {
            $this->barangModel->insert([
                'nama_barang' => $this->request->getVar('nama_barang'),
                'id_kategori' => $this->request->getVar('id_kategori'),
                'gambar' => $nama_gambar,
                'ukuran' => $this->request->getVar('ukuran'),
                'warna' => $this->request->getVar('warna'),
                'jumlah' => $this->request->getVar('jumlah'),
                'deskripsi' => $this->request->getVar('deskripsi'),
            ]);

            session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
            return redirect()->to(base_url('/barang'));
        } else {
            session()->setFlashdata('errors', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
    }

    public function hapusBarang($id_barang)
    {
        $this->barangModel->delete($id_barang);
        session()->setFlashdata('dihapus', 'Data Berhasil Dihapus !');
        return redirect()->to(base_url('/barang'));
    }

    public function editBarang($id_barang)
    {
        $data = [
            'title' => 'Barang',
            'judul' => 'Form Ubah Barang',
            'barang' => $this->barangModel->getBarang($id_barang),
            'kategori' => $this->kategoriModel->getKategori(),
        ];
        return view('barang/edit_barang', $data);
    }

    public function updateBarang($id_barang)
    {
        $validate = $this->validate([
            'nama_barang' => [
                'label' => 'Nama Barang',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong.',
                ]
            ],
            'id_kategori' => [
                'label' => 'Kategori',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong.'
                ]
            ],
            'gambar' => [
                'label' => 'Gambar',
                'rules' => 'is_image[gambar]|max_size[gambar,2048]|mime_in[gambar,image/jpg,image/png,image/jpeg]',
                'errors' => [
                    'max_size' => 'Ukuran gambar terlalu besar !!!',
                    'is_image' => 'File yang diupload bukan gambar !!!',
                    'mime_in' => 'File yang diupload harus berformat (JPG/JPEG/PNG)'
                ]
            ],
            'warna' => [
                'label' => 'Warna',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong.'
                ]
            ],
            'ukuran' => [
                'label' => 'Ukuran',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong.'
                ]
            ],
            'jumlah' => [
                'label' => 'Jumlah',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong.'
                ]
            ],
        ]);

        $file_gambar = $this->request->getFile('gambar');

        if ($file_gambar->getError() == 4) {
            $nama_gambar = 'default_image.jpg';
        } else {
            $nama_gambar = $file_gambar->getRandomName();
            $file_gambar->move('img_data', $nama_gambar);
        }


        if ($validate) {
            $this->barangModel->save([
                'id_barang' => $id_barang,
                'nama_barang' => $this->request->getVar('nama_barang'),
                'id_kategori' => $this->request->getVar('id_kategori'),
                'gambar' => $nama_gambar,
                'ukuran' => $this->request->getVar('ukuran'),
                'warna' => $this->request->getVar('warna'),
                'jumlah' => $this->request->getVar('jumlah'),
                'deskripsi' => $this->request->getVar('deskripsi'),
            ]);

            session()->setFlashdata('pesan', 'Data Berhasil Diubah');
            return redirect()->to(base_url('/barang'));
        } else {
            session()->setFlashdata('errors', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
    }

    public function habis()
    {
        $data = [
            'title' => 'Barang Habis',
            'judul' => 'Barang Habis'
        ];

        return view('Barang/barang_habis', $data);
    }
}
