<section class="relative py-24 sm:py-32 bg-[#f8f7f6]">
    <div aria-hidden="true" class="absolute inset-y-0 left-0 right-0 hidden pointer-events-none lg:flex">
        <div class="mx-auto flex w-full max-w-6xl justify-between px-6 lg:px-8">
            <span class="h-full w-px bg-zinc-200/60"></span>
            <span class="h-full w-px bg-zinc-200/60"></span>
        </div>
    </div>
    <div class="relative px-6 mx-auto max-w-6xl lg:px-8">
        <div class="flex flex-col items-center text-center">
            <span class="inline-flex items-center gap-2 rounded-full border border-zinc-200/80 bg-white px-4 py-1 text-xs font-semibold uppercase tracking-wide text-zinc-600 shadow-sm">
                <x-phosphor-sparkle class="w-4 h-4 text-zinc-500" />
                For support teams
            </span>
            <h2 class="mt-6 text-4xl font-semibold tracking-tight text-zinc-900 sm:text-5xl md:text-6xl">
                How Wave works for customer support teams
            </h2>
            <p class="mt-6 max-w-2xl text-base leading-7 text-zinc-500 sm:text-lg">
                Empower your support team with scheduling tools that enhance customer service, streamline issue resolution, and improve satisfaction.
            </p>
            <div class="mt-8">
                <x-button size="lg" class="px-8">
                    Get started
                </x-button>
            </div>
        </div>
        <div class="grid items-center gap-16 mt-20 lg:grid-cols-[1.1fr,0.9fr]">
            <div class="relative isolate overflow-hidden rounded-[32px] border border-zinc-200/80 bg-white shadow-xl shadow-zinc-900/5">
                <div class="flex items-center justify-between px-8 py-6 border-b border-zinc-100">
                    <div class="flex items-center gap-4">
                        <div class="flex -space-x-2">
                            @foreach ([
                                'https://i.pravatar.cc/120?img=52',
                                'https://i.pravatar.cc/120?img=15',
                                'https://i.pravatar.cc/120?img=4'
                            ] as $avatar)
                                <img src="{{ $avatar }}" alt="Team member avatar" class="size-9 rounded-full border-2 border-white object-cover">
                            @endforeach
                        </div>
                        <div class="text-left">
                            <p class="text-sm font-semibold text-zinc-900">Cal.com team huddle meeting</p>
                            <p class="mt-1 text-xs font-medium text-emerald-500">Live · Support specialists</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 text-zinc-400">
                        <span class="inline-flex size-9 items-center justify-center rounded-full border border-zinc-200">
                            <x-phosphor-bell-ringing-duotone class="w-4 h-4" />
                        </span>
                        <span class="inline-flex size-9 items-center justify-center rounded-full border border-zinc-200">
                            <x-phosphor-faders-duotone class="w-4 h-4" />
                        </span>
                        <span class="inline-flex size-9 items-center justify-center rounded-full border border-zinc-200">
                            <x-phosphor-dots-three-outline class="w-4 h-4" />
                        </span>
                    </div>
                </div>
                <div class="px-8 pb-8">
                    <div class="grid grid-cols-2 gap-5 mt-8">
                        @foreach ([
                            ['name' => 'Jordan P.', 'title' => 'Support Lead', 'img' => 'https://i.pravatar.cc/320?img=47'],
                            ['name' => 'Serena L.', 'title' => 'Customer Success', 'img' => 'https://i.pravatar.cc/320?img=32'],
                            ['name' => 'Daniel W.', 'title' => 'Escalations', 'img' => 'https://i.pravatar.cc/320?img=12'],
                            ['name' => 'Priya S.', 'title' => 'Product Specialist', 'img' => 'https://i.pravatar.cc/320?img=5'],
                        ] as $participant)
                            <div class="relative overflow-hidden rounded-2xl bg-zinc-900/5 ring-1 ring-zinc-200">
                                <img src="{{ $participant['img'] }}" alt="{{ $participant['name'] }}" class="object-cover w-full h-36">
                                <div class="absolute inset-x-4 bottom-4 rounded-xl bg-white/90 px-4 py-2 backdrop-blur">
                                    <p class="text-sm font-semibold text-zinc-900">{{ $participant['name'] }}</p>
                                    <p class="text-xs font-medium text-zinc-500">{{ $participant['title'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="mt-8 flex items-center justify-between rounded-2xl bg-zinc-900 px-6 py-4 text-white">
                        <div class="flex items-center gap-3">
                            <button type="button" class="inline-flex size-11 items-center justify-center rounded-full bg-white/10 text-white transition hover:bg-white/20">
                                <x-phosphor-microphone class="w-5 h-5" />
                            </button>
                            <button type="button" class="inline-flex size-11 items-center justify-center rounded-full bg-white/10 text-white transition hover:bg-white/20">
                                <x-phosphor-video-camera class="w-5 h-5" />
                            </button>
                            <button type="button" class="inline-flex size-12 items-center justify-center rounded-full bg-rose-500 text-white shadow-lg shadow-rose-500/30 transition hover:bg-rose-400">
                                <x-phosphor-phone-disconnect class="w-5 h-5" />
                            </button>
                            <button type="button" class="inline-flex size-11 items-center justify-center rounded-full bg-white/10 text-white transition hover:bg-white/20">
                                <x-phosphor-desktop class="w-5 h-5" />
                            </button>
                            <button type="button" class="inline-flex size-11 items-center justify-center rounded-full bg-white/10 text-white transition hover:bg-white/20">
                                <x-phosphor-record-circle class="w-5 h-5" />
                            </button>
                        </div>
                        <div class="flex items-center gap-3 text-sm font-medium">
                            <span class="inline-flex items-center gap-2 rounded-full bg-white/10 px-3 py-1">
                                <x-phosphor-timer class="w-4 h-4" />
                                12:42 elapsed
                            </span>
                            <span class="inline-flex size-10 items-center justify-center rounded-full bg-white/10">
                                <x-phosphor-chat-circle-text class="w-5 h-5" />
                            </span>
                            <span class="inline-flex size-10 items-center justify-center rounded-full bg-white/10">
                                <x-phosphor-dots-three-outline-vertical class="w-5 h-5" />
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:pl-12">
                <div class="inline-flex items-center gap-2 rounded-full bg-emerald-50 px-3 py-1 text-xs font-semibold uppercase tracking-wide text-emerald-600">
                    <x-phosphor-lightning class="w-4 h-4" />
                    Faster support scheduling
                </div>
                <h3 class="mt-6 text-3xl font-semibold tracking-tight text-zinc-900 sm:text-4xl">
                    Faster support scheduling
                </h3>
                <p class="mt-5 text-base leading-7 text-zinc-500 sm:text-lg">
                    Let customers book support sessions at their convenience. Wave integrates with video and phone tools, ensuring quick resolutions for issues without unnecessary delays.
                </p>
                <dl class="mt-10 space-y-8">
                    <div class="flex items-start gap-4">
                        <div class="flex items-center justify-center rounded-full bg-zinc-900/5 text-zinc-600 size-12">
                            <x-phosphor-users-three class="w-6 h-6" />
                        </div>
                        <div class="text-left">
                            <dt class="text-base font-semibold text-zinc-900">Shared team routing</dt>
                            <dd class="mt-2 text-sm leading-6 text-zinc-500">Distribute incoming requests to the right specialist with pooled availability and automatic round-robin scheduling.</dd>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="flex items-center justify-center rounded-full bg-zinc-900/5 text-zinc-600 size-12">
                            <x-phosphor-calendar-check class="w-6 h-6" />
                        </div>
                        <div class="text-left">
                            <dt class="text-base font-semibold text-zinc-900">Real-time availability</dt>
                            <dd class="mt-2 text-sm leading-6 text-zinc-500">Sync every calendar, shift, and time zone so customers always see the latest openings—no manual coordination required.</dd>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="flex items-center justify-center rounded-full bg-zinc-900/5 text-zinc-600 size-12">
                            <x-phosphor-chart-line-up class="w-6 h-6" />
                        </div>
                        <div class="text-left">
                            <dt class="text-base font-semibold text-zinc-900">Resolution analytics</dt>
                            <dd class="mt-2 text-sm leading-6 text-zinc-500">Track response times, CSAT, and agent performance with dashboards that keep every support leader in sync.</dd>
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