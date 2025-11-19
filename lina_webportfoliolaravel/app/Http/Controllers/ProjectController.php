<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        // Data yang dikirim ke Blade (walaupun static tetap lewat controller)
        $projects = [
            [
                'title' => 'UI/UX DESIGNER – SMART FARMING MONITORING SYSTEM',
                'image' => 'images/project1.jpg',
                'description' => 'Perancangan antarmuka pengguna (UI) untuk sistem monitoring pertanian berbasis IoT.'
            ],
            [
                'title' => 'SISTEM PENCUCIAN KENDARAAN MINI – PROJECT OOP PYTHON',
                'image' => 'images/project2.jpg',
                'description' => 'Aplikasi OOP Python untuk pencatatan transaksi pencucian kendaraan.'
            ],
            [
                'title' => 'SIMULASI JARINGAN PERUSAHAAN CISCO – PACKET TRACER',
                'image' => 'images/project3.jpg',
                'description' => 'Perancangan topologi jaringan perusahaan menggunakan Cisco Packet Tracer.'
            ],
        ];

        return view('projects.index', compact('projects'));
    }
}
