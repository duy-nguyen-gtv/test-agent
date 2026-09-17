<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ServiceController extends Controller
{
    /**
     * Show the list of services.
     */
    public function index(): View
    {
        return view('services.index', [
            'services' => $this->services(),
        ]);
    }

    /**
     * The services offered by the company.
     *
     * @return array<int, array{name: string, slug: string, description: string, features: array<int, string>}>
     */
    private function services(): array
    {
        return [
            [
                'name' => 'Software Development',
                'slug' => 'software-development',
                'description' => 'Custom web applications, APIs, and cloud-native systems built to solve your hardest problems.',
                'features' => [
                    'Web applications',
                    'API design and integration',
                    'Cloud architecture',
                    'Quality assurance and testing',
                    'Maintenance and support',
                ],
            ],
            [
                'name' => 'Marketing',
                'slug' => 'marketing',
                'description' => 'Data-driven campaigns and brand strategies that turn attention into lasting growth.',
                'features' => [
                    'Brand strategy',
                    'Search engine optimisation',
                    'Content marketing',
                    'Paid advertising',
                    'Analytics and reporting',
                ],
            ],
        ];
    }
}
