<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = [
            [
                'title' => 'TTS-Manager',
                'description' => 'TTS-Manager is a program developed and maintained by Työtehoseura for planning agricultural work and calculating labor requirements and work costs. The calculation of labor input is based on the results of work studies conducted by TTS on practical farms, farm-specific input data provided by the user, and selected methods and machinery for each task.',
                'technologies' => ['PHP', 'JavaScript', 'MySQL', 'jQuery', 'Google Maps API', 'Chart.js', 'Bootstrap 4'],
                'images' => [
                    '/images/ttsmanager.jpg',
                ],
                'owner' => 'TTS Työtehoseura',
                'logo' => '/Images/ttsmanager.jpg',
                'link' => 'https://ttsmanager.tts.fi/',
                'bgColor' => 'card-bg-7',
            ],
            [
                'title' => 'TTS-Kone',
                'description' => 'TTS-Kone is an easy-to-use online calculator for estimating the machinery costs of tractors, combine harvesters, dryers, and various agricultural machines and machine chains. The program is browser-based and works on computers, tablets, and smartphones.',
                'technologies' => ['PHP', 'JavaScript', 'SQL', 'jQuery', 'Bootstrap 4'],
                'images' => [
                    '/images/ttskone.jpg',
                    '',
                ],
                'owner' => 'TTS Työtehoseura',
                'logo' => '/Images/ttskone.png',
                'link' => 'https://ttskone.tts.fi/',
                'bgColor' => 'card-bg-1',
            ],
            [
                'title' => 'Hinnoittelulaskuri',
                'description' => 'The pricing calculator includes example calculations for different agricultural machines, and users can easily adjust the input data to match their needs. The calculator was developed as part of the KANTAVA project, funded by the Ministry of Agriculture and Forestry, and the LUOTU project, funded by both the Ministry of Agriculture and Forestry and the Ministry of the Environment.',
                'technologies' => ['PHP', 'JavaScript', 'SQL', 'jQuery', 'Bootstrap 4'],
                'images' => [
                    '/images/hinnottelulaskuri.jpg',
                    '',
                ],
                'owner' => 'TTS Työtehoseura',
                'logo' => '/Images/hinnottelulaskuri.jpg',
                'link' => 'https://hinnoittelulaskuri.tts.fi/',
                'bgColor' => 'card-bg-1',
            ],
            [
                'title' => 'MAKC IT',
                'description' => 'This is the site you\'re currently browsing. I built it to showcase my skills and personal projects. The site is developed using modern web technologies, including Laravel for the backend and JavaScript for the interactive frontend. It features a fully functional backend with database integration, allowing for dynamic content management such as adding and updating project data. Everything here was designed and coded by me from scratch to demonstrate both technical proficiency and attention to detail.',
                'technologies' => ['Laravel', 'JavaScript', 'SQL', 'Bootstrap 5'],
                'images' => [
                    '/LOGO.jpg',
                    '',
                ],
                'owner' => 'Maxim K',
                'logo' => 'LOGO.jpg',
                'link' => '',
                'bgColor' => 'card-bg-6',
            ],
        ];

        return view('projects.index', compact('projects'));
    }
}
