<?php
namespace App\Controllers;

class Page extends BaseController
{

 public function about()
 {
  return view('about', [
    'title' => 'Halaman About',
    'content' => 'Ini adalah halaman about yang menjelaskan tentang isi halaman ini.'
 ]);

 }

 public function contact()
 {
    return view('contact', [
        'title' => 'Halaman About',
        'content' => 'Ini adalah halaman about yang menjelaskan tentang kontak dan biodata halaman ini.'
        ]);
 }

 public function faqs()
 {
    return view('faqs', [
        'title' => 'Halaman About',
        'content' => 'Ini adalah halaman about yang menjelaskan tentang faksimili dan surat.'
        ]);
 }

/*public function artikel() 
 {
    $title = 'Daftar Artikel';
    $model = new ArtikelModel();
    $artikel = $model->findAll();
    return view('artikel/index', compact('artikel', 'title'));
}*/

 public function index()
 {
    return view('artikel/index', compact('artikel', 'title'));
        $title = 'Daftar Artikel';
        $model = new ArtikelModel();
        $artikel = $model->findAll();
 }

public function tos()
{
    return view('tos', [
        'title' => 'Halaman Term Of Services',
        'content' => 'Ini adalah halaman about yang menjelaskan tentang kebijakan dan privasi.'
        ]);
}

}