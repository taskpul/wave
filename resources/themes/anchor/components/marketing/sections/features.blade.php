<section class="py-24 sm:py-32">
    <div class="px-6 mx-auto max-w-6xl lg:px-8">
        <div class="flex flex-col items-center text-center">
            <span class="inline-flex items-center gap-2 rounded-full border border-zinc-200 bg-white px-4 py-1 text-xs font-semibold uppercase tracking-wide text-zinc-600 shadow-sm">
                <x-phosphor-sparkle class="w-4 h-4 text-zinc-500" />
                For support teams
            </span>
            <h2 class="mt-6 text-4xl font-semibold tracking-tight text-zinc-900 sm:text-5xl md:text-6xl">
                How Wave works for customer support teams
            </h2>
            <p class="mt-6 text-base leading-7 text-zinc-500 sm:text-lg md:max-w-2xl">
                Empower your support team with scheduling tools that enhance customer service, streamline issue resolution, and improve satisfaction.
            </p>
            <div class="mt-8">
                <x-button size="lg" class="px-8">
                    Get started
                </x-button>
            </div>
        </div>
        <div class="grid items-center gap-12 mt-16 lg:grid-cols-[1.05fr,1fr]">
            <div class="relative isolate overflow-hidden rounded-3xl bg-white shadow-xl ring-1 ring-zinc-200">
                <div class="flex items-center justify-between px-6 py-4 border-b border-zinc-100">
                    <div class="flex items-center gap-3">
                        <span class="inline-flex items-center gap-2 rounded-full bg-zinc-900 px-3 py-1 text-xs font-semibold uppercase tracking-wide text-white">
                            <span class="inline-flex size-1.5 rounded-full bg-emerald-400"></span>
                            Wave call
                        </span>
                        <span class="text-xs font-medium text-zinc-400">Customer sync</span>
                    </div>
                    <div class="flex items-center gap-2 text-xs font-medium text-zinc-400">
                        <span class="inline-flex size-2 rounded-full bg-emerald-400"></span>
                        Live
                    </div>
                </div>
                <div class="px-6 pb-6">
                    <div class="grid grid-cols-2 gap-4 mt-6">
                        @foreach ([
                            ['name' => 'Jordan P.', 'role' => 'Support Lead', 'img' => 'https://i.pravatar.cc/240?img=47'],
                            ['name' => 'Serena L.', 'role' => 'Product Specialist', 'img' => 'https://i.pravatar.cc/240?img=32'],
                            ['name' => 'Daniel W.', 'role' => 'Escalations', 'img' => 'https://i.pravatar.cc/240?img=12'],
                            ['name' => 'Priya S.', 'role' => 'Customer Success', 'img' => 'https://i.pravatar.cc/240?img=5'],
                        ] as $participant)
                            <div class="relative overflow-hidden rounded-2xl bg-zinc-900/5 ring-1 ring-zinc-200">
                                <img src="{{ $participant['img'] }}" alt="{{ $participant['name'] }}" class="object-cover w-full h-32 sm:h-36">
                                <div class="absolute inset-x-3 bottom-3 rounded-xl bg-white/90 px-3 py-2 backdrop-blur">
                                    <p class="text-sm font-semibold text-zinc-900">{{ $participant['name'] }}</p>
                                    <p class="text-xs font-medium text-zinc-500">{{ $participant['role'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="flex items-center justify-between px-4 py-4 mt-6 rounded-2xl bg-zinc-50 ring-1 ring-inset ring-zinc-200">
                        <div class="flex items-center gap-3">
                            <div class="flex items-center justify-center rounded-full bg-emerald-100 text-emerald-600 size-10">
                                <x-phosphor-calendar-check class="w-5 h-5" />
                            </div>
                            <div class="text-left">
                                <p class="text-sm font-semibold text-zinc-900">Upcoming support session</p>
                                <p class="text-xs font-medium text-zinc-500">Today at 2:30 PM · Zoom</p>
                            </div>
                        </div>
                        <x-button size="sm">
                            Join now
                        </x-button>
                    </div>
                </div>
            </div>
            <div class="lg:pl-8">
                <div class="inline-flex items-center gap-2 rounded-full bg-emerald-50 px-3 py-1 text-xs font-semibold text-emerald-600">
                    <x-phosphor-lightning class="w-4 h-4" />
                    Faster support scheduling
                </div>
                <h3 class="mt-6 text-3xl font-semibold tracking-tight text-zinc-900 sm:text-4xl">
                    Delight customers with instant, personal support
                </h3>
                <p class="mt-4 text-base leading-7 text-zinc-500 sm:text-lg">
                    Let support teams book sessions the moment a request comes in. Wave integrates scheduling with video and phone tools, making it easy to triage, assign, and resolve issues without needless delays.
                </p>
                <dl class="mt-10 space-y-6">
                    <div class="flex items-start gap-4">
                        <div class="flex items-center justify-center rounded-full bg-zinc-100 size-12">
                            <x-phosphor-users-three class="w-6 h-6 text-zinc-600" />
                        </div>
                        <div class="text-left">
                            <dt class="text-base font-semibold text-zinc-900">Collaborative queues</dt>
                            <dd class="mt-2 text-sm leading-6 text-zinc-500">Prioritize tickets together with shared team visibility and instant handoffs.</dd>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="flex items-center justify-center rounded-full bg-zinc-100 size-12">
                            <x-phosphor-clock-countdown class="w-6 h-6 text-zinc-600" />
                        </div>
                        <div class="text-left">
                            <dt class="text-base font-semibold text-zinc-900">Automated availability</dt>
                            <dd class="mt-2 text-sm leading-6 text-zinc-500">Share real-time booking links that sync across calendars, shifts, and time zones.</dd>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="flex items-center justify-center rounded-full bg-zinc-100 size-12">
                            <x-phosphor-chart-line-up class="w-6 h-6 text-zinc-600" />
                        </div>
                        <div class="text-left">
                            <dt class="text-base font-semibold text-zinc-900">Resolution insights</dt>
                            <dd class="mt-2 text-sm leading-6 text-zinc-500">Track response times, satisfaction scores, and team performance in one place.</dd>
                        </div>
                    </div>
                </dl>
            </div>
        </div>
    </div>
</section>
<section>
    <x-marketing.elements.heading
        level="h2"
        title="Master the Seas of <br> Product Development"
        description="Harness the power of Wave's extensive features to fast-track your SaaS projects. Get ready to fall in love with the future of SaaS development, today." 
    />
    <div class="text-center">
        <div class="grid grid-cols-2 gap-x-6 gap-y-12 mt-12 text-center lg:mt-16 lg:grid-cols-4 lg:gap-x-8 lg:gap-y-16">
            <div>
                <div class="flex justify-center items-center mx-auto bg-zinc-100 rounded-full size-12">
                    <x-phosphor-users-three class="w-6 h-6" />
                </div>
                <div class="mt-6">
                    <h3 class="font-medium text-zinc-900">User Management</h3>
                    <p class="mt-2 text-sm text-zinc-500">
                        Effortlessly manage users with Wave's intuitive dashboard.
                    </p>
                </div>
            </div>
            <div>
                <div class="flex justify-center items-center mx-auto bg-zinc-100 rounded-full size-12">
                    <x-phosphor-shield-check class="w-6 h-6" />
                </div>
                <div class="mt-6">
                    <h3 class="font-medium text-zinc-900">Secure Authentication</h3>
                    <p class="mt-2 text-sm text-zinc-500">
                        Implement secure login, registration, and two-factor authentication.
                    </p>
                </div>
            </div>
            <div>
                <div class="flex justify-center items-center mx-auto bg-zinc-100 rounded-full size-12">
                    <x-phosphor-puzzle-piece class="w-6 h-6" />
                </div>
                <div class="mt-6">
                    <h3 class="font-medium text-zinc-900">Third-Party Integrations</h3>
                    <p class="mt-2 text-sm text-zinc-500">
                        Easily integrate with popular third-party services.
                    </p>
                </div>
            </div>
            <div>
                <div class="flex justify-center items-center mx-auto bg-zinc-100 rounded-full size-12">
                    <x-phosphor-chart-bar class="w-6 h-6" />
                </div>
                <div class="mt-6">
                    <h3 class="font-medium text-zinc-900">Analytics</h3>
                    <p class="mt-2 text-sm text-zinc-500">
                        Gain insights into user behavior with built-in analytics.
                    </p>
                </div>
            </div>
            <div>
                <div class="flex justify-center items-center mx-auto bg-zinc-100 rounded-full size-12">
                    <x-phosphor-paint-bucket class="w-6 h-6" />
                </div>
                <div class="mt-6">
                    <h3 class="font-medium text-zinc-900">Customizable Themes</h3>
                    <p class="mt-2 text-sm text-zinc-500">
                        Personalize your app with easy-to-use themes.
                    </p>
                </div>
            </div>
            <div>
                <div class="flex justify-center items-center mx-auto bg-zinc-100 rounded-full size-12">
                    <x-phosphor-gear-fine class="w-6 h-6" />
                </div>
                <div class="mt-6">
                    <h3 class="font-medium text-zinc-900">Easy Setup</h3>
                    <p class="mt-2 text-sm text-zinc-500">
                        Get started quickly with Wave's straightforward setup process.
                    </p>
                </div>
            </div>
            <div>
                <div class="flex justify-center items-center mx-auto bg-zinc-100 rounded-full size-12">
                    <x-phosphor-lifebuoy class="w-6 h-6" />
                </div>
                <div class="mt-6">
                    <h3 class="font-medium text-zinc-900">Community Support</h3>
                    <p class="mt-2 text-sm text-zinc-500">
                        Join a vibrant community of developers for support and collaboration.
                    </p>
                </div>
            </div>
            <div>
                <div class="flex justify-center items-center mx-auto bg-zinc-100 rounded-full size-12">
                    <x-phosphor-images-square class="w-6 h-6" />
                </div>
                <div class="mt-6">
                    <h3 class="font-medium text-zinc-900">File Management</h3>
                    <p class="mt-2 text-sm text-zinc-500">
                        Manage your files efficiently with Wave's built-in file manager.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>